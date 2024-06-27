<?php

declare(strict_types=1);

namespace In2code\Femanagerextended\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\Category;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class User extends \In2code\Femanager\Domain\Model\User
{

    /**
     * twitterId
     *
     * @var string
     */
    protected string $twitterId;

    /**
     * skypeId
     *
     * @var string
     */
    protected string $skypeId;
    
    /**
     * freigabe
     *
     * @var \boolean
     */
    protected boolean $freigabe;
    
    /**
     * gruendungsjahr
     *
     * @var \string
     */
    protected string $gruendungsjahr;
    
    /**
     * unterrichtsformen
     *
     * @var \string
     */
    protected string $unterrichtsformen;
    
    /**
     * ansprechpartner
     *
     * @var \string
     */
    protected string $ansprechpartner;
    
    /**
     * firmenzusatz
     *
     * @var \string
     */
    protected string $firmenzusatz;
    
    /**
     * sonstigemerkmale
     *
     * @var \string
     */
    protected string $sonstigemerkmale;
    
    /**
     * beratungszeiten
     *
     * @var \string
     */
    protected string $beratungszeiten;
    
    /**
     * art
     *
     * @var \string
     */
    protected string $art;
    
    /**
     * hauptzielgruppen
     *
     * @var \string
     */
    protected string $hauptzielgruppen;
    
    /**
     * dozenten
     *
     * @var \string
     */
    protected string $dozenten;
    
    /**
     * gesellschaftsform
     *
     * @var \string
     */
    protected string $gesellschaftsform;
    
    
    /**
     * geschaeftsfuehrer
     *
     * @var \string
     */
    protected string $geschaeftsfuehrer;
    
    /**
     * profile
     *
     * @var \string
     */
    protected $profile;
    
    /**
     * @var ObjectStorage<Category>
     */
    protected ObjectStorage $userCategories;

    public function __construct($username = '', $password = '')
    {
        parent::__construct($username, $password);
        $this->userCategories = new ObjectStorage();
    }


    /**
     * Returns the twitterId
     *
     * @return string $twitterId
     */
    public function getTwitterId(): string
    {
        return $this->twitterId;
    }

    /**
     * Sets the twitterId
     *
     * @param string $twitterId
     * @return void
     */
    public function setTwitterId(string $twitterId): void
    {
        $this->twitterId = $twitterId;
    }

    /**
     * Returns the skypeId
     *
     * @return string $skypeId
     */
    public function getSkypeId(): string
    {
        return $this->skypeId;
    }

    /**
     * Sets the skypeId
     *
     * @param string $skypeId
     * @return void
     */
    public function setSkypeId(string $skypeId): void
    {
        $this->skypeId = $skypeId;
    }
    /**
     * Sets the freigabe
     *
     * @param \boolean $freigabe
     * @return void
     */
    public function setFreigabe(string $freigabe) {
        $this->freigabe = $freigabe;
    }
    
    /**
     * Returns the freigabe
     *
     * @return \boolean $freigabe
     *
     */
    public function getFreigabe() {
        return $this->freigabe;
    }
    
    
    /**
     * Returns the gruendungsjahr
     *
     * @return \string $gruendungsjahr
     */
    public function getGruendungsjahr() {
        return $this->gruendungsjahr;
    }
    
    /**
     * Sets the gruendungsjahr
     *
     * @param \string $gruendungsjahr
     * @return void
     */
    public function setGruendungsjahr(string $gruendungsjahr) {
        $this->gruendungsjahr = $gruendungsjahr;
    }
    
    /**
     * Returns the unterrichtsformen
     *
     * @return \string $unterrichtsformen
     */
    public function getUnterrichtsformen() {
        return $this->unterrichtsformen;
    }
    
    /**
     * Sets the unterrichtsformen
     *
     * @param \string $unterrichtsformen
     * @return void
     */
    public function setUnterrichtsformen(string $unterrichtsformen) {
        $this->unterrichtsformen = $unterrichtsformen;
    }
    
    /**
     * Returns the ansprechpartner
     *
     * @return \string $ansprechpartner
     */
    public function getAnsprechpartner() {
        return $this->ansprechpartner;
    }
    
    /**
     * Sets the ansprechpartner
     *
     * @param \string $ansprechpartner
     * @return void
     */
    public function setAnsprechpartner(string $ansprechpartner) {
        $this->ansprechpartner = $ansprechpartner;
    }
    
    
    /**
     * Returns the geschaeftsfuehrer
     *
     * @return \string $geschaeftsfuehrer
     */
    public function getGeschaeftsfuehrer() {
        return $this->geschaeftsfuehrer;
    }
    
    /**
     * Sets the geschaeftsfuehrer
     *
     * @param \string $geschaeftsfuehrer
     * @return void
     */
    public function setGeschaeftsfuehrer(string $geschaeftsfuehrer) {
        $this->geschaeftsfuehrer = $geschaeftsfuehrer;
    }
    
    /**
     * Returns the firmenzusatz
     *
     * @return \string $firmenzusatz
     */
    public function getFirmenzusatz() {
        return $this->firmenzusatz;
    }
    
    /**
     * Sets the firmenzusatz
     *
     * @param \string $firmenzusatz
     * @return void
     */
    public function setFirmenzusatz(string $firmenzusatz) {
        $this->firmenzusatz = $firmenzusatz;
    }
    
    
    /**
     * Returns the sonstigemerkmale
     *
     * @return \string $sonstigemerkmale
     */
    public function getSonstigemerkmale() {
        return $this->sonstigemerkmale;
    }
    
    /**
     * Sets the sonstigemerkmale
     *
     * @param \string $sonstigemerkmale
     * @return void
     */
    public function setSonstigemerkmale(string $sonstigemerkmale) {
        $this->sonstigemerkmale = $sonstigemerkmale;
    }
    
    /**
     * Returns the beratungszeiten
     *
     * @return \string $beratungszeiten
     */
    public function getBeratungszeiten() {
        return $this->beratungszeiten;
    }
    
    /**
     * Sets the beratungszeiten
     *
     * @param \string $beratungszeiten
     * @return void
     */
    public function setBeratungszeiten(string $beratungszeiten) {
        $this->beratungszeiten = $beratungszeiten;
    }
    
    /**
     * Returns the art
     *
     * @return \string $art
     */
    public function getArt() {
        return $this->art;
    }
    
    /**
     * Sets the art
     *
     * @param \string $art
     * @return void
     */
    public function setArt(string $art) {
        $this->art = $art;
    }
    
    /**
     * Returns the hauptzielgruppen
     *
     * @return \string $hauptzielgruppen
     */
    public function getHauptzielgruppen() {
        return $this->hauptzielgruppen;
    }
    
    /**
     * Sets the hauptzielgruppen
     *
     * @param \string $hauptzielgruppen
     * @return void
     */
    public function setHauptzielgruppen(string $hauptzielgruppen) {
        $this->hauptzielgruppen = $hauptzielgruppen;
    }
    
    /**
     * Returns the dozenten
     *
     * @return \string $dozenten
     */
    public function getDozenten() {
        return $this->dozenten;
    }
    
    /**
     * Sets the dozenten
     *
     * @param \string $dozenten
     * @return void
     */
    public function setDozenten(string $dozenten) {
        $this->dozenten = $dozenten;
    }
    
    
    /**
     * Returns the gesellschaftsform
     *
     * @return \string $gesellschaftsform
     */
    public function getGesellschaftsform() {
        return $this->gesellschaftsform;
    }
    
    /**
     * Sets the gesellschaftsform
     *
     * @param \string $gesellschaftsform
     * @return void
     */
    public function setGesellschaftsform(string $gesellschaftsform) {
        $this->gesellschaftsform = $gesellschaftsform;
    }
    
    /**
     * Returns the profile
     *
     * @return \string $profile
     */
    public function getProfile() {
        return $this->profile;
    }
    
    /**
     * Sets the profile
     *
     * @param \string $profile
     * @return void
     */
    public function setProfile(string $profile) {
        $this->profile = $profile;
    }
    
    /**
     * @param string $username
     */
    public function setUsername(string $username) {
        $this->username = $username;
    }

    /**
     * @return ObjectStorage
     */
    public function getUserCategories(): ObjectStorage
    {
        return $this->userCategories;
    }

    /**
     * @param ObjectStorage $userCategories
     */
    public function setUserCategories(ObjectStorage $userCategories): void
    {
        $this->userCategories = $userCategories;
    }

    /**
     * @param Category $category
     * @return void
     */
    public function addUserCategory(Category $category)
    {
        $this->userCategories->attach($category);
    }

    /**
     * @param Category $category
     * @return void
     */
    public function removeUserCategory(Category $category)
    {
        $this->userCategories->detach($category);
    }
}
