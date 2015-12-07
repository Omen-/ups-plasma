<!DOCTYPE html>
<html>
  @include('includes.head')
  <body>
    <header class="container">
      <div class="row">
        <div class="col-xs-12">
          <img width="10%" src="assets/img/header_ups.jpeg"></img>
        </div>
      </div>
    </header>

    <section class="banner container">
       <img src="assets/img/banner.png"></img>
       <div class="menu">
       </div>
    </section>


    @include('includes.login')
    <section class="container">
      @yield('content')
    </section>

    @include('includes.footer')
  </body>
</html>
