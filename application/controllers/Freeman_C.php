<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freeman_C extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Freeman_m');
        $this->load->helper('url');
    }
	public function index()
    {
        $data['opinis']  = $this->Freeman_m->get_all();
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='positif'"); 
        $data['positif'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='negatif'"); 
        $data['negatif'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);
        $query = $this->db->query("SELECT COUNT(*) as count FROM hasil_sentiment WHERE id_brand=1 AND result='netral'"); 
        $data['netral'] = json_encode(array_column($query->result(), 'count'),JSON_NUMERIC_CHECK);

        $this->load->view('freeman', $data);
    }
    public function edit($id)
    {
        $id_opini = $this->Freeman_m->get_by_id($id);
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
            redirect('Freeman_C');
        }
        $file['active_page']="Freeman_C";
        $this->load->view('freeman_detail', $file);
        /*$id_opini = $this->Freeman_m->get_by_id($id);
        $review = strtolower($id_opini->review);
        foreach($id_opini->arr_prepro as $key1=>$value1){
            foreach($value1 as $key2=>$value2){
                if($value2 != null){
                    if($value2->value == 0){
                        $review= str_replace($value2['word'], '<span class="yellow">'.$value2['word'].'</span>', $review);
                    }
                    else if($value2->value == 1){
                        $review= str_replace($value2['word'], '<span class="blue">'.$value2['word'].'</span>', $review);
                    }
                    else if($value2->value == -1){
                        $review= str_replace($value2['word'], '<span class="red">'.$value2['word'].'</span>', $review);
                    }
                }
            
            }
        }
        //$file = array_merge($id_opini, $id, $review);
        $file['active_page']="Freeman_C";
        $this->load->view('freeman_detail', $review);*/
    }
    /*public function edit($id)
    {
        $id_opini = $this->Freeman_m->get_by_id($id);
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
            redirect('Freeman_C');
        }
        $file['active_page']="Freeman_C";
        $this->load->view('freeman_detail', $file);
    }*/
    /*public function edit($id)
    {
        $opinions = opinions::find($id);
        $content = strtolower($opinions['content']);
        // dd($opinions['arr_word']);
        foreach(json_decode($opinions['role_group']) as $key1=>$value1){
            foreach($value1 as $key2=>$value2){
                if($value2 != null){
                    if($value2->value == 0.0){
                        $content= str_replace($value2->word, '<span class="yellow">'.$value2->word.'</span>', $content);
                    }
                    else if($value2->value == 1.0){
                        $content= str_replace($value2->word, '<span class="blue">'.$value2->word.'</span>', $content);
                    }
                    else if($value2->value == -1.0){
                        $content= str_replace($value2->word, '<span class="red">'.$value2->word.'</span>', $content);
                    }
                }
            
            }
        }
        return view('lihat',compact('opinions','id','content'));
    }*/
}
