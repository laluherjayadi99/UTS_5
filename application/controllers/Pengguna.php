<?php
class Pengguna extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('Pengguna_model');
		$this->load->helper('url');
 
	}
    public function index(){
        $this->load->model('Pengguna_model');
        $data['judul']='Pengguna';
        $data['pengguna']=$this->Pengguna_model->getAllPengguna();
        $this->load->view('templates/header',$data);
        $this->load->view('pengguna/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['judul']='form input';
        $this->load->view('templates/header',$data);
        $this->load->view('pengguna/tambah');  
        $this->load->view('templates/footer');
        }
    public function tambah_aksi(){

        $nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
        $photo = $this->input->post('photo'); 
        
		$data = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'level' => $level,
			'photo' => $photo
			);
		$this->Pengguna_model->input_data($data,'pengguna');
		redirect('pengguna');
    }
    public function hapus($id){
        $this->load->model('Pengguna_model');
        $this->Pengguna_model->hapusDataPengguna($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengguna/index');
    }
    function edit($id){
        $this->load->view('templates/header');
        $where = array('id' => $id);
        $data['pengguna'] = $this->Pengguna_model->edit_data($where,'pengguna')->result();
        $this->load->view('pengguna/edit',$data);
        $this->load->view('templates/footer');
    }
    public function update(){
        $id = $this->input->post('id');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $photo = $this->input->post('photo');
     
        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'level' => $level,
            'photo' => $photo
        );
     
        $where = array(
            'id' => $id
        );
     
        $this->Pengguna_model->update_data($where,$data,'pengguna');
        redirect('pengguna/index');
    }
}