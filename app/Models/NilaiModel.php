<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NilaiModel extends Model
{
    protected $table='listanime';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillabel = ['id','judul_anime','genre_id','season','studio','rating'];


    public function genre()
    
    {
       return $this->belongsTo(genre::class);
    }


    public function addData($data)
    
    {
        DB::table('listanime')->insert($data);
    }
    public function editdata($id)
    {
      return DB::table('listanime')->where('id',$id)->first();
    }
    public function deletedata($id)
    {
      return DB::table('listanime')
      ->where('id',$nl)
      ->delete();
    }
    
}

