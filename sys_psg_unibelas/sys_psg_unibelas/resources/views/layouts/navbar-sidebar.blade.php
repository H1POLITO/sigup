  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ URL::asset('assets/template/dist/img/logo-sitema.png') }}" alt="SIGPU Logo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('admin.sistema.dashboardPainel') }}" class="nav-link">Inicio</a>
          </li>
          @if (Auth::user()->permission_id == 1)
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('admin.sistema.perfil') }}" class="nav-link">Perfil</a>
          </li>
          @endif
          @if (Auth::user()->permission_id == 2)
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('aluno.sistema.perfil') }}" class="nav-link">Perfil</a>
          </li>
          @endif
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link btn btn-outline-danger sair" role="button">Sair</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="fas fa-search"></i>
              </a>
              <div class="navbar-search-block">
                  <form class="form-inline">
                      <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                      </div>
                  </form>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('admin.sistema.dashboard') }}" class="brand-link">
          <img src="{{ URL::asset('assets/template/dist/img/logo-sitema.png') }}" alt="SIGPU LOGO" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Pagina - SIGPU</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ URL::asset('assets/template/dist/img/avatar.png') }}"
                      class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="{{ route('admin.sistema.perfil') }}" class="d-block">{{ Auth::user()->nome_completo }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                  @if (Auth::user()->permission_id == 1)
                      <li class="nav-item item-info">
                          <a href="" class="nav-link item-link">
                              <p>
                               Mensalidade
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.propinas') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Gerenciar Mensalidade</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.verpropinas') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Mensalidades Efectuadas</p>
                          </a>
                      </li>
                      {{-- <li class="nav-item"> <a href="{{ route('admin.sistema.pagamento.propinas') }}"
                              class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Recurso</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.propinas') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Exame Especial</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.propinas') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Cadeiras em Atraso</p>
                          </a>
                      </li> --}}



                      <!-- Lista de pagamentos de documentos-->
                      <li class="nav-item item-info">
                            <a href="" class="nav-link item-link">
                              <p>
                                 Outros Pagamentos
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.documentos') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Gerenciar Pagamentos</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.documentos') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Gerir Recurso</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.documentos') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Gerir Exame Especial</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.verdocumentos') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Pagamentos Efectuados</p>
                          </a>
                      </li>
                      {{-- <li class="nav-item"> <a href="{{ route('admin.sistema.pagamento.documentos') }}"
                              class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Declaração Sem Nota</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.documentos') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Capa de Processo</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('admin.sistema.pagamento.documentos') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Cartão de Estudante</p>
                          </a>
                      </li> --}}


                  <li class="nav-item d-none d-sm-inline-block">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link btn btn-outline-danger " role="button">Sair</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>


                      @endif

                      @if (Auth::user()->permission_id == 2)
                      <li class="nav-item">
                      <a href="{{ route('aluno.sistema.perfil') }}" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Perfil
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('aluno.sistema.pagamentos') }}" class="nav-link">

                          <i class="nav-icon fa-solid  fa-credit-card"></i>
                          <p>
                              Fazer Pagamento
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link btn-outline-danger sair" role="button">Sair</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </li>
                  @endif

                  {{-- <li class="nav-item">
                      <a href="{{ route('admin.sistema.propinas') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Propinas</p>
                  </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>matriculas</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>cartões</p>
                      </a>
                  </li> --}}
                  {{-- <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>documentos</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>folha</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Finanças
                          </p>
                      </a>
                  </li> --}}
                  {{-- <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Estudante
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Relatório
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              informações
                          </p>
                      </a>
                  </li> --}}
              </ul>
              </ul>
          </nav> <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>