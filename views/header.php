<html>
<head>
	<title>

	</title>
  
   <div id="header">
    <?php Session::init();?>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <nav class="navbar navbar-default">
  <div class="container-fluid">

  <link rel="stylesheet" type="text/css" href="<?php  echo URL;?>public/css/default.css">
  <script type="text/javascript" src="<?php  echo URL;?>public/js/jquery.js"></script>
  <script type="text/javascript" src="<?php  echo URL;?>public/js/custom.js"></script>
           <?php
      if(isset($this->js)){
        foreach ($this->js as $js) {
          // js is array that is (dashboard/js/default.js)
         echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
     }
  ?>
  </head>
  <body>


    <!-- Brand and toggle get grouped for better mobile display -->
  <?php  if(Session::get("loggedIn")== false):?>
    <!-- if logged out echo 
       use help and index
      --> 
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php  echo URL;?>index">Index</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="<?php  echo URL;?>help">Help <span class="sr-only">(current)</span></a></li>
         <?php endif ;?>
        <?php  if(Session::get("loggedIn")== true):?>
          <!-- if logged in echo logged out 
        else echo link logged in
      --> 
     <ul class="nav navbar-nav">
      <!-- that page to admin 
   there are dashboard and users
    -->
      <li><a  href="<?php  echo URL;?>dashboard" >Dashboard</a></li>
       <?php  if(Session::get("role")== "owner" ):?>
       <li><a  href="<?php  echo URL;?>user" >Users</a></li>
        <?php endif ;?>

      <li><a  href="<?php  echo URL;?>dashboard/logout" >Logout</a></li>
       <?php else:?>
        <li><a  href="<?php  echo URL;?>login">Login</a></li>
      <?php endif ;?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <style type="text/css">    
        #footer
        {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        </style>






