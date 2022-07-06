<!DOCTYPE html>
<html lang="en">
  @include('partials.head')
<body>
    <div class="overlay" data-overlay></div>

 

  <!--
    - HEADER
  -->
  @include('partials.header')
  

   <!--
    - MAIN
  -->
  <main>
    <!--
        - BANNIERE
    -->
  @include('partials.banner')

    <!--
        -Les services du site
    -->
    @yield('content')
    
     <!--
        -HOTEL MAIN
    -->

    <!-- les Hotels-->
    @yield('content1')

  </main>

   <!--
    - FOOTER
  -->
  @include('partials.footer')
  

</body>
</html>