<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HadoLabo_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('HadoLabo_m');
        $this->load->helper('url');
    }
	public function index()
    {
        $data['opinis']  = $this->HadoLabo_m->get_all();
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='positif'"); 
        $data['positif'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='negatif'"); 
        $data['negatif'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=15 AND result='netral'"); 
        $data['netral'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);

        $this->load->view('hadolabo', $data);
    }
    public function edit($id)
    {
        $id_opini = $this->HadoLabo_m->get_by_id($id);
        $id_opini->arr_prepro = json_decode($id_opini->arr_prepro, true);
        if ($id_opini) {
            $file = array(
                    'review' => set_value('review', $id_opini->review),
                    'prepro' => set_value('prepro', $id_opini->prepro),
                    'score' => set_value('score', $id_opini->score),
                    'result' => set_value('result', $id_opini->result),
                    'kategori' => set_value('kategori', $id_opini->kategori),
                    'arr_prepro' => set_value('arr_prepro', $id_opini->arr_prepro),
                    'data_time' => set_value('data_time', $id_opini->data_time)
            );
        } else {
            redirect('HadoLabo_C');
        }
        $file['active_page']="HadoLabo_C";
        $this->load->view('hadolabo_detail', $file);
    }
}
