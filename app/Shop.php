<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = array('id','shop_name','genre','link','address');

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function review_average()
    {
        return round($this->reviews()->avg('rate'));
    }
}
