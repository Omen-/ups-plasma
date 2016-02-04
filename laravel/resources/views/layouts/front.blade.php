<!DOCTYPE html>
<html>
  @include('includes.head')
  <body class="body">
    <div class="container-fluid front-header">
      <div class="row">
          <p>a</p>
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
        <div class="col-xs-offset-2 col-sm-2 col-xs-4 vcenter">
          <img class="grayscale img-responsive" src="/assets/img/logo/inrs.jpg" />
        </div>
        <div class="col-sm-2 col-xs-4 vcenter">
          <img class="grayscale img-responsive" src="/assets/img/logo/sherbrooke.svg" />
        </div>
        <div class="col-sm-2 col-sm-offset-0 col-xs-offset-2 col-xs-4 vcenter">
          <img class="grayscale img-responsive" src="/assets/img/logo/montreal.png" />
        </div>
        <div class="col-sm-2 col-xs-4 vcenter">
          <img class="grayscale img-responsive" src="/assets/img/logo/laval.jpg" />
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
