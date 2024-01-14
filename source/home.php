<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-color: #dbc6c6;
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
 
  <div class="w3-display-middle">
   <?php session_start();?>
    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1){ ?><h1 class="w3-jumbo w3-animate-top">Welcome,<?php if(!empty($_SESSION['user_data']['name']))echo $_SESSION['user_data']['name'];?></h1><?php }?>
    <?php if(!empty($_SESSION)){ ?>
      <h4>Your Uploaded image is below</h4>
      <img src="<?php echo $_SESSION['user_data']['profile_img'];?>">
    <?php }?>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <?php if(empty($_SESSION)){ ?><p class="w3-large w3-center"><a href="./source/registerform.php">Register</a></p><?php }?>
    <?php if(empty($_SESSION)){ ?><p class="w3-large w3-center"><a href="./source/loginform.php">Login</a></p><?php }?>
    <!-- <p class="w3-large w3-center"><a href="../source/logout.php">Logout</a></p> -->
    <?php if(!empty($_SESSION)){ ?>
      <form action="../source/logout.php" method="post"> 
        <input type="submit" value="Logout"> 
      </form> 
    <?php }?>
  </div>
  
</div>

</body>
</html>
