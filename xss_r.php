
     
<?php
 
 if(ISSET($_GET['submit'])){
    $message = $_GET['firstname'];
    // header("location:xss_r.php");

    
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

<!-- <form method="POST" action="xss_r.php" style="text-align:center">
    <h1  class=" text-primary">أرسل الاسم</h4>
    <input type="text" name="user_n" id="name" class="form-control" placeholder="Enter your namme" ></textarea>
    <br><button style="text-align:left " id="user_name" name="user_name" class="btn btn-primary">submit</button>
</form> -->
<!-- <form method="GET" action="xss_r.php"> -->

    <!-- <textarea type="text" name="message" id="message" class="form-control" placeholder="Enter your namme" ></textarea>
    <button style="text-align:left " id="messagess" name="messages" class="btn btn-primary">submit</button>
    </form> -->
    <form action="xss_r.php" method="get">
    <h4  class=" text-primary">أرسل الاسم</h4>

         <input type="text" name="firstname" placeholder="First Name" /> 
          <input type="submit" name="submit" /> 
        </form> 

<div>
<h2> <?php if(ISSET($message)) echo $message; ?></p>
</div>
</body>
</html>
<script>
