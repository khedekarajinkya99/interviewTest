<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('api_helper');
	}

	public function index() {
		$this->load->view('register');
	}

	public function savedata() {
		$data = $this->input->post();
		
		$url = "https://softonauts.com/clients/Android/register-user";
		$postarray = ['first_name' => $data['fullname'], 'email' => $data['emailaddress'], 'password' => $data['password']];
		$output = postmethod($url, $postarray);
		$res = json_decode($output);
		if ($res->code != 200) {
			echo json_encode(['status' => 'fail', 'message' => $res->message]);
		} else {
			echo json_encode(['status' => 'success']);
		}
	}

}
?>