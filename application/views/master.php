<!DOCTYPE html>
<html lang="en" ng-app="example_codeenable">

<head>
 
   <title ng-bind-template="Codeenable | {{title}}"></title>

 
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <base href="http://localhost/ACI/"> 

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.5/angular.js"></script>     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.3/angular-ui-router.js"></script>
  <script data-require="ui-bootstrap@*" data-semver="0.12.1" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.min.js"></script>
    
  <script src="<?php echo site_url('angularjs/app.js'); ?>"></script>
  <script src="<?php echo site_url('angularjs/student_contrloer.js'); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
    <body>
     
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
<!--                          <li> <img src="./assets/images/ce.png" alt="CE" class="tlogo"> </li>-->
                        <li class="active"><a href="index.php">Home</a></li>
                    </ul>

                </div>
            </div>
        </nav>


<div class="container " > 
    <div class="row content">

          <div ui-view> .....</div>
           </div>
       

 
    
</div>


        

<footer class="container-fluid text-center">
  <p>@Codeenable.com</p>
</footer>
    
  
</body>
</html>