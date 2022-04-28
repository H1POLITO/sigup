<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar Sessão - Conta SIGPU</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('assets/template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ URL::asset('assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('assets/template/dist/css/adminlte.min.css')}}">
  <style>
    .gradient {
      animation: gradient 10s alternate ease infinite;
      
      background: linear-gradient(-45deg, #23d5ab, #3d8ce0, #2587f0, transparent);
      /*
      background: linear-gradient(-45deg, , #e73c7e, #23a6d5, #23d5ab, ) ;*/
      background-size: 300% 300%;
    }

    @keyframes gradient {
      0% {
        background-position: 0 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0 50%;
      }
    }
  </style>
</head>
<body class="hold-transition ">
<section class="login-page gradient">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <h1 href="../../index2.html" class="h1"><strong>SIGP</strong></h1>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Faça Login para Iniciar sua sessão</p>

          <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" id="email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Palavra passe" name="password" id="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Lembrar me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" id="btn_acessar" class="btn btn-primary btn-block">Acessar</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <!-- /.social-auth-links -->

          <p class="mb-1" style="text-align:center;">
            <a  href="forgot-password.html" >Esqueci a minha senha</a>
          </p>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
  </section>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ URL::asset('assets/template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('assets/template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
