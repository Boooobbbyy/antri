<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public $data = array('tampilan' => 'Maaf, Data Tidak Ditemukan');

	 public function home()
	{
		$this->data['tampilan'] = 'home';
     	$this->load->view('hubung', $this->data);
	}

	public function antrian()
	{
		$this->data['tampilan'] = 'antrian';
     	$this->load->view('hubung', $this->data);
	}

	public function login()
	{
		$this->data['tampilan'] = 'login';
     	$this->load->view('sign/main', $this->data);
	}
}
