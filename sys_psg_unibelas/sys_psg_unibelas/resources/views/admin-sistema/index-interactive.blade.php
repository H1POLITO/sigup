@extends('layouts.interactiva.app-interactive')
@section('content-interactive')

  <section id="intro">

    <div class="intro-content">
      <h2>Seja Bem vindo ao App <span> SIGPU</span><br>Faça Seus pagamentos Online!</h2>
      <div>
        <a href="{{ route('admin.sistema.dashboardPainel') }}" class="btn-get-started ">Painel de Pagamentos</a>
        <a href="{{ route('logout') }}" class="btn-projects scrollto">SAIR</a>
      </div>
    </div>

   <div id="intro-carousel" class="owl-carousel" >
      <div class="item"><img src="{{ URL::asset('assets/template/dist/img/unibelas.jpg') }}" alt=""></div>
       <!--
      <div class="item"><img src="{{ URL::asset('assets/template/dist/img/2.jpg') }}" alt=""></div>
      <div class="item"><img src="{{ URL::asset('assets/template/dist/img/3.jpg') }}" alt=""></div>
      <div class="item"><img src="{{ URL::asset('assets/template/dist/img/4.jpg') }}" alt=""></div>
      <div class="item"><img src="{{ URL::asset('assets/template/dist/img/5.jpg') }}" alt=""></div> -->
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ URL::asset('assets/template/dist/img/about-img.jpg') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Sobre o App</h2>
            <h3>Sistema de Gerenciamentos de pagamentos da UNIVERSIDADE DE BELAS</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i>O SIGPU é um Sistema que permite aos Estudantes da Univeridade de Belas efectuarem diversos pagamentos dos mais variados serviços existentes na Universidade de Belas.As transações são feitas online, podendo acessar de qualquer parte do mundo desde que esteja conectado a internet</li>
              <li><i class="ion-android-checkmark-circle"></i>Rápido e Eficiente</li>
              <li><i class="ion-android-checkmark-circle"></i>Seguro e Confiável</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Transações</h2>
          <p>Você pode efectuar os referidos pagamentos e outros...</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Mensalidade</a></h4>
              <p class="description">Faça o Pagamento de Sua mensalidade. É possivel efectuar pagamento mensal, trimestral, simestral e anual. Basta Informar a quantidade de meses a pagar.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Confirmação de Matrícula</a></h4>
              <p class="description">Após ter Terminado um Ano lectivo, acesse ao sistema e  confirme dentro do prazo a sua matrícula para um novo ano lectivo.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Recurso</a></h4>
              <p class="description">Os recurso são pagos dentro do prazo e podem ser pagos segundo a quantidade de disciplinas que o estudante foi à recurso</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Declaração Com Nota</a></h4>
              <p class="description">Faça o pagamento da declaração com nota ou sem nota.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">

    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Licenciaturas da Universidade</h2>
          <p>A Univeridade de Belas vem leccionado com qualidade e eficiência a mais de 8 anos, formando profissionais para o mercado de Trabalho. Temos para si os melhores professores, orientadores profissionais inseridos nas várias faculdades existentes na universidade.
        </p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <img src="{{ URL::asset('assets/template/dist/img/portfolio/10.jpg') }}" class="portfolio-popup">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Engenharia Informática</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/1.jpg') }}" class="portfolio-popup">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Engenharia de Petróleo</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/1s.jpg') }}" class="portfolio-popup">

                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Fisioterapia</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/1j.jpg') }}" class="portfolio-popup">

                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Medicina Dentária</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/4.jpg') }}" class="portfolio-popup">

                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Nutrição</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/5.jpg') }}" class="portfolio-popup">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Análises Clínicas</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/6.jpg') }}" class="portfolio-popup">

                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Farmácia</h2></div>
                </div>
              </img>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
                     <img src="{{ URL::asset('assets/template/dist/img/portfolio/7.jpg') }}" class="portfolio-popup">

                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Auronáutica</h2></div>
                </div>
              </img>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">

    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Acesse ao Painel Principal</h3>
            <p class="cta-text">Para Efectuar um pagamento acesse ao painel Principal clicando no botão a direita</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Painel Principal</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Nossa Equipa</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/tem-tales.png') }}" alt=""></div>
              <div class="details">
                <h4>Tales Dos Santos</h4>
                <span>Desenvolvedor Web - Fullstack</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/C12.jpg') }}" alt=""></div>
              <div class="details">
                <h4>António Catumbela</h4>
                <span>Desenvolvedor Desktop - Backend</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/jb.jpg') }}"alt=""></div>
              <div class="details">
                <h4>João Baptista</h4>
                <span>Desenvolvedor Web - Backend</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/team-hipolito.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Hipólito Tacanho</h4>
                <span>Segurança Cibernetica</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/Mk.jpeg') }}" alt=""></div>
              <div class="details">
                <h4>António Makiona</h4>
                <span>Desnvolvedor Web - Fullstack</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/c13.jpg') }}" alt=""></div>
              <div class="details">
                <h4>Niltom Moreira</h4>
                <span>Analise de Sistema</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{ URL::asset('assets/template/dist/img/PM.jpeg') }}" alt=""></div>
              <div class="details">
                <h4>Pedro Nganzadi</h4>
                <span>Desenvolvedor - Fullstack Master</span>
                <div class="social">
                  <a href=""><i class="fa fa-whatsapp"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->


  </main>

  <!--==========================
    Footer
  ============================-->



@endsection
