
     
<?php
 
 if (isset($_GET['output'])){
     $user= $_GET['output'] ;	
    
 }
 
 else {
     echo "hello hacker";
     die();
}
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test</title>    
    
    <!-- <script type="text/javascript" src="js/weather.js"></script> -->
</head>
<body>

<div class="container-fluid">

<p>Welcome <?php echo $user; ?>!</p>

</div>
</body>
</html>
<script>
