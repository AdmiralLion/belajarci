<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
		$data['meta'] = [
			'title' => 'BeritaCoding',
		];

		$this->load->view('home', $data);
	}
	public function about()
	{
		// fungsi untuk me-load view about.php
		// $this->load->view('about');
		$data['meta'] = [
			'title' => 'About BeritaCoding',
		];
		$data['user'] ='petanikode';
		$this->load->view('about', $data);
	}
	
	public function contact()
	{
		$data['meta'] = [
			'title' => 'Contact Us',
		];
		if ($this->input->method() === 'post') {
			print_r($this->input->post());
		}
		// fungsi untuk me-load view contact.php
		$this->load->view('contact',$data);
		
	}
	public function nama()
	{
		$data['meta'] = [
			'title' => 'Coba nama',
		];
		$data['names'] = [
			"Foo",
			"Bar",
			"Bob"
		  ];
		  $this->load->view('name', $data);
		  
	}
}