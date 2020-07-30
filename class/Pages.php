<?php

final class Pages extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('pages');
        }

        public function addData($data){
            return $this->insert($data);

        }
               
        public function getAllData(){
           
            return $this->select();     
        }

        public function getDataById($id){
            $args = array(
                'where' => " id = ".$id
            );
            return $this->select($args);
        }
        public function updateData($data, $id){
            $args = array(
                'where' => " id = ".$id
            );
            $succes = $this->update($data, $args);
            if($succes){
                return $id;
            } else {
                return false;
            }
        }
        public function deleteDataById($id){
            $args = array(
                'where' => " id = ".$id
            );
            return $this->delete($args);

        }
    }
