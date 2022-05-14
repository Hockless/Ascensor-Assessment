<!DOCTYPE html>
<html lang="en"> 
<head>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">   
    <link rel="shortcut icon" href="/wp-content/themes/Forest Theme/assests/images/logo.png"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
    
    <?php
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header text-center">	    
	  
    <nav class="navbar navbar-expand-lg navbar-light bg-light background-color: rgb(42, 42, 42);
    color: rgb(255, 255, 255);">
  <a class="navbar-brand" href="#">Company Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav" style="position:fixed; top:4%; right:0%; ">
      <li class="nav-item">
        <a class="nav-link" href="http://ascensor-assessment.local/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://ascensor-assessment.local/about">About</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="http://ascensor-assessment.local/faqs">FAQs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://ascensor-assessment.local/blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://ascensor-assessment.local/wp_admin">Admin Page</a>
      </li>
      
    </ul>
    
  </div>
</nav>
	   
    </header>
    <?php
     dynamic_sidebar('Sidebar-1')
    ?>
    <div class="main-wrapper">
	    