<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
	public function __construct()
   {
      $this->SiswaModel = new SiswaModel();
      $this->middleware('auth');
   }

	public function index()
	{
		$data = [
         'siswa' => $this->SiswaModel->allData(),
      	];

		return view('v_siswa', $data);
	}

	 public function detail($id_siswa)
   {
      // jika datanya tidak ada / kosong 
      if (!$this->SiswaModel->detailData($id_siswa)) {
         // maka akan menampilkan 404 NOT FOUND
         abort('404');
      }

      $data = [
         'siswa' => $this->SiswaModel->detailData($id_siswa),
      ];
      return view('v_detailsiswa', $data);
   }

}