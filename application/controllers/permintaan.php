
<?php

class permintaan extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('pengadaan_model');
        $this->load->model('supplier_model');
        $this->load->model('barang_model');
        $this->load->model('permintaan_model');
        // $this->load->model('pengelola_model');
        $this->load->library('form_validation');
 
    }

    public function  index()

    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
      
       
        $data['permintaan']= $this->permintaan_model->getAllpermintaan();
        
        

        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('permintaan/index', $data);
        $this->load->view('templates/dashboard_footer');
        


    }


  
    public function addpermintaan()
        {  
            // $databarang['barang'] = $this->barang_model->all();
            // $datasupplier['supplier'] = $this->supplier_model->all();

           
            
            // $this->form_validation->set_rules('kode_barang', 'Kode barang', 'required|is_unique[data_barang.kode_barang]');
            // $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
            // $this->form_validation->set_rules('telpbarang', 'Telp barang', 'required|regex_match[/^[0-9]{11}$/]');
            // $this->form_validation->set_rules('emailbarang', 'Email barang', 'required|valid_email|is_unique[data_barang.emailbarang]');
            // $this->form_validation->set_rules('namaoutlet', 'Nama Outlet', 'required');
            // $this->form_validation->set_rules('alamatoutlet', 'Nama Outlet', 'required');
            $datapermintaan = [
                "supplier" => $this->supplier_model->all(),
                "barang" => $this->barang_model->all()    
            ];
            $this->load->view('templates/dashboard_header');
            $this->load->view('permintaan/addpermintaan
            ', $datapermintaan);
            $this->load->view('templates/dashboard_footer');
    }

    public function prosesAddPermintaan()
    {
        $this->pengadaan_model->addpengadaanPermintaan();
        $this->session->set_flashdata('flash', ' Ditambahkan');
        redirect('permintaan');
    }

    

    public function hapuspermintaan($id_permintaan)
    {
        $this->permintaan_model->hapuspermintaan($id_permintaan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('permintaan');
    } 

    public function lihatpermintaan($id_permintaan)
    {

        // $data['judul'] = 'Detail barang';
        $datapermintaan['permintaan'] = $this->permintaan_model->getPermintaanById($id_permintaan);
        
        $this->load->view('templates/dashboard_header');
        $this->load->view('permintaan/lihatpermintaan', $datapermintaan);
        $this->load->view('templates/dashboard_footer');

    }

   public function updatepermintaan($id_permintaan)
        {  
            $datapermintaan = [

                "supplier" => $this->supplier_model->all(),
                "barang" => $this->barang_model->all(),
                "permintaan" => $this->permintaan_model->getPermintaanById($id_permintaan)

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
            $this->load->view('permintaan/updatepermintaan', $datapermintaan);
            $this->load->view('templates/dashboard_footer');    
        // }
       

    }

    public function prosesUpdatePermintaan()
    {
        $this->permintaan_model->updatepermintaan();
        $this->session->set_flashdata('flash', ' Diupdate');
        redirect('permintaan');
    }

    public function searchpermintaan()
    {
        $katakuncipermintaan = $this->input->post('katakuncipermintaan');
        $datapermintaan['permintaan'] = $this->penrmintaan_model->getCaripermintaan($katakuncipermintaan);
        $this->load->view('templates/dashboard_header');
        $this->load->view('permintaan/index', $datapermintaan);
        $this->load->view('templates/dashboard_footer');

    }


    
}

?>

