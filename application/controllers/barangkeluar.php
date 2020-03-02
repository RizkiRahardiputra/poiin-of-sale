<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barangkeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['barangkeluar'] = $this->m_barangkeluar->getAllbarangkeluar();
        if ($this->input->post('keyword')) {
            $data['barangkeluar'] = $this->m_barangkeluar->searchbarangkeluar();
        }
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/barangkeluar', $data);
        $this->load->view('templates/dashboard_footer');
    }
    public function tambahkan()
    {
        $data['barangkeluar'] = $this->m_barangkeluar->getAddbarangkeluar();
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/addbarangkeluar', $data);
        $this->load->view('templates/dashboard_footer');
    }
    // public function registration()
    // {
    // 	$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
    // 	$this->form_validation->set_rules('username', 'Username', 'required|trim');
    // 	$this->form_validation->set_rules('nip', 'NIP', 'required|number');
    // 	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

    // 	if ($this->form_validation->run() == false) {
    // 		$data['title'] = 'Admin Registration'; //Untuk title halaman registration, dipanggil title halaman view registration.php. Nanti di viewnya panggilnya jadi $title
    // 		$this->load->view('templates/auth_header', $data);
    // 		$this->load->view('auth/registration');
    // 		$this->load->view('templates/auth_footer');
    // 	} else {
    // 		echo 'data berhasil ditambahkan!';
    // 	}
    // }
}
