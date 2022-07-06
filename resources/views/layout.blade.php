<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firwall - Hôtel</title>
</head>
<!--
    - icon
-->
<link rel="shortcut icon" href="images/logo/jv.png" type="image/x-icon">
<!--
    - lien du css
-->
<link rel="stylesheet" href="css/app.css">
<link href="css/styles.css" rel="stylesheet" />

<!--
    - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<body>
    <div class="overlay" data-overlay></div>

 

  <!--
    - NOTIFICATION TOAST
  -->
  <div class="notification-toast closed" data-toast>
      <button class="toast-close-btn" data-toast-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="toast-banner">
        <img src="./assets/images/pubs/pub1.jpg" alt="Rose Gold Earrings" 
        width="80" height="70">
      </div>
      <div class="toast-detail">
          <p class="toast-message">
              Maison à vendre 
          </p>
          <p class="toast-title">
              Prenez contact
          </p>
          <p class="toast-meta">
              <time datetime="PT2M">1 minute</time> passée
          </p>
      </div>
  </div>

  <!--
    - HEADER
  -->

  <header>
      <div class="header-top">
          <div class="container">
              <ul class="header-social-container">
                  <li>
                      <a href="#" class="social-link">
                          <ion-icon name="logo-facebook"></ion-icon>
                      </a>
                  </li>


                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

            
              </ul>

              <div class="header-alert-news">
                  <p>
                      <b>Reservez des chambres d'hôtels à Kara</b>
                  </p>
              </div>

              
          </div>
      </div>

      <div class="header-main">
        <div class="container">
            <a href="#" class="header-logo">
              <img src="images/logo/jv.png" alt="E-hotel logo" 
              width="100" height="95">
            </a>

            <div class="header-search-container">
                <input type="search" name="search" class="search-field" placeholder="Rechercher une  hôtel">
                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>

            <div class="header-user-actions">
                <button class="action-btn">
                    <ion-icon name="person-outline"></ion-icon>
                </button>

            </div>
        </div>
    </div>

    <nav class="desktop-navigation-menu">
        <div class="container">
            <ul class="desktop-menu-category-list">
                <li class="menu-category">
                    <a href="#" class="menu-title">Acceuil</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Categories</a>
                    
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">A propos</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="mobile-bottom-navigation">
        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>
    </div>
    
    <nav class="mobile-navigation-menu has-scrollbar" data-mobile-menu>
        <div class="menu-top">
            <h2 class="menu-title">Menu</h2>
            <button class="menu-close-btn" data-mobile-menu-close-btn>
                 <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="mobile-menu-category-list">

            <li class="menu-category">
                <a href="#" class="menu-title">Acceuil</a>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Catégorie</a>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">A propos</a>
            </li>
        </ul>

        <ul class="menu-social-container">
            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
            </li>

            <li>
                <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
    </nav>
  </header>

   <!--
    - MAIN
  -->
  <main>
    <!--
        - BANNIERE
    -->
    <div class="banner">

        <div class="slider-container has-scrollbar">
            <div class="slider-item">
                <img src="images/1.jpg" alt="les hôtels les plus chics de Kara vous attendent" class="banner-img">
                
                <div class="banner-content">
                    <p class="banner-sutitle">Faite vos reservation</p>
                    <h2 class="banner-title">les hôtels les plus chics de Kara vous attendent</h2>
                </div>
            
            </div>
            <div class="slider-item">
                <img src="images/2.jpg" alt="les hôtels les plus chics de Kara vous attendent" class="banner-img">
                
                <div class="banner-content">
                    <p class="banner-sutitle">Tout type de chambre</p>
                    <h2 class="banner-title">les hôtels les plus chics de Kara vous attendent</h2>
                </div>
            
            </div>
        </div>

    </div>

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

  <footer>


    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Hôtel populaire</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Type Africaine</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Type Européenne</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Type Asiatique</a>
          </li>

        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Hôtels</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Reservation</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mise en relation</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sponsorisation</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">contact</a>
          </li>
    
        
        </ul>

  

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Togo, Kara
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+22892880950" class="footer-nav-link">(228) 92880950</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:firwallgroup4@gmail.com" class="footer-nav-link">firwallgroup4@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">suivez-nous </h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <p class="copyright">
          Copyright &copy; <a href="#">E-hôtel</a> tous droits reservés.
        </p>

      </div>

    </div>

  </footer>


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