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

        public function update($id){
            $this->db->set('*');
            $this->db->where('id', $id);
            $this->db->update('alunos');
        }

        public function loadById ($id){
            $query = "SELECT * FROM alunos WHERE id = ".$id;
            if(!$this->db->query($query)->result()){

            }else{
                return $this->db->query($query)->result();
            }
        }
}