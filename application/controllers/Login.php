<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('api_helper');
	}

	public function index() {
		$this->load->view('login');
	}

	public function authenticate() {
		$data = $this->input->post();

		$url = "https://softonauts.com/clients/Android/users-login";
		$postarray = ['username' => $data['email'], 'password' => $data['password']];
		$output = postmethod($url, $postarray);
		$res = json_decode($output);
		if ($res->code != 200) {
			echo json_encode(['status' => 'fail', 'message' => $res->message]);
		} else {
			$sess_arr = ['userid' => $res->data->id, 'firstname' => $res->data->first_name, 'lastname' => $res->data->last_name, 'email' => $res->data->email, 'dob' => $res->data->dob];
			$this->session->set_userdata($sess_arr);
			echo json_encode(['status' => 'success']);
		}
	}

}
?>