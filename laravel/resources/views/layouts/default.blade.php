<!DOCTYPE html>
<html>
  @include('includes.head-default')

  <body>
    @include('includes.navbar')
    @include('includes.login')
    @yield('content')
    @include('includes.footer')
  </body>
</html>
