<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChartMask_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
    {
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['freeman'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=2 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['mediheal'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=3 AND result='positif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['emina'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['freeman2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=2 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['mediheal2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=3 AND result='negatif' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['emina2'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['freeman3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=2 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['mediheal3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=3 AND result='netral' AND NOT kategori='others' GROUP BY kategori ORDER BY kategori"); 
        $data['emina3'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['freeman4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=2 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['mediheal4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=3 AND result='positif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['emina4'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['freeman5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=2 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['mediheal5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=3 AND result='negatif' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['emina5'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['freeman6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=2 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['mediheal6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=3 AND result='netral' GROUP BY month(data_time) ORDER BY month(data_time)"); 
        $data['emina6'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
   
        $this->load->view('chart_mask', $data);
    }
}
