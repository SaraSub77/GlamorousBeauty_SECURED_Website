

<?php

require('config/db.php');

 // Check for submit
    if(isset($_POST['subB'])){
        // Get form data
        $username = $_POST['username'];
        $p = $_POST['password'];
        $pass = md5($p);
        
        $result1 = mysqli_query($conn, "SELECT MAX(invoice_id) FROM Cart");
	$row = mysqli_fetch_array($result1);
	$max_in = $row[0];
        
        

        $query = "SELECT userID FROM Users WHERE username='$username' AND password='$pass'";
        
        $result = $conn->query($query);
        
        if($result->num_rows > 0){
            session_start();
	    $_SESSION['uName'] = $_POST['username'];
	    $_SESSION['invoice_ID'] = $max_in + 1;
	    setcookie( "user", $username, time() + (86400 * 30) ,"/");
            //header('Location: Shop.php');
        } else {
            header('Location: '.ROOT_URL.'');
            
            
        }
    }
    
    
    if(isset($_GET['search'])){
    $search = $_GET['search'];
    if($search == "Dior Addict Lip Glow Oil")
    {header('Location: Dior-Lip-Oil.php');}
    if($search == "Lancome idole")
    {header('Location: Lancome-idole.php');}
    if($search == "Estee Lauder Night Repair Serum")
    {header('Location: Estee-Lauder.php');}
    if($search == "Sol De Janeiro 68 Mist")
    {header('Location: Sol-De-Janeiro.php');}
    if($search == "Dior Backstage Rosy Glow")
    {header('Location: Dior-Rosy.php');}
    if($search == "CH Good Girl Midnight")
    {header('Location: CH-Good-Girl-Midnight.php');}
    
    }
    

?>

<script>
var cookie='<?php echo isset($_COOKIE['user']) ?>';
if(cookie == true){
var s = '<?php echo (isset($_SESSION['uName']))?$_SESSION['uName']:''; ?>';
var name='<?php echo ($_SESSION['uName']) ?>';
if(name != ''){
window.location.href = "welcome.html?name=" + s;}
}
</script>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
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
    <meta property="og:title" content="Login">
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
        <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-custom-color-2 u-text-1">Login</h2>
        <div class="u-container-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-align-center u-border-11 u-border-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-container-style u-custom-border u-expanded-width u-grey-5 u-group u-shape-rectangle u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-form u-login-control u-form-1">
                  <form action="#" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" method="POST">
                    <div class="u-form-group u-form-name u-label-top">
                      <label for="username-a30d" class="u-label u-label-1">Username *</label>
                      <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-1" required="">
                    </div>
                    <div class="u-form-group u-form-password u-label-top">
                      <label for="password-a30d" class="u-label u-label-2">Password *</label>
                      <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-input-2" required="">
                    </div>
                    
                    <div class="u-align-left u-form-group u-form-submit u-label-top">
                      <input type="submit" name="subB" value="submit" class="u-form-control-hidden">
                      <a href="#" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-white u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">Login</a>
                    </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
                <div class="u-align-center-xs u-container-style u-expanded-width u-group u-white u-group-3">
                  <div class="u-container-layout u-container-layout-3">
                    <a href="Sign-Up.php" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-active-palette-2-light-2 u-text-custom-color-2 u-text-hover-palette-2-light-2 u-btn-2">Don't have an account?</a>
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
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>
