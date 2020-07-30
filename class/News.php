<?php 
/*
    final class News extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('news');
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
    }*/


    final class News extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('news');
        }

        public function addData($data){
            return $this->insert($data);

        }
               
        public function getAllData($limit = 0){
            $args = array(
                'order_by' => ' productname ASC '
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
        public function getLatestContent($limit){
            $args = array(
                
                'orderby' => ' id DESC',
                'limit' => ' 0, '.$limit
            );
            return $this->select($args);
        }

        public function getCategoryNews($cat_id, $limit){
            $args = array(
                'where' => "  cat_id = ".$cat_id,
                'orderby' => ' productname DESC',
                'limit' => ' 0, '.$limit
            );
            return $this->select($args);
        }

    }
