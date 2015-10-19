
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TodayThoughts Template</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="wrapper" class="container">
<header> 
  <!-- begin -->
  
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid"> 
      <!-- Home and toggle get grouped for better mobile display -->
      <div class="navbar-header"><a class="navbar-brand" href="#">Home</a></div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <ul class="nav navbar-nav">
        <li><a href="update_data.php">Update Data</a></li>      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <!-- Begin Login -->
        <li class="dropdown">
        <?php
      if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {
      $inactive = 60 * 60 * 1;
      if (time() - $_SESSION['timeout'] > $inactive) {
        $_SESSION['valid'] = false;	
        session_unset();
        session_destroy();
      } else {
        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">' 
        . $_SESSION['username'] . '<b class="caret"></b></a>';
        echo '<ul class="dropdown-menu">';
        echo '<li><a href="redirect.php?action=logout">Logout</a></li>';
        echo '</ul>';
      }
    } else {
      echo '<a href="login.php">Login</a>';
    }
    
    ?>
        </li>
        <!-- End Login -->  
      </ul>
    </div>
    <!-- /.container-fluid --> 
  </nav>
  
  <!-- end --> 
</header>

<!--
  By Lộc Nguyễn
  Feb 21, 2014
-->
