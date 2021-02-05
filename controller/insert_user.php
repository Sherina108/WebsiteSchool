<?php
    $filled;
    $length;
    $registered;
    if(isset($_POST['submit'])){
        $email=mysqli_real_escape_string($conn, strip_tags($_POST['email']));
        $role =mysqli_real_escape_string($conn, strip_tags($_POST['role']));
        $password=mysqli_real_escape_string($conn, strip_tags($_POST['password']));
        $passconf=mysqli_real_escape_string($conn, strip_tags($_POST['passconf']));
        $query = 'SELECT * FROM user WHERE email_user="'.$email.'";';
        $result= $conn->query($query);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $loc='add_user.php';
            $registred = false;
        }
        else if($email!==''&&$password==$passconf&&$role!==''){
            if(strlen($password)>=6){
                if($role=='admin'){
                    $query = 'INSERT INTO user VALUES("'.$email.'","1", "'.md5($password).'");';
                    $result= $conn->query($query);
                }
                else if($role=='aslab'){
                    $query = 'INSERT INTO user VALUES("'.$email.'","2", "'.md5($password).'");';
                    $result= $conn->query($query);
                }
                else{
                    $query = 'INSERT INTO user VALUES("'.$email.'","3", "'.md5($password).'");';
                    $result= $conn->query($query);
                }
            } else{
                $loc='add_user.php';
                $length = false;
            }
        }
        else{
            $loc='add_user.php';
            $filled = false;
        }
    }
?>