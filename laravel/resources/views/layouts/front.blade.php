<!DOCTYPE html>
<html>
  @include('includes.head')
  <body class="body">
    <div class="container-fluid front-header front-bootstrap-menu-colapse">
      <div class="row hidden-xs hidden-sm">
        <div class="col-xs-6 vcenter">
          <h1>Sciences et technologies des plasmas</h1>
          <p><a style="color:white;" target="_blank" href="http://www.eea.ups-tlse.fr/">Master du département EEA</a></p>
        </div>
        <div class="col-xs-4 vcenter">
          <a target="_blank" href="http://www.univ-tlse3.fr/"><img class="img-responsive" src="/assets/img/logo/ups.png"/></a>
        </div>
      </div>
      <div class="row visible-xs visible-sm">
          <div class=" col-xs-offset-2 col-xs-8 vcenter">
            <a href="http://www.univ-tlse3.fr/"><img  class="img-responsive" src="/assets/img/logo/ups.png"/></a>
          </div>
      </div>
    </div>
    @include('includes.navbar-front')

    <section class="container-fluid">
      <div class="row">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="/assets/img/banner.png" alt="" class="img-responsive">
              <!--<div class="carousel-caption hidden-xs">
                <h1><b>Sciences et technologies des plasmas</b></h1>
            </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid">
      <div class="row logo-container">
        <div class="col-xs-12">
          <center><h3>Nos partenaires</h3></center>
        </div>
        <div class="col-xs-offset-2 col-sm-2 col-xs-4 vcenter" style="min-height: 100px">
          <a target="_blank" href="http://www.emt.inrs.ca/emt"><img class="grayscale img-responsive" src="/assets/img/logo/inrs.jpg" /></a>
        </div>
        <div class="col-sm-2 col-xs-4 vcenter" style="min-height: 100px">
          <a target="_blank" href="http://www.usherbrooke.ca/" title="Accord de bidiplomation en cours de discussion"><img class="grayscale img-responsive" src="/assets/img/logo/sherbrooke.svg" /></a>
        </div>
        <div class="col-sm-2 col-sm-offset-0 col-xs-offset-2 col-xs-4 vcenter" style="min-height: 100px">
          <a target="_blank" href="http://www.umontreal.ca/english/" title="Accord de bidiplomation en cours de discussion"><img class="grayscale img-responsive" src="/assets/img/logo/montreal.png" /></a>
        </div>
        <div class="col-sm-2 col-xs-4 vcenter" style="min-height: 100px">
          <a target="_blank" href="http://www2.ulaval.ca/accueil.html" title="Accord de bidiplomation en cours de discussion"><img class="grayscale img-responsive" src="/assets/img/logo/laval.jpg" /></a>
        </div>
      </div>
    </div>

    @if(!Auth::check())
    @include('includes.modals.login')
    @include('includes.modals.signup')
    @endif
    <div class="news-title-front">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>News</h2>
          </div>
        </div>
      </div>
    </div>
    <section class="container">
      @yield('content')
    </section>

    @include('includes.footer')
  </body>
</html>
