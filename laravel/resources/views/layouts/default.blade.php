<!DOCTYPE html>
<html>
  @include('includes.head-default')

  <body class="body">
    @include('includes.navbar')
    @if(!Auth::check())
    @include('includes.login')
    @endif
    @yield('content')
    @include('includes.footer')
  </body>
</html>
