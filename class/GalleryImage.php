<?php 
    class GalleryImage extends Database{
        public function __construct()
        {
            parent::__construct();
            $this->table('gallery_images');
        }

        public function addData($data){
            return $this->insert($data);
        }
        public function getDataByParentId($id){
            $args = array(
                'where' => " gallery_id = ".$id
            );
            return $this->select($args);
        }
        public function deleteImages($ids){
            $args = array(
                'where' => " id IN (".implode(',', $ids).")"
            );
            return $this->delete($args);    
            // DELETE FROM table WHERE id IN (1,2,3);
            // DELETE FROM table WHERE id = 1 OR id = 2 OR id = 3
        }
        



       
    }
