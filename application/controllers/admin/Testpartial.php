<?php

class Testpartial extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/testpartial.php
        $this->load->view("admin/testpartial");
	}
}