<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models\district;

/**
 * Description of User
 *
 * @author cjacobsen
 */
use app\api\AD;
class User {

    //put your code here
    private $firstName;
    private $middleName;
    private $employeeID;
    private $lastName;
    private $username;
    private $enabled;
    private $street;
    private $lockedOut;
    private $description;
    private $groups;
    private $script;
    private $homeDir;
    private $homeDrv;
    private $email;
    private $adDepartment;
    private $city;
    private $state;
    private $zip;
    private $homePhone;
    private $office;
    private $adCompany;
    private $adCommonName;
    private $photo;

  
    /**
     *
     * @param type $adUserRaw
     */
    public function processAD($adUserRaw) {
        //var_dump($adUserRaw);
        if (key_exists("givenname", $adUserRaw)) {
            $this->firstName = $adUserRaw["givenname"][0];
        }
        
        if (key_exists("thumbnailphoto", $adUserRaw)) {
            $this->photo = $adUserRaw["thumbnailphoto"][0];
        }
        if (key_exists("sn", $adUserRaw)) {
            $this->lastName = $adUserRaw["sn"][0];
        }
        if (key_exists("middlename", $adUserRaw)) {
            $this->middleName = $adUserRaw["middlename"][0];
        }
        if (key_exists("employeeid", $adUserRaw)) {
            $this->employeeID = $adUserRaw["employeeid"][0];
        }
        if (key_exists("homedirectory", $adUserRaw)) {
            $this->homeDir = $adUserRaw["homedirectory"][0];
        }
        if (key_exists("homedrive", $adUserRaw)) {
            $this->homeDrv = $adUserRaw["homedrive"][0];
        }
        if (key_exists("scriptpath", $adUserRaw)) {
            $this->script = $adUserRaw["scriptpath"][0];
        }
        if (key_exists("pager", $adUserRaw)) {
            $this->adPager = $adUserRaw["pager"][0];
        }
  
        if (key_exists("company", $adUserRaw)) {
            $this->adCompany = $adUserRaw["company"][0];
        }
        if (key_exists("streetaddress", $adUserRaw)) {
            $this->street = $adUserRaw["streetaddress"][0];
        }
        if (key_exists("mail", $adUserRaw)) {
            $this->email = $adUserRaw["mail"][0];
        }
        if (key_exists("description", $adUserRaw)) {
            $this->description = $adUserRaw["description"][0];
        }
        if (key_exists("samaccountname", $adUserRaw)) {
            $this->username = $adUserRaw["samaccountname"][0];
        }
        if (key_exists("displayName", $adUserRaw)) {
            $this->adDisplayName = $adUserRaw["displayName"][0];
        }
        if (key_exists("department", $adUserRaw)) {
            $this->adDepartment = $adUserRaw["department"][0];
        }
        if (key_exists("l", $adUserRaw)) {
            $this->city = $adUserRaw["l"][0];
        }
        if (key_exists("st", $adUserRaw)) {
            $this->state = $adUserRaw["st"][0];
        }
        if (key_exists("postalcode", $adUserRaw)) {
            $this->zip = $adUserRaw["postalcode"][0];
        }
        if (key_exists("homephone", $adUserRaw)) {
            $this->homePhone = $adUserRaw["homephone"][0];
        }
        if (key_exists("physicaldeliveryofficename", $adUserRaw)) {
            $this->office = $adUserRaw["physicaldeliveryofficename"][0];
        }

        if (key_exists("cn", $adUserRaw)) {
            $this->adCommonName = $adUserRaw["cn"][0];
        }
        if (key_exists("memberof", $adUserRaw)) {
            foreach ($adUserRaw["memberof"] as $key => $memberGroup) {
                if (strval($key) != "count") {
                    $groups[] = $memberGroup;
                }
            }

            $this->groups = $groups;
        }

        if (key_exists("lockouttime", $adUserRaw)) {
            if (intval($adUserRaw["lockouttime"][0]) > 0) {
                $this->lockedOut = true;
            } else {
                $this->lockedOut = false;
            }
        } else {
            $this->lockedOut = false;
        }
        $this->enabled = $adUserRaw['enabled'];
    }
    /**
     * @deprecated since version number
     * @param \Google_Service_Directory_User $gaUserRaw
     */
    private function processGA($gaUserRaw) {
        /* @var $gaUserRaw \Google_Service_Directory_User */
        $this->gaFirstName = $gaUserRaw->getName()->getGivenName();

        $this->gaLastName = $gaUserRaw->getName()->getFamilyName();

        $this->gaEnabled = !$gaUserRaw->getSuspended();

        $this->gaUsername = $gaUserRaw->getEmails()[0]['address'];
        $googleGroups = \app\api\GAM::get()->getUserGroups($this->gaUsername);
        foreach ($googleGroups as $group) {
            $this->gaGroups[$group["name"]] = $group["email"];
        }
    }

    public function getADFirstName() {
        return $this->firstName;
    }

    public function getADMiddleName() {
        return $this->middleName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAdUsername() {
        return $this->username;
    }

    public function getAdEnabled() {
        return $this->enabled;
    }
    function getAdDepartment() {
        return $this->adDepartment;
    }

    function setAdDepartment($adDepartment): void {
        $this->adDepartment = $adDepartment;
    }

    function getDescription() {
        return $this->description;
    }
    function getPhoto() {
        return $this->photo;
    }

    function setPhoto($photo): void {
        $this->photo = $photo;
    }

        function setDescription($description): void {
        $this->description = $description;
    }

        public function getGaEnabled() {
        return $this->gaEnabled;
    }

    public function getAdGroups() {
        return $this->groups;
    }

    public function getAdScript() {
        return $this->script;
    }

    public function getAdHomeDir() {
        return $this->homeDir;
    }

    public function getAdEmail() {
        return $this->email;
    }

    public function getGaUsername() {
        return $this->gaUsername;
    }

    public function getGaGroups() {
        return $this->gaGroups;
    }

    /**
     *
     * @param type $firstName
     * @return self
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     *
     * @param type $middleName
     * @return self
     */
    public function setMiddleName($middleName) {
        $this->middleName = $middleName;
        return $this;
    }
    function getAdCommonName() {
        return $this->adCommonName;
    }

    function setAdCommonName($adCommonName) {
        $this->adCommonName = $adCommonName;
        return $this;
    }
    function getAdCompany() {
        return $this->adCompany;
    }

    function setAdCompany($adCompany) {
        $this->adCompany = $adCompany;
        return $this;
    }

    
    /**
     *
     * @param type $lastName
     * @return self
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     *
     * @param type $adUsername
     * @return self
     */
    public function setAdUsername($adUsername) {
        $this->username = $adUsername;
        return $this;
    }
    function getOffice() {
        return $this->office;
    }

    function setOffice($office) {
        $this->office = $office;
        return $this;
    }
    function getCity() {
        return $this->city;
    }

    function getState() {
        return $this->state;
    }

    function getZip() {
        return $this->zip;
    }

    function setCity($city) {
        $this->city = $city;
        return $this;
    }

    function setState($state) {
        $this->state = $state;
        return $this;
    }

    function setZip($zip) {
        $this->zip = $zip;
        return $this;
    }
    function getStreet() {
        return $this->street;
    }

    function setStreet($street) {
        $this->street = $street;
        return $this;
    }
    function getHomePhone() {
        return $this->homePhone;
    }

    function setHomePhone($homePhone) {
        $this->homePhone = $homePhone;
        return $this;
    }

    function getEmployeeID() {
        return $this->employeeID;
    }

    function setEmployeeID($employeeID) {
        $this->employeeID = $employeeID;
        return $this;
    }
    function getEnabled() {
        return $this->enabled;
    }

    function getLockedOut() {
        return $this->lockedOut;
    }

    function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    function setLockedOut($lockedOut) {
        $this->lockedOut = $lockedOut;
        return $this;
    }

            /**
     *
     * @param type $adEnabled
     * @return self
     */
    public function setAdEnabled($adEnabled) {
        $this->enabled = $adEnabled;
        return $this;
    }

    /**
     *
     * @param type $gaEnabled
     * @return self
     */
    public function setGaEnabled($gaEnabled) {
        $this->gaEnabled = $gaEnabled;
        return $this;
    }

    /**
     *
     * @param type $adGroups
     * @return self
     */
    public function setAdGroups($adGroups) {
        $this->groups = $adGroups;
        return $this;
    }

    /**
     *
     * @param type $adScript
     * @return self
     */
    public function setAdScript($adScript) {
        $this->script = $adScript;
        return $this;
    }

    /**
     *
     * @param type $adHomeDir
     * @return self
     */
    public function setAdHomeDir($adHomeDir) {
        $this->homeDir = $adHomeDir;
        return $this;
    }

    /**
     *
     * @param type $adEmail
     * @return self
     */
    public function setAdEmail($adEmail) {
        $this->email = $adEmail;
        return $this;
    }

    /**
     *
     * @param type $gaUsername
     * @return self
     */
    public function setGaUsername($gaUsername) {
        $this->gaUsername = $gaUsername;
        return $this;
    }

    /**
     *
     * @param type $gaGroups
     * @return self
     */
    public function setGaGroups($gaGroups) {
        $this->gaGroups = $gaGroups;
        return $this;
    }
    
    public function unlock(){
        $result = AD::get()->unlockUser($this->username);
    }
   public function disable(){
       $result = AD::get()->disableUser($this->username);
       
   }
   public function enable(){
       $result = AD::get()->enableUser($this->username);
       
   }

}
