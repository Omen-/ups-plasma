<!DOCTYPE html>
<html>
  @include('includes.head')
  <body class="body">
    @include('includes.navbar-front')



    <section class="container-fluid">
      <div class="row">
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="item active">
              <img src="/assets/img/banner.png" alt="" class="img-responsive">
              <div class="carousel-caption">
                <h1>Science et technologie des plasmas</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container-fluid">
      <div class="row logo-container">
        <div class="col-lg-2 col-md-4 col-lg-offset-1">
          <img class="img-responsive" src="/assets/img/logo/ups.jpg" />
        </div>
        <div class="col-lg-2 col-md-4">
          <img class="img-responsive" src="/assets/img/logo/inrs.jpg" />
        </div>
        <div class="col-lg-2 col-md-4">
          <img class="img-responsive" src="/assets/img/logo/sherbrooke.svg" />
        </div>
        <div class="col-lg-2 col-md-4">
          <img class="img-responsive" src="/assets/img/logo/montreal.png" />
        </div>
        <div class="col-lg-2 col-md-4">
          <img class="img-responsive" src="/assets/img/logo/laval.jpg" />
        </div>
      </div>
    </div>

    @if(!Auth::check())
    @include('includes.modals.login')
    @include('includes.modals.signup')
    @endif
    <div class="news-title">
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
