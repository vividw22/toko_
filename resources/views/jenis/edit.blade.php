@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Edit Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/jenis/update/{{$jenis->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Jenis Nama</label>
	<input class="form-control" type="text" value="{{$jenis->jenis_nama}}" name="jenis_nama" placeholder="Jenis Nama">
	</div>
	<div class="form-group">
		<label>Jenis Status</label>
	<input class="form-control" type="text" value="{{$jenis->jenis_status}}" name="jenis_status" placeholder="Jenis Status">
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="Edit">
</form>
</div>
@endsection
