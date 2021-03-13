@extends('layout.v_template')

@section('title','Detail Siswa')

@section('content')
	
	
<!-- Profile Image -->
		<div class="row">
			<div class="col-md-4">
			<div class="box box-primary">
            <div class="box-body box-profile">
              

              <h3 class="profile-username text-center">{{$siswa->nama_siswa}}</h3>

              <p class="text-muted text-center"></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIS</b> <a class="pull-right">{{ $siswa->nis}}</a>
                </li>

                <li class="list-group-item">
                  <b>Kelas</b> <a class="pull-right">{{ $siswa->id_kelas}}</a>
                </li>

                <li class="list-group-item">
                  <b>Mata Pelajaran</b> <a class="pull-right">{{ $siswa->id_mapel}}</a>
                </li>
               
              </ul>
              <a href="/siswa" class="btn btn-success btn-block"><b>Kembali</b></a>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
			</div>
			
		</div>
          


@endsection