<?php
if(isset($_POST['submit'])){
    $snim =mysqli_real_escape_string($conn, strip_tags($_POST['nim']));
    $query = 'DELETE FROM student WHERE nim ="'.$snim.'";';
    $result= $conn->query($query);
}
?>