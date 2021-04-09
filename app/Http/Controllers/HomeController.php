<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Vidios;


use App\Models\User;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Vidios::all();
        return view('home',compact('data'));
    }

  

    public function update(Request $request,$id){     
        


        $user = \App\user::find($id);
        $user->status_pengajuan = $request->get('status');
      
        $user->update();
        
        
         
        

      

        return redirect ('/home')->with('alert-success','Data berhasil Diubah.');
       }


  
}
