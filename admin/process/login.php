<?php
    require '../../config/init.php';
    $user = new User();


    if(isset($_POST) && !empty($_POST)){
        $email = filter_var($_POST['username'], FILTER_VALIDATE_EMAIL); // false or email text@text //hunnu parney email text@text
        
        if(!$email){
            redirect('../','error','Invalid email address');
        }

        $password = sha1($email.$_POST['password']);//username with password are done in database for encryption....now for the datase connection ma cha ki nae check we have to go in class(model) folder

        $user_info = $user->getUserByemail($email);
        // debug($_POST);
        // echo $password;
        // debug($user_info, true);

        if($user_info){
            if($password == $user_info[0]->password){
                $_SESSION['user_id'] = $user_info[0]->id;
                $_SESSION['name'] = $user_info[0]->name;
                $_SESSION['email'] = $user_info[0]->email;
                
                //for the remember me..token are written on session database and cookie
                //token ko datatbase ni create garney name as remember_token vanerw
                $token = generateRandomString(100);
                $_SESSION['token'] = $token;

                if(isset($_POST, $_POST['remember_me'])){
                    setcookie('_au', $token, (time()+864000), '/');//au-authorizes users,10 days,path admin vamd abahirw directory ley use garnna paunne
                    $data = array(             //remember _token ko data
                        'remember_token' => $token
                    );
                    $user->updateUser($data, $user_info[0]->id);//kun user ho.. so tesko user_info(whole array vitra ko id choosing)
                }
                redirect('../dashboard.php', 'success', 'Welcome to admin panel!');                
            }  else {
                redirect('../', 'error', 'Password does not match.');
            }
        } else {
            redirect('../', 'error', 'Invalid user name.');
        }
    } else {
        redirect('../', 'error', 'Please Login First');
    }
