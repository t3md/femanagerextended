<?php
/**
 * Add new fields to fe_users table
 */
    $GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
    
    $feUsersColumns = [
        'user_categories' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
                'tx_femanagerextended_domain_model_user.user_categories',
            'config' => [
                'type' => 'category',
                'relationship' => 'oneToMany',
                'treeConfig' => [
                    'startingPoints' => 1,
                ],
                'minitems' => 0,
                'maxitems' => 99,
            ],
        ],
        'freigabe' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'freigabe',
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'gesellschaftsform' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'gesellschaftsform',
            'config' => [
                'type' => 'input',
                'size' => 60,
            ]
        ],
        'geschaeftsfuehrer' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'geschaeftsfuehrer',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ]
        ],
        'firmenzusatz' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'firmenzusatz',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5
            ]
        ],
        'gruendungsjahr' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'gruendungsjahr',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'date',
                'default' => 0,
            ]
        ],
        'unterrichtsformen' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'unterrichtsformen',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5
            ]
        ],
        'ansprechpartner' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'ansprechpartner',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5
            ]
        ],
        'sonstigemerkmale' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'sonstigemerkmale',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5
            ]
        ],
        'beratungszeiten' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'beratungszeiten',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5
            ]
        ],
        'hauptzielgruppen' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:' .
            'hauptzielgruppen',
            'config' => [
                'type' => 'text',
                'cols' => 60,
                'rows' => 5
            ]
        ],
        'tx_extbase_type' => [
            'config' => [
                'type' => 'input',
                'default' => '0'
            ]
        ],
        
    ];
    $fields = 'crdate, tstamp, freigabe, firmenzusatz, gruendungsjahr, ansprechpartner, unterrichtsformen, sonstigemerkmale, beratungszeiten, gesellschaftsform, geschaeftsfuehrer, hauptzielgruppen, user_categories';
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $feUsersColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', '--div--;LLL:EXT:femanagerextended/Resources/Private/Language/locallang_db.xlf:fe_users.tab, ' . $fields);
