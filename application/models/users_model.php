<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function _getUsers(){
			//$this->db->select('name, email');
			$result = $this->db->get('users');
			//$result = $this->db->get_where('users', array('id' => 2));
			return $result;
		}

 		function _queryUsers(){
			$query = $this->db->query("select * from users where id='3'");
 			return $query;
 		}	

		function _form_insert(){
			$data = array(
			    'id' => '10',
			    'name' => 'test',
			    'email' => 'test@gmail.com'
			);
			$this->db->insert('users',$data);
		}

		function _delete_user_id($id){
			$this->db->where('id', $id);
			$this->db->delete('users');  
		}	

}



// 		function _update_user($name,$email,$id){
// 			$result = $this->db->where('id',$id)
// 								->set('name',$name)
// 								->set('email',$email)
// 								->update('users');
// 			return $result;
// 		}
// }

