<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table = "genre";
    protected $primarykey = "id";
    protected $fillabel = ['id','genre'];

    public function NilaiModel()
    
    {
       return $this->hasMany(NilaiModel::class);
    }

}
