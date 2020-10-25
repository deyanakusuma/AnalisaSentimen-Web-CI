<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Maybelline_m extends CI_Model{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_all()
  {
    $sql = "SELECT h.id, h.review, h.prepro, h.result, h.kategori, h.data_time, h.arr_prepro
            FROM hasil_sentiment h
            INNER JOIN brand b ON h.id_brand = b.id
            WHERE h.id_brand = 11";
    return $this->db->query($sql)->result();
  }
  public function get_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('hasil_sentiment')->row();
  }
  public function get_table()
  {
        $this->db->select('*');
        $this->db->from('hasil_sentiment');
        $result = $this->db->get();
        return $result->result();
  }
}