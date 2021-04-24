<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjaga extends CI_Controller {

   public $data = array('tampilan' => 'Maaf, Data Tidak Ditemukan');

   public function loket()
   {
      $this->data['tampilan'] = 'penjaga';
      $this->load->view('hubung', $this->data);
   }

}
