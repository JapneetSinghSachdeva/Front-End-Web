<?php 

session_start();
if(isset($_SESSION['username'])){
	$_SESSION= "You must login to view this page";
	header ("location : login.php");
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home-Page</title>
 </head>
 <body>
 <h1 class="display-2"> This is the homepage</h1>
<?php
if (isset($_SESSION['success'])) : ?>

<div>
	
	<h5 class="display-4">
		<?php 
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		?>
	</h5>

</div>

<?php endif ?>


<!-- Show some info about user if logs in:- -->
<?php if(isset($_SESSION['username'])) :?>

	<h5 class="display-4"> Welcome <b><?php echo $_SESSION['username']; ?></b></h5>
	<a href="index.php?logout='1'" class="btn-danger btn-lg"></a>
<?php endif ?>


 </body>
 </html>