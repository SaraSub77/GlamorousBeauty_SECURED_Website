<?php

require('config/db.php');

 // Check for submit
    if(isset($_POST['subButton'])){
        
        
        // Get form data
        $username = $_POST['username'];
        $pass = md5($_POST['password']);
        $email = $_POST['text-3'];
        $fName = $_POST['text-1'];
        $lName = $_POST['text-2'];

        // Validate input
        if(empty($username) || empty($pass) || empty($email) || empty($fName) || empty($lName)){
          header('Location: '.ROOT_URL.'');
          exit();
      }

      if(strlen($_POST['password']) < 8){
          // Password is too short
          header('Location: '.ROOT_URL.'');
          exit();
      }

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          // Invalid email format
          header('Location: '.ROOT_URL.'');
          exit();
      }

      if(!preg_match('/^[a-zA-Z0-9_]+$/', $username)){
          // Invalid username format
          header('Location: '.ROOT_URL.'');
          exit();
      }

        $query = "INSERT INTO Users(firstName, lastName, username, password, email) VALUES('$fName', '$lName', '$username', '$pass', '$email')";
        
        

        if(mysqli_query($conn, $query)){
            header('Location: Login.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    
    
    

?>







<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <title>Sign Up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Sign-Up.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.10.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/BeautyLogo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Sign Up">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-1cd1" style=""><div class="u-section-rows">
        <div class="u-black u-section-row" id="sec-a172">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
              <div class="menu-collapse">
                <a class="u-button-style u-nav-link" href="#">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6a83"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="svg-6a83" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sign-Up.php">Register</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sign-Up.php">Register</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
          
          
          
          
          
        </div>
        <div class="u-clearfix u-section-row u-white" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-f931">
          <div class="u-clearfix u-sheet u-sheet-2">
            <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="1563" data-image-height="550">
              <img src="images/BeautyLogo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-2">
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-274d"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="svg-274d" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-2 u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Shop.php" style="padding: 10px 20px;">Shop</a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shop.php">Shop</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
            
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" src="" data-image-width="7748" data-image-height="4560" id="sec-5d48">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-custom-color-2 u-text-1">SIGN up</h2>
        <div class="u-container-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-align-center u-border-11 u-border-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-border u-expanded-width u-grey-5 u-group u-shape-rectangle u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-form u-login-control u-form-1">
                  <form action="#" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" method="POST">
                    <div class="u-form-group u-form-name u-label-none">
                      <label for="username-a30d" class="u-form-control-hidden u-label u-label-1"></label>
                      <input type="text" placeholder="Username" id="username-a30d" name="username" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-1" required="">
                    </div>
                    <div class="u-form-group u-form-password u-label-none">
                      <label for="password-a30d" class="u-form-control-hidden u-label u-label-2"></label>
                      <input type="text" placeholder="Password" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-2" required="">
                    </div>
                    
                    <div class="u-form-group u-label-none u-form-group-4">
                      <label for="text-cfde" class="u-label u-label-4">Input</label>
                      <input type="text" placeholder="Email Address" id="text-cfde" name="text-3" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-4">
                    </div>
                    <div class="u-form-group u-label-none u-form-group-5">
                      <label for="text-4405" class="u-label u-label-5">Input</label>
                      <input type="text" placeholder="First Name" id="text-4405" name="text-1" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-5">
                    </div>
                    <div class="u-form-group u-label-none u-form-group-6">
                      <label for="text-65f4" class="u-label u-label-6">Input</label>
                      <input type="text" placeholder="Last Name" id="text-65f4" name="text-2" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-6">
                    </div>
                    
                    <div class="u-align-left u-form-group u-form-submit u-label-none">
                      <input type="submit" name="subButton" value="submit" class="u-form-control-hidden">
                      <a href="#" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-white u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">JOIN NOW</a>
                      
                    
                    </div>
                    
                    <input type="hidden" value="" name="recaptchaResponse">
                    
                    
                  </form>
                </div>
                <div class="u-align-center-xs u-container-style u-expanded-width u-group u-white u-group-3">
                  <div class="u-container-layout u-container-layout-3">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3a0d"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-left u-small-text u-text u-text-variant u-text-1"> This website was developed by CYS 538 students:<br>Maryam Albugaey, Sara Alsubaie, Fatima Abujaid, Nuha Bukhari, Shaima Albaker<br>
          <br> © 2023 ​Glamorous Beauty KSA, Inc. All rights reserved.<br>
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.best" target="_blank">
        <span>Website Builder</span>
      </a>. 
    </section>
  
</body></html>






