@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">DATA SUPPLIER</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a href="/supplier/tambah"><button type="button" class="btn btn-primary mt-3 mb-3"><i class="fa fa-plus"></i> Tambah</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Supplier</th>
                    <th>Supplier Nama</th>
                    <th>Supplier Alamat</th>
                    <th>Supplier Phone</th>
                    <th>Supplier Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($supplier as $row)
					<tr>
						<td>{{$row->id_supplier}}</td>
						<td>{{$row->supplier_nama}}</td>
						<td>{{$row->supplier_alamat}}</td>
						<td>{{$row->supplier_phone}}</td>
            <td>{{$row->supplier_status}}</td>
						<td><a href="/supplier/edit/{{$row->id}}"><button type="button" class="btn btn-success"><i class="fa fa-save"></i>Edit</button></a> | <a href="/supplier/destroy/{{$row->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a></td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection