<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Vidios;
class VidioController extends Controller
{
    public function index(){
     $data=Vidios::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new Vidios();
        $data->url_vidio=$request->get('url_vidio');
        $data->ket=$request->get('ket');
      
        $data->save();
     return redirect ('/Vidios');
    }

    public function delete($id){
     $data=Vidios::find($id);
        $data->delete();
        return back();
    }

    public function edit($id){
     $data=Vidios::find($id);
     return view('edit',compact('data'));
    }

    public function update(Request $request, $id){     
     $data = Vidios::findOrFail($id);
        $data->url_vidio=$request->get('url_vidio');
        $data->ket=$request->get('ket');
      
        $data->save();
     return redirect ('/Vidios')->with('alert-success','Data berhasil Diubah.');
    }

    public function read($id){
     $data=Vidios::find($id);
     return view('read',compact('data'));
    }
}