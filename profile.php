
     
<?php
 include("auth.php");
 require_once 'conn.php';
 
     $username= $_SESSION["username"] ;
  
		
    
    $query="SELECT * FROM member where username='$username'" ;

    $result = $conn->query($query);

                // foreach($result as $my_row){
                //     $my_row = (object) $my_row;
                  
                //     $my_id=$my_row->id;
                //     $my_username=$my_row->username;
                //      $my_email=$my_row->email;
                //      $my_firstname=$my_row->firstname;
                //      $my_password=$my_row->password;
                //     $my_lastname=$my_row->lastname;
                // }
    
 
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
<p>This is secure area.</p>
<a  href="logout.php">Logout</a>
<br>
<br>
<?php
foreach($result as $my_row){
    $my_row = (object) $my_row;
 echo "<h5>the UserName: <strong>$my_row->username</strong></h5>";
 echo "<h5>the ID:<strong>$my_row->id</strong></h5>";
 echo "<h5>the UserName: <strong>$my_row->password</strong></h5>";
 echo "<h5>the ID:<strong>$my_row->firstname</strong></h5>";
 echo "<h5>the UserName: <strong>$my_row->lastname</strong></h5>";
 echo "<h5>the ID:<strong>$my_row->email</strong></h5>";
 echo "<hr>";
 }
?>



</div>
</body>
</html>