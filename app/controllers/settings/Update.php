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

namespace App\Controllers\Settings;

/**
 * Description of Home
 *
 * @author cjacobsen
 */

use App\App\AppUpdater;
use App\Controllers\Controller;
use System\App\AppLogger;
use App\Models\Database\AppDatabase;
use App\Models\Database\AuthDatabase;
use App\Models\Database\EmailDatabase;
use System\Post;

class Update extends SettingsController
{


    function __construct($app)
    {
        parent::__construct($app);
    }

    //put your code here
    public function index()
    {

        $this->tab = 'update';
        return $this->view('settings/index');
    }


    public function indexPost()
    {
        if (Post::get('action') === 'updateApp') {
            return $this->updateApp();
        }
    }


    private function updateApp()
    {
        $simulate = false;
        if (Post::get("simulationMode")) {
            $simulate = Post::get("simulationMode");
        }
        $this->updater = new AppUpdater();
//        var_dump($simulate);
//        return;
        return $this->updater->update($simulate);
    }

}

?>
