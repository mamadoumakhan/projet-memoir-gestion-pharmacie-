<!DOCTYPE html>
<html lang="FR">

@include('dashboard/head')

<body class="bg-gradient-danger">

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
                    <h1 class="h4 text-gray-900 mb-4">Bienvenue dans sene pharmacie</h1>
                    <h7 class="h7 text-gray-900 mb-4">Entrer votre login et mot de passe</h7>
                  </div>
                  <form class="user" role="form" method="HEAD" action="">
                      <hr>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="username" placeholder="Entrer votre login">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                      </div>
                    </div>
                    <button  type="submit" class="btn btn-success btn-flat btn-block">
                    <a href="{{url('/dashboard')}}"></a>
                      Connexion
                    </button>
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

 @include('dashboard/scripts')
</body>

</html>