<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('userid')) {
		    redirect('Login');
		}
		$this->load->helper('api_helper');
	}

	public function index() {
		$this->load->view('dashboard');
	}

	public function dropin() {
		$url = "https://softonauts.com/clients/Android/get-drop-in-navigator-list";
		$postarray = ["user_id" => $this->session->userdata('userid')];
		$output = postmethod($url, $postarray);
		$res = json_decode($output);
		
		if ($res->code != 200) {
			echo json_encode(['status' => 'fail', 'message' => $res->message]);
		} else {
			$navlist = $res->drop_in_navigator_list;
			$this->load->view('dropincenter', compact('navlist'));
		}
	}

	public function gettimeslot() {
		$location_id = $this->input->post('location_id');
		$url = "https://softonauts.com/clients/Android/get-time-slots";
		$postarray = ["location_id" => $location_id];
		$output = postmethod($url, $postarray);
		$res = json_decode($output);
		
		if ($res->code != 200) {
			echo json_encode(['status' => 'fail', 'message' => $res->message]);
		} else {
			$slots = $res->timeslots;
			echo json_encode(['status' => 'success', 'data' => $slots]);
		}
	}
}
?>