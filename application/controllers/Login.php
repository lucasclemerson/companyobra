<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

	public function index(){
		$this->login();
	}


	public function login (){
		$page['name'] = "login";
		$page['title'] = "Login";
		$this->load->view('inicio/index', $page);
	}
}
