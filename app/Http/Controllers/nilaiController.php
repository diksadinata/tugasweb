<?php

namespace App\Http\Controllers;
use App\Models\NilaiModel;
use App\Models\genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->has('search')){
        $listanime=NilaiModel::where('judul_anime','LIKE','%'.$request->search.'%')->get();  
      }else{
        $listanime=NilaiModel::all()->all('genre');
      }
      //$listanime=NilaiModel::with('genre');
      return view ('layout1.v_template',['listanime'=>$listanime]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input()
    {
        $gen=genre::all();
        return view ('input',compact('gen'));
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
            "judul_anime" => Request()->judul_anime,
            "genre_id" => Request()->genre_id,
            "season" => Request()->season,
            "studio" => Request()->studio,
            "rating" => Request()->rating
            
        ];
        //$this->NilaiModel->addData($data);

        DB::table('listanime')->insert($data);
        $gen=genre::all();
        return view ('input',compact('gen'));
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
    public function edit($id)
    {
      /*  $data =[
            'nilai' => $this->NilaiModel->editdata($id),
        ];*/
        $listanime=NilaiModel::find($id);
        $gen=genre::all();
        return view ('edit',compact('gen'),['listanime'=>$listanime]);
        
        
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
        $listanime=NilaiModel::find($id);
       $listanime->judul_anime = Request()->judul_anime;
       $listanime->season = Request()->season;
       $listanime->studio = Request()->studio;
       $listanime->rating = Request()->rating;
       $listanime->save();
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
        $listanime=NilaiModel::find($id);
        $listanime->delete();
        return redirect ('/');

    }
}
