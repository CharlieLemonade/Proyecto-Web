<?php
    include 'php/conexion.php';
    /*include 'php/menu.php';*/

    session_start();

    // Verificar si hay una sesión activa
    if (isset($_SESSION['first_name'])) {
        $username = $_SESSION['first_name'];
        
    } else {
        $username = '';  }
    




?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

<!--=============== CSS ===============-->
<link rel="stylesheet" href="css/card.css">


    <link rel="stylesheet" href="css/stylesResponsivos.css"> 
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> -->
    
    <title>Tu Página Web</title>
</head>
<body>
    <div class="menu container">
        <a href="" class="logo"><img src="images/logo.png" class="logoimg"></a>
        <input type="checkbox" id="menu" />
            <label for="menu">
                    <img src="images/menu.png" id="menu-icono">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="indexFinal.php#about">Acerca de</a></li>
                        <li><a href="">Servicios</a></li>
                        <li><?php
                    include 'php/menu.php';

                    // Verificar si hay una sesión activa
                    if (isset($_SESSION['username'])) {
                        
                        
                        echo '<a href="php/logout.php" class="user-initial">' . $username . '</a>';
                        
                    } else {
                        // Si no hay sesión activa, muestra el enlace para iniciar sesión
                        echo '<a href="login.php">Login</a>';
                    }
                    ?></a></li>
                    </ul>
                </nav>
    </div>
        
    <section>
        <div class="imagen-fondo">
            <img src="images/background_image.jpg" alt="" width="100%"  top="0px" class="imFon">
        </div>    
        
        <div class="content">
            <div class="textbox">
                <h2>NBA Basketball Tickets</h2>
                <p>Tickets to your favorite NBA Basketball games.
                <br>All right here. Let's go.
                </p>
                <div class="line"></div>
                <br>
                <br>    
                <p>Proyecto Web por:</p>
                <p>19130933 Carlos Lopez Trujillo</p><br>
                <p>20130774 Adrian Rodriguez Ortiz</p>
                </div>
    </section>

 

   <section class="containers">
    
    <div class="card__container swiper">
        <div class="title-games">Next NBA Games</div>
        <div class="card__content">
            <div class="swiper-wrapper">
            <?php
                // Incluye el código que obtiene y muestra las tarjetas de secciones
                include 'php/consultar_eventos.php';
                ?>
                
            </div>

            
        </div>
                      <!-- If we need navigation buttons -->
  <div class="swiper-button-prev">


  </div>
  <div class="swiper-button-next">


  </div>
          <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
    </div>
   </section>


   <section class= "about" id = "about">
    <br>
    <h2>
        NBA Tickets
    </h1>
    <br>
    <h3>National Basketball Association</h2>
    <br>
    <p>The National Basketball Association (NBA) features 30 professional basketball teams split between the Eastern and Western Conferences. The league includes 29 American teams and the Toronto Raptors. Domestic and international players entertain fans with dunks, three-pointers, and amazing displays of athleticism.</p>
    <br>
    <h3>NBA History</h3>
    <br>
    <p>The NBA began life as the Basketball Association of America in 1946. The league’s name changed to the NBA in 1949 after a merger with the National Basketball League. In the NBA’s early years, big-city franchises like the New York Knicks were joined by smaller markets like the Fort Wayne Pistons. The NBA and the American Basketball Association (ABA) competed for basketball fans from 1967 until the NBA-ABA merger in 1976. League expansion following the merger brought markets like Memphis, Toronto, Orlando, and Oklahoma City into the league.</p>
    <br><br>
    <p>The NBA has adopted new rules since its founding to increase the flow of the game. A 24-second shot clock was added in 1954 to prevent teams from running out the clock late in games. The three-point line was introduced to the NBA in 1979, allowing teams to expand the court and increase scoring opportunities. The creation of the defensive three-second violation in 2001 prevents the use of zone defenses that can slow down the pace of play.</p>
    <br>
    <h3>Notable NBA Players</h3>
    <br>
    <p>In 1997, the NBA announced a list of the 50 greatest players in league history. This list shows the evolution of professional basketball in North America. Early stars like Wilt Chamberlain, Bill Russell, and Bob Cousy pushed the boundaries of the game’s traditional rules. Following the NBA-ABA merger, talents like Kareem Abdul Jabbar, Julius Erving, and George Gervin added creativity to the game. The modern game has been lifted by the heroics of Michael Jordan, Larry Bird, Charles Barkley, LeBron James, and Steph Curry.</p>
    <br>
    <h3>The Live NBA Experience</h3><br>
    <p>Arenas throughout the NBA infuse games with entertainment for all ages. An NBA game lasts under three hours but during that time, fans see dance teams, listen to DJs, and enjoy the antics of a team’s mascot. NBA teams often schedule artists, bands, and stunt teams for thrilling halftime shows. The intimate confines of an NBA arena allow fans to be part of the game by making noise at crucial moments.</p>
    <br>
    <h3>Noteworthy NBA Events</h3><br>
    <p>NBA teams bring professional basketball overseas and to smaller markets in the United States during the preseason. The NBA uses Christmas Day games as an early-season showcase for the league’s top teams. Each February, the NBA All-Star Weekend attracts fans with the dunk and three-point contests as well as a high-scoring All-Star game. The league showcases the next generation of stars during the NBA Draft in late June.</p>
    <br>
</section>



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

        <!--=============== SWIPER JS ===============-->
        <script src="javaScript/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="javaScript/main.js"></script>
</body>
</html>