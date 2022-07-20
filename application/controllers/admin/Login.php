<?php

class Login extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view admin/login.php
        $this->load->view("admin/login_form");
	}
}