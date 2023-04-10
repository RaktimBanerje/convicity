<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('home');
		$this->load->view('inc/footer');
	}

	public function corporate()
	{
		$this->load->view('inc/header');
		$this->load->view('corporate');
		$this->load->view('inc/footer');
	}

	public function careers()
	{
		$this->load->view('inc/header');
		$this->load->view('careers');
		$this->load->view('inc/footer');
	}

	public function contact()
	{
		$this->load->view('inc/header');
		$this->load->view('contact');
		$this->load->view('inc/footer');
	}

	public function catelog_elite_villa()
	{
		$this->load->view('inc/header');
		$this->load->view('catelog_elite_villa');
		$this->load->view('inc/footer');
	}

	public function catelog_apartment()
	{
		$this->load->view('inc/header');
		$this->load->view('catelog_apartment');
		$this->load->view('inc/footer');
	}

	public function catelog_classic_villa()
	{
		$this->load->view('inc/header');
		$this->load->view('catelog_classic_villa');
		$this->load->view('inc/footer');
	}

	public function details_elite_villa()
	{
		$this->load->view('inc/header');
		$this->load->view('details_elite_villa');
		$this->load->view('inc/footer');
	}

	public function details_apartment()
	{
		$this->load->view('inc/header');
		$this->load->view('details_apartment');
		$this->load->view('inc/footer');
	}

	public function details_classic_villa()
	{
		$this->load->view('inc/header');
		$this->load->view('details_classic_villa');
		$this->load->view('inc/footer');
	}

	
}
