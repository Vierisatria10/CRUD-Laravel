@extends('layout.v_template')

@section('title','Guru')

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Guru</h3>
      </div>
     
       @if(session('pesan'))
     	  	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                {{ session('pesan') }}.
              </div>

          @endif

     <div class="container">
     	<a href="/guru/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
    
     </div>
     	
     	

<div class="table-responsive box-body">
	<table class="table table-bordered table-striped" id="example1">
		<thead>
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Nama Guru</th>
				<th>Mata Pelajaran</th>
				<th>Foto Guru</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; ?>
			@foreach($guru as $data)
				<tr>
					<td>{{ $no++ }}</td>
					<td>{{ $data->nip }}</td>
					<td>{{ $data->nama_guru }}</td>
					<td>{{ $data->mapel }}</td>
					<td><img src="{{ url('foto_guru/'.$data->foto_guru) }}" width="100px"></td>
					<td>
						<a href="/guru/detail/{{ $data->id_guru}}" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a>
						<a href="/guru/edit/{{ $data->id_guru}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $data->id_guru}}">
                		<i class="fa fa-trash"></i>
              			</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
 </div>
          <!-- /.box -->

   		<!-- Modal delete guru -->
   		@foreach($guru as $data)

        <div class="modal modal-danger fade" id="delete{{ $data->id_guru}}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->nama_guru}}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data Ini...???</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/guru/delete/{{ $data->id_guru}}" class="btn btn-outline">Yes</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
	
   		@endforeach
@endsection