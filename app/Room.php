<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
   function getPrice()
    {
        $price=number_format($this->price)." vnd";
        return $price;
    }
}
