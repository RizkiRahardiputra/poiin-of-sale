<?php 

class loginadmin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('loginadmin_model');
        $this->load->library('form_validation');

	}

	function index(){
		$this->load->view('login/loginadmin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->loginadmin_model->cek_login("akun",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("supplier"));

		}
		else{
			$this->session->set_flashdata('message', '
            <div class="alert alert-block alert-danger"></i></button>
            <i class="ace-icon fa fa-bullhorn green"></i> Cek kembali. Username atau Password Anda Salah 
			</div>');
			
			redirect('loginadmin');
			
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginadmin'));
	}

	public function register()
	{  
		// $datasupplier['judul'] = 'Add Supplier';
		$this->form_validation->set_rules('id', 'ID Pengelola', 'required|is_unique[akun.id]');
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
		// $this->form_validation->set_rules('telpsupplier', 'Telp Supplier', 'required|regex_match[/^[0-9]{12}$/]');
		// $this->form_validation->set_rules('emailsupplier', 'Email Supplier', 'required|valid_email|is_unique[data_supplier.emailsupplier]');
		// $this->form_validation->set_rules('namaoutlet', 'Nama Outlet', 'required');
		// $this->form_validation->set_rules('alamatoutlet', 'Nama Outlet', 'required');
		if ($this->form_validation->run() == FALSE){
		
		$this->load->view('login/register');
		
		 
	}
	else
	{
		$this->loginadmin_model->addpengelolaPengelola();
		$this->session->set_flashdata('flash', ' Ditambahkan');
		redirect('loginadmin');
	}
  
	}
}