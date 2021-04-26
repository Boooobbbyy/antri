<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('KaryModel');
      $this->load->model('InsModel');
      $this->load->model('LoketModel');
      $this->load->model('TextModel');
      $this->load->model('TransModel');
      $this->load->library('form_validation');
   }

   public $data = array('tampilan' => 'Maaf, Data Tidak Ditemukan');

   public function index()
   {
      $this->data['tampilan'] = 'index';
      $this->load->view('admin/master', $this->data);
   }

   public function loket()
   {
      $this->data['tampilan'] = 'loket';
      $this->load->view('admin/master', $this->data);
   }

   public function instansi()
   {
      $this->load->view('admin/head');
      $this->load->view('admin/navbar');
      $this->load->view('admin/konten/instansi');
      $this->load->view('admin/footer');
   }
   public function hapusDatakaryawan($username)
   {
      $data['karyawan'] = $this->KaryModel->hapusDatakaryawan($username);
      redirect('Page/karyawan/');
   }

   public function karyawan()
   {
      $data['karyawan'] = $this->KaryModel->getAllkaryawan();

      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('telp', 'telp', 'required');
      $this->form_validation->set_rules('level', 'level', 'required');

      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_rules('id_loket', 'id_loket', 'required');

      if ($this->form_validation->run() == false) {

         $this->load->view('admin/head', $data);
         $this->load->view('admin/navbar', $data);
         $this->load->view('admin/konten/karyawan', $data);
         $this->load->view('admin/footer', $data);
      } else {
         $this->KaryModel->Tambah();
         redirect('Page/karyawan/');
      }
   }

   public function agenda()
   {
      $this->data['tampilan'] = 'agenda';
      $this->load->view('admin/master', $this->data);
   }

   public function teks_jalan()
   {
      $this->data['tampilan'] = 'teks_jalan';
      $this->load->view('admin/master', $this->data);
   }
}
