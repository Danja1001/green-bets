<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proofs extends Model
{
    protected  $primaryKey = "id";
    protected $fillable = ['img','type'];
    public $timestamps = false;
}
