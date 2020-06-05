<?php


namespace App\App;


use App\Models\Database\AppDatabase;
use App\Models\User\User;
use System\Update\Updater;

class AppUpdater extends Updater
{
    private ?User $user;

    public function __construct()
    {
        $this->user = App::get()->user;
        $tmp = ROOTPATH . DIRECTORY_SEPARATOR . "writable" . DIRECTORY_SEPARATOR . "update";
        $dst = ROOTPATH;
        parent::__construct('https://raw.githubusercontent.com/jacobsen9026/AD-Accounts-Manager/master/update/update.json', $tmp, $dst, App::$version);
        $this->logger->info("Creating updater");
        $this->setCheckSSL(false);
    }

    /**
     * @inheritDoc
     */
    public function isUpdateAvailable(): ?bool
    {
        if ($this->user->getUsername() !== 'demo') {
            $this->logger->info("isUpdateAvailable called");
            //$this->connectToUpdateServer();


            if (time() - AppDatabase::getLastUpdateCheck() > $this->updateCheckInterval) {
                $this->latestUpdate = $this->getLatestUpdateFromURL();
            } else {
                $this->latestUpdate = unserialize(AppDatabase::getLatestAvailableVersion());
            }
            if ($this->latestUpdate->version > $this->currentVersion) {
                return true;
            }
            return false;
        }
        return false;

    }


    /**
     * @inheritDoc
     * @throws \System\App\AppException
     */
    public function getLatestUpdateFromURL()
    {
        $return = parent::getLatestUpdateFromURL(); // TODO: Change the autogenerated stub
        /**
         * Update the database last update check time
         */
        AppDatabase::setLastUpdateCheck(time());
        /**
         * Update the database latest version
         */
        AppDatabase::setLatestAvailableVersion(serialize($this->latestUpdate));
        return $return;
    }


}