<?php
class pengembalian extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('pengembalian_model');
        $this->load->library('form_validation');
        $this->load->model('supplier_model');
        $this->load->model('barang_model');
        $this->load->model('pengadaan_model');
        $this->load->model('supplier_model');
        // $this->load->model('pengadaan_model');
        $this->load->library('form_validation');

    }

    public function index()
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
       
        
          
        $datapengembalian['pengembalian'] = $this->pengembalian_model->getAllpengembalian();
        

        $this->load->view('templates/dashboard_header', $datapengembalian);
        $this->load->view('pengembalian/index', $datapengembalian);
        $this->load->view('templates/dashboard_footer');

    }

    public function addpengembalian()
    {  
        // $databarang['barang'] = $this->barang_model->all();
        // $datasupplier['supplier'] = $this->supplier_model->all();

        
        // $this->form_validation->set_rules('kode_barang', 'Kode barang', 'required|is_unique[data_barang.kode_barang]');
        // $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
        // $this->form_validation->set_rules('telpbarang', 'Telp barang', 'required|regex_match[/^[0-9]{11}$/]');
        // $this->form_validation->set_rules('emailbarang', 'Email barang', 'required|valid_email|is_unique[data_barang.emailbarang]');
        // $this->form_validation->set_rules('namaoutlet', 'Nama Outlet', 'required');
        // $this->form_validation->set_rules('alamatoutlet', 'Nama Outlet', 'required');
        $datapengembalian = [
            // "supplier" => $this->supplier_model->all(),
            "barang" => $this->barang_model->all(),
            "pengadaan" => $this->pengadaan_model->getAllpengembalian(),
            "supplier" => $this->supplier_model->all()
            // "pengembalian" => $this->pengembalian_model->all()     
        ];
        
        $this->load->view('templates/dashboard_header');
        $this->load->view('pengembalian/addpengembalian', $datapengembalian);
        $this->load->view('templates/dashboard_footer');
    }

    public function prosesAddPengembalian()
    {
        $this->pengembalian_model->addpengembalianPengembalian();
        // $this->pengembalian_model->addpengembalianPengembalian();

        $this->session->set_flashdata('flash', ' Ditambahkan');
        redirect('pengembalian');
    }

    public function hapuspengembalian($id_pengembalian)
    {
        $this->pengembalian_model->hapuspengembalian($id_pengembalian);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pengembalian');
    } 

    public function lihatpengembalian($id_pengembalian)
    {

        // $data['judul'] = 'Detail barang';
        $datapengembalian['pengembalian'] = $this->pengembalian_model->getPengembalianById($id_pengembalian);
        
        $this->load->view('templates/dashboard_header');
        $this->load->view('pengembalian/lihatpengembalian', $datapengembalian);
        $this->load->view('templates/dashboard_footer');

    }

    public function updatepengembalian($id_pengembalian)
    {  
        $datapengembalian = [
            "supplier" => $this->supplier_model->all(),
            "barang" => $this->barang_model->all(),
            "pengadaan" => $this->pengadaan_model->getAllpengembalian(),
            "pengembalian" => $this->pengembalian_model->getPengembalianById($id_pengembalian)

        ];
        // $data['judul'] = 'Update barang';
        // $data['pengadaan'] = $this->pengadaan_model->getPengadaanById($idpengadaan);
        // $this->form_validation->set_rules('tglpengadaan', 'Tanggal Pengadaan', 'required');
        // $this->form_validation->set_rules('jumlahbeli', 'Jumlah Beli', 'required');
        // $this->form_validation->set_rules('hargabeli', 'Harga Beli', 'required');
        // $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        // $this->form_validation->set_rules('Kode Supplier', 'Kode Supplier', 'required');
        // if ($this->form_validation->run() == false){

        $this->load->view('templates/dashboard_header');
        $this->load->view('pengembalian/updatepengembalian', $datapengembalian);
        $this->load->view('templates/dashboard_footer');    
    // }
    }

    public function prosesUpdatePengembalian()
    {
        $this->pengembalian_model->updatepengembalian();
        $this->session->set_flashdata('flash', ' Diupdate');
        redirect('pengembalian');
    }

    public function searchpengembalian()
    {
        $katakuncipengembalian = $this->input->post('katakuncipengembalian');
        $datapengembalian['pengembalian'] = $this->pengembalian_model->getCariPengembalian($katakuncipengembalian);
        $this->load->view('templates/dashboard_header');
        $this->load->view('pengembalian/index', $datapengembalian);
        $this->load->view('templates/dashboard_footer');

    }


}

?>