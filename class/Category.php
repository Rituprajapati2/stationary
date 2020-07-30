<?php 

    final class Category extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('products');
        }

        public function addData($data){
            return $this->insert($data);

        }
               
        public function getAllData($limit = 0){
            $args = array(
                'order_by' => ' id ASC '
            );
            if($limit != 0){
                $args['limit'] = " 0, ".$limit;
            }
            return $this->select($args);     
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