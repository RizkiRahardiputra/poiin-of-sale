
<?php

class barang extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
        $this->load->model('supplier_model');
        $this->load->library('form_validation');
 
    }

   
    public function  index()
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
       
            $data['barang'] = $this->barang_model->getAllbarang();

        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/dashboard_footer');

    }


  
    public function addbarang()
        {  
            $datasupplier['supplier'] = $this->supplier_model->all();
            // $data['judul'] = 'Add barang';
            $this->form_validation->set_rules('kode_barang', 'Kode barang', 'required|is_unique[barang.kode_barang]'); //data_barang
            $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
            // $this->form_validation->set_rules('telpbarang', 'Telp barang', 'required|regex_match[/^[0-9]{11}$/]');
            // $this->form_validation->set_rules('emailbarang', 'Email barang', 'required|valid_email|is_unique[data_barang.emailbarang]');
            // $this->form_validation->set_rules('namaoutlet', 'Nama Outlet', 'required');
            // $this->form_validation->set_rules('alamatoutlet', 'Nama Outlet', 'required');
            if ($this->form_validation->run() == FALSE){
            $this->load->view('templates/dashboard_header');
            $this->load->view('barang/addbarang', $datasupplier);
            $this->load->view('templates/dashboard_footer'); 
             
        }
        else
        {
            $this->barang_model->addbarangBarang();
            $this->session->set_flashdata('flash', ' Ditambahkan');
            redirect('barang');
        }
    }

    

    public function hapus($kode_barang)
    {
        $this->barang_model->hapusbarang($kode_barang);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    } 

    public function lihat($kode_barang)
    {

        // $data['judul'] = 'Detail barang';
        $data['barang'] = $this->barang_model->getBarangById($kode_barang);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('barang/lihat', $data);
        $this->load->view('templates/dashboard_footer');

    }

    public function update($kode_barang)
        {  
            $datasupplier['supplier'] = $this->supplier_model->all();
            // $data['judul'] = 'Update barang';
            $data['barang'] = $this->barang_model->getBarangById($kode_barang);
            $this->form_validation->set_rules('nama_barang', 'Nama barang', 'required');
            
        //     $where = array('kode_barang' => $kode_barang);
        // $data['barang'] = $this->barang_model->edit_data($where,'data_barang')->result();
            

        if ($this->form_validation->run() == false){

            $this->load->view('templates/dashboard_header', $data);
            $this->load->view('barang/update', $data, $datasupplier);
            $this->load->view('templates/dashboard_footer');    
        }
        else
        {
            $this->barang_model->updatebarang();
            $this->session->set_flashdata('flash', ' Diupdate');
            redirect('barang');
        }

    }

//     function update(){
//     $kode_barang = $this->input->post('kode_barang');
//     $nama_barang = $this->input->post('nama_barang');
//     $telpbarang = $this->input->post('telpbarang');
//     $emailbarang = $this->input->post('emailbarang');
//     $namaoutlet = $this->input->post('namaoutlet');
//     $alamatoutlet = $this->input->post('alamatoutlet');
      
//     $a = $this->barang_model->update_data($kode_barang, $nama_barang, $telpbarang, $emailbarang, $namaoutlet, $alamatoutlet);
//     if ($a) {
//         redirect('barang');
//     }else {
//         echo "Gagal";
//     }
    
// }

    public function search()
    {
        $katakuncibarang = $this->input->post('katakuncibarang');
        $data['barang'] = $this->barang_model->getCaribarang($katakuncibarang);
        $this->load->view('templates/dashboard_header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/dashboard_footer');

    }


    
}

?>

