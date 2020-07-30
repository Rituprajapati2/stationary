<?php 
    
    final class Gallery extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('galleries');
        }

        public function addData($data){
            return $this->insert($data);

        }

        public function getAllData(){
            $args = array(
                'order_by' => ' title ASC '
            );
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
        public function getLatestGallery($limit){
            $args = array(
            
                'orderby' => ' id DESC',
                'limit' => ' 0, '.$limit
            );
            return $this->select($args);

        }
    }

