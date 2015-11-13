<!DOCTYPE html>
<html>
  @include('includes.head')

  <body>
    @include('includes.navbar')

    @yield('content')
    @include('includes.footer')
  </body>
</html>
