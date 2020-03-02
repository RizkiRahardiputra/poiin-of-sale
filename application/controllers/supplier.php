
<?php

class supplier extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('supplier_model');
        $this->load->library('form_validation');
 
    }

   
    public function  index()
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
      
          $datasupplier['supplier']= $this->supplier_model->getAllsupplier();
    
      

        $this->load->view('templates/dashboard_header', $datasupplier);
        $this->load->view('supplier/index', $datasupplier);
        $this->load->view('templates/dashboard_footer');

    }


  
    public function addsupplier()
        {  
            if ($this->session->userdata('status') != 'login'){
                redirect(base_url('loginadmin'));
            }
            // $datasupplier['judul'] = 'Add Supplier';
            $this->form_validation->set_rules('id_supplier', 'ID Supplier', 'required|is_unique[supplier.id_supplier]');
            $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
            $this->form_validation->set_rules('telp_supplier', 'Telp Supplier', 'required|regex_match[/^[0-9]{12}$/]');
            $this->form_validation->set_rules('email_supplier', 'Email Supplier', 'valid_email|is_unique[supplier.email_supplier]');
            // $this->form_validation->set_rules('nama_supplier', 'Nama supplier', 'required');
            $this->form_validation->set_rules('alamat_supplier', 'Alamat supplier', 'required');
            if ($this->form_validation->run() == FALSE){
            $this->load->view('templates/dashboard_header');
            $this->load->view('supplier/addsupplier');
            $this->load->view('templates/dashboard_footer'); 
             
        }
        else
        {
            $this->supplier_model->addsupplierSupplier();
            $this->session->set_flashdata('flash', ' Ditambahkan');
            redirect('supplier');
        }
    }

    

    public function hapussupplier($id_supplier)
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
        $this->supplier_model->hapussupplier($id_supplier);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('supplier');
    } 

    public function lihatsupplier($id_supplier)
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
        // $datasupplier['judul'] = 'Detail Supplier';
        $datasupplier['supplier'] = $this->supplier_model->getSupplierById($id_supplier);
        $this->load->view('templates/dashboard_header', $datasupplier);
        $this->load->view('supplier/lihatsupplier', $datasupplier);
        $this->load->view('templates/dashboard_footer');

    }

    public function updatesupplier($id_supplier)
        {  
            if ($this->session->userdata('status') != 'login'){
                redirect(base_url('loginadmin'));
            }
            // $datasupplier['judul'] = 'Update Supplier';
            $datasupplier['supplier'] = $this->supplier_model->getSupplierById($id_supplier);
            $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
            $this->form_validation->set_rules('telp_supplier', 'Telp Supplier', 'required|regex_match[/^[0-9]{12}$/]');
            $this->form_validation->set_rules('email_supplier', 'Email Supplier', 'valid_email');
            // $this->form_validation->set_rules('nama_supplier', 'Nama supplier', 'required');
            $this->form_validation->set_rules('alamat_supplier', 'Alamat supplier', 'required');
            

        //     $where = array('id_supplier' => $id_supplier);
        // $datasupplier['supplier'] = $this->supplier_model->edit_data($where,'supplier')->result();
        

            if ($this->form_validation->run() == false){
            $this->load->view('templates/dashboard_header', $datasupplier);
            $this->load->view('supplier/updatesupplier', $datasupplier);
            $this->load->view('templates/dashboard_footer');    
        }
        else
        {
            $this->supplier_model->updatesupplier();
            $this->session->set_flashdata('flash', ' Diupdate');
            redirect('supplier');
        }

    }

//     function update(){
//     $id_supplier = $this->input->post('id_supplier');
//     $nama_supplier = $this->input->post('nama_supplier');
//     $telp_supplier = $this->input->post('telp_supplier');
//     $email_supplier = $this->input->post('email_supplier');
//     $nama_supplier = $this->input->post('nama_supplier');
//     $alamat_supplier = $this->input->post('alamat_supplier');
      
//     $a = $this->supplier_model->update_data($id_supplier, $nama_supplier, $telp_supplier, $email_supplier, $nama_supplier, $alamat_supplier);
//     if ($a) {
//         redirect('supplier');
//     }else {
//         echo "Gagal";
//     }
    
// }

    public function searchsupplier()
    {
        if ($this->session->userdata('status') != 'login'){
			redirect(base_url('loginadmin'));
		}
        $katakuncisupplier = $this->input->post('katakuncisupplier');
        $datasupplier['supplier'] = $this->supplier_model->getCariSupplier($katakuncisupplier);
        $this->load->view('templates/dashboard_header', $datasupplier);
        $this->load->view('supplier/index', $datasupplier);
        $this->load->view('templates/dashboard_footer');

    }

    public function  historydatasupplier()
    {
        if ($this->session->userdata('status') != 'login'){
            redirect(base_url('loginadmin'));
        }
        // $datasupplier['judul'] = 'Daftar Supplier';
        // $datasupplier ['product'] = $this->product_model->getAllproduct();
          $jumlah_historydatasupplier= $this->supplier_model->getAllhistorysupplier();
        // $datasupplier['judul'] = 'Daftar Supplier';
        
         $this->load->library('pagination');
        $config['base_url'] = base_url().'/supplier/historydatasupplier';
        $config['total_rows'] = $jumlah_historydatasupplier;
        $config['per_page'] = 4;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li class="page-item page-link">';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item page-link">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item page-link">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item page-link">';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="" class="page-link">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li class="page-item page-link">';
        $config['num_tag_close']    = '</li>';
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $historydatasupplier['historydatasupplier'] = $this->supplier_model->historydatasupplier($config['per_page'],$from);
        
        $this->load->view('templates/dashboard_header', $historydatasupplier);
        $this->load->view('supplier/historysupplier', $historydatasupplier);
        $this->load->view('templates/dashboard_footer');

    }


    
}

?>

