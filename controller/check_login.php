<?php
    $valid;
    $admin;
    $aslab;
    $mahasiswa;
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($conn, strip_tags($_POST['email']));
        $password=mysqli_real_escape_string($conn, strip_tags($_POST['password']));
        $query = 'SELECT * FROM user WHERE email_user="'.$email.'";';
        $result= $conn->query($query);
        if($result!=false){
            $match = $result->fetch_assoc();
            $user=new User($match['email_user'],$match['role'],$match['password']);
            if(strtolower($user->getpassword())==strtolower(md5($password)))$valid=true;
            else $valid=false;
            if($user->getrole()==1){
                $admin=true;
            }
            else if($user->getrole()==2){
                $aslab=true;
            }
            else if($user->getrole()==3){
                $mahasiswa=true;
            }
            session_start();
            $_SESSION['email_user'] = $user->getemail();
        }
        else $valid=false;
    }
?>