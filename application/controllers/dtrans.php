<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dtrans extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('url'));
		$this->load->model('mtrans');
    }
    public function index()
    {
        $this->load->database();
		$jumlah_data = $this->mtrans->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/dtrans/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['trans'] = $this->mtrans->data($config['per_page'],$from);
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/dtrans',$data);
        $this->load->view('templates/dashboard_footer');
    }
    public function edit(){
        $edit['trans'] = $this->mtrans->getTrans($_get['idprod']);
        $this->load->view('dtrans/edit',$edit);

    }

    public function proses_edit(){
        
            $idprod = $this->input->post('idprod');
            $namaprod = $this->input->post('namaprod');
            $jml = $this->input->post('jml');
            $hrg = $this->input->post('hrg');
            $tothrg = $this->input->post('tothrg');
    
        $this->m_user->update($idprod,$namaprod,$jml,$hrg,$tothrg);
        redirect('pages/dtrans');
    }

    public function hapus($idprod){
        $hapus = $this->mtrans->hapus($get['idprod']);
        redirect('pages/dtrans');
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
