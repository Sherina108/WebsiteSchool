<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Data</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="../assets/jquery/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <style>
    .button1{
        color : blue;
        background-color:white;
        border: 0;
        padding : 0;
    }
    .button2{
        color : black;
        background-color:transparent;
        border: 0;
        margin-top : 5px;
        padding : 11px;
    }
    .button2:hover{
        color : darkgray;
        background-color:transparent;
        border: 0;
        margin-top : 5px;
        padding : 11px;
    }
    .button3{
        color : black;
        background-color:transparent;
        border: 0;
        margin-top : 8px;
        padding : 11px;
    }
    .button3:hover{
        color : darkgray;
        background-color:transparent;
        border: 0;
        margin-top : 5px;
        padding : 11px;
    }
    .button4{
        color : black;
        background-color:transparent;
        border: 0;
        margin-top : 1px;
        padding : 11px;
    }
    .button4:hover{
        color : darkgray;
        background-color:transparent;
        border: 0;
        margin-top : 5px;
        padding : 11px;
    }
    .login1{
        background-color:pink;
    }
    .modal-login{
        width:350px;
    }
    .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -50px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #70c5c0;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.avatar img {
		width: 100%;
	}	
    </style>
</head>
<body>
<?php
    if(isset($valid)&&$valid){
?>
<div class="modal fade" id="deletemodal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign out</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to sign out?</p>
            </div>
            <div class="modal-footer">
                <button class='btn btn-danger' style="float:left;" onclick="window.location.href ='';">Yes<?php session_destroy()?></button>
                <button class="btn btn-default" style="float:left;" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- <header> -->
            <!-- <div class="navbar-header">
                <a class="navbar-brand" style="color:white"><?php echo $_SESSION['email_user'];?></a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="#"><span>Home</span></a></li>
                    <li>
                        <form action='index.php' method='post'>
                            <input type='hidden' name='loc' value='view/about.php'><span> About</span></a>
                        </form>
                    </li>
                    <li><a data-toggle="modal" data-target="#deletemodal"><span class="fas fa-sign-out-alt"></span> Sign Out</a></li>
                </ul>
        </div>
    </nav> -->

    <nav class="navbar " role='navigation' style="background: #70c5c0">
        <div class='container-fluid'>
            <form class="form-inline">
            <div class='navbar-header col-3'>
                <a class='navbar-brand' style="color:black; margin-top:2px">
                    <?php
                        $file = "SELECT nama_role FROM role as ro join user as usr on (usr.role = ro.role_id) 
                            where usr.email_user = '".$_SESSION['email_user']."' group by ro.role_id;";
                        $f = $conn->query($file);
                        while ($row = $f->fetch_assoc()) {
                            echo "Welcome, ".$row['nama_role'];
                        }
                    ?>
                </a>
            </div>                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form method='post' action='index.php'>
                            <!-- <a  class='btn btn-outline-info' style='padding: 10px; margin:3px' href="#">Home</a> -->
                            <input type='hidden' name='loc' value='home.php'>
                            <button type='submit' class='button2'>Home</button>
                        </form>
                        </li>
                    <li>
                        <form method='post' action='index.php'>
                            <input type='hidden' name='loc' value='about.php'>
                            <button type='submit' class="button2">About Me</button>
                        <!-- </form> -->
                        <!-- <a class="active" href="view/about.php">About</a> -->
                    </li>
                    <li><a class='button4 fas fa-sign-out-alt' data-toggle="modal" data-target="#deletemodal">Log Out</a></li>
                </ul>
            </form>
        </div>
    </nav>

    <!-- <header id="header" class="dark">
		<div class="container main-menu">
            <div class="navbar-header">
                <a class="navbar-brand" style="color:white"><?php echo $_SESSION['email_user'];?></a>
            </div>
			<div class="row align-items-center d-flex">
				<nav id="nav-menu-container" class="ml-auto">
					<ul class="nav-menu white">
						<li class=""><a href="index.php">Home</a></li>
						<li><a class="active" href="view/about.php">About</a></li>
						<li><a data-toggle="modal" data-target="#deletemodal"><span class="fas fa-sign-out-alt"></span> Sign Out</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header> -->
<!-- </header> -->

<div class='container'>
    <br><br>
    <?php
        if(isset($admin)&&$admin){
    ?>
        <form method='post' action='index.php'>
            <input type='hidden' name='loc' value='add_student.php'>
            <button class="btn btn-primary" type='submit' name='submit' style="float: right"><a class="fas fa-plus" style="color: white"> Student</a></button><br><br>
        </form> <br> <br>
    <?php } 
    ?>
    
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Email</th>
            <?php if(isset($admin)&&$admin || isset($aslab)&&$aslab){ ?>
                <th></th>
            <?php } ?>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM student;";
            $result=$conn->query($query);
            $students=array();
            foreach($result as $row){
                array_push($students, new Student($row['nim'],$row['nama'],$row['prodi'],$row['email_student']));
            }
            foreach($students as $row){
                echo "<tr>";
                echo "<td>".$row->getnim() ."</td>";
                echo "<td>".$row->getnama() ."</td>";
                echo "<td>".$row->getprodi() ."</td>";
                echo "<td>".$row->getemail() ."</td>";
                if(isset($admin)&&$admin){
                    echo "<td>";
                    echo "<div class='col-sm-3'>";
                    echo "<form method='post' action='index.php'>";
                    echo "<input type='hidden' name='nim' value='".$row->getnim()."'>";
                    echo "<input type='hidden' name='loc' value='edit.php'>";
                    echo "<button type='submit' name='submit'class='fas fa-edit' style='color:black;background-color: transparent; border:0px;'></button>";
                    echo "</form>";
                    echo "</div>";
                    echo "<div class='col-sm-3'>";
                    echo "<form method='post' action='index.php'>";
                    echo "<input type='hidden' name='nim' value='".$row->getnim()."'>";
                    echo "<input type='hidden' name='do' value='delete.php'>";
                    echo "<button type='button' class='fas fa-trash' style='margin-top: 2px; color:black;background-color: transparent; border:0px;' data-toggle='modal' data-target='#modal_delete".$row->getnim()."'></button>";
                    echo '<div class="modal fade" id="modal_delete'.$row->getnim().'" role="dialog" tabindex="-1">';?>
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Delete</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to delete this?</p>
                            </div>
                            <div class="modal-footer">
                                <?php echo "<button type='submit' name='submit' class='btn btn-danger' style='float:left;'>Yes</button>";?>
                                <button class="btn btn-default" style="float:left;" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php
                    // echo "<input type='hidden' name='nim' value='".$row->getnim()."'>";
                    // echo "<input type='hidden' name='do' value='delete.php'>";
                    // echo "<button type='submit' name='submit'><span class='glyphicon glyphicon-remove'></span></button>";
                    // echo "<a style='color:red' data-toggle='modal' data-target='#delete' class='fas fa-trash'></a>";
                    echo "</form>";
                    echo "</td>";
                    echo "</div>";
                }else if(isset($aslab)&&$aslab){
                    echo "<td>";
                    echo "<div class='col-sm-3'>";
                    echo "<form method='post' action='index.php'>";
                    echo "<input type='hidden' name='nim' value='".$row->getnim()."'>";
                    echo "<input type='hidden' name='loc' value='edit.php'>";
                    echo "<button type='submit' name='submit'><span class='glyphicon glyphicon-edit'></span></button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</div>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
            <th>Email</th>
            <?php if(isset($admin)&&$admin || isset($aslab)&&$aslab){ ?>
                <th></th>
            <?php } ?>
        </tfoot>
    </table>
    <?php
    }
    ?>
</div>
<div class="login1 modal fade" id='login' tabindex="-1" role='dialog'>
  <div class="modal-dialog modal-login">
    <div class="modal-content" style="margin: 20vh auto 0px auto">
      <div class="modal-header text-center">
        <div class="avatar">
			<img src="assets/avatar.png" alt="images">
		</div>
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        </button>
      </div>
            <form method='post' action='index.php'> 
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"><label data-error="wrong" data-success="right" for='email'>&nbsp; Your email</label></i>
                        <br><input type="email" id="email" class="form-control" name='email'><br>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"><label data-error="wrong" data-success="right" for="password">&nbsp; Your password</label></i>
                        <br><input type="password" class="form-control" name='password'>            
                    </div>
                    <?php
                        if(isset($valid)&&!$valid){
                    ?>
                    <br><p class='text-danger'>Email / Password Salah.</p>
                    <?php } ?>
                </div>
                <input type='hidden' name='do' value='check_login.php'>
                <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-primary btn-lg btn-block" style="background: #70c5c0; border: 0px" type='submit' name='submit'>Login</button>
                </div>
                <p class="text-center small">Don't have an account? <button type='submit' name='loc' value='add_user.php' class="button1">Sign up here!</button></p>
            </form>
        </div>
    </div>
  </div>
</div>
<script>
    $(function(){
        $('#login').modal({
            backdrop: 'static',
            keyboard: false,
            show: <?php echo (isset($valid)&&$valid)?"false":"true"; ?>
        })
    });
</script>

    <!-- <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="../assets/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="../assets/js/easing.min.js"></script>
	<script src="../assets/js/hoverIntent.js"></script>
	<script src="../assets/js/superfish.min.js"></script>
	<script src="../assets/js/mn-accordion.js"></script>
	<script src="../assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/jquery.nice-select.min.js"></script>
	<script src="../assets/js/isotope.pkgd.min.js"></script>
	<script src="../assets/js/jquery.circlechart.js"></script>
	<script src="../assets/js/mail-script.js"></script>
	<script src="../assets/js/wow.min.js"></script>
	<script src="../assets/js/main.js"></script> -->
</body>
</html>