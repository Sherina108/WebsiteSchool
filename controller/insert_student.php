<?php
    if(isset($_POST['submit'])){
        $snim =mysqli_real_escape_string($conn, strip_tags($_POST['nim']));
        $snama =mysqli_real_escape_string($conn, strip_tags($_POST['nama']));
        $sprodi =mysqli_real_escape_string($conn, strip_tags($_POST['prodi']));
        $semail =mysqli_real_escape_string($conn, strip_tags($_POST['email_student']));
        $query = 'INSERT INTO student VALUES("'.$snim.'", "'.$snama.'", "'.$sprodi.'", "'.$semail.'");';
        $result= $conn->query($query);
    }
?>