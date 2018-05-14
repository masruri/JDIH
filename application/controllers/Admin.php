<?php 

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// menload otomatis login model
		$this->load->model('admin_login_model','',true);
		$this->load->model('produkhukum_model', 'mproduk', TRUE);	
	}

	public function index()
	{
		$data['title'] = 'Login Admin';
		$this->load->view('tempadmin/form_login', $data);
	}

	public function login_validasi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			// modul function
			
			if ($this->admin_login_model->can_login($username, $password)) 
			{
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url(). 'admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid Username and password');
				redirect(base_url(). 'admin');
			}
		} else {
			$this->index();
		}
	}

	public function dashboard()
	{
		if ($this->session->userdata('username') != '') {
			// echo "<h2> welcome</h2> -" .$this->session->userdata('username')."</h2>";
			$data['title'] = 'Dashboard'; 
			$data['jenis']= "Home";
			$data['query'] = $this->mproduk->tampil();
			$this->load->view('tempadmin/template', $data);
		} 
		else {
			redirect(base_url().'admin');
		}
	}

	public function proses()
	{
		if ($this->input->post('Simpan')) {
            $this->mproduk->simpan_produkhukum();
        redirect('admin/dashboard');
        } 
        else if($this->input->post('Edit')){
            $this->mproduk->ubah();
            redirect('admin/dashboard');
        }
	}

	function logout() 
	{
		$this->session->unset_userdata('username');
		redirect(base_url().'admin');
	}

}
?>