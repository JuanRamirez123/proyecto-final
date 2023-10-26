<
<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

?>



    </p>
</body>

</html>

</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantillas web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        // PHP code here (if needed)
    ?>

    <header class="header">

        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="#" class="logo">
                    <img class="grande" src="images/logo.png"  >
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Reservaciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">Contacto</a>
                    </li>
                    
                    
    <a href="logout.php" class="btn btn-danger">Logout</a>
                </ul>
            </nav>
        </div>
        
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenido
            </h2>
            <h1 class="head">Plantillas web</h1>
            <div class="he-des">
                <h5>Lorem t dol</h5>
                <a href="#" class="btn cta-btn">Explora</a>
            </div>
        </div>
    </section>

    <section class="dis-sto">
        <div class="container">
            <div class="res-info">
                <div>
                    <img src="images/fondotitulo.jpg" alt="">
                </div>
            
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">En esta pagina encontraras</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Distintos tipos de plantillas, y distinta variedad de color, para tus trabajos o ensayos
                    </p>
                    <a href="#" class="btn cta-btn">Nosotros</a>
                </div>

            </div>
        </div>
    </section>


    <section class="taste bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                <section class="hero" id="hero">
        <div class="container">
                    <span class="fil">P</span>lantillas
                </h2>
                <h1 class="head">Plantillas</h1>
            </div>
        </div>
    </section>


    <section class="disco">
        <div class="container">
            <div class="res-info">
                <div class="res-des">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">D</span>escubre
                        </h2>
                        <h1 class="head hea-dark">Nuevas plantillas</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Haz una reservacion alas nuevas plantillas que saldran proximamente en nuestra pagina
                    </p>
                    <a href="menu.php" class="btn cta-btn">Explora las plantillas</a>
                </div>
                <div class="image-group pad-rig">
                    <img src="images/relleno.jpg" alt="">
                    <img src="images/decoracion1jpg.jpg" alt="">
                    <img src="images/decoracion2jpg.jpg" alt="">
                    <img src="images/decoracion3.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="pb bt">
        <div class="container">
            <div class="global">
                <h2 class="h2-sub">
                        <section class="hero" id="hero">
        <div class="container">
                    <span class="fil">P</span>lantillas
                </h2>
                <h1 class="head">Lorem</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="res-info">

                <div class="image-group">
                    <img src="images/detalles1.jpg" alt="">
                    <img src="images/detalles2.jpg" alt="">
                </div>
                <div class="res-des pad-rig">
                    <div class="global">
                        <h2 class="h2-sub">
                            <span class="fil">N</span>uevas
                        </h2>
                        <h1 class="head hea-dark">Plantillas VIP</h1>
                        <div class="circle">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <p>
                        Distintos tipos de plantillas, y distinta variedad de color, para tus trabajos o ensayos pero mucho mejor que las gratis y aun gran precio
                    </p>
                    <a href="#" class="btn cta-btn">Has una previsualización</a>
                </div>

            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="footer-content">

                <div class="footer-content-about">
                    <h4>Nosotros</h4>
                    <div class="circle">
                        <i class="fas fa-circle"></i>
                    </div>
                    <p> Proximamente habran nuevas actualizaciones, tenganos pasiencia🤗😇</p>
                </div>
                <div class="footer-div">
                    <div class="social-media">
                        <h4>Siguenos</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-tripadvisor"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4>Noticias</h4>
                        <form action="" class="news-form">
                            <input type="text" class="news-input"
                            placeholder="Escribe tu email"
                            >
                            <button class="news-btn" type="submit">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Rest of the HTML code continues here -->

    <?php
        // More PHP code here (if needed)
    ?>
    
    <script>

        const selectElement = function(element) {
            return document.querySelector(element);
        }

        let menuToggle = selectElement('.menu-toggle');
        let body = selectElement('body');

        menuToggle.addEventListener('click', function(){
            body.classList.toggle('open');
        })

    </script>
</body>
</html>
