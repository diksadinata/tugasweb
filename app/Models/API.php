<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API extends Model
{
    use HasFactory;



    protected $table = "nime";
    protected $fillabel = ['id','nama_anime','studio','genre']; 

}
