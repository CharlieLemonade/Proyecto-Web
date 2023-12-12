<?php
    include 'php/conexion.php';
    /*include 'php/menu.php';*/

    session_start();

    // Verificar si hay una sesión activa
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
    } else {
        $username = '';  }
    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/slider.css"> -->
    <link rel="stylesheet" type="text/css" href="css/slidercss.css">

    <title>Ticket Store</title>
</head>

<body>
 

    <section class="menu">
        <header>                        
            <a href="index.html"><img src="images/logo.png" class="logo"></a>          
              <ul>
                  <li><div class="menu-item"><a href="#">Inicio</a></div></li>
                  <li><div class="menu-item"><a href="tabla.html">Acerca de</a></div></li>
                  <li><div class="menu-item"><a href="#">Servicios</a></div></li>
                  <li><div class="login">
                  <?php
                    include 'php/menu.php';

                    // Verificar si hay una sesión activa
                    if (isset($_SESSION['username'])) {
                        echo '<style>
                        .login {
                            width: 40px; 
                            height: 40px;
                            padding: 10px;
                            border-radius: 25px;
                            display: inline-block;
                            align-items: center;
                            background-color: rgba(142, 142, 142, 0.2);
                        }
                      </style>';
                        
                        echo '<a href="php/logout.php" class="user-initial">' . $firstLetter . '</a>';
                        
                    } else {
                        // Si no hay sesión activa, muestra el enlace para iniciar sesión
                        echo '<a href="login.php">Login</a>';
                    }
                    ?>
                
              </ul>


          </header>
          
          <div class="content">
            <div class="textbox">
                <h2>NBA Basketball Tickets</h2>
                <p>Tickets to your favorite NBA Basketball games.
                <br>All right here. Let's go.
                    </p>
                    <div class="line"></div>
                </div>
            
        </div>

        <div class="imagen-fondo">
            <img src="images/background_image.jpg" alt="" width="100%" top="0px" class="imFon">
        </div>  
        
    </section>

    <main class="products container">
        <a name="destinos"></a>
        <h2 style= "margin-left: 30px; margin-top: 20px">All <span>NBA Games</span></h2>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    
                
                <?php
                // Incluye el código que obtiene y muestra las tarjetas de secciones
                include 'php/consultar_eventos.php';
                ?>
                    

                    

    
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-scrollbar swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </main>


 <!--    <section class="faa">
        <div>GAMES</div>
       
        <div class="container">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-container mySwiper">
             
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="Images/Game1.jpg"
                            alt="">
                        <div class="card-description">
                            <div class="card-title">
                                <h4>NBA In-Season Tournament: Lakers at Suns</h4>
                            </div>
                            <div class="card-text">
                                <p>Footprint Center, Phoenix, AZ</p>
                            </div>
                            <div class="card-link">
                              <a href="#">Ver más</a>
                            </div>
                        </div>
    
                    </div>
                   
             
             
    
            </div>
             <div class="swiper-container mySwiper">
             
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="Images/Game1.jpg"
                            alt="">
                        <div class="card-description">
                            <div class="card-title">
                                <h4>NBA In-Season Tournament: Lakers at Suns</h4>
                            </div>
                            <div class="card-text">
                                <p>Footprint Center, Phoenix, AZ</p>
                            </div>
                            <div class="card-link">
                              <a href="#">Ver más</a>
                            </div>
                        </div>
    
                    </div>
                   
             
             
    
            </div>
    
        </div>

        

                    
    </section> -->
       
    


    

    <section class="footer">
        <div class="footer-content">
            <img src="images/logo.png">
            <p><br>Score the best seats for slam dunks and buzzer-beaters! Elevate your NBA experience with prime tickets to electrifying basketball action. 
            </p>
            <div class="icons">
                <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fab fa-x"></i></a>
                <a href="#" class="icon"><i class="fab fa-linkedin-in"></i></a>
           </div>
        </div>

        <div class="footer-content">
            <h4>Resourses</h4>
            <li><a href="#">About</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Help & Support</a></li>            
        </div>

        <div class="footer-content">
            <h4>Social</h4>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>                        
        </div>

        <div class="footer-content">
            <h4>Developers</h4>
            <li><a href="#">Platform</a></li>
            <li><a href="#">Developers Blog</a></li>        
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="javaScript/app.js"></script>
    <script src="javaScript/_swiper-bundle.min.js"></script>
    <script src="javaScript/javaCarrusel.js"></script>
</body>
</html>
