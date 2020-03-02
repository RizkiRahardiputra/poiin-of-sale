<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kartustok extends CI_Controller
{
    public function index()
    {
        $data['barangmasuk'] = $this->m_kartustok->getAllkartuStok();
        if ($this->input->post('keyword')) {
            $data['barangmasuk'] = $this->m_kartustok->searchbarangmasuk();
        }
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/kartustok', $data);
        $this->load->view('templates/dashboard_footer');


        // $jumlah_data = $this->m_kartustok->jumlah_data();
        // $this->load->library('pagination');
        // $config['base_url'] = base_url() . 'pages/kartustok';
        // $config['total_rows'] = $jumlah_data;
        // $config['per_page'] = 5;
        // $from = $this->uri->segment(3);
        // $this->pagination->initialize($config);
        // $data['barangmasuk'] = $this->m_kartustok->data($config['per_page'], $from);
        // $this->load->view('beranda/kartustok', $data);
        // $x['data']=$this->m_barang->show_barang();

        // $this->load->view('v_barang',$x);
    }

    // public function get_tambahkan($barcode)
    // {
    //     // $data['barangmasuk'] = $this->m_kartustok->getbarangmasuk();
    //     $data['barangmasuk'] = $this->m_kartustok->getbarangmasuk($barcode);
    //     $this->load->view('templates/dashboard_header');
    //     $this->load->view('beranda/plus', $data);
    //     $this->load->view('templates/dashboard_footer');
    // }
    public function get_plus($kodemasuk)
    {
        $this->form_validation->set_rules('jumlahditambahkan', 'Jumlah Ditambahkan', 'trim|required|number');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|number');

        $this->form_validation->run();
        $isi = $this->m_kartustok->wherebarangmasuk($kodemasuk);
        $data['barangmasuk'] = $isi;

        // $data['barangmasuk'] = $this->m_kartustok->getbarangmasukid($isi);
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/plus', $data);
        $this->load->view('templates/dashboard_footer');

        // $this->load->view('templates/dashboard_header');
        // $this->load->view('beranda/plus', $data);
        // $this->load->view('templates/dashboard_footer');
        
        // } else {

        // $this->m_kartustok->updatebarangmasuk();
        // $this->session->set_flashdata('flash', 'Diubah');
        // redirect('kartustok');


        // $where = array('barcode' => $barcode);
        // $data['barangmasuk'] = $this->m_kartustok->edit_data($where, 'user')->result();
        // $this->load->view('v_edit', $data);
    }

    public function penambahan($kodemasuk)
    {
        $kodekartu = $this->input->get('kodemasuk');
        $jumlahbeli = $this->m_kartustok->wherebarangmasuk($kodemasuk);
        $jumlahbeli = $jumlahbeli['jumlahbeli'];
        $jumlahmasuk = $this->input->get('jumlahmasuk');
        $harga = $this->input->get('harga');
        $sum = $jumlahbeli + $jumlahmasuk;
        $tanggal = mdate('%Y-%m-%d %H:%i:%s', NOW());
        
        $this->m_kartustok->insertKartuStok($kodekartu, $jumlahmasuk ,$sum , $harga, $tanggal);
        
        
        redirect('barangmasuk');
        
    }

    // public function prosesupdate()
    // {
    //     $barcode = $this->input->post('barcode');
    //     $namaproduk = $this->input->post('namaproduk');
    //     $namatoko = $this->input->post('namatoko');
    //     $jumlah = $this->input->post('jumlah');
    //     $harga = $this->input->post('harga');



    //     $this->m_kartustok->editData($barcode, $namaproduk, $namatoko, $jumlah, $harga);
    //     redirect('kartustok', 'refresh');
    // }


    public function get_minus($barcode)
    {
        $data['barangmasuk'] = $this->m_kartustok->getbarangkeluarid($barcode);
        $this->load->view('templates/dashboard_header');
        $this->load->view('beranda/minus', $data);
        $this->load->view('templates/dashboard_footer');

        $this->form_validation->set_rules('jumlahditambahkan', 'Jumlah Ditambahkan', 'trim|required|number');
        $this->form_validation->set_rules('harga', 'Harga', 'trim|required|number');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard_header');
            $this->load->view('beranda/minus', $data);
            $this->load->view('templates/dashboard_footer');
        } else {

            $this->m_kartustok->updatebarangmasuk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kartustok');
        }
    }
    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('kartustok/index');
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