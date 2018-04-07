<?php

namespace App\Filter;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class LargeSq implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(400, 400);
    }
}