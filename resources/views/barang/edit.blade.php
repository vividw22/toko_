@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Kode Barang</label>
	<input class="form-control" type="text" value="{{$barang->barang_kode}}" name="barang_kode" placeholder="Barang Kode">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" value="{{$barang->barang_nama}}" name="barang_nama" placeholder="Barang Nama">
	</div>
	<div class="form-group">
		<label>Id Jenis</label>
	<input class="form-control" type="text" value="{{$barang->id_jenis}}" name="id_jenis" placeholder="ID Jenis">
	</div>
	<div class="form-group">
		<label>Id Supplier</label>
	<input class="form-control" type="text" value="{{$barang->id_supplier}}" name="id_supplier" placeholder="ID Supplier">
	</div>
	<div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" value="{{$barang->harga_jual}}" name="harga_jual" placeholder="Harga Jual">
	</div>
	<div class="form-group">
		<label>Status Barang</label>
	<input class="form-control" type="text" value="{{$barang->barang_status}}" name="barang_status" placeholder="Barang Status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
