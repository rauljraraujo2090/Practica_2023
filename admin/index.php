<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="change-password.php";//
$_SESSION['alogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="usuario o contraseña invalido";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shopping Portal | Admin login</title>
	
    <link rel="stylesheet" href="login/estilos2.css" />


<!-- Google Font -->


<!-- Css Styles -->
<link rel="stylesheet" href="login/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="login/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="login/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="login/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="login/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="login/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="login/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="login/css/style.css" type="text/css">
    

	<!--OMEGA GENIUS LOGIN ---->

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="../ogani-master/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="../ogani-master/css/style.css" type="text/css">
	
</head>


</header>
<body>




<?php
include('../includes/header.php');
?>








 
    <!-- End Breadcrumbs -->




        






	<!-- Start Account Login Area -->
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form  method="post" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./login/img/logo.png" alt="easyclass" />
                <h4>easyclass</h4>
              </div>

              <div class="heading">
                <h2>Bienvenido de Nuevo</h2>
                <h6>¿Aún no estas registrado?</h6>
                <a href="#" class="">Registrate</a>
                <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
					name="username"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Correo Electrónico</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
					name="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Contraseña</label>
                </div>

                <button type="submit" class="sign-btn"  name="submit">Iniciar Sesion</button>

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./login/img/image1.png" class="image img-1 show" alt="" />
              <img src="./login/img/image2.png" class="image img-2" alt="" />
              <img src="./login/img/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Bienvenido</h2>
                  <h2>Customize as you like</h2>
                  <h2>Invite students to your class</h2>
                  
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- End Account Login Area -->
    <script src="login/app.js" type="text/javascript"></script>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

 <!-- Js Plugins -->
    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/jquery.nice-select.min.js"></script>
    <script src="login/js/jquery-ui.min.js"></script>
    <script src="login/js/jquery.slicknav.js"></script>
    <script src="login/js/mixitup.min.js"></script>
    <script src="login/js/owl.carousel.min.js"></script>
    <script src="login/js/main.js"></script>

    
<?php
include('../includes/footer_admin.php');
?>


  
</body>
</html>