<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="lib/assets/img/favicon.png" rel="icon">
  <link href="lib/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="lib/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="lib/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="lib/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="lib/assets/css/sweetalert2.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="lib/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block"></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Iniciar con tu cuenta</h5>
                    <p class="text-center small">Ingresar tu usuario y clave</p>
                  </div>

                  <form class="row g-3" name="frmLogin" id="frmLogin">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="usuario" id="usuario" class="form-control">
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="clave" id="clave"class="form-control">
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="button" id="entrar">Iniciar Sesión</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Tienes una cuenta? <a href="#">Crea tu cuenta</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Derechos Reservados <a href="#">Institución</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="lib/assets/js/jquery.min.js"></script>
  <script src="lib/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/assets/js/sweetalert2.all.min.js"></script>
  <script src="lib/config/js/helper.js"></script>
  <script src="lib/config/js/form/frmLogin.js"></script>


</body>

</html>