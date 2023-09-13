@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>Kode Barang</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="Barang Kode">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="Barang Nama">
	</div>
	<div class="form-group">
		<label>Id Jenis</label>
        <select name="id_jenis" class="form-control">
        	<option>Silahkan Dipilih</option>
        	@foreach($jenis as $row)
        	<option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
        	@endforeach
        </select>
	</div>
	<div class="form-group">
		<label>Id Supplier</label>
    <select name="id_supplier" class="form-control">
        	<option>Silahkan Dipilih</option>
        	@foreach($supplier as $row)
        	<option value="{{$row->id_supplier}}">{{$row->supplier_nama}}</option>
        	@endforeach
        </select>
	</div>
	<div class="form-group">
		<label>Harga Jual</label>
	<input class="form-control" type="text" name="harga_jual" placeholder="Harga Jual">
	</div>
	<div class="form-group">
		<label>Status Barang</label>
	<input class="form-control" type="text" name="barang_status" placeholder="Barang Status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection