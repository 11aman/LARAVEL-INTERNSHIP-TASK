<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['BlogId','Name','Subname','BlogcategoryId','Bannerimage','Mainimage','Description','Status'];
}
