

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Omega Genius</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="ogani-master/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="ogani-master/css/style.css" type="text/css">
</head>

<body>

    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
    -->
    <!--  Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="ogani-master/img/omega-genius.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="" alt="">
                <a href="login.php"><div><i class="fa fa-user"></i>Registrate</div></a>
                
                <ul>
                    
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="login.php"><i class="icon fa fa-sign-in"></i> Iniciar Sesion</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="index.php">Categorias</a></li>
                <!---
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                --->
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contactos.php">Contactos</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> OmegaGenius@gmail.com</li>
                <li>Gracias Por Visitar Nuestra pagina </li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                         
   
                            <?php 
                            if(strlen($_SESSION['login'])){?>
				<li><a href="#"><i class="icon fa fa-user"></i>Bienvenido(a)-<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>
                                <li><i class="fa fa-user"></i> Mi Cuenta</li>
                                <li><i class="fa fa-heart"></i>Lista de Deseos</li>
                             

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="" alt="">
                               <a href="login.php"><div><i class="fa fa-user"></i>Registrate</div></a> 
                                
                                
                            </div>
                            <div class="header__top__right__auth">

 
                            <?php if(strlen($_SESSION['login'])==0)
    {   ?>
<a href="login.php"><i class="icon fa fa-sign-in"></i>Iniciar Sesion</a>
<?php }
else{ ?>
	
				<a href="logout.php"><i class="icon fa fa-sign-out"></i>Cerrar Sesion</a>
				<?php } ?>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="ogani-master/img/omega-genius.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Inicio</a></li>
                            
                       
                            <li><a href="#">Categorias</a>
                                <ul class="header__menu__dropdown">
                                <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql)){?>

			<li class="dropdown yamm">
				<a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
			
			</li>
			<?php } ?>
            
                                </ul>
                            </li>

             <li class="active"><a href="servicios.php">Servicios</a></li>
            
             
             <li class="active"><a href="contactos.php">Contactos</a></li>

                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>

                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>

                        </ul>
                        <div class="header__cart__price">item: <span>$150000.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        
    </header>
    
    <!-- Header Section End -->

    
    <!-- Hero Section End -->
    
    <!-- Categories Section Begin -->
   

    <!-- Footer Section Begin -->
    
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="ogani-master/js/jquery-3.3.1.min.js"></script>
    <script src="ogani-master/js/bootstrap.min.js"></script>
    <script src="ogani-master/js/jquery.nice-select.min.js"></script>
    <script src="ogani-master/js/jquery-ui.min.js"></script>
    <script src="ogani-master/js/jquery.slicknav.js"></script>
    <script src="ogani-master/js/mixitup.min.js"></script>
    <script src="ogani-master/js/owl.carousel.min.js"></script>
    <script src="ogani-master/js/main.js"></script>

    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: false,
            autoplayButtonOutput: true,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: false,
            autoplayButtonOutput:true,
            mouseDrag:true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });

    </script>
    <script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script>

</body>

</html>