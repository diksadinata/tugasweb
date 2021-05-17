<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class liveModel extends Model
{
    protected $table='liveaction';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillabel = ['id','nama_film','genre_id','studio','skor'];


    public function genre()
    
    {
       return $this->belongsTo(genre::class);
    }


    public function addData($data)
    
    {
        DB::table('liveaction')->insert($data);
    }
    public function editdata($id)
    {
      return DB::table('liveaction')->where('id',$id)->first();
    }
    public function deletedata($id)
    {
      return DB::table('liveaction')
      ->where('id',$lc)
      ->delete();
    }
}
