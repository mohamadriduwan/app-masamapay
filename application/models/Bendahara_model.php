<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bendahara_model extends CI_Model
{
  public function Pembayaran()
  {
    $query = "SELECT `data_bayar`.*, `data_sukses`.*,`data_tercatat`.*, `data_sukses`.`id_flip` AS `ds.id_flip`
        FROM `data_bayar` RIGHT JOIN `data_sukses`
        ON `data_bayar`.`link_id` = `data_sukses`.`bill_link_id`
        LEFT JOIN `data_tercatat`
        ON `data_bayar`.`link_id` = `data_tercatat`.`link_id`
        ORDER BY waktu_tercatat DESC
      ";
    return $this->db->query($query)->result_array();
  }
}
