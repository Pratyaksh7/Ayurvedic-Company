<?php

class AyurvedicsModel extends CI_Model {

    public function display_homepage_content()
    {
        $q = $this->db->select()
                    ->from('homes')
                    ->get();
        return $q->row();
    }   
}