<!DOCTYPE html>
<html>
  @include('includes.head-default')

  <body class="body">
    @include('includes.navbar')
    @if(!Auth::check())
    @include('includes.modals.login')
    @endif
    @yield('content')
    @include('includes.footer')

    <script src="/js/salvattore.min.js"></script>
  </body>
</html>
