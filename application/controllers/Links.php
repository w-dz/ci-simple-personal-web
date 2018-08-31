<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {

	public function home()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

  public function aboutme(){
		$this->load->view('header');
    $this->load->view('aboutme');
		$this->load->view('footer');
  }

  public function contact(){
		$this->load->view('header');
    $this->load->view('contact');
		$this->load->view('footer');
  }
}
