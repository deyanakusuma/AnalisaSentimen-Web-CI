<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartSabun_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=5 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['acnes'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=4 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['cleanclear'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=6 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['cetaphil'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=5 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['acnes2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=4 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['cleanclear2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=6 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['cetaphil2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=5 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['acnes3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=4 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['cleanclear3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=6 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['cetaphil3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=5 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['acnes4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=4 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['cleanclear4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=6 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['cetaphil4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=5 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['acnes5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=4 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['cleanclear5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=6 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['cetaphil5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=5 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['acnes6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=4 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['cleanclear6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=6 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['cetaphil6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('chart_sabun', $data);
    }
}
