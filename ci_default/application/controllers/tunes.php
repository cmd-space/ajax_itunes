<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tunes extends CI_Controller {
  public function get_movie() {
  	$artist = str_replace(' ', '', $this->input->post('user_input'));
  	$url = 'https://itunes.apple.com/search?term='.$artist.'&entity=musicVideo';
  	$ch = curl_init();
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
  	curl_setopt($ch, CURLOPT_URL, $url);
  	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  	$data = curl_exec($ch);
  	$info = curl_getinfo($ch);
  	curl_close($ch);
  	echo $data;
  }

  public function index() {
    $this->load->view('index');
  }
}

//end of main controller
