<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Mocktest extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		$this->load->view('html/mock-test');
		$this->load->view('html/footer');
	}
	
	
	
	
}
