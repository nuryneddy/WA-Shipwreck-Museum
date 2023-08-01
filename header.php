<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css" />
<title>   <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>
<body>


    <!-- header section start -->
    <header class="header_section">
      <div class="header_main">
         <div class="mobile_menu">

            
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>

         <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="toursandevents.html">Tours & Events</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="educationprograms.html">Education Programs</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                     
                  </ul>

   

               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <div class="menu_main">
               <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="toursandevents.html">Tours & Events</a></li>
                  <li><a href="educationprograms.html">Education Programs</a></li>
                  <li class="active"><a href="contact.html">Contact us</a></li>
            </div>
         </div>
      </div>
<!-- header section end -->

         <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="banner_content">
                      <h1 class="banner_title">Australia's <br> most bloody <br> maritime mutinies</h1>
                      <p class="banner_text">The bloody truth: Australia’s worst mass murders, investigating
                          horrifying tale of one of the world’s most terrifying and gruesome shipwreck stories.</p>
                      <div class="details_bt"><a href="#">Visit Now</a></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- banner section end -->
   
  <?php wp_head(); ?> 
</header>