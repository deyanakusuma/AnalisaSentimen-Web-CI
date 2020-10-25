<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartLips_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=12 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['purbasari'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=11 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['maybelline'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=10 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['wardah'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=12 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['purbasari2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=11 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['maybelline2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=10 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['wardah2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=12 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['purbasari3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=11 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['maybelline3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=10 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['wardah3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=12 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['purbasari4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=11 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['maybelline4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=10 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['wardah4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=12 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['purbasari5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=11 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['maybelline5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=10 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['wardah5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=12 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['purbasari6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=11 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['maybelline6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=10 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['wardah6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('chart_lips', $data);
    }
}
