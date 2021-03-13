<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
   public function __construct()
   {
      $this->GuruModel = new GuruModel();
      $this->middleware('auth');
   }

   public function index()
   {
      $data = [
         'guru' => $this->GuruModel->allData(),
      ];
   	return view('v_guru', $data);
   }

   public function detail($id_guru)
   {
      // jika datanya tidak ada / kosong 
      if (!$this->GuruModel->detailData($id_guru)) {
         // maka akan menampilkan 404 NOT FOUND
         abort('404');
      }

      $data = [
         'guru' => $this->GuruModel->detailData($id_guru),
      ];
      return view('v_detailguru', $data);
   }

   public function add()
   {
      return view('v_addguru');
   }

   public function insert()
   {
      //jika validasi input data nya tidak diisi atau kosong
      Request()->validate([
        'nip' => 'required|unique:tbl_guru,nip|min:5|max:10',
        'nama_guru' => 'required',
        'mapel'     => 'required',
        'foto_guru' => 'required|mimes:jpeg,jpg,png|max:1024kb'
      ], [
         'nip.required' => 'wajib diisi !!',
         'nip.unique' => 'Nip ini sudah ada !!',
         'nip.min'    => 'Min 5 Karakter',
         'nip.max'    => 'Max 10 Karakter',
         'nama_guru.required' => 'wajib diisi !!',
         'mapel.required' => 'wajib diisi !!',
         'foto_guru.required' => 'wajib diisi !!',

      ]);
      // jika validasi tdk ada maka lakukan simpan data

      // upload gambar/foto
      $file = Request()->foto_guru;
      $fileName = Request()->nip. '.' . $file->extension();
      $file->move(public_path('foto_guru'), $fileName);

      $data = [
         'nip' => Request()->nip,
         'nama_guru' => Request()->nama_guru,
         'mapel' => Request()->mapel,
         'foto_guru' => $fileName,
      ];

      $this->GuruModel->addData($data);
      return redirect()->route('guru')->with('pesan', 'Data Berhasil Di Tambahkan !!!');
   }


   public function edit($id_guru)
   {
       // jika datanya tidak ada / kosong 
      if (!$this->GuruModel->detailData($id_guru)) {
         // maka akan menampilkan 404 NOT FOUND
         abort('404');
      }

       $data = [
         'guru' => $this->GuruModel->detailData($id_guru),
      ];

      return view('v_editguru', $data);
   }

    public function update($id_guru)
   {
      //jika validasi input data nya tidak diisi atau kosong
      Request()->validate([
         'nip' => 'required|min:5|max:10',
        'nama_guru' => 'required',
        'mapel'     => 'required',
        'foto_guru' => 'mimes:jpeg,jpg,png|max:1024kb'
      ], [
         'nip.required' => 'wajib diisi !!',
         'nip.min'    => 'Min 5 Karakter',
         'nip.max'    => 'Max 10 Karakter',
         'nama_guru.required' => 'wajib diisi !!',
         'mapel.required' => 'wajib diisi !!',

      ]);
      // jika validasi tdk ada maka lakukan simpan data
      if (Request()->foto_guru <> "") {
         // jika ingin ganti foto
         // upload gambar/foto
         $file = Request()->foto_guru;
         $fileName = Request()->nip. '.' . $file->extension();
         $file->move(public_path('foto_guru'), $fileName);

         $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
            'foto_guru' => $fileName,
         ];
         $this->GuruModel->editData($id_guru, $data);
      }else{
         // jika tidak ingin ganti foto
          $data = [
            'nip' => Request()->nip,
            'nama_guru' => Request()->nama_guru,
            'mapel' => Request()->mapel,
         ];
         $this->GuruModel->editData($id_guru, $data);
      }
      
      
      return redirect()->route('guru')->with('pesan', 'Data Berhasil Di Update !!!');
   }

   public function delete($id_guru)
   {
      // hapus foto
       $guru = $this->GuruModel->detailData($id_guru);
       if ($guru->foto_guru <> "") {
          unlink(public_path('foto_guru'). '/' .$guru->foto_guru);
       }
      $this->GuruModel->deleteData($id_guru);
      return redirect()->route('guru')->with('pesan', 'Data Berhasil Di Hapus !!!');
    
   }


}