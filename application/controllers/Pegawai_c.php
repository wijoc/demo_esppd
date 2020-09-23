<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class Pegawai_c extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
	  /* Data dikirim ke view */
		$this->pageData = array(
			'title'  => 'E-SPT | Pegawai',
			'assets' => array()
		); 

      /* File view yang akan ditampilkan */
        $this->page = "pegawai/index_pegawai_v";

      /* Call function layout dari MY_Controller */
        $this->layout();
	}

	public function addPegawaiPage(){
		$this->pageData = array(
			'title'  => 'E-SPT | Input Pegawai',
			'assets' => array()
		);
		$this->page = 'pegawai/add_pegawai_v';
		$this->layout();
	}
}