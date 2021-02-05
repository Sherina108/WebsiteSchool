<?php
    if(isset($_POST['loc']))$loc=$_POST['loc'];
    else $loc='home.php';
    include 'include/db_conn.php';
    include 'model/user.php';
    include 'model/datatable.php';
    if(isset($_POST['do']))include 'controller/'.$_POST['do'];
    include 'view/'.$loc;
    include 'include/db_disconn.php';
?>