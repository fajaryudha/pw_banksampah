<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser; 		
use Hash;
use Session;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('input_petugas');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $id_petugas = $request->id_petugas;
        $password = $request->password;
        $data = ModelUser::where('id_petugas',$id_petugas)->first();
        if(@count($data) > 0){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_petugas',$data->id_petugas);
                Session::put('login',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect('login')->with('alert','Password atau Id Petugas, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Id Petugas, Salahaa!');
        }
    }

     public function logout(){

        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
	    else{
		        Session::flush();
		        return redirect('login')->with('alert','Kamu sudah logout');
        }

    }

    public function register(Request $request){
    	if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
        	return view('input_petugas');
        }
    }

     public function registerPost(Request $request){
     	 if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{ 
        	$this->validate($request, [
            
            'password' => 'required',
            'confirmation' => 'required|same:password',
            'name' => 'required|min:4',
        	
        	]);
		    $data =  new ModelUser();
		    $data->id_petugas = $request->id_petugas;
		    $data->password = bcrypt($request->password);
		    $data->name = $request->name;
		    $data->kelas = $request->kelas;
		    $data->save();
		    return redirect('show')->with('alert-success','Kamu berhasil Register');
        }

       
    }

    public function show()
    {
    	# code...
    	if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
		    $data = ModelUser::all();
		    return view('data_user',compact('data'));
        }
    }

    public function destroy($id)
    {
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = ModelUser::where('id',$id)->first();
            $data->delete();
            return redirect()->route('show')->with('alert-success','Data berhasi dihapus!');
        }
        
    }

}
