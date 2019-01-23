<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Psaaket extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		$this->load->view('html/index');
		$this->load->view('html/footer');
	}
	
	
	
	
}
