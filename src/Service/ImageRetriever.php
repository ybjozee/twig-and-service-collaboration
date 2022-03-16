<?php

namespace App\Service;

class ImageRetriever {

    public function __construct(private string $imagesDirectoryPath) { }

    public function getSeal()
    : string {

        $image = "{$this->imagesDirectoryPath}/seal.png";
        $type = pathinfo($image, PATHINFO_EXTENSION);
        $data = base64_encode(file_get_contents($image));

        return "data:image/$type;base64,$data";
    }

}