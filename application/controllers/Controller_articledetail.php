<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_articledetail extends CI_Controller {


	public function index()
	{
		$this->load->view('view_detailarticle');
	}

}