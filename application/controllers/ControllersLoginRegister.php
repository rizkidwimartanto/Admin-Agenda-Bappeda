<?php
class ControllersLoginRegister extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLoginRegister');
    }
    public function index()
    {
        $data['judul'] = "Halaman Login";
        $this->load->view('index.php', $data);
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = ['username' => $username, 'password' => md5($password)];

        $cek = $this->ModelLoginRegister->CekLogin("admin", $where)->num_rows();

        if ($cek > 0) {
            $DataSession = ['admin' => $username, 'status' => "login"];
            $this->session->set_userdata($DataSession);
            redirect('ControllersDataAgenda');
        }else{
            echo "Username dan password salah";
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('ControllersLoginRegister');
    }
}
