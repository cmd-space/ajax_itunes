<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tunes extends CI_Controller {
  public function index_html() {
  	$artist = str_replace(" ", "", $this->input->post());
  	var_dump($artist);
  	die();
  	$this->load->view('partials/index');
  }

  public function index() {
    $this->load->view('index');
  }
}

//end of main controller
