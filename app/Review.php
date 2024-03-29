<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [ 'rate', 'review', 'shop_id', 'user_id', 'images'];

    public function shops()
    {
        return $this->belongTo(Shop::class);
    }

    public function users()
    {
        return $this->belongTo(User::class);
    }
}
