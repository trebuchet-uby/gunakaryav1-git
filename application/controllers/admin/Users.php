<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    // Method ini yang akan dieksekusi pertama kali saat Controller diakses.
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_users");

        // Library form_validation akan kita gunakan 
        // untuk memvalidasi input pada method add() dan edit().

        $this->load->library('form_validation_users');
    }

    public function index()
    {
        $data["users"] = $this->M_user->getAll();
        $this->load->view("admin/users/vu_users", $data);
    }

    public function add()
    {
        $users = $this->M_Users; // Objek Model
        
        // Objek form validation
        $validation = $this->form_validation_users; 
       
        // Terapkan Rules
        $validation->set_rules($users->rules());

        // Melakukan Validasi
        if ($validation->run()) { 
            $users->save(); // Simpan dalam database

            //Tampilkan pesan berhasil
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        // Tampilkan Form Add
        $this->load->view("admin/users/vu_new_form");
    }

    public function edit($id = null)
    {
        // Redirect jika tidak ada $id
        if (!isset($id)) redirect('users');
       
        $users = $this->M_users; // Objek Model
        $validation = $this->form_validation_users; // Objek Validasi
        $validation->set_rules($users->rules()); // Menerapkan Rules

        if ($validation->run()) { // Melakukan validasi
            $users->update(); // Menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["users"] = $users->getById($id);
        if (!$data["users"]) show_404(); 
        // Jika tak ada tampilkan error 404
        
        // Menampilkan form edit
        $this->load->view("admin/users/vu_edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M-users->delete($id)) {
            redirect(site_url('admin/users'));
        }
    }
}