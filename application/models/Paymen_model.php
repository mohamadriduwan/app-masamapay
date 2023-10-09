<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paymen_model extends CI_Model
{
    public function hitungJumlahPending()
    {
        $query = $this->db->get_where('data_bayar', ['nis' => $this->session->userdata('email'), 'bill_payment_status' => 'PENDING']);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungJumlahSukses()
    {
        $query = $this->db->get_where('data_bayar', ['nis' => $this->session->userdata('email'), 'bill_payment_status' => 'SUCCESSFUL']);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungJumlahSeluruh()
    {
        $query = $this->db->get_where('data_bayar', ['nis' => $this->session->userdata('email')]);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
