@extends('layout.v_template')

@section('title','Detail Guru')

@section('content')
	
	
<!-- Profile Image -->
		<div class="row">
			<div class="col-md-4">
			<div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive" src="{{ url('foto_guru/'.$guru->foto_guru) }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$guru->nama_guru}}</h3>

              <p class="text-muted text-center"></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIP</b> <a class="pull-right">{{ $guru->nip}}</a>
                </li>
                
                <li class="list-group-item">
                  <b>Mata Pelajaran</b> <a class="pull-right">{{ $guru->mapel}}</a>
                </li>
               
              </ul>
              <a href="/guru" class="btn btn-success btn-block"><b>Kembali</b></a>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
			</div>
			
		</div>
          


@endsection