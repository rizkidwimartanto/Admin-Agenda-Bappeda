<?php

class ModelDataAgenda extends CI_Model
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
        return $this->db->get('adminagendakegiatan')->result_array();
    }

    public function TampilBeberapaData($limit, $start)
    {
        return $this->db->get('adminagendakegiatan', $limit, $start)->result_array();
    }

    public function TotalData()
    {
        return $this->db->get('adminagendakegiatan')->num_rows();
    }


    public function TambahData()
    {
        $this->load->model('ModelDataAgenda');

        $data = [
            'nama_acara' => $this->input->post('nama_acara'),
            'jam_acara' => $this->input->post('jam_acara'),
            'tanggal_acara' => $this->ModelDataAgenda->tgl_indo($this->input->post('tanggal_acara')),
            'penanggung_jawab' => $this->input->post('penanggung_jawab'),
            'ruangan' => $this->input->post('ruangan')
        ];

        return $this->db->insert('adminagendakegiatan', $data);
    }

    public function HapusData($id)
    {
        return $this->db->delete('adminagendakegiatan', ['id' => $id]);
    }

    public function PilihData($id)
    {
        return $this->db->get_where('adminagendakegiatan', ['id' => $id])->row_array();
    }

    public function EditData()
    {
        $this->load->model('ModelDataAgenda');

        $data = [
            'nama_acara' => $this->input->post('nama_acara'),
            'jam_acara' => $this->input->post('jam_acara'),
            'tanggal_acara' => $this->ModelDataAgenda->tgl_indo($this->input->post('tanggal_acara')),
            'penanggung_jawab' => $this->input->post('penanggung_jawab'),
            'ruangan' => $this->input->post('ruangan')
        ];

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('adminagendakegiatan', $data);
    }

    public function CariData()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_acara', $keyword);
        $this->db->or_like('penanggung_jawab', $keyword);
        $this->db->or_like('ruangan', $keyword);
        return $this->db->get('adminagendakegiatan')->result_array();
    }
}
