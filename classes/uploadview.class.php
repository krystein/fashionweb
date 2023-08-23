<?php

class UploadView extends UploadModel
{

    private $images = array();

    public function viewImages()
    {
        $result = $this->getImages();

        while ($data = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->images[] = $data;
        }

        return $this->images;
    }

}