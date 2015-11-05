<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="assets/css/style.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
  </head>
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



    <section class="container">
      @yield('content')
    </section>

    <footer class="container" style="height:200px; margin-top:20px;">

    </footer>
  </body>
</html>
