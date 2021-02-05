<?php
    if(isset($_POST['submit'])){
        $snim =mysqli_real_escape_string($conn, strip_tags($_POST['nim']));
        $snama =mysqli_real_escape_string($conn, strip_tags($_POST['nama']));
        $sprodi =mysqli_real_escape_string($conn, strip_tags($_POST['prodi']));
        $email_student=mysqli_real_escape_string($conn, strip_tags($_POST['email_student']));
        $query = 'UPDATE student SET nim="'.$snim.'", nama="'.$snama.'", prodi="'.$sprodi.'", email_student="'.$email_student.'" WHERE nim="'.$snim.'";';
        $result= $conn->query($query);
    }
?>