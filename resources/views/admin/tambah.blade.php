@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Tambah Data Admin</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/admin/store">
	@csrf
	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" name="username" placeholder="Username">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" name="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label>Admin Level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="Admin Level">
	</div>
	<div class="form-group">
		<label>Admin Nama</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="Admin Nama">
	</div>
	<div class="form-group">
		<label>Admin Status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="Admin Status">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
</form>
</div>

@endsection