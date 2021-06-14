<?php

class ModelKehadiran extends CI_Model
{
    public function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
    public function TampilData()
    {
        return $this->db->get('kehadirankerja')->result_array();
    }

    public function TampilBeberapaData($limit, $start)
    {
        return $this->db->get('kehadirankerja', $limit, $start)->result_array();
    }

    public function TotalData()
    {
        return $this->db->get('kehadirankerja')->num_rows();
    }


    public function TambahData()
    {
        $this->load->model('ModelKehadiran');

        $data = [
            'kepala' => $this->input->post('kepala'),
            'sekretariat' => $this->input->post('sekretariat'),
            'kepala_bidang_ekonomi' => $this->input->post('kepala_bidang_ekonomi'),
            'tanggal' => $this->ModelKehadiran->tgl_indo($this->input->post('tanggal'))
        ];

        return $this->db->insert('kehadirankerja', $data);
    }

    public function HapusData($id)
    {
        return $this->db->delete('kehadirankerja', ['id' => $id]);
    }

    public function PilihData($id)
    {
        return $this->db->get_where('kehadirankerja', ['id' => $id])->row_array();
    }

    public function EditData()
    {
        $this->load->model('ModelKehadiran');

        $data = [
            'kepala' => $this->input->post('kepala'),
            'sekretariat' => $this->input->post('sekretariat'),
            'kepala_bidang_ekonomi' => $this->input->post('kepala_bidang_ekonomi'),
            'tanggal' => $this->ModelKehadiran->tgl_indo($this->input->post('tanggal'))
        ];

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('kehadirankerja', $data);
    }

    // public function CariData()
    // {
    //     $keyword = $this->input->post('keyword');
    //     $this->db->like('kepala', $keyword);
    //     $this->db->or_like('penanggung_jawab', $keyword);
    //     $this->db->or_like('ruangan', $keyword);
    //     return $this->db->get('kehadirankerja')->result_array();
    // }
}
