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
  <!--
    -lien js
-->
<script src="js/script.js"></script>

<!--
    -lien ionicon
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  

</body>
</html>