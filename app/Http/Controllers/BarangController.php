<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $barang = DB::table('tbl_barang')
        ->select('tbl_barang.*','tbl_jenis.jenis_nama','tbl_supplier.supplier_nama')
        ->join('tbl_jenis' , 'tbl_barang.id_jenis', '=', 'tbl_jenis.id_jenis')
        ->join('tbl_supplier' , 'tbl_barang.id_supplier', '=', 'tbl_supplier.id_supplier')
        ->get();

        return view('barang/index',compact(['barang']));
    }
    public function create(){
        $supplier = DB::table('tbl_supplier')
        ->get();
        $jenis = DB::table('tbl_jenis')
        ->get();
        return view('barang/tambah' , compact(['supplier','jenis']));
    }
    public function store(request $request){
        //dd($request);
        $store = Barang::create([
            'barang_kode'=> $request->barang_kode,
            'barang_nama'=> $request->barang_nama,
            'id_jenis'=> $request->id_jenis,
            'id_supplier'=> $request->id_supplier,
            'harga_jual'=> $request->harga_jual,
            'barang_status'=> $request->barang_status,
        ]);
        echo $store->id_barang;
        return redirect('barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        return view('barang/edit',compact(['barang']));
    }
    public function update($id, request $request){
        $barang = Barang::find($id);
        $barang->update($request->except('_token','Edit'));
        return redirect('barang');
    }
    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }
}
