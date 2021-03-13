@extends('layout.v_template')

@section('title','Siswa')

@section('content')
	<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Siswa</h3>
      </div>
     
       @if(session('pesan'))
     	  	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                {{ session('pesan') }}.
              </div>

          @endif

     <div class="container">
     	<a href="/siswa/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>

     </div>
     	
     	

<div class="table-responsive box-body">
	<table class="table table-bordered table-striped" id="example1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Kelas</th>
				<th>Mata Pelajaran</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach($siswa as $data)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $data->nis }}</td>
				<td>{{ $data->nama_siswa }}</td>
				<td>{{ $data->kelas }}</td>
				<td>{{ $data->mapel }}</td>
				<td>
					<a href="/siswa/detail/{{ $data->id_siswa}}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>
					<a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
 </div>
          <!-- /.box -->
@endsection