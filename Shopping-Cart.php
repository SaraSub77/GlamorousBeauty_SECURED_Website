

<?php

require('config/db.php');

 // Check for submit
    if(isset($_POST['update'])){
        
        session_start();
        $inv = $_SESSION['invoice_ID'];
        

        $query = "SELECT * FROM Cart WHERE invoice_id= '$inv' ";
        
        $result=mysqli_query($conn, $query);
        
        $result=$conn->query($query);
        
        $rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
	  $rows[] = $row ;
	}
        
        $num = mysqli_num_rows($result);
        
        
        $count = 0;
	$total = 0;
	while($count<$num)
	{
		$total = $total + $rows[$count]['price'];
		$count++;
	}
        
        
        
        
        if(mysqli_query($conn, $query)){
            //header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    
    }
    
    
    if(isset($_POST['checkout'])){
	
    	
    	session_start();
        $inv = $_SESSION['invoice_ID'];
        

        $query = "SELECT * FROM Cart WHERE invoice_id= '$inv' ";
        
        $result=mysqli_query($conn, $query);
        
        $result=$conn->query($query);
    	
    	
    	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
	  $rows[] = $row ;
	}
        
        $num = mysqli_num_rows($result);
        
        
        $count = 0;
	$total = 0;
	while($count<$num)
	{
		$total = $total + $rows[$count]['price'];
		$count++;
	}
    	
        $query1 = "INSERT INTO Bills(total_price) VALUES('$total')";
        
        
        if(mysqli_query($conn, $query1)){
            session_destroy();
            header('Location: Thanks-For-Ordering.php');
        } else {
            echo 'ERROR: '. mysqli_error($conn);
        }
    }
    

?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Product 1 Title, Product 2 Title, Product 3 Title">
    <meta name="description" content="">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Shopping-Cart.css" media="screen">
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
    <meta property="og:title" content="Shopping Cart">
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
              
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sign-Up.html">Register</a>
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
                <ul class="u-nav u-spacing-2 u-unstyled u-nav-3"><li class="u-nav-item"><a href="#" style="padding: 10px 20px;"></a>
</li><li class="u-nav-item"><a href="#" style="padding: 10px 20px;"></a>
</li><li class="u-nav-item"><a href="#" style="padding: 10px 20px;"></a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shop.html"></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Shopping-Cart.html"></a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
            
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-palette-2-light-3 u-section-1" id="sec-dfb3">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-black u-text-default u-text-1">MY CART</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-b734">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-cart u-cart-1">
          <div class="u-cart-products-table u-table u-table-responsive">
            <table class="u-table-entity">
              <colgroup>
                <col width="65%">
                <col width="15%">
                <col width="15%">
                <col width="15%">
              </colgroup>
              <thead class="u-palette-2-light-3 u-table-header u-table-header-1">
                <tr style="height: 46px;">
                  <th class="u-border-1 u-border-grey-15 u-table-cell">Product </th>
                  <th class="u-border-1 u-border-grey-15 u-table-cell">Price </th>
                </tr>
              </thead>
              <tbody class="u-align-left u-table-alt-palette-2-light-3 u-table-body">
                <tr style="height: 121px;">
                
                  <td class="u-border-1 u-border-grey-15 u-table-cell">

                    <h2 class="u-cart-product-title u-product-control u-text u-text-1">
                    <?php
                     $count = 0;
                     if(isset($_POST['update'])){
			while($count<$num)
			{
				echo print_r($rows[$count]['product_name'], true).'<br>';
				$count++;
			}}
			?>
                    </h2>
                  </td>
                  
                  <td class="u-border-1 u-border-grey-15 u-table-cell">
                    <div class="u-cart-product-price u-product-control u-product-price">
                      <div class="u-price-wrapper">
                        <div class="u-hide-price u-old-price"></div>
                        <h2 class="u-cart-product-title u-product-control u-text u-text-1">
                        <?php
		             $count = 0;
		             if(isset($_POST['update'])){
				while($count<$num)
				{
					echo print_r($rows[$count]['price'], true).'<br>';
					$count++;
				}}
			?>
                        </h2>
                      </div>
                    </div>
                  </td>
                  
                </tr>
                
                
              </tbody>
            </table>
          </div>
          <div class="u-cart-button-container">
            <a href="Shop.php" class="u-active-none u-btn u-button-style u-cart-continue-shopping u-hover-feature u-hover-none u-none u-text-hover-custom-color-1 u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712    L143.492,221.863z"></path>
</g>
</g></svg></span>&nbsp;Continue Shopping 
            </a>
            
            
            <form method="POST">
            <input type="submit" name="update" value="Update Cart" class="u-btn u-btn-round u-button-style u-cart-update u-grey-5 u-hover-palette-2-light-3 u-radius-50 u-btn-2">
            </form>
            
            
          </div>
          
            <div class="u-cart-block u-cart-totals-block u-indent-30">
              <div class="u-cart-block-container u-clearfix">
                <h5 class="u-cart-block-header u-text u-text-6">Cart Totals</h5>
                <div class="u-align-right u-cart-block-content u-text">
                  <div class="u-cart-totals-table u-table u-table-responsive">
                    <table class="u-table-entity">
                      <colgroup>
                        <col width="50%">
                        <col width="50%">
                      </colgroup>
                      <tbody class="u-align-right u-palette-2-light-3 u-table-body u-table-body-2">
                        
                        <tr style="height: 46px;">
                          <td class="u-align-left u-border-1 u-border-grey-15 u-first-column u-table-cell u-table-cell-19">Total</td>
                          <td class="u-border-1 u-border-grey-15 u-table-cell u-table-cell-20">
                          <h2 class="u-cart-product-title u-product-control u-text u-text-1">
                        <?php
		             if(isset($_POST['update'])){
				
				echo $total;
				}
			?>
                        </h2>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  <form method='POST'>
                  <input type="submit" name="checkout" value="CONFIRM ORDER" class="u-border-none u-btn u-btn-round u-button-style u-cart-checkout-btn u-custom-color-2 u-radius-50 u-btn-4">
                  </form>
                  
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
