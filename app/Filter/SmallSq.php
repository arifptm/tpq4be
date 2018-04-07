<?php

namespace App\Filter;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class SmallSq implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(100, 100);
    }
}