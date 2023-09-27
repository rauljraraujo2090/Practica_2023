<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
	echo "<script>alert('Estás registrado(a) con éxito');</script>";
}
else{
echo "<script>alert('No se pudo registrar algo salió mal');</script>";
}
}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="my-cart.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="ID de correo electrónico o contraseña no válida";
exit();
}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="login/estilos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
  </head>
  <body>


  <header class="header-style-1">


<?php include('includes/header.php');?>

</header>
<center>
    <main>

      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form  method="post" autocomplete="off" class="sign-in-form">
			<?php
echo htmlentities($_SESSION['errmsg']);
?>
<?php
echo htmlentities($_SESSION['errmsg']="");
?>

              <div class="logo">
                <img src="./login/img/logo.png" alt="easyclass" />
                <h4>easyclass</h4>
              </div>
              
              <div class="heading">
                <h2>Bienvenido de Nuevo</h2>
                <h6>¿Aún no estas registrado?</h6>
                <a href="#" class="toggle">Registrate</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
					          name="email"
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

                <button type="submit" class="sign-btn" name="login">Iniciar Sesion</button>

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form  method="post"autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="./login/img/logo.png" alt="easyclass" />
                <h4>easyclass</h4>
              </div>

              <div class="heading">
                <h2>Empezar</h2>
                <h6>¿Ya tienes una cuenta? Iniciar sesión</h6>
                <a href="#" class="toggle">Iniciar Sesion</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
					name="fullname"
                    required
                  />
                  <label>Nombre</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="text"
					name="emailid"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Correo Electrónico</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
					name="contactno"
                    autocomplete="off"
                    required
                  />
                  <label>Número de Contacto</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="number"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
					name="password"
                    required
                  />
                  <label>Contraseña</label>
                </div>



                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
					name="confirmpassword"
                    required
                  />
                  <label>Confirmar Contraseña </label>
                </div>

				<button type="submit" name="submit" class="sign-btn" id="submit">REGISTRARSE</button>
				sign-btn

                <p class="text">
                  Al registrarme, acepto los
                  <a href="#">Terms of Services</a>
                  <a href="#"> and Privacy Policy</a>
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
                  <h2>Omega Genius E.I.R.L</h2>
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
<center>
    <!-- Javascript file -->

    <script src="login/app.js"></script>
    <?php include('includes/footer.php');?>
  </body>
</html>
