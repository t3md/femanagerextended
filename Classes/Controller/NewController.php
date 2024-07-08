<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\Controller;

use In2code\Femanager\Domain\Model\Log;
use In2code\Femanager\Domain\Model\User;
use In2code\Femanager\Domain\Validator\ClientsideValidator;
use In2code\Femanager\Event\ImpersonateEvent;
use In2code\Femanager\Utility\BackendUserUtility;
use In2code\Femanager\Utility\FrontendUtility;
use In2code\Femanager\Utility\LocalizationUtility;
use In2code\Femanager\Utility\UserUtility;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Error\Http\UnauthorizedException;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use \GeorgRinger\NumberedPagination\NumberedPagination;

/**
 * Class UserController
 */
class UserController extends \In2code\Femanager\Controller\UserController
{
    /**
     * @param array $filter
     */
    public function listAction(array $filter = []): ResponseInterface
    {
        $arguments = $this->request->getArguments();
        
        // $filter['searchword'];
        
        $pid = $this->configurationManager->getConfiguration(
            \TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK
            )['persistence']['storagePid'];
            
            $content = $this->configurationManager->getContentObject();
            
            $flexFormString = $content->data['pi_flexform'];
            $flexFormRaw = GeneralUtility::xml2array($flexFormString);
            
            $maximumLinks = intval($flexFormRaw['data']['list']['lDEF']['settings.list.maximumLinks']['vDEF']);
            
            if ($filter){
                $itemsPerPage = 1000;
            } else {
                $itemsPerPage = intval($flexFormRaw['data']['list']['lDEF']['settings.list.itemPerPage']['vDEF']);
            }
            
            $allItems =$this->userRepository->findByUsergroups($this->settings['list']['usergroup'] ?? '', $this->settings, $filter);
            $count = count($allItems);
            
            $currentPage = $this->request->hasArgument('currentPage') ? (int)$this->request->getArgument('currentPage') : 1;
            $paginator = new \TYPO3\CMS\Extbase\Pagination\QueryResultPaginator($allItems, $currentPage, (int)$itemsPerPage);
            $pagination = new \GeorgRinger\NumberedPagination\NumberedPagination($paginator, (int)$maximumLinks);
            
            $this->view->assign('pagination', [
                'paginator' => $paginator,
                'pagination' => $pagination,
            ]);
            
            $this->view->assignMultiple(
                [
                    'users' => $this->userRepository->findByUsergroups(
                        $this->settings['list']['usergroup'] ?? '',
                        $this->settings,
                        $filter
                        ),
                    'filter' => $filter,
                ]
                );
            
            $this->assignForAll();
            return $this->htmlResponse();
    }
    
    /**
     * Enforce user setting from FlexForm and ignore &tx_femanager_pi1[user]=421
     */
    public function initializeShowAction()
    {
        $arguments = $this->request->getArguments();
        if (!empty($this->settings['show']['user']) ?? '') {
            unset($arguments['user']);
        }
        $this->request->setArguments($arguments);
    }
    
    /**
     * @param User $user
     */
    public function showAction(User $user = null): ResponseInterface
    {
        $this->view->assign('user', $this->getUser($user));
        $this->assignForAll();
        return $this->htmlResponse();
    }
    
    /**
     * @param User $user
     * @throws \Exception
     */
    public function imageDeleteAction(User $user)
    {
        if (UserUtility::getCurrentUser() !== $user) {
            throw new UnauthorizedException('You are not allowed to delete this image', 1516373759972);
        }
        $user->setImage($this->objectManager->get(ObjectStorage::class));
        $this->userRepository->update($user);
        $this->logUtility->log(Log::STATUS_PROFILEUPDATEIMAGEDELETE, $user);
        $this->addFlashMessage(LocalizationUtility::translateByState(Log::STATUS_PROFILEUPDATEIMAGEDELETE));
        $this->redirectToUri(FrontendUtility::getUriToCurrentPage());
    }
    
    /**
     * Call this Action from eID to validate field values
     *
     * @param string $validation Validation string like "required, email, min(10)"
     * @param string $value Given Field value
     * @param string $field Fieldname like "username" or "email"
     * @param User $user Existing User
     * @param string $additionalValue Additional Values
     * @param int $plugin tt_content.uid of the femanager plugin
     * @param string $referrerAction current action name
     */
    public function validateAction(
        $validation = null,
        $value = null,
        $field = null,
        User $user = null,
        $additionalValue = '',
        int $plugin = 0,
        string $referrerAction = ''
        ): ResponseInterface {
            $clientsideValidator = $this->objectManager->get(ClientsideValidator::class);
            $result = $clientsideValidator
            ->setValidationSettingsString($validation)
            ->setValue($value)
            ->setFieldName($field)
            ->setUser($user)
            ->setAdditionalValue($additionalValue)
            ->setPlugin($plugin)
            ->setActionName($referrerAction)
            ->validateField();
            
            $this->view->assignMultiple(
                [
                    'isValid' => $result,
                    'messages' => $clientsideValidator->getMessages(),
                    'validation' => $validation,
                    'value' => $value,
                    'fieldname' => $field,
                    'user' => $user
                ]
                );
            return $this->htmlResponse();
    }
    
    /**
     * Simulate frontenduser login for backend adminstrators only
     *
     * @param User $user
     * @throws UnauthorizedException
     */
    public function loginAsAction(User $user)
    {
        $this->eventDispatcher->dispatch(new ImpersonateEvent($user));
        
        if (!BackendUserUtility::isAdminAuthentication()) {
            throw new UnauthorizedException(LocalizationUtility::translate('error_not_authorized'), 1516373787864);
        }
        UserUtility::login($user);
        $this->redirectByAction('loginAs', 'redirect');
        $this->redirectToUri('/');
    }
    
    /**
     * @param User $user
     * @return User
     */
    protected function getUser(User $user = null)
    {
        if ($user === null) {
            if (is_numeric($this->settings['show']['user'])) {
                $user = $this->userRepository->findByUid($this->settings['show']['user']);
            } elseif ($this->settings['show']['user'] === '[this]') {
                $user = $this->user;
            }
        }
        return $user;
    }
}
