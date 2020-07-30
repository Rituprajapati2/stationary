<?php
$user = new User();
if(!isset($_SESSION, $_SESSION['token']) || empty($_SESSION) || empty($_SESSION['token'])){

    if(!isset($_COOKIE, $_COOKIE['_au']) || empty($_COOKIE['_au'])){
        redirect('./','error','Please Login First');
    } else {
        $cookie_token = $_COOKIE['_au'];

        $user_info = $user->getUserByCookieToken($cookie_token);
        if(!$user_info){
            setcookie('_au','', time()-60, '/');
            redirect('./','error','Incorrect cookie value.');
        }

        $_SESSION['user_id'] = $user_info[0]->id;
        $_SESSION['name'] = $user_info[0]->name;
        $_SESSION['email'] = $user_info[0]->email;
        
        $token = generateRandomString(100);
        $_SESSION['token'] = $token;

        setcookie('_au', $token, (time()+864000), '/');
        
        $data = array(
            'remember_token' => $token
        );
        $user->updateUser($data, $user_info[0]->id);
        // setSession('success','Welcome back to admin panel.');
    }
}
