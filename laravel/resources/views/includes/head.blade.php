<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet"></link>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="/assets/css/style.css" rel="stylesheet"></link>
  <link href="/assets/css/navbar.css" rel="stylesheet"></link>
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:700' rel='stylesheet' type='text/css'>
  @if(!Auth::check())
  <link href="/assets/css/login.css" rel="stylesheet"></link>
  @endif
  @yield('css')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/dropzone.js"></script>
  <script src="/js/overlay.js"></script>
  @yield('js')

  <title>Master STP - @yield('title')</title>
</head>
