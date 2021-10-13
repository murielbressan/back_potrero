<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include('head.php')?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/logo.png" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">Registro</h1>
                    <form method="post" action="registro.php">
                      <input type="text" class="form-control mb-4" placeholder="Nombre" name="nombre" id="name">
                      <input type="text" class="form-control mb-4" placeholder="Apellido" name="apellido" id="apellido">
                      <input type="number" class="form-control mb-4" placeholder="DNI" name="dni" id="dni">
                      <input type="text" class="form-control mb-4" placeholder="Correo" name="email" id="email">
                      <input type="password" class="form-control mb-4" placeholder="Contraseña" name="password" id="password">
                      <input type="password" class="form-control mb-4" placeholder="Contraseña" name="password2" id="password2">
                      <button type="submit" name="submit" class="btn btn-login btn-block">Enviar</button>
                    </form>
                </div>
              </div>


            </div>
        </header>
        <section class="contacto-section" id="contacto">
    <footer class="footer small text-center">
    <?php include('footer.php') ?>
    </footer>
  </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    
</html>
