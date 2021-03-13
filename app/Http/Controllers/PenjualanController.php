<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenjualanModel;
use Dompdf\Dompdf;


class PenjualanController extends Controller
{
	public function __construct()
   {
      $this->PenjualanModel = new PenjualanModel();
	  $this->middleware('auth');
   }

	public function index()
	{
		$data = [
         'penjualan' => $this->PenjualanModel->allData(),
      	];

		return view('v_penjualan', $data);
	}

	public function print()
	{
		$data = [
         'penjualan' => $this->PenjualanModel->allData(),
      	];

		return view('v_print', $data);
	}

	public function printpdf()
	{
		$data = [
         'penjualan' => $this->PenjualanModel->allData(),
      	];

		$html = view('v_printpdf', $data);

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		
		$dompdf->setPaper('A4', 'portrait');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream();
	}


}