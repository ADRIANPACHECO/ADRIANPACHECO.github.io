<!--
    Made by Adrian Pacheco 
-->
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    <meta name="description" content="Portolio">
    <meta name="author" content="Adrian Pacheco">
<!-- Change Favicon -->
    <link rel="icon" href=""> 
    
    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/hover.css" rel="stylesheet" media="all">

    <title>Adrian Pacheco</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
<!--    Navigation Bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">        
        <button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>

        </button>
        <div class="collapse navbar-collapse navHeaderCollapse">
           <ul class="nav navbar-nav">
               <li class="dropdown">
                   <a href="/index.html" class="dropdown-toggle" data-toggle = "dropdown" style="color: #f4f4f2"> Work <b class="caret"></b></a>
                   <ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
                      <li><a href="#">FitTraction</a></li>
                      <li><a href="#">Dawg Deals</a></li>
                      <li><a href="#">Honey OS</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">WayUp</a></li>
                      <li><a href="#">SoundCloud Web App</a></li>
                      <li><a href="#">Police Data Visualization</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Third Person</a></li>
                      <li><a href="#">MxJ Portfolio</a></li>
                   </ul>
                </li>
<!--                <li><a href="#">Blog</a></li>-->
                <li class="hvr-underline-from-center"><a style="color: #f4f4f2" href="/pages/about.html">About</a></li>
                <li class="hvr-underline-from-center"><a style="color: #f4f4f2" href="/pages/contact.html">Contact</a></li>
           </ul>
        </div>
      </div>
    </nav>  
<!--    Footer-->
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text pull-left" id="copyright">&copy; Adrian Pacheco 2016 </p>
            <a class="navbar-text pull-right bottom-icon" id="icon" href="https://github.com/ayepee" target="_blank"><i class="fa fa-github fa-lg"></i></a>
            <a class="navbar-text pull-right bottom-icon" href="https://dribbble.com/ayepee_12" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a>
            <a class="navbar-text pull-right bottom-icon" href="https://medium.com/@ayepee_12" target="_blank"><i class="fa fa-medium fa-lg"></i></a>
        </div>
    </div>
    <form action="contact.php" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" />
    </div>
    <div>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" />
    </div>
    <div>
        <label for="msg">Message:</label>
        <textarea id="msg"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Send your message</button>
    </div>
</form>
    
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>