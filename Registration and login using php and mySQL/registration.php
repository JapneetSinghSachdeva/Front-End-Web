<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration using PHP and MySQL</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
   <div class="container-fluid">
     <div class="header">
       <h2 class="display-3">Register!</h2>
     </div>

        

     <form action="registration.php" method="post">
      
      <?php include('errors.php') ?>

       <div>
         <label for="username">Username:</label>
         <input type="text" name="username">

       </div>
        <div>
         <label for="email">Email:</label>
         <input type="text" name="email">

       </div>
        <div>
         <label for="password">Password:</label>
         <input type="password" name="password_1">

       </div>
        <div>
         <label for="password">confirm-password:</label>
         <input type="text" name="password_2">

       </div>
       <button type="submit" class="btn-outline-success btn-lg" name="register_user">Register</button>
       <p>Already a user?<a href="login.php" class="btn-primary btn-lg">Login</a></p>
     </form>
   </div>

</body>
</html>
