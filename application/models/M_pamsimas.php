<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pamsimas extends CI_Model
{
    //nama tabel
    private $_table = "pamsimas";

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_pelanggan;
    public $nama;
    public $alamat;
    public $nik;
    public $langganan;

    public function rules()
    {
        //Pada Rules ini, 
        //kita memberikan aturan untuk wajib mengisi (required)
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'numeric'],
			
			['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
        // ini sama artinya seperti
        // SELECT * FROM products
        // method ini akan mengembalikan sebuah array
        //yang berisi objek dari row
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pelanggan" => $id])->row();
        // ini sama seperti:
        //SELECT * FROM product WHERE id_pelanggan=$id
        // method ini kana mengembalikan sebuah objek
    }

    public function save()
    {
        $post = $this->input->post(); // ambil data dari form
        $this->id_pelanggan = uniqid(); // membuat id unik
        $this->nama = $post["nama"]; // isi field name
        $this->alamat = $post["alamat"]; //isi file alamat
        $this->nik = $post["nik"]; // isi file nik
		$this->langganan = $post["langganan"]; // isi file langganan
        return $this->db->insert($this->_table, $this); // simpan ke database
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pelanggan = $post["id"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->nik = $post["nik"];
		$this->langganan = $post["langganan"]; 
        return $this->db->update($this->_table, $this, array('id_pelanggan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pelanggan" => $id));
    }
}