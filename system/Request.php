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

namespace system;

/**
 * Description of Request
 *
 * @author cjacobsen
 */
class Request {

    /**
     *
     * @var string
     */
    public $get = null;
    public $uri = null;
    public $referer = null;
    public $type = null;
    public $protocol = "http";
    private $logger;

    /**
     *
     * @param \SAM\App $core
     */
    function __construct() {
        $this->logger = SystemLogger::get();

        /*
         * Store the referer
         */
        if (isset($_SERVER['HTTP_REFERER'])) {
            $this->referer = $_SERVER['HTTP_REFERER'];
        }
        /*
         * Check that URI is set
         */
        if (isset($_SERVER["REQUEST_URI"])) {
            /*
             * Set Request URI
             */
            $this->uri = $_SERVER["REQUEST_URI"];

            /*
             * Store GET
             */
            if (isset($_GET)) {
                $this->get = $_GET;
                //Remove Get portion from URI
                $this->logger->debug("URI: " . $this->uri);
                $this->logger->debug("Position of ? " . strpos($this->uri, "?"));
                if (strpos($this->uri, "?")) {
                    $this->uri = explode("?", $this->uri)[0];
                } elseif ($this->uri[0] == "?") {
                    $this->uri = "";
                }
            }
        }
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->type = 'ajax';
        } else {
            $this->type = 'http';
        }
        if (isset($_SERVER["HTTPS"])) {
            $this->protocol = "https";
        }
        //var_export($this);
        //return $this;
    }

    public function post(): string {
        return $this->post;
    }

    public function get() {
        return $this->get;
    }

    public function uri() {
        return $this->uri;
    }

}
