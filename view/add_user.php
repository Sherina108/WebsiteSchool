<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Add User Data</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
		<nav class="navbar navbar-default" style="background-color:pink">
			<div class="container-fluid">
				<div class="navbar-header">
					<h4 style="color:black;width:1110px; margin-left:550px;">Add User</h4>
				</div>
			</div>
		</nav>
	</header>
    <br><br>
<div class='container'>
    <form method='post' action='index.php'>
        <div class='form-group row'>
            <label class='col-sm-3' for='email'>Email:</label>
            <div class='col-sm-6'>
                <input class='form-control' type='email' name='email'>
            </div>
        </div>
        <div class='form-group row'>
            <label class='col-sm-3' for='role'>Role:</label>
            <div class='col-sm-6'>
                <select class='form-control'  name='role'>
                    <option value="admin">Admin</option>
                    <option value="aslab">Aslab</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>
        </div>
        <div class='form-group row'>
            <label class='col-sm-3' for='password'>Password:</label>
            <div class='col-sm-6'>
                <input class='form-control' type='password' name='password'>
            </div>
        </div>
        <div class='form-group row'>
            <label class='col-sm-3' for='passconf'>Re-type Password:</label>
            <div class='col-sm-6'>
                <input class='form-control' type='password' name='passconf'>
            </div>
        </div>
        <input type='hidden' name='do' value='insert_user.php'>
        <?php
        if(isset($correct)&&!$correct){
            ?>
            <p class='text-danger'>Cek Kembali Form dan Isi Dengan Benar !!!</p>
            <?php
        }
        else if(isset($length)&&!$length){
            ?>
            <p class='text-danger'>Password Terlalu Pendek !!!</p>
            <?php
        }
        else if(isset($done)&&!$done){
            ?>
            <p class='text-danger'>Email Telah Digunakan, Silahkan Gunakan Email yang Lain</p>
        <?php } ?>
        <button type='submit' name='submit' class='btn btn-primary'>Register</button>
        <button type='submit' name='loc' value='home.php' class='btn btn-default'>Cancel</button>
    </form>
</div>
<!-- <script src='assets/jquery-3.2.1.min.js'></script> <script src='assets/bootstrap-3.3.7/dist/js/bootstrap.min.js'></script> -->
</body>
</html>