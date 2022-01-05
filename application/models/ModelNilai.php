<?php

class ModelNilai extends CI_Model
{
    public function get_nilai(){
        $query = $this->db->get('nilai');
        return $query->result();
    }

    public function get_nilai_byid($NIS){
        $this->db->where('NIS', $NIS);
        $query = $this->db->get('nilai');
        return $query->row();
    }

    public function post_nilai($data){
        return $this->db->insert('nilai', $data);
    }

    public function put_nilai($NIS, $data){
        $this->db->where('NIS', $NIS);
        return $this->db->update('nilai', $data);
    }

    public function del_nilai($NIS){
        return $this->db->delete('nilai', ['NIS'=>$NIS]);
    }
}

?>