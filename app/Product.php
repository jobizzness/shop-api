<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const PRODUCT_STATUS = [];

    /**
     * will do how
     * @return void
     */
    public function howdy(): string
    {
        return 'howdy';
    }
}
