<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['name','email','comment','type'];
    public $timestamps = false;
}
