
<?php

class pengadaan extends CI_Controller
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
      
        
        $data['pengadaan'] = $this->pengadaan_model->getAllpengadaan();
        

        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('pengadaan/index', $data);
        $this->load->view('templates/dashboard_footer');
        


    }


  
    public function addpengadaan()
        {  
            
            $datapengadaan = [
                "supplier" => $this->supplier_model->all(),
                "barang" => $this->barang_model->all(),
                "permintaan" => $this->permintaan_model->all()    
    
            ];
            $this->load->view('templates/dashboard_header');
            $this->load->view('pengadaan/addpengadaan', $datapengadaan);
            $this->load->view('templates/dashboard_footer');
    }

    public function prosesAddPengadaan()
    {
        $this->pengadaan_model->addpengadaanPengadaan();
        $this->session->set_flashdata('flash', ' Ditambahkan');
        redirect('pengadaan');
    }

    

    public function hapuspengadaan($kodepengadaan)
    {
        $this->pengadaan_model->hapuspengadaan($kodepengadaan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pengadaan');
    } 

    public function lihatpengadaan($kodepengadaan)
    {

        $datapengadaan['pengadaan'] = $this->pengadaan_model->getPengadaanById($kodepengadaan);
        
        $this->load->view('templates/dashboard_header');
        $this->load->view('pengadaan/lihatpengadaan', $datapengadaan);
        $this->load->view('templates/dashboard_footer');

    }

   public function updatepengadaan($idpengadaan)
        {  
            $datapengadaan = [

                "supplier" => $this->supplier_model->all(),
                "barang" => $this->barang_model->all(),
                "permintaan" => $this->permintaan_model->all(),
                "pengadaan" => $this->pengadaan_model->getPengadaanById($idpengadaan)

            ];
          

            $this->load->view('templates/dashboard_header');
            $this->load->view('pengadaan/updatepengadaan', $datapengadaan);
            $this->load->view('templates/dashboard_footer');    

    }

    public function prosesUpdatePengadaan()
    {
        $this->pengadaan_model->updatepengadaan();
        $this->session->set_flashdata('flash', ' Diupdate');
        redirect('pengadaan');
    }

    public function searchpengadaan()
    {
        $katakuncipengadaan = $this->input->post('katakuncipengadaan');
        $datapengadaan['pengadaan'] = $this->pengadaan_model->getCaripengadaan($katakuncipengadaan);
        $this->load->view('templates/dashboard_header');
        $this->load->view('pengadaan/index', $datapengadaan);
        $this->load->view('templates/dashboard_footer');

    }


    
}

?>

