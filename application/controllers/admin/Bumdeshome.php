<?php

class Bumdeshome extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/bumdeshome.php
        $this->load->view("admin/bumdeshome");
	}
}