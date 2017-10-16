<?php
class Form extends CI_Controller {
	public function __construct() {
	parent::__construct();
	$this->load->helper('url');
	}

	// Show form in view page i.e view_page.php
	public function form_show() {
		$this->load->view("view_form");
	}


	public function data_submitted(){ 
		$data = array(
		'user_name' => $this->input->post('u_name'),
		'user_email_id' => $this->input->post('u_email')
		);

		// Show submitted data on view page again.
		$this->load->view("view_form", $data);
	}
}
?>