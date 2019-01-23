<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Contactus extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
	}
	public function index()
	{	
		$this->load->view('html/contact-us');
		$this->load->view('html/footer');
	}
	
	public  function post(){
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$details=array(
		'name'=>$post['name'],
		'email'=>$post['email'],
		'subject'=>$post['subject'],
		'message'=>$post['message'],
		'create-at'=>date('y-m-d H:i:s')
		);
		$savedata= $this->User_model->save_contactus($details);
		if(count($savedata)>0){
			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->set_mailtype("html");
			$this->email->from($post['email']);
			$this->email->to('support@psaaket.com');
			$this->email->subject($post['subject']);
			$this->email->message($post['message']);
			$this->email->send();
			$this->session->set_flashdata('success','Your Query is successfully sent. Our team will contact you soon.');
			redirect('contactus');

		}else{
			$this->session->set_flashdata('error','Technical problem will occured . try again after some time');
			redirect('contactus');

		}
		
	}
	
	
	
	
}
