<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

	public function index(){
		$this->login();
	}

	public function cadastro (){
		$page['name'] = "cadastro";
		$page['title'] = "Cadastre-se";
		$this->load->view('inicio/index', $page);
	}

	public function login (){
		$page['name'] = "login";
		$page['title'] = "Login";
		$this->load->view('inicio/index', $page);
	}


	public function cadastrar_novo_functionario (){
		echo "check";
	}

	public function verificar_autenticacao_sistema (){
		echo "check";
	}

	public function recuperar_senha (){
		echo "check";
	}
}
