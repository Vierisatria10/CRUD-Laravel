@extends('layout.v_template')

@section('title','Tambah Guru')

@section('content')
	
	<div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="/guru/insert" method="POST" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
              	
              			<div class="form-group">
		                  <label>NIP</label>
		                  <input type="text" name="nip" class="form-control" value="{{ old('nip')}}" placeholder="Masukkan Nip">
		                  <div class="text-danger">
		                  
		                  	@error('nip')
    							{{ $message }}
							@enderror
		                  </div>	
                		</div>
                	
                	
                		 <div class="form-group">
		                  <label>Nama Guru</label>
		                  <input type="text" name="nama_guru" class="form-control" value="{{ old('nama_guru')}}" placeholder="Masukkan Nama Guru">
		                  <div class="text-danger">
		                  
		                  	@error('nama_guru')
    							{{ $message }}
							@enderror
		                  </div>	
		                </div>
               	
            
              			<div class="form-group">
		                  <label>Mata Pelajaran</label>
		                  <input type="text" name="mapel" class="form-control" value="{{ old('mapel')}}" placeholder="Masukkan Mata Pelajaran">
		                  <div class="text-danger">
		                  
		                  	@error('mapel')
    							{{ $message }}
							@enderror
		                  </div>
                		</div>
                	
                	<div class="form-group">
	                  <label>Foto Guru</label>
	                  <input type="file" id="exampleInputFile" name="foto_guru" class="form-control">
	                  <div class="text-danger">
		                  
		                  	@error('foto_guru')
    							{{ $message }}
							@enderror
		                  </div>

	                  <p class="help-block">Batas ukuran foto 1024kb</p>
                	</div>
         
              	
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
                <a href="/guru" class="btn btn-info btn-sm">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

@endsection