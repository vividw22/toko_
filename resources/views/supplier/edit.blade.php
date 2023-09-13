@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Edit Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/supplier/update/{{$supplier->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Supplier Nama</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_nama}}" name="supplier_nama" placeholder="Supplier Nama">
	</div>
	<div class="form-group">
		<label>Supplier Alamat</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_alamat}}" name="supplier_alamat" placeholder="Supplier Alamat">
	</div>
	<div class="form-group">
		<label>Supplier Phone</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_phone}}" name="supplier_phone" placeholder="Supplier Phone">
	</div>
	<div class="form-group">
		<label>Supplier Status</label>
	<input class="form-control" type="text" value="{{$supplier->supplier_status}}" name="supplier_status" placeholder="Supplier Status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
