@extends('layout.layout')

@section('content')
<div class="card card-primary">
 <div class="card-header">
                <h3 class="card-title">DATA TRANSAKSI DETAIL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a href="/transaksi/tambah"><button type="button" class="btn btn-primary mt-3 mb-3"><i class="fa fa-plus"></i> Tambah</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi Detail</th>
                    <th>Id Barang</th>
                    <th>Transaksi Jenis</th>
                    <th>Transaksi Harga</th>
                    <th>Transaksi Jumlah</th>
                    <th>Transaksi Detail Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksidetail as $row)
					<tr>
						<td>{{$row->id_transaksi_detail}}</td>
						<td>{{$row->barang_nama}}</td>
						<td>{{$row->transaksi_jenis}}</td>
						<td>{{$row->transaksi_harga}}</td>
            <td>{{$row->transaksi_jumlah}}</td>
            <td>{{$row->transaksi_detail_status}}</td>
						<td>
              <a href="/transaksidetail/edit/{{$row->id}}"><button type="button" class="btn btn-success"><i class="fa fa-save"></i>Edit</button></a> | 
              <a href="/transaksidetail/destroy/{{$row->id}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a>
            </td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection