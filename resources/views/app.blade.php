<!DOCTYPE html>
<html lang="es">
<head>
  <title>CLOUDI</title>
  @yield('metas.scripts')
  @include('metas.google')
  @include('metas.default')  
  @include('links.css')
</head>
<body>
  @include('partials.nav')
  @yield('content')
  @include('partials.footer')
  @include('links.js')
</body>

</html>