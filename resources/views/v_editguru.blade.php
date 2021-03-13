@extends('layout.v_template')

@section('title','Edit Guru')

@section('content')
	<div class="box box-primary">
            <div class="box-header with-border">
             
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form role="form" action="/guru/update/{{ $guru->id_guru}}" method="POST" enctype="multipart/form-data">
            	@csrf
              <div class="box-body">
              	
              			<div class="form-group">
		                  <label>NIP</label>
		                  <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}" placeholder="Masukkan Nip">
		                  <div class="text-danger">
		                  
		                  	@error('nip')
    							{{ $message }}
							@enderror
		                  </div>	
                		</div>
                	
                	
                		 <div class="form-group">
		                  <label>Nama Guru</label>
		                  <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru }}" placeholder="Masukkan Nama Guru">
		                  <div class="text-danger">
		                  
		                  	@error('nama_guru')
    							{{ $message }}
							@enderror
		                  </div>	
		                </div>
               	
            
              			<div class="form-group">
		                  <label>Mata Pelajaran</label>
		                  <input type="text" name="mapel" class="form-control" value="{{ $guru->mapel }}" placeholder="Masukkan Mata Pelajaran">
		                  <div class="text-danger">
		                  
		                  	@error('mapel')
    							{{ $message }}
							@enderror
		                  </div>
                		</div>
                	
                	<div class="col-sm-12">
                		<div class="col-sm-4">
                			
                			<img src="{{ url('foto_guru/'.$guru->foto_guru) }}" width="100px">
                		</div>
                		<div class="col-sm-8">
                			<div class="form-group">
	                  		<label>Ganti Foto Guru</label>
			                  <input type="file" id="exampleInputFile" name="foto_guru" class="form-control">
			                  <div class="text-danger">
		                  
			                  	@error('foto_guru')
	    							{{ $message }}
								@enderror
		                  		</div>

	                  		<p class="text-danger">Batas ukuran foto 1024kb</p>
                		</div>
         
                		</div>
                	</div>

              	
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Update</button>
                <a href="/guru" class="btn btn-info btn-sm">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
@endsection