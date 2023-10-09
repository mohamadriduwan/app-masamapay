<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload_model extends CI_Model
{
    public function import_datauser($dataUpload)
    {
        $jumlah = count($dataUpload);
        if ($jumlah > 0) {
            $this->db->replace('user', $dataUpload);
        }
    }
}
