@extends('layout.v_template')

@section('title','Home')

@section('content')


      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Halaman Home</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Selamat Datang, {{ Auth::user()->name }} di website CRUD Laravel 8 <br> 
		  Anda masuk pada tanggal  {{ Auth::user()->created_at }}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href=""> {{ Auth::user()->email }}</a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

   
	
@endsection