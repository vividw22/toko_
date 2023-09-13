@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">Tambah Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/jenis/store">
	@csrf
	<div class="form-group">
		<label>Jenis Nama</label>
	<input class="form-control" type="text" name="jenis_nama" placeholder="Jenis Nama">
	</div>
	<div class="form-group">
		<label>Jenis Status</label>
	<input class="form-control" type="text" name="jenis_status" placeholder="Jenis Status">
	</div>
	<div class="modal-footer">
		<button class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Simpan</button>
	</div>
	</div>
</form>
</div>

@endsection