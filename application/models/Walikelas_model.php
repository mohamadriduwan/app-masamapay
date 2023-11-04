<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walikelas_model extends CI_Model
{
    public function getPembayaran()
    {
        $query = "SELECT `data_bayar`.*, `data_sukses`.*,`user`.*
            FROM `data_bayar` RIGHT JOIN `data_sukses`
            ON `data_bayar`.`link_id` = `data_sukses`.`bill_link_id`
            LEFT JOIN `user`
            ON `data_bayar`.`nis` = `user`.`email`            
          ";
        return $this->db->query($query)->result_array();
    }
}
