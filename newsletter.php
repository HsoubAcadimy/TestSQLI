
     
<?php
 include("auth.php");
 require_once 'conn.php';
 if (isset($_GET['username'])){
    
     $username= $_GET['username'] ;
     $reply=$conn->query("SELECT * FROM member where username='".$username."'" );
    // echo $reply->rowCount();
    //  if($reply->fetchAll(PDO::FETCH_ASSOC)){
    //  echo "successfully added to newsletter";
    $numRows=0;
     while($rows = $reply->fetchAll(PDO::FETCH_ASSOC)){
        ++$numRows;
    }
    if($numRows!=0){
        echo "successfully added to newsletter";
        
    }
}

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

      <script type="text/javascript" src="js/weather.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
		 <div class="container-fluid"  style="float:left">
			<a class="navbar-brand" >Hsoub Acadimy</a>
		</div>
        <div style="float:right">
            <a class="navbar-brand" href="weatherapp.php" >The App </a>
		</div> 
	</nav>
<div class="container-fluid">

<div class="row form-group form-inline" id="cityDiv">
<h2>اشترك في النشرة البريديدة</h2>
<form  action="newsletter.php">
<input type="text" name="username"  class="form-control" placeholder="Enter username" >
<input type="submit" class="btn btn-primary"><br><br>
           <img width=" 65%" src="https://doofindermedia.s3.amazonaws.com/blog/2017/06/05/que%20es%20un%20newsletter.jpg">   
        </div>
</form>
</div>
</body>
</html>