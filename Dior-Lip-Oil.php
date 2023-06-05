

<?php

require('config/db.php');

 // Check for submit
    if(isset($_POST['submitF'])){
        // Get form data
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $review = mysqli_real_escape_string($conn, $_POST['review']);
        
        
        $stmt = $conn->prepare("NSERT INTO Review(c_name, title, review) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $name, $title, $review);
        
        $stmt->execute();
        

        if($stmt->execute())){
            header('Location: Dior-Lip-Oil.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    
    
    
    	$result1 = mysqli_query($conn, "SELECT MAX(review_id) FROM Review");
    	$row = mysqli_fetch_array($result1);
	$max_re = $row[0];
	
	$query = "SELECT review FROM Review WHERE review_id='$max_re'";
        $result = $conn->query($query);
        $r = mysqli_fetch_array($result);
        
        $re_2 = $max_re - 1;
        $query2 = "SELECT review FROM Review WHERE review_id='$re_2'";
        $result2 = $conn->query($query2);
        $r2 = mysqli_fetch_array($result2);
    
    
    
    
    ?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Dior Addict Lip Glow Oil, ​SEE CUSTOMER REVIEWS">
    <meta name="description" content="">
    <title>Dior Lip Oil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Dior-Lip-Oil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.10.3, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/BeautyLogo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Dior Lip Oil">
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
                    
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
            
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-0de2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="">
                <div class="u-container-layout u-container-layout-1" src="">
                  <div class="u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-07a9">
                    <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                      <li data-u-target="#carousel-07a9" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                      <li data-u-target="#carousel-07a9" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                      <li data-u-target="#carousel-07a9" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
                    </ol>
                    <div class="u-carousel-inner u-gallery-inner" role="listbox">
                      <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                        <div class="u-back-slide" data-image-width="1000" data-image-height="950">
                          <img class="u-back-image u-expanded" src="images/51c6yX3sSpS.jpg">
                        </div>
                        <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                        <div class="u-back-slide" data-image-width="445" data-image-height="445">
                          <img class="u-back-image u-expanded" src="images/product_v1_x1.jpg">
                        </div>
                        <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                      </div>
                      <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3" data-image-width="445" data-image-height="445">
                        <div class="u-back-slide" data-image-width="890" data-image-height="890">
                          <img class="u-back-image u-expanded" src="images/R.jpg">
                        </div>
                        <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-3">
                          <h3 class="u-gallery-heading"></h3>
                          <p class="u-gallery-text"></p>
                        </div>
                        <style data-mode="XL" data-visited="true"></style>
                        <style data-mode="LG"></style>
                        <style data-mode="MD"></style>
                        <style data-mode="SM"></style>
                        <style data-mode="XS"></style>
                      </div>
                    </div>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-07a9" role="button" data-u-slide="prev">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                      </span>
                      <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                      </span>
                    </a>
                    <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-07a9" role="button" data-u-slide="next">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                      </span>
                      <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="u-align-justify u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-white u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-1"> Dior Addict Lip Glow Oil<br>
                  </h2>
                  <p class="u-text u-text-2">
                    <span style="font-weight: 700;">DESCRIPTION</span>
                    <span style="font-size: 0.875rem;">
                      <br>
                    </span>
                    <span style="font-size: 0.875rem;">T​he Dior Addict Lip Glow lip balm is available as a glossy lip oil that deeply protects and enhances the lips, lastingly bringing out their natural color.<br>
                      <br>Genuine lip care infused with cherry oil, Dior Addict Lip Glow Oil instantly nourishes, protects, softens and revitalizes the lips.<br>
                      <br> This lip oil teams an intense lip care formula with a natural, flattering color finish for an ultra-luminous result. Dior Addict Lip Glow Oil adapts to all lip colors to bring out their rosy glow. Its non greasy, non-sticky oil texture pushes the boundaries of shine and creates a smoothing film that shapes the lips with an almost magnifying mirror shine effect.
                    </span>
                    <br>
                    <br>
                    <span style="font-size: 1.5rem; font-weight: 700;"> 185 SAR</span>
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-2-light-3 u-section-2" id="sec-e24e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1"> WRITE A REVIEW</h1>
        <div class="u-form u-form-1">
          <form method="POST" name="form">
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-3b9a" class="u-label">Name</label>
              <input type="text" id="name-3b9a" name="name" class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-radius-17 u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-top">
              <label for="email-3b9a" class="u-label">Product Name</label>
              <input type="text" id="email-3b9a" name="title" class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-radius-17 u-input-2" >
            </div>
            <div class="u-form-group u-form-message u-label-top">
              <label for="message-3b9a" class="u-label">Review</label>
              <textarea rows="4" cols="50" id="message-3b9a" name="review" class="u-border-2 u-border-custom-color-1 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-radius-17 u-input-3" required=""></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-label-top">
              <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-2 u-radius-50 u-text-white u-btn-1">Submit</a>
              <input type="submit" name="submitF" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="90ab977f36c8ae61a60f4edd95adb76d">
          </form>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-c21d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1"> Customer&nbsp;<b><i>reviews</i></b>
        </h2>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-palette-2-light-3 u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="512" data-image-height="512"></div>
                <h6 class="u-text u-text-default u-text-2">  </h6>
                <p class="u-text u-text-3"> 
                
                <?php
		             
					echo print_r($r['review'], true);
				
			?>
                
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-palette-2-light-3 u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-2" data-image-width="512" data-image-height="512"></div>
                <h6 class="u-text u-text-default u-text-4"></h6>
                <p class="u-text u-text-5">
                
                <?php
		             
					echo print_r($r2['review'], true);
				
			?>
                
                </p>
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
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Website Builder</span>
      </a>. 
    </section>
  
</body></html>
