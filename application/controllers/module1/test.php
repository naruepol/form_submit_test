<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){
		parent::__construct();
		//echo "Hello Constructor<br>";
	}

	public function _myprivate(){
		 echo "Private Use";		
	}

	public function index()
	{
		$this->load->view('section1');
		$this->load->view('section2');
		$this->load->view('section3');
	}

	public function hello(){
		echo "Hello world<br>";
		$this->_myprivate();
		$data['name']  	= 'Naruapon Suwanwijit';
		$data['email']	= 'naruapon@gmail.com';
		$this->load->view('my_view',$data);
	}

	public function user(){
		$data['name']  	= 'Somchai Namdee';
		$data['email']	= 'somchai@gmail.com';
		$this->load->view('my_view',$data);
	}

	public function world($name,$surname){
	     echo "Hello, ".$name." ".$surname;
	}

	public function user2(){
		$data['users'] = array('Somchai','Narong','Surat');
		$this->load->view('my_view2',$data);
	}




}
