<?php session_start(); 
require 'dbconnect.php';
include 'includes/function.php';
?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adhub</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo">AdHub</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="#search">Search Items</a>
            </li>
            <li>
           <a href="#popular">Strange & wonderful Products</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#contact">Contact Us</a>
            </li>    
              <?php
                if( isset($_SESSION["firstname"]) ) {
                  $buttons = "<li>
                                <a href='adform.php'>Place an advert</a>
                             </li> 
                                   <li> <a class='dropdown-trigger' href='#' data-target='dropdown1'>
                                &nbsp;&nbsp;Hello,<b> ".$_SESSION["firstname"]."&nbsp;&nbsp;</b></a>
                              </li>
                             <!-- Dropdown Structure -->
                              <ul id='dropdown1' class='dropdown-content'>
                                <li>
                                <a href='profile.php'>Profile</a>
                              </li>
                               <li>
                                <a href='logout.php'>Logout</a>
                              </li>
                              ";
                }else{
                  $buttons = "<li>
                                <a href='login.php'>Login</a>
                              </li>
                              <li>
                                <a href='signup.php'>Sign Up</a>
                              </li>";
                }
                 echo $buttons; 
              ?>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
       <a href="#search">Search Items</a>
    </li>
    <li>
     <a href="#popular">Strange & wonderful Products</a>
    </li>
    <li>
      <a href="#gallery">Gallery</a>
    </li>
    <?php
                if( isset($_SESSION["firstname"]) ) {
                  $buttons = "<li>
                                <a href='adform.php'>Place an advert</a>
                             </li> 
                              <li>
                                <a href='profile.php'>Profile</a>
                              </li>
                               <li>
                                <a href='logout.php'>Logout</a>
                              </li>
                              ";
                }else{
                  $buttons = "<li>
                                <a href='login.php'>Login</a>
                              </li>
                              <li>
                                <a href='signup.php'>Sign Up</a>
                              </li>";
                }
                 echo $buttons; 
              ?>
	 <li>
      <a href="#contact">Contact Us</a>
     </li>
  </ul>