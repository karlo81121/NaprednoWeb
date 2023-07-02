<?php

namespace App\Http\Controllers\Interfaces;

interface IPictures{
    public function getAllPictures();

    private function getPicturesByDestinationId($id);
}