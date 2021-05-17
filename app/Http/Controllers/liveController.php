<?php

namespace App\Http\Controllers;
use App\Models\liveModel;
use App\Models\genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class liveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LiveAction(Request $request)
    {
      if($request->has('search')){
        $liveaction=liveModel::where('nama_film','LIKE','%'.$request->search.'%')->get();  
      }else{
        $liveaction=liveModel::all()->all('genre');
      }
      //$liveaction=liveModel::with('genre');
      return view ('LiveAction',['liveaction'=>$liveaction]);

    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input1()
    {
        $gen=genre::all();
        return view ('input1',compact('gen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function output()
    {
        return view ('output');
    }
     public function add()
    {

        $data = [
            "nama_film" => Request()->nama_film,
            "genre_id" => Request()->genre_id,
            "studio" => Request()->studio,
            "skor" => Request()->skor
            
        ];
        //$this->liveModel->addData($data);

        DB::table('liveaction')->insert($data);
        $gen=genre::all();
        return view ('input1',compact('gen'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit1($id)
    {
      /*  $data =[
            'nilai' => $this->liveModel->editdata($id),
        ];*/
        $liveaction=liveModel::find($id);
        $gen=genre::all();
        return view ('edit1',compact('gen'),['liveaction'=>$liveaction]);
        
        
    }


    public function delete($id)
   {
       $anggota = Anggota::find($id);       //cari id yang dipencet
       $anggota->delete();                  //delete id tersebut

       return redirect('/')->with('status', 'Data Berhasil Dihapus');                //redirect lagi ke home
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $liveaction=liveModel::find($id);
       $liveaction->judul_anime = Request()->nama_film;
       $liveaction->studio = Request()->studio;
       $liveaction->rating = Request()->skor;
       $liveaction->save();
       return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $liveaction=liveModel::find($id);
        $liveaction->delete();
        return redirect ('/');

    }

}
