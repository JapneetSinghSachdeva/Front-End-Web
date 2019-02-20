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
     <form action="login.php" method="post">
        <div>
         <label for="email">Email:</label>
         <input type="text" name="email">

       </div>
        <div>
         <label for="password">Password:</label>
         <input type="password" name="password_1">

       </div>
      
       <button type="submit" class="btn-success btn-lg" name="loginUser">Login</button>
       <p>Not a previous user?<a href="registration.php" class="btn-danger btn-lg">register</a></p>
     </form>
   </div>

</body>
</html>
