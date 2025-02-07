<!DOCTYPE html>
<html lang="tr">
<head>
  <!-- meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="theme-color" content="#0060fe">
  <meta name="title" content="Source Bilişim Hizmetleri">
  <meta name="description" content="Şerefli günler dilerim.">
  <meta name="language" content="tr">
  <link rel="shortcut icon" href="assets/images/theme/favicon.png" type="image/x-icon">
  <!-- link -->
  <link rel="stylesheet" href="assets/css/bundle.min.css">
  <link rel="stylesheet" href="assets/css/fonts.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/templates.css">
  <link rel="stylesheet" href="<?php echo $css ?>">
  <link rel="stylesheet" href="assets/css/index.css">
    
  <!-- title -->
  <title><?php echo $sayfa ?> - Source Bilişim</title>
</head>
<body class="position-relative index-page dark-theme" id="index-page">

  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <div class="content d-flex align-items-center justify-content-center">
      <div class="spinner"></div>
    </div>
  </div>  

  <!-- Navbar -->
  <nav class="theme-navbar" id="theme-navbar">
    <div class="container-fluid">
      <!-- nav-top -->
      <div class="nav-top d-flex align-items-center">
        <!-- menu-icon -->
        <div class="menu-icon" id="open-links-btn">
          <img src="assets/images/templates/navbar/hamburger.png" class="menu-icon img-fluid" alt="sourcebilisim.com">
        </div>
        <!-- brand -->
        <a href="#" class="brand d-flex align-items-center">
          <img src="assets/images/templates/navbar/logo-d.png" class="dt-img img-fluid" alt="sourcebilisim.com">
        </a>
        <!-- options -->
        <div class="options d-md-flex d-none align-items-center justify-content-end ml-auto">
         
          <!-- buttons -->
          <div class="buttons">
            <a href="trial.html" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Kayıt</a>
            <a href="login.html" class="btn btn-outline-dark btn-sm btn-rounded shadow-off text-uppercase">Giriş</a>
          </div>
        </div>
      </div>
      <!-- nav-bottom -->
      <div class="nav-bottom d-flex align-items-center justify-content-between">
        <!-- info -->
        <div class="info d-flex align-items-center">
          <!-- item -->
          <a href="tel:0000" class="item">
            <img src="assets/images/icons/fill-font-icons/fi-sr-phone-call.svg" class="img-fluid" alt="Icon">
            <span class="text">info@sourcebilisim.com</span>
          </a>
        </div>
        <!-- links -->
        <div class="links d-xl-flex align-items-center ml-auto" id="theme-navbar-links">
          <!-- close-links-btn -->
          <div class="close-links-btn" id="close-links-btn">
            <img src="assets/images/templates/navbar/close.png" class="img-fluid" alt="Close">
          </div>
		  
          <div class="link">
            <a href="index.php">Anasayfa</a>
          </div>
		  
          <div class="link has-dropdown-menu">
            <a href="#">Sunucu</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Sanal Sunucular</li>
              <li><a href="sanal-sunucu.php" class="dm-link">Sanal Sunucu</a></li>
              <li><a href="ryzen-sunucu.php" class="dm-link">Performanslı Sunucu</a></li>
			  <li><a href="fiziksel-sunucu.php" class="dm-link">Fiziksel Sunucu</a></li>
            </ul>
          </div>
		  
		<div class="link">
            <a href="web-hosting.php">Web Hosting</a>
          </div>
		  
		   <div class="link has-dropdown-menu">
            <a href="#">Oyun Sunucuları</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Minecraft</li>
              <!-- dm-link -->
              <li><a href="minecraft-sunucu.php" class="dm-link">Minecraft Sunucu</a></li>
			    <li><a href="unturned.php" class="dm-link">Unturned Sunucu</a></li>
			  
			  
            </ul>
          </div>
          <!-- link -->
		  <div class="link has-dropdown-menu">
            <a href="#">Kurumsal</a>
            <!-- dropdown-menu -->
            <ul class="dropdown-menu list-unstyled">
              <!-- group-title -->
              <li class="group-title">Kurumsal Bilgiler</li>
              <!-- dm-link -->
              <li><a href="#" class="dm-link">Hizmet Sözleşmesi</a></li>
              <!-- dm-link -->
              <li><a href="#" class="dm-link">Gizlilik Sözleşmesi</a></li>
            </ul>
          </div>
         
         
          <!-- indicator -->
          <span class="indicator"></span>
        </div>
        <!-- side-box-btn -->
        
      </div>
      
  </nav>
