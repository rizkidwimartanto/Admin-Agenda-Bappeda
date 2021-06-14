<?php
class ControllersKehadiran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKehadiran');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $data['judul'] = "Kehadiran Bappeda";

        $config['base_url'] = base_url() . 'ControllersKehadiran/index/';
        $config['total_rows'] = $this->ModelKehadiran->TotalData();
        $config['per_page'] = 5;
        $config['num_link'] = 5;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</nav></ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['pref_link'] = '<';
        $config['pref_tag_open'] = '<li class="page-item">';
        $config['pref_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['DataKehadiran'] = $this->ModelKehadiran->TampilBeberapaData($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['DataKehadiran'] = $this->ModelKehadiran->CariData();
            $this->session->set_tempdata('flashcari', 'Data Tidak Ditemukan', 0);
        }

        $this->load->view('headerfooter/header.php', $data);
        $this->load->view('DataKehadiran.php', $data);
        $this->load->view('headerfooter/footer.php');
    }

    public function FormTambah()
    {
        $data['judul'] = "Form Tambah Kehadiran";
        $this->load->view('headerfooter/header.php', $data);
        $this->load->view('Form/FormTambahKehadiran.php');
        $this->load->view('headerfooter/footer.php');
    }

    public function TambahData()
    {
        $data['DataKehadiran'] = $this->ModelKehadiran->TampilData();
        $query = $this->ModelKehadiran->TambahData();
        if ($query) {
            $this->session->set_tempdata('flash', 'Berhasil Ditambah', 0);
            redirect('ControllersKehadiran');
        } else {
            $this->session->set_tempdata('flash', 'Gagal Ditambah', 0);
            redirect('Controllers/FormTambah');
        }
    }

    public function HapusData($id)
    {
        $query = $this->ModelKehadiran->HapusData($id);
        if ($query) {
            $this->session->set_tempdata('flash', 'Berhasil Dihapus', 0);
            redirect('ControllersKehadiran');
        } else {
            $this->session->set_tempdata('flash', 'Gagal Dihapus', 0);
            redirect('ControllersKehadiran');
        }
    }

    public function PilihData($id)
    {
        $data['judul'] = "Form Update Kehadiran";
        $data['IdKehadiran'] = $id;
        $data['DataKehadiran'] = $this->ModelKehadiran->PilihData($id);
        $this->load->view('headerfooter/header.php', $data);
        $this->load->view('Form/FormUpdateKehadiran.php', $data);
        $this->load->view('headerfooter/footer.php');
    }

    public function EditData($id)
    {
        $data['judul'] = "Form Update";
        $data['IdAgenda'] = $id;
        $data['DataKehadiran'] = $this->ModelKehadiran->PilihData($id);
        $query = $this->ModelKehadiran->EditData();

        if ($query) {
            $this->session->set_tempdata('flash', 'Berhasil Diupdate', 0);
            redirect('ControllersKehadiran');
        } else {
            $this->load->view('headerfooter/header.php', $data);
            $this->load->view('Form/FormUpdateKehadiran.php', $data);
            $this->load->view('headerfooter/footer.php');
        }
    }

}
