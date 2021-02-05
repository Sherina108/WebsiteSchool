<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Add Student Data</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
		<nav class="navbar navbar-default" style="background-color: pink">
			<div class="container-fluid">
				<div class="navbar-header">
					<h4 style="color:black;width:1110px; margin-left:550px">Add Student</h4>
				</div>
			</div>
		</nav>
	</header>
    <br/><br/>
    <div class="container" style="width: 500px;">
        <form action="index.php" method="post" name="form1">
            <div class="form-group">
                <label for='nim'>NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="NIM">
            </div>
            <div class="form-group">
                <label for='nama'>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Name">
            </div>
            <div class="form-group">
                <label for='prodi'>Prodi</label>
                <select type="text" class="form-control" name="prodi">
                    <option value="Program Studi"></option>
                    <option value="Informatika">Informatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Teknik Fisika">Teknik Fisika</option>
                </select>
            </div>
            <div class="form-group">
                <label for='email'>Email Student</label>
                <input type="text" class="form-control" name="email_student" placeholder="email">
            </div>
            <br>
            <div style="margin-left: 150px;">
                <input type='hidden' name='do' value='insert_student.php'>                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="submit" class="btn btn-outline-dark" name="loc" value="home.php">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>