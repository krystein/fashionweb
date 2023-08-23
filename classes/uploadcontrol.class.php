<?php

class UploadControl extends UploadModel
{
    private $filename;
    private $name;
    private $code;
    private $type;
    private $price;

    public function __construct($filename, $name, $code, $type, $price)
    {
        $this->filename = $filename;
        $this->name = $name;
        $this->code = $code;
        $this->type = $type;
        $this->price = $price;
    }

    public function createImages()
    {
        if ($this->validate() == false) {
            header("location: ../add-product/?error=invalid parameters!");
            exit();
        }

        $this->add($this->filename, $this->name, $this->code, $this->type, $this->price);
    }
    public function deleteImages($inputArray)
    {
        foreach ($inputArray as $key => $val) {
            $id = "";
            if ($key !== "submit") {
                $id = $key;
            } else {
                continue;
            }
            $this->delete($id);
        }
    }
    private function validate()
    {
        $result = false;
        if (empty($this->filename) || empty($this->name) || empty($this->code) || empty($this->type) || empty($this->price)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }


}