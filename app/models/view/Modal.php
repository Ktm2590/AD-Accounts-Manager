<?php

/*
 * The MIT License
 *
 * Copyright 2020 cjacobsen.
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

namespace App\Models\View;

/**
 * Description of Modal
 *
 * @author cjacobsen
 */
class Modal extends ViewModel
{

    private $id;
    private $title;
    private $body;
    private $theme;
    private $size;
    private string $bodyClasses = '';

    /**
     * Modal constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->theme = 'primary';
    }

    public function small()
    {
        $this->size = "modal-sm";
        return $this;
    }

    public function large()
    {

        $this->size = "modal-lg";
        return $this;
    }

    public function extraLarge()
    {

        $this->size = "modal-xl";
        return $this;

    }

    public function print()
    {
        \System\App\AppLogger::get()->debug($this);


        $modal = '<div id="'
            . $this->getId()
            . '" class="modal fade" role="dialog">'
            . '<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ' . $this->getSize() . '">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-' . $this->getTheme() . ' text-light">
                <h4 class="modal-title ">' . $this->getTitle() . '</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body text-center' . $this->bodyClasses . '">' . $this->getBody() . '</div>

        </div>

    </div>
</div>';
        return $modal;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        //$strip = ['_'];
        //$this->id = str_replace($strip, '', $id);
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    public function getTheme()
    {
        return $this->theme;
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function addBodyClass(string $string)
    {
        $this->bodyClasses .= ' ' . $string;
        return $this;
    }

}
