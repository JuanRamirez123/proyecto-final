<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de plantillas</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a a href="#"  class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">Inicio</a>
        <a href="index.php" class="btn cta-btn">inicio</a>
        <a href="#about">Sobre</a>
        <a href="#menu">Menú</a>
        <a href="#products">Productos</a>
        <a href="#review">Revisión</a>
        <a href="#contact">Contacto</a>
        <a href="#blogs">Blogs</a>
    </nav>

     <a a href="product/index.php"  class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
    <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/plantilla4.jpg" alt="">
            <div class="content">
                <h3>plantilla4</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/plantilla5.jpg" alt="">
            <div class="content">
                <h3>plantilla5</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/plantilla6.jpg" alt="">
            <div class="content">
                <h3>plantilla6</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="imagesplantilla7.jpg" alt="">
            <div class="content">
                <h3>plantilla7</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">Comprar ahora</a>
    </div>





    


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Nuevas plantillas para cualquier uso</h3>
        <p>Obten nuevas plantillas a un precio economico y de muy buena calidad</p>
        <a href="#" class="btn">Obtenlas ahora</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Sobre</span> nosotros </h1>

    <div class="row">

        <div class="image">
            <img src="images/imagen de prueba.png" alt="">
        </div>

        <div class="content">
            <h3>¿Qué Hace Que Nuestras plantillas Sean Especiales?</h3>
            <p>Traemos plantillas de todo tipo para que los usuarios puedan elegir cual les parece la mejor algunas van a ser gratuitas y otras pagas </p>
            <p>Ademas de que tratamos de traer plantillas de la mejor calidad para que nuestros clientes queden satisfechos  </p>
            <a href="#" class="btn">leer mas</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> Nuestro <span>menu</span> </h1>

   

    <div class="box-container">
    <?php
    $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");

    if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
            ?>
            <div class="box">
            <img src="images/prueba5.jpg" alt="">
            <h3><?php echo $product_array[$key]["plantilla"]; ?></h3>
            <div class="price">$15.99 <span><?php echo $product_array[$key]["precio"]; ?></span></div>
            </div>
            <?php
        }

    }
    ?>
    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> Nuestros <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="imagenes/" alt="">
            </div>
            <div class="content">
                <h3>Plantilla de pago </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/" alt="">
            </div>
            <div class="content">
                <h3>Nuevas plantillas</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/" alt="">
            </div>
            <div class="content">
                <h3>Nuevas plantillas</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Revisión del <span> cliente </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>plantillas muy buenas, espero sigan publicando nuevas</p>
            <img src="images/" class="user" alt="">
            <h3>Sergio Rueda</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>espero muy pronto que saque plantillas gratis</p>
            <img src="images/" class="user" alt="">
            <h3>Juan Ramirez</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>las mejores plantillas que e visto, espero sigan mejorando</p>
            <img src="images/" class="user" alt="">
            <h3>Julian Heredia</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1629452077891!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Nuestros <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/plantillasfondo01.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Novedades sobre nuevas plantillas</a>
                <span>by admin / 21st may, 2021</span>
                <p>Aqui subiremos avanzes que llevemos sobre nuevos proyectos</p>
                <a href="#" class="btn">Leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/plantillasfondo02.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Novedades sobre nuevas plantillas</a>
                <span>by admin / 21st may, 2021</span>
                <p>Aqui subiremos avanzes que llevemos sobre nuevos proyectos</p>
                <a href="#" class="btn">Leer mas</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/plantillasfondo03.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Novedades sobre nuevas plantillas</a>
                <span>by admin / 21st may, 2021</span>
                <p>Aqui subiremos avanzes que llevemos sobre nuevos proyectos.</p>
                <a href="#" class="btn">Leer mas</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">Hogar</a>
        <a href="#">Sobre</a>
        <a href="#">Menú</a>
        <a href="#">Productos</a>
        <a href="#">Revisión</a>
        <a href="#">Contacto</a>
        <a href="#">Clogs</a>
    </div>

    <div class="credit">created by <span>mr. web designer</span> | all rights reserved</div>

</section>
        <!-- Your dynamic PHP code for cart items goes here -->
        <?php
        // Example of dynamically adding cart items
        $cartItems = array(
            array(
                'img' => 'images/plantilla #01.png',
                'title' => 'plantilla #01',
                'price' => '$15.99/-'
            ),
            array(
                'img' => 'images/plantilla #02.png',
                'title' => 'plantilla #02',
                'price' => '$15.99/-'
            ),
            // Add more cart items as needed
        );

        foreach ($cartItems as $item) {
            echo '<div class="cart-item">';
            echo '<span class="fas fa-times"></span>';
            echo '<img src="' . $item['img'] . '" alt="">';
            echo '<div class="content">';
            echo '<h3>' . $item['title'] . '</h3>';
            echo '<div class="price">' . $item['price'] . '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
        <a href="#" class="btn">Comprar ahora</a>
    </div>

</header>
<!-- header section ends -->

<!-- home section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- home section ends -->

<!-- about section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- about section ends -->

<!-- menu section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- menu section ends -->

<!-- products section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- products section ends  -->

<!-- review section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- review section ends  -->

<!-- contact section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- contact section ends  -->

<!-- blogs section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- blogs section ends  -->

<!-- footer section starts  -->
<!-- ... Your remaining HTML code ... -->
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>