<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentModel extends CI_Model {

        public function insert($data){
          	$this->db->insert('alunos', $data);
        }

        public function load(){
            return $this->db->get('alunos');            
        }

        public function delete($id){
        	$this->db->delete('alunos', array('id' => $id));
        }
}