<?php
    final class User extends Database{
        //final = no inheritance(couldnot extends to other files)
        public function __construct()
        {
            parent::__construct();
            $this->table('users');
           // $this->table('customeruser');
        }

       
        public function getUserByEmail($email){
            $args = array(
                //'fields' => 'name, password, status, role',
                'where' => " email = '".$email."'"
            );
            return $this->select($args);
        }

        public function getUserByCookieToken($token){
            $args = array(
                // 'fields' => 'name, password, status, role',
                'where' => " remember_token = '".$token."'"
            );
            return $this->select($args);
        }

        public function updateUser($data, $user_id){                  //login.php my upadte user cha where use  gareko vaneko chuttai user table cha so user.php ma function create garnney
            $args = array(
                'where' => 'id = '.$user_id
            );

            return $this->update($data, $args);
        }
    }
