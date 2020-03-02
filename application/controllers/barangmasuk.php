<?php
defined('BASEPATH') or exit('No direct script access allowed');

class barangmasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['barangmasuk'] = $this->m_barangmasuk->getAllbarangmasuk();
        if ($this->input->post('keyword')) {
            $data['barangmasuk'] = $this->m_barangmasuk->searchbarangmasuk();
        }
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/barangmasuk', $data);
        $this->load->view('templates/dashboard_footer');
        // $x['data']=$this->m_barang->show_barang();

        // $this->load->view('v_barang',$x);
    }

    public function tambahkan()
    {
        $data['barangmasuk'] = $this->m_barangmasuk->updatebarangmasuk();
        $this->load->view('beranda/addbarangmasuk', $data);
    }

    // function tambahkan($barcode, $jumlah, $harga)
    // {
    //     $data = array(
    //         'barcode' => $barcode,
    //         'jumlah' => $barcode,
    //         'harga' => $harga
    //     );
    //     $this->db->insert('barangmasuk', $data);
    // }


    // $this->m_barangmasuk->getAddbarangmasuk();

    // $namaproduk = $this->input->post('namaproduk');
    // $jumlah = $this->input->post('jumlah');
    // $satuan = $this->input->post('satuan');
    // $harga = $this->input->post('harga');
    // $tglmasuk = $this->input->post('tglmasuk');
    // $namatoko = $this->input->post('namatoko');
    // $this->m_barangmasuk->updatebarangmasuk($namaproduk, $jumlah, $satuan, $harga, $tglmasuk, $namatoko);
    // redirect('addbarangmasuk');


    // redirect('barangmasuk/tambahkan');

    // $this->load->view('templates/dashboard_header');
    // $this->load->view('beranda/addbarangmasuk', $data);
    // $this->load->view('templates/dashboard_footer');

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
