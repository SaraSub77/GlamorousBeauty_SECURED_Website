

<?php


require('config/db.php');


session_start();
$name = $_SESSION['uName'];


if(isset(($_POST['dlg']))){
$id = $_POST['num1'];}

if(isset(($_POST['lip']))){
$id = $_POST['num2'];}

if(isset(($_POST['eln']))){
$id = $_POST['num3'];}

if(isset(($_POST['sdj']))){
$id = $_POST['num4'];}

if(isset(($_POST['dbr']))){
$id = $_POST['num5'];}

if(isset(($_POST['cgg']))){
$id = $_POST['num6'];}


	if(isset($_POST['dlg']) || isset($_POST['lip']) || isset($_POST['eln']) || isset($_POST['sdj']) || isset($_POST['dbr']) || isset($_POST['cgg']) ){
	$result = mysqli_query($conn, "SELECT productName, price FROM Products WHERE productID =" .$id );
	
	while ($row = mysqli_fetch_assoc($result)) {
  	$pPrice = $row['price'];
  	$pName = $row['productName'];
  	}
  		
  	if(isset($_COOKIE['user'])){
  	
	$in_id = $_SESSION['invoice_ID'];
	
        $query3 = "INSERT INTO Cart(product_name, price, user_name, invoice_id) VALUES('$pName', '$pPrice', '$name', '$in_id')";
        
        
        
        

        if(mysqli_query($conn, $query3)){
            header('Location: Shop.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    
    else
    {header('Location: Login.php');}
    
    }
    
    
    if(isset($_POST['cart'])){
    if(isset($_COOKIE['user'])){
    header('Location: Shopping-Cart.php');
    }
    else
    {
    header('Location: Login.php'); }
    }
    
    
    
    if(isset($_GET['search'])){
    $r = $_GET['search'];
    $s = str_replace( array('/', ';', '<', '>'), '', $r);
    echo '<p>you searched for: '. $s.'</p>';
    $search = $_GET['search'];
    if($search == "Dior Addict Lip Glow Oil")
    {header('refresh:2; url=Dior-Lip-Oil.php');}
    if($search == "Lancome idole")
    {header('refresh:2; url=Lancome-idole.php');}
    if($search == "Estee Lauder Night Repair Serum")
    {header('refreash=2; url=Estee-Lauder.php');}
    if($search == "Sol De Janeiro 68 Mist")
    {header('refreash=2; url=Sol-De-Janeiro.php');}
    if($search == "Dior Backstage Rosy Glow")
    {header('refreash=2; url=Dior-Rosy.php');}
    if($search == "CH Good Girl Midnight")
    {header('refreash=2; url=CH-Good-Girl-Midnight.php');}
    
    }
    
    



?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Our Products">
    <meta name="description" content="">
    <title>Shop</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Shop.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.10.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/BeautyLogo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Shop">
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
</li><li class="u-nav-item">
<li class="u-nav-item">
<form method="POST">
<input type="submit" name="cart" value="MY CART" class="u-button-style u-nav-link">
</form>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shop.php">Shop</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shopping-Cart.php">My Cart</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
            <form action="#" method="get" class="u-border-1 u-border-grey-30 u-grey-5 u-radius-50 u-search u-search-left u-search-1">
              <button class="u-search-button" type="submit">
                <span class="u-icon-rectangle u-search-icon u-spacing-10">
                  <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-72f2"></use></svg>
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-72f2" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                </span>
              </button>
              <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
            </form>
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-palette-2-light-3 u-section-1" id="sec-ff08">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-text u-text-default u-text-font u-text-1"> Our Products</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-2da2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1000" data-image-height="950" src="images/51c6yX3sSpS.jpg">
                <h3 class="u-text u-text-default u-text-1">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-text-hover-grey-50 u-btn-1" data-href="#" href="Dior-Lip-Oil.php"> Dior Addict Lip Glow Oil</a>
                </h3>
                <p class="u-text u-text-2">185 SAR</p>
                
                
                
                <form method="POST">
                
                <input type="submit" name="dlg" value="ADD TO CART" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">
                <input type="hidden" name="num1" value="1">
                
                </form>
                
                
                
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="1200" data-image-height="1200" src="images/3614273749459-1.jpg">
                <h3 class="u-text u-text-default u-text-3">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-text-hover-grey-50 u-btn-3" data-href="Lancome-idole.php" href="Lancome-idole.php">Lancome idole l'eau de parfum nectar</a>
                </h3>
                <p class="u-text u-text-4">639 SAR</p>
                
                
                <form method="POST">
                
                <input type="submit" name="lip" value="ADD TO CART" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">
                <input type="hidden" name="num2" value="2">
                
                </form>
                
                
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1080" data-image-height="1080" src="images/51W2M5-Hn4L.jpg">
                <h3 class="u-text u-text-default u-text-5">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-text-hover-grey-50 u-btn-5" data-href="#" href="Estee-Lauder.php"> Estee Lauder Night Repair Serum</a>
                </h3>
                <p class="u-text u-text-6">456 SAR</p>
                <form method="POST">
                <input type="submit" name="eln" value="ADD TO CART" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">
                <input type="hidden" name="num3" value="3">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-47d0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="800" data-image-height="800" src="images/75584-sol-de-janeiro-cheirosa-68-perfume-mist-240-ml-20220610-164346-big-2x.jpg">
                <h3 class="u-text u-text-default u-text-1">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-text-hover-grey-50 u-btn-1" data-href="#" href="Sol-De-Janeiro.php"> Sol De Janeiro 68 Perfume Mist</a>
                </h3>
                <p class="u-text u-text-2">179 SAR</p>
                <form method="POST">
                <input type="submit" name="sdj" value="ADD TO CART" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">
                <input type="hidden" name="num4" value="4">
                </form>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="800" data-image-height="800" src="images/4938822_1.jpg">
                <h3 class="u-text u-text-default u-text-3">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-text-hover-grey-50 u-btn-3" data-href="#" href="Dior-Rosy.php"> Dior Backstage Rosy Glow</a>
                </h3>
                <p class="u-text u-text-4">190 SAR</p>
                <form method="POST">
                <input type="submit" name="dbr" value="ADD TO CART" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">
                <input type="hidden" name="num5" value="5">
                </form>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="585" data-image-height="585" src="images/641300_swatch.png">
                <h3 class="u-text u-text-default u-text-5">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-text-hover-grey-50 u-btn-5" data-href="CH-Good-Girl-Midnight.php" href="CH-Good-Girl-Midnight.php">CH Good Girl Midnight</a>
                </h3>
                <p class="u-text u-text-6">650 SAR</p>
                <form method="POST">
                <input type="submit" name="cgg" value="ADD TO CART" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-4">
                <input type="hidden" name="num6" value="6">
                </form>
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
