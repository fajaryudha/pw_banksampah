<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSampah;
use Hash;
use Session;

class Sampah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = ModelSampah::all();
            return view('data_sampah',compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('input_sampah');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = new ModelSampah();
            $data->id_petugas = $request->id_petugas;
            $data->berat_sampah = $request->berat_sampah;
            $data->kelas = $request->dari_kelas;
            $data->status = $request->status;
            $data->save();
            return redirect()->route('sampah.index')->with('alert-success','Berhasil Menambahkan Data!');
        }
            
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
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = ModelSampah::where('id',$id)->get();

            return view('edit_sampah',compact('data'));
        }
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
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = ModelSampah::where('id',$id)->first();
            $data->id_petugas = $request->id_petugas;
            $data->berat_sampah = $request->berat_sampah;
            $data->kelas = $request->dari_kelas;
            $data->status = $request->status;
            $data->save();
            return redirect()->route('sampah.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            $data = ModelSampah::where('id',$id)->first();
            $data->delete();
            return redirect()->route('sampah.index')->with('alert-success','Data berhasi dihapus!');
        }
        
    }

    public function dashboard()
    {
        # code...
        return view('dashboard');
    }
}
