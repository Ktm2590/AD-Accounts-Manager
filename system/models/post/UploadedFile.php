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

namespace System\Models\Post;

/**
 * Description of File
 *
 * @author cjacobsen
 */

use System\App\Picture;
use System\File;
use System\SystemLogger;

class UploadedFile
{

    private $name;
    private $type;
    private $tempFileName;
    private $error;
    private $fileSize;

    public function __construct(?array $rawFileUpload)
    {
        if ($rawFileUpload !== null) {


            $logger = SystemLogger::get();
            $logger->debug($rawFileUpload);
            $this->name = $rawFileUpload["name"];
            $this->type = $rawFileUpload["type"];
            if ($this->type === '') {
                $this->type = explode(".", $this->name)[1];
            }
            $this->tempFileName = $rawFileUpload["tmp_name"];
            $this->error = $rawFileUpload["error"];
            $this->fileSize = $rawFileUpload["size"];
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function saveTo(string $destinationFilePath)
    {
        move_uploaded_file($this->tempFileName, $destinationFilePath);
    }

    public function exists()
    {
        if ($this->tempFileName == null) {
            return false;
        }
        return true;
    }

    public function getHex()
    {
        return bin2hex($this->getTempFileContents());
    }

    public function getTempFileContents()
    {
        return File::getContents($this->tempFileName);
    }

    public function resize(int $int)
    {
        switch ($this->getType()) {


            case 'image/png':
                $picture = imagecreatefrompng($this->getTempFileName());
                break;
            case 'image/jpeg':
            case 'image/jpgx':
            case 'image/jpg':
                $picture = imagecreatefromjpeg($this->getTempFileName());
                break;

            case 'image/gif':
                $picture = imagecreatefromgif($this->getTempFileName());
                break;
            case 'image/bmp':
                $picture = imagecreatefrombmp($this->getTempFileName());
                break;

        }
        $rawPicture = Picture::cropSquare($picture, $int);

        $this->overwrite($rawPicture);
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getTempFileName()
    {
        return $this->tempFileName;
    }

    public function setTempFileName($tempFileName)
    {
        $this->tempFileName = $tempFileName;
        return $this;
    }

    public function overwrite($rawPicture)
    {
        File::overwriteFile($this->getTempFileName(), $rawPicture);
    }

}
