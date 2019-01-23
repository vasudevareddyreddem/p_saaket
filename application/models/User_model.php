<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	/* home page  purpose*/
	public  function save_register_user($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}
	
	public  function update_user_details($user_id,$data){
		$this->db->where('u_id',$user_id);
		return $this->db->update('users',$data);
	}
	public  function delete_user_data($user_id){
		$this->db->where('u_id',$user_id);
		return $this->db->delete('users');		
	}
	
	public  function get_user_details($user_id){
		$this->db->select('*')->from('users');
		$this->db->where('u_id',$user_id);
		return $this->db->get()->row_array();		
	}
	public  function save_contactus($data){
		$this->db->insert('contactus',$data);
		return $this->db->insert_id();
	}
	
	
	

}