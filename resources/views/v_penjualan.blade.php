@extends('layout.v_template')

@section('title','Penjualan')

@section('content')
	<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Penjualan</h3>
      </div>
     

     <div class="container">
     	<a href="/penjualan/print" target="_blank" class="btn btn-sm btn-danger"><i class="fa fa-print"></i> Print to Preview</a>
     	<a href="/penjualan/printpdf" target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-print"></i> Print PDF</a>
    
     </div>
     	
     	

<div class="table-responsive box-body">
	<table class="table table-bordered table-striped" id="example1">
		<thead>
			<tr>
				<th>No</th>
				<th>No Faktur</th>
				<th>Pelanggan</th>
				<th>Tanggal</th>
				<th>Total</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach($penjualan as $data)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $data->no_faktur }}</td>
				<td>{{ $data->pelanggan }}</td>
				<td>{{ $data->tgl }}</td>
				<td>{{ $data->total }}</td>
			
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
 </div>
          <!-- /.box -->
@endsection