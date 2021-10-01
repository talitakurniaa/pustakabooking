<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function penjumlahan ($n1, $n2)
	{
		$this->load->model8('model_latihan1');
		$hasil = $this->model_latihan1->jumlah ($n1, $n2);
		echo"Hasil Penjumlahan dari". $n1 ."+". $n2 ."=" . $hasil;
		
		$this->load->view('view-latihan1', $hasil);
	}
}
