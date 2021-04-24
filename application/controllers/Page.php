<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('KaryModel');
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
      $this->data['tampilan'] = 'instansi';
      $this->load->view('admin/master', $this->data);
   }

   public function karyawan()
   {
      $data['karyawan'] = $this->KaryModel->getALlkaryawan();
      $this->data['tampilan'] = 'karyawan';
      $this->load->view('admin/master', $this->data);
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
