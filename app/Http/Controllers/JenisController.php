<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis;

class JenisController extends Controller
{
     public function index(){
        $jenis= Jenis::all();

        //tampilkan view supplier dan kirim datanya ke view tersebut
        return view('jenis/index',compact(['jenis']));
    }
    public function create(){
        return view('jenis/tambah');
    }
    public function store(request $request){
        //dd($request);
        $jenis = Jenis::create([
            'jenis_nama'=> $request->jenis_nama,
            'jenis_status'=> $request->jenis_status,
        ]);
        echo $jenis->id_jenis;
        return redirect('jenis');
    }
    public function edit($id){
        $jenis = Jenis::find($id);
        return view('jenis/edit',compact(['jenis']));
    }
    public function update($id, request $request){
        $jenis = Jenis::find($id);
        $jenis->update($request->except('_token','Edit'));
        return redirect('jenis');
    }
    public function destroy($id){
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('jenis');
    }
}
