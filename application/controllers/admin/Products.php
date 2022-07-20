<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
        // merupakan sebuah konstruktor. 
        //Method ini yang akan dieksekusi pertama kali saat Controller diakses.
    }

    public function index()
    {
        $data["products"] = $this->product_model->getAll();
        $this->load->view("admin/product/list", $data);
        // Pada method ini, kita akan mengambil data dari 
        // model dengan memanggil method
        // Lalu kita me-rendernya ke dalam view
    }

    public function add()
    // Method ini bertugas untuk menampilkan form add 
    // dan menyimpan data ke database.
    {
        $product = $this->product_model; // objek model
        $validation = $this->form_validation; // objek form validation
        $validation->set_rules($product->rules()); // terapkan rules

        if ($validation->run()) { // melakukan validasi
            $product->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            // tampilkan pesan berhasil
        }

        $this->load->view("admin/product/new_form");
        // tampilkan form add
    }

    public function edit($id = null)
    // Hampir sama dengan method add(), 
    // method edit() juga bertugas untuk menampilkan form 
    // dan menyimpan data.
    {
        if (!isset($id)) redirect('admin/product');
       
        $product = $this->product_model; //objek model
        $validation = $this->form_validation; // objek validation
        $validation->set_rules($product->rules()); // menerapkan rules

        if ($validation->run()) { // melakukan validasi
            $product->update(); // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        // mengambil data untuk ditampilkan pada form
        if (!$data["product"]) show_404();
        // jika tidak ada, tampilkan error 404
        
        $this->load->view("admin/product/edit_form", $data);
        // menampilkan form edit
    }

    public function delete($id=null)
    //Method delete() befungsi untuk menangani penghapusan data.
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/product'));
        }
    }
}