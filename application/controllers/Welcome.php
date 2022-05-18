<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	public function chompas(){
		$this->load->view('header');
		$this->load->view('chompas');
		$this->load->view('footer');

	}
	public function busos(){
		$this->load->view('header');
		$this->load->view('busos');
		$this->load->view('footer');

	}
	public function camisetas(){
		$this->load->view('header');
		$this->load->view('camisetas');
		$this->load->view('footer');

	}
	public function pantalones(){
		$this->load->view('header');
		$this->load->view('pantalones');
		$this->load->view('footer');

	}
	public function gafas(){
		$this->load->view('header');
		$this->load->view('gafas');
		$this->load->view('footer');

	}
	public function zapatillas(){
		$this->load->view('header');
		$this->load->view('zapatillas');
		$this->load->view('footer');

	}
	public function relojes(){
		$this->load->view('header');
		$this->load->view('relojes');
		$this->load->view('footer');

	}
	public function carrito(){
		$this->load->view('header');
		$this->load->view('carrito');
		$this->load->view('footer');

	}
}
