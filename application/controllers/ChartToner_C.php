<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartToner_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['hado'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=14 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['some'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=13 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['viva'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['hado2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=14 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['some2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=13 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['viva2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['hado3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=14 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['some3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=13 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['viva3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['hado4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=14 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['some4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=13 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['viva4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['hado5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=14 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['some5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=13 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['viva5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['hado6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=14 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['some6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=13 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['viva6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('chart_toner', $data);
    }
}
