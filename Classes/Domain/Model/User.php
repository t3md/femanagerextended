<?php
namespace In2code\Femanagerextended\Domain\Model;

class User extends \In2code\Femanager\Domain\Model\User
{

    /**
     * twitterId
     *
     * @var string
     */
    protected $twitterId;

    /**
     * skypeId
     *
     * @var string
     */
    protected $skypeId;
    
    /**
     * freigabe
     *
     * @var \boolean
     */
    protected $freigabe;
    
    /**
     * gruendungsjahr
     *
     * @var \string
     */
    protected $gruendungsjahr;
    
    /**
     * unterrichtsformen
     *
     * @var \string
     */
    protected $unterrichtsformen;
    
    /**
     * ansprechpartner
     *
     * @var \string
     */
    protected $ansprechpartner;
    
    /**
     * firmenzusatz
     *
     * @var \string
     */
    protected $firmenzusatz;
    
    /**
     * sonstigemerkmale
     *
     * @var \string
     */
    protected $sonstigemerkmale;
    
    /**
     * beratungszeiten
     *
     * @var \string
     */
    protected $beratungszeiten;
    
    /**
     * art
     *
     * @var \string
     */
    protected $art;
    
    /**
     * hauptzielgruppen
     *
     * @var \string
     */
    protected $hauptzielgruppen;
    
    /**
     * dozenten
     *
     * @var \string
     */
    protected $dozenten;
    
    /**
     * gesellschaftsform
     *
     * @var \string
     */
    protected $gesellschaftsform;
    
    
    /**
     * geschaeftsfuehrer
     *
     * @var \string
     */
    protected $geschaeftsfuehrer;
    
    /**
     * profile
     *
     * @var \string
     */
    protected $profile;
    

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
    public function setTwitterId($twitterId): void
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
    public function setSkypeId($skypeId): void
    {
        $this->skypeId = $skypeId;
    }
    /**
     * Sets the freigabe
     *
     * @param \boolean $freigabe
     * @return void
     */
    public function setFreigabe($freigabe) {
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
    public function setGruendungsjahr($gruendungsjahr) {
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
    public function setUnterrichtsformen($unterrichtsformen) {
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
    public function setAnsprechpartner($ansprechpartner) {
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
    public function setGeschaeftsfuehrer($geschaeftsfuehrer) {
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
    public function setFirmenzusatz($firmenzusatz) {
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
    public function setSonstigemerkmale($sonstigemerkmale) {
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
    public function setBeratungszeiten($beratungszeiten) {
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
    public function setArt($art) {
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
    public function setHauptzielgruppen($hauptzielgruppen) {
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
    public function setDozenten($dozenten) {
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
    public function setGesellschaftsform($gesellschaftsform) {
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
    public function setProfile($profile) {
        $this->profile = $profile;
    }
    
    /**
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }
    
}