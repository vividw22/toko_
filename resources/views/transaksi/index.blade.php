@extends('layout.layout')

@section('content')

<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">DATA TRANSAKSI</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a href="/transaksi/tambah"><button type="button" class="btn btn-primary mt-3 mb-3"><i class="fa fa-plus"></i> Tambah</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Transaksi Tanggal</th>
                    <th>Transaksi No Nota</th>
                    <th>Transaksi Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $row)
					<tr>
						<td>{{$row->id_transaksi}}</td>
						<td>{{$row->id_admin}}</td>
						<td>{{$row->transaksi_tanggal}}</td>
						<td>{{$row->transaksi_nonota}}</td>
            <td>{{$row->transaksi_status}}</td>
						<td>
              <a href="/transaksidetail/detail/{{$row->id_transaksi}}"><button type="button" class="btn btn-secondary">Detail</button></a>
              <a href="/transaksi/edit/{{$row->id}}"><button type="button" class="btn btn-success"><i class="fa fa-save"></i>Edit</button></a> | 
              <a href="/transaksi/destroy/{{$row->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a>
            </td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection