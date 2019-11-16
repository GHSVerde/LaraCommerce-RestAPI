<?php

namespace App\Exceptions;

use Exception;

class ProductDontBelongsToUser extends Exception
{
    public function render()
    {
        return [
            'errors' => 'Product Dont Belongs To User'
        ];
    }
}
