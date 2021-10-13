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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">ingresar</a></li>
                        <li class="nav-item"><a class="nav-link active-link js-scroll-trigger" href="carrito.php"><i class="fas fa-shopping-basket"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="align-middle"><img src="img/ensalada.png" /></td>
                          <td class="align-middle text-left">Ensalada</td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control" placeholder="01" id="cantidad">
                          </td>
                          <td class="align-middle text-center">$300</td>
                          <td class="align-middle text-center">$300</td>
                        </tr>
                        <tr>
                          <td class="align-middle"><img src="img/pizza.png" /></td>
                          <td class="align-middle text-left">Pizza</td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control" placeholder="01" id="cantidad">
                          </td>
                          <td class="align-middle text-center">$500</td>
                          <td class="align-middle text-center">$800</td>
                        </tr>
                      </tbody>
                    </table>


                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>

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
