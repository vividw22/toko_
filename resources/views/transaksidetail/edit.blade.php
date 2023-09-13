@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Edit Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="transaksidetail/update/{{$transaksi_detail->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Transaksi</label>
	<input class="form-control" type="text" value="{{$transaksi_detail->id_transaksi}}" name="id_transaksi" placeholder="Id Transaksi">
	</div>
	<div class="form-group">
		<label>Id Admin</label>
	<input class="form-control" type="text" value="{{$transaksi_detail->id_admin}}" name="id_admin" placeholder="Id Admin">
	</div>
	<div class="form-group">
		<label>Transaksi Tanggal</label>
	<input class="form-control" type="date" value="{{$transaksi_detail->transaksi_tanggal}}" name="transaksi_tanggal" placeholder="Transaksi Tanggal">
	</div>
	<div class="form-group">
		<label>Transaksi Nonota</label>
	<input class="form-control" type="text" value="{{$transaksi_detail->transaksi_nonota}}" name="transaksi_nonota" placeholder="Transaksi Nonota">
	</div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" value="{{$transaksi_detail->transaksi_status}}" name="transaksi_status" placeholder="Transaksi Status">
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
