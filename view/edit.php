<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Edit Student Data</title>

    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link rel='stylesheet' href='assets/bootstrap-3.3.7/dist/css/bootstrap.min.css'>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

    <style>
    .container{
        width= 50%;
    }
    </style>
</head>
<body>
    <header>
		<nav class="navbar navbar-default bg-dark">
			<div class="container-fluid">
				<div class="navbar-header">
					<h4 style="color:White;width:1110px; margin-left:550px">Edit Student</h4>
				</div>
			</div>
		</nav>
	</header>
<div class='container'>
    <br><br>
    <?php
    if(!isset($_POST['submit'])||!isset($_POST['nim']))header('Location: index.php');
    $nim=mysqli_real_escape_string($conn, strip_tags($_POST['nim']));
    $query ='SELECT * FROM student WHERE nim="'.$nim.'";';
    $result=$conn->query($query); if(!$result)header('Location: index.php');
    $row=$result->fetch_assoc();
    ?>
    
    <form method='post' action='index.php'>
        <table align="center">
            <tr>
                <td for='nim'>NIM</td>
                <td>&nbsp; : &nbsp;</td>
                <td>
                    <input class='form-control' type='hidden' name='nim' value='<?php echo $row['nim']; ?>'>
                    <input class='form-control' type='text' name='nimmask' value='<?php echo $row['nim']; ?>' disabled>
                </td>
            </tr>
            <tr>
                <td for='nama'>Nama</td>
                <td>&nbsp; : &nbsp;</td>
                <td><input class='form-control' type='text' name='nama' value='<?php echo $row['nama']; ?>'></td>
            </tr>
            <tr>
                <td for='prodi' style="width: 200px">Program Studi</td>
                <td>&nbsp; : &nbsp;</td>
                <td><input class='form-control' type='text' name='prodi' value='<?php echo $row['prodi']; ?>' style="width: 700px"></td>
            </tr>
            <tr>
                <td for='email_student'>Email</td>
                <td>&nbsp; : &nbsp;</td>
                <td><input class='form-control' type='text' name='email_student' value='<?php echo $row['email_student']; ?>'></td>
            </tr>
            <tr>
                <td>
                    <br><br>
                    <input type='hidden' name='do' value='update.php'>
                    <button type='submit' name='submit' class='btn btn-primary'>Edit Student</button>
                    <button type='submit' name='loc' value='home.php' class='btn btn-default'>Cancel</button>
                </td>
            </tr>
        </table><br><br>
    </form>
</div>
<script src='assets/jquery-3.2.1.min.js'></script>
<script src='assets/bootstrap-3.3.7/dist/js/bootstrap.min.js'></script>
</body>
</html>