<?php
  session_start();
	
  if (isset($_SESSION['user_id'])) {
    header('Location: /DIMENSION-CUBE/INICIO/index.php');
  }
  require 'Database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /DIMENSION-CUBE/INICIO/index.php");
    } else {
      $message = 'Sorry, the username or password is incorrect';
	  $class='text-false';
    }
  }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dimension Cube</title>
		<link rel="shortcut icon" type="image/x-icon" href="../IMAGENES/icono.png">
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../CSS/style Login.css" id="style"  disabled>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../CSS/style load.css" id="style_load">
	<script src="../SCRIPT/script load.js"></script>
</head>
<body id="body" class="body_load">
	<div id="contenedor_carga" class="loader">
		<div class="loading_1"></div>
		<div class="loading_2"><h1>Loading...</h1></div>
	</div>
	<div id="html" style="opacity: 0; visibility: hidden;">  
		<?php if (!empty($message)): ?>
			<div class="<?php echo $class; ?>"><p><center><?=$message ?></center></p></div>
			<br></br>
		<?php endif; ?>
		<nav class="main">
			<a href="../index.html"><img src="../IMAGENES/text-img.png" width="300" height="166"></a>
			<br></br>
			
		</nav>
		<div class="formulario">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			<form action="Login.php" method="post">
				<br></br>
				<input type="email" name="email" placeholder="Enter your Email or name" required>
				<input type="password" name="password" placeholder="Enter your Password" required>
				<p><a class="text" href="Forgot Password.php">Forgot Password?</a></p>
				<input type="submit" value="Log In">
			</form>
			<center><hr></hr></center>
			<form action="SignUp.php" method="post">
				<input type="submit" value="Sign Up">
			</form>
		</div>
		<br></br>
		<br></br>
		</div>
	</body>
</html>