<?php
//if(isset($_POST['submit'])){
echo "entered the process";
$email = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];
if ($email=='admin@admin.com' && $pass=='admin'){
echo "authenticated";
//header("Location:http://localhost/adminwelcome.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Survey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="adminwelcome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">ONLINE SURVEY SYSTEM</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="addpoll.html">Add Poll</a></li>
            <li><a href="viewresult.html">View Result</a></li>
            <li class="social pull-right"><a href="homepage.html">Logout</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <br>
  <center><img src="http://www.bpptpm.lubuklinggaukota.go.id/2017/appweb/themes/web_/pegawai/sastro.jpeg"></center>
  
  
  <br>
 <center> <h1>Welcome Admin</h1></center>
  <br>
  
  
  
  
  
 
</body>
</html>
<?php

}
else{
echo "invalid" ;
}
//}
?>
