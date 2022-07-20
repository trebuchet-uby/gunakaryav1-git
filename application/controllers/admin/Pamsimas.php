<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pamsimas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_pamsimas");
        $this->load->library('form_validation');
        // merupakan sebuah konstruktor. 
        //Method ini yang akan dieksekusi pertama kali saat Controller diakses.
    }

    public function index()
    {
        $data["pamsimass"] = $this->M_pamsimas->getAll();
        $this->load->view("admin/pamsimas/vap_list", $data);
        // Pada method ini, kita akan mengambil data dari 
        // model dengan memanggil method
        // Lalu kita me-rendernya ke dalam view
    }

    public function add()
    // Method ini bertugas untuk menampilkan form add 
    // dan menyimpan data ke database.
    {
        $pamsimas = $this->M_pamsimas; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($pamsimas->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $pamsimas->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // tampilkan pesan berhasil
        }

        $this->load->view("admin/pamsimas/vap_new_form");
        // tampilkan form add
    }

    public function edit($id = null)
    // Hampir sama dengan method add(), 
    // method edit() juga bertugas untuk menampilkan form 
    // dan menyimpan data.
    {
        if (!isset($id)) redirect('admin/pamsimas');
       
        $pamsimas = $this->M_pamsimas; //objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($pamsimas->rules()); // menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $pamsimas->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pamsimas"] = $pamsimas->getById($id);
        // mengambil data untuk ditampilkan pada form
        if (!$data["pamsimas"]) show_404();
        // jika tidak ada, tampilkan error 404
        
        $this->load->view("admin/pamsimas/vap_edit_form", $data);
        // menampilkan form edit
    }

    public function delete($id=null)
    //Method delete() befungsi untuk menangani penghapusan data.
    {
        if (!isset($id)) show_404();
        
        if ($this->M_pamsimas->delete($id)) {
            redirect(site_url('admin/pamsimas'));
        }
    }
}