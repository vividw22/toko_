@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">DATA BARANG</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a href="/barang/tambah"><button type="button" class="btn btn-primary mt-3 mb-3"><i class="fa fa-plus"></i> Tambah</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Id Jenis</th>
                    <th>Id Supplier</th>
                    <th>Harga Jual</th>
                    <th>Status Barang</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
					<tr>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->barang_kode}}</td>
						<td>{{$row->barang_nama}}</td>
						<td>{{$row->jenis_nama}}</td>
            <td>{{$row->supplier_nama}}</td>
            <td>{{$row->harga_jual}}</td>
            <td>{{$row->barang_status}}</td>
						<td><a href="/barang/edit/{{$row->id}}"><button type="button" class="btn btn-success"><i class="fa fa-save"></i>Edit</button></a> | <a href="/barang/destroy/{{$row->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a></td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection