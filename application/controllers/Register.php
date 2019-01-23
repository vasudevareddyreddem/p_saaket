<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');
require_once ('razorpay-php/Razorpay.php');
use Razorpay\Api\Api as RazorpayApi;

class Register extends Front_end {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('User_model');		
	}
	public function index()
	{	
		$post=$this->input->post();
		$data['post_details']=$post;
		//echo '<pre>';print_r($post);
		$add=array(
		'title'=>isset($post['title'])?$post['title']:'',
		'full_name'=>isset($post['full_name'])?$post['full_name']:'',
		'address'=>isset($post['address'])?$post['address']:'',
		'mobile_no'=>isset($post['mobile_no'])?$post['mobile_no']:'',
		'email_id'=>isset($post['email_id'])?$post['email_id']:'',
		'college'=>isset($post['college'])?$post['college']:'',
		'amount'=>isset($post['amount'])?$post['amount']:'',
		'created_at'=>date('Y-m-d H:i:s'),
		);
		$save=$this->User_model->save_register_user($add);
		/*payment*/
		if(count($save)>0){
				$data['user_id']=base64_encode($save);
				$api_id= $this->config->item('keyId');
				$api_Secret= $this->config->item('API_keySecret');
				$api = new RazorpayApi($api_id,$api_Secret);
				//$api = new RazorpayApi($this->config->load('keyId'), $this->config->load('API_keySecret'));
				$orderData = [
						'receipt'         => 3456,
						'amount'          => $post['amount']*100, // 2000 rupees in paise
						'currency'        => 'INR',
						'payment_capture' => 1 // auto capture
				];
				$razorpayOrder = $api->order->create($orderData);
				$razorpayOrderId = $razorpayOrder['id'];
				$displayAmount = $amount = $orderData['amount'];
				$displayCurrency=$orderData['currency'];
				$data['details'] = [
						"key"               => $api_id,
						"amount"            => $amount,
						"name"              => $post['full_name'],
						"description"       => $post['full_name'].' seminar-workshop amount',
						"image"             => "",
						"prefill"           => [
						"name"              => $post['full_name'],
						"email"             => $post['email_id'],
						"contact"           => $post['mobile_no'],
						],
						"notes"             => [
						"address"           => $post['address'],
						"merchant_order_id" => $save,
						],
						"theme"             => [
						"color"             => "#F37254"
						],
						"order_id"          => $razorpayOrderId,
						"display_currency"          => $orderData['currency'],
			];
				//echo '<pre>';print_r($razorpayOrder);exit;
				
				$this->load->view('html/seminar-workshop-payment',$data);
				$this->load->view('html/footer');
		//echo '<pre>';print_r($post);exit;
		}else{
			$this->session->set_flashdata('error','Technical problem will occured. please start starting onwards');
			redirect('seminarworkshop');
			
		}
	}
	
	public  function paymentsuccess(){
		$post=$this->input->post();
		$update_data=array(
		'razorpay_payment_id'=>isset($post['razorpay_payment_id'])?$post['razorpay_payment_id']:'',
		'payment_status'=>1
		);
		$update=$this->User_model->update_user_details(base64_decode($post['user_id']),$update_data);
		//echo $this->db->last_query();exit;
		if(count($update)>0){
			$user_details=$this->User_model->get_user_details(base64_decode($post['user_id']));
			
			
			/* user purpose*/
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('Psaaket.com');
			$this->email->to($user_details['email_id']);
			$this->email->cc('support@psaaket.com');
			$this->email->subject('Psaaket Registration');
			$html = "Thank you for registering with us. One of our representative will reach you shortly."; 
			//echo $html;exit;
			$this->email->message($html);
			$this->email->send();
			/* user purpose*/
			//echo '<pre>';print_r($user_details);exit;
			$this->session->set_flashdata('success','Your payment successfully submited');
			redirect('seminarworkshop');
			
		}else{
			
			$this->User_model->delete_user_data(base64_decode($post['user_id']));
			$this->session->set_flashdata('error','Technical problem will occured. please start starting onwards');
			redirect('seminarworkshop');			
		}
		
	}
	
	
	
	
}
