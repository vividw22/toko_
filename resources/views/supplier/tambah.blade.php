@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/supplier/store">
	@csrf
	<div class="form-group">
		<label>Supplier Nama</label>
	<input class="form-control" type="text" name="supplier_nama" placeholder="Supplier Nama">
	</div>
	<div class="form-group">
		<label>Supplier Alamat</label>
	<input class="form-control" type="text" name="supplier_alamat" placeholder="Supplier Alamat">
	</div>
	<div class="form-group">
		<label>Supplier Phone</label>
	<input class="form-control" type="text" name="supplier_phone" placeholder="Supplier Phone">
	</div>
	<div class="form-group">
		<label>Supplier Status</label>
	<input class="form-control" type="text" name="supplier_status" placeholder="Supplier Status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection