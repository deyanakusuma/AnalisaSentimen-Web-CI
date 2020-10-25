<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartPowder_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=9 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['innisfree'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=7 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['marcks'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=8 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['ponds'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=9 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['innisfree2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=7 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['marcks2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=8 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['ponds2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=9 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['innisfree3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=7 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['marcks3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=8 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['ponds3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=9 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['innisfree4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=7 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['marcks4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=8 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['ponds4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=9 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['innisfree5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=7 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['marcks5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=8 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['ponds5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=9 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['innisfree6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=7 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['marcks6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=8 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['ponds6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('chart_powder', $data);
    }
}
