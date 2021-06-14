<?php

class ModelLoginRegister extends CI_Model
{
    public function CekLogin($tabel, $where)
    {
        return $this->db->get_where($tabel, $where);
    }
}
