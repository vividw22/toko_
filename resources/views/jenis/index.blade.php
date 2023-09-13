@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">DATA JENIS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a href="/jenis/tambah"><button type="button" class="btn btn-primary mt-3 mb-3"><i class="fa fa-plus"></i> Tambah</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Jenis</th>
                    <th>Jenis Nama</th>
                    <th>Jenis Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($jenis as $row)
					<tr>
						<td>{{$row->id_jenis}}</td>
						<td>{{$row->jenis_nama}}</td>
						<td>{{$row->jenis_status}}</td>
						<td><a href="/jenis/edit/{{$row->id}}"><button type="button" class="btn btn-success"><i class="fa fa-save"></i>Edit</button></a> | <a href="/jenis/destroy/{{$row->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a></td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection