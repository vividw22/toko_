<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Barang;
use App\Models\Admin;
use DB;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')
        ->get();

        return view('transaksi/index',compact(['transaksi']));
    }
    public function create(){
        $admin = Admin::all();
        $barang = DB::table('tbl_barang')
        ->get();

        return view('transaksi/tambah',compact(['barang','admin']));
    }
    public function store(request $request){
        $transaksi = Transaksi::create([
        'id_admin' => $request->id_admin,
        'transaksi_tanggal'=> $request->transaksi_tanggal,
        'transaksi_nonota'=> $request->transaksi_nonota,
        'transaksi_status' => $request->transaksi_status,
        ]);
        echo $transaksi->id_transaksi;
        
        $transaksi = Transaksi_detail::create([
        'id_transaksi' => $transaksi->id_transaksi,
        'id_barang'=> $request->id_barang,
        'transaksi_jenis'=> $request->transaksi_jenis,
        'transaksi_harga' => $request->transaksi_harga,
        'transaksi_jumlah' => $request->transaksi_jumlah,
        'transaksi_detail_status'=> $request->transaksi_detail_status,
        ]);
        echo $transaksi->id_transaksi_detail;
        
        return redirect('transaksi');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi/edit',compact(['transaksi']));
    }
    public function update($id, request $request){
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except('_token','Edit'));
        return redirect('transaksi');
    }
    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('transaksi');
 }
}
