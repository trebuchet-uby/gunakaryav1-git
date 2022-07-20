<?php

class Pengelola extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/pengelola.php
        $this->load->view("admin/pengelola");
	}
}