<?php

/*
 * The MIT License
 *
 * Copyright 2019 cjacobsen.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace system\app\auth;

/**
 * Description of CoreUser
 *
 * @author cjacobsen
 */
class CoreUser {

    const ADMINISTRATOR = "ADMIN";
    const USERNAME = "username";
    const PRIVILEGE = "privilege";

    //put your code here
    public $username;
    public $privilege;
    public $apiToken;

    /**
     *
     * @return type
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     *
     * @return type
     */
    public function getPrivilege() {
        return $this->privilege;
    }

    /**
     *
     * @param type $username
     * @return $this
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     *
     * @param type $privilege
     * @return $this
     */
    public function setPrivilege($privilege) {
        $this->privilege = $privilege;
        return $this;
    }

    public function generateAPIToken() {
        //$user = new self();
        //$user->setUsername($this->username);
        //$user->setPrivilege($this->getPrivilege());
        $user = gzcompress($this);
        $this->apiToken = \system\Encryption::encrypt(serialize($user));

        //$this->apiToken = hash("sha256", serialize($user));
    }

    public function getApiToken() {
        /**
          if ($this->apiToken == null) {
          $this->generateAPIToken();
          }
         *
         */
        return $this->apiToken;
    }

}
