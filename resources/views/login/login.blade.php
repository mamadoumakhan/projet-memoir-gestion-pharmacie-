<!DOCTYPE html>
<html lang="en">

<!--?php include "../head.php"; ?-->

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-3 col-md-3">

        <div class="card o-hidden border-0 shadow-lg my-5 ">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenue dans votre application</h1>
                    <h7 class="h7 text-gray-900 mb-4">Entrer votre login et mot de passe</h7>
                  </div>
                  <form class="user">
                  <?= form_open_multipart(base_url() . 'index.php/Welcome/dashboard', array('method' => 'POST')) ?>
                      <hr>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="User Name" aria-describedby="username" placeholder="Entrer votre login">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Se souvenir</label>
                      </div>
                    </div>
                    <a href="<?= base_url() . 'index.php/Welcome/dashboard' ?>" type="submit" class="btn btn-info btn-flat btn-block">
                      Connexion
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Mot de passe oublié ?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>
