<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bets extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['title','price','description'];
    public $timestamps = false;

}
