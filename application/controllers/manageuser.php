<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageUser extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model('Users_model','Users');
	}

	function getall(){
		$data['users'] = $this->Users->_getUsers();
		$this->load->view('users/show_all2',$data);
	}

	function insertdata(){
		$this->Users->_form_insert();
	}

	function deletedata($id){
		$this->Users->_delete_user_id($id);
	}

	

    // http://localhost/form_submit_test/index.php/manageuser/getall
}
