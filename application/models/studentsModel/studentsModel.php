<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentsModel extends CI_Model {

        public function insert($data){
           	$this->db->insert('alunos', $data);
        }

        public function load(){
        	$query = "SELECT * FROM alunos";
        	if(!$this->db->query($query)->result()){
        		
        	}else{
            return $this->db->query($query)->result();           
        	}
        }

        public function delete($id = null){
        	$this->db->delete('alunos', array('id' => $id));
        }
}