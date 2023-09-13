@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">DATA ADMIN</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a href="/admin/tambah"><button type="button" class="btn btn-primary mt-3 mb-3"><i class="fa fa-plus"></i> Tambah</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Admin Level</th>
                    <th>Admin Nama</th>
                    <th>Admin Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($admin as $row)
					<tr>
						<td>{{$row->id_admin}}</td>
						<td>{{$row->username}}</td>
						<td>{{$row->password}}</td>
						<td>{{$row->admin_level}}</td>
            <td>{{$row->admin_nama}}</td>
            <td>{{$row->admin_status}}</td>
						<td><a href="/admin/edit/{{$row->id}}"><button type="button" class="btn btn-success"><i class="fa fa-save"></i>Edit</button></a> | <a href="/admin/destroy/{{$row->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a></td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection