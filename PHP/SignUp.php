<?php
  session_start();
	
  if (isset($_SESSION['user_id'])) {
    header('Location: /DIMENSION-CUBE/INICIO/index.php');
  }
  require 'Database.php';
  
  $message = '';
  $class = '';
  
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
		if ($_POST['password']==$_POST['confirm_password']){
			
			$records = $conn->prepare('SELECT id, email FROM users WHERE email = :email');
			$records->bindParam(':email', $_POST['email']);
			
			if ($records->execute()){
				$results = $records->fetch(PDO::FETCH_ASSOC);
				$correo=$_POST['email'];
				if ($correo==$results['email']) {
					$repetido=True;
				} else{
					$repetido=False;
				}
			} else {
				$repetido=False;
			}
			
			
			if($repetido==False){
				$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
				$stmt = $conn->prepare($sql);
				$stmt->bindParam(':email', $_POST['email']);
				$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
				$stmt->bindParam(':password', $password);
				
				if ($stmt->execute()) {
				  $message = 'Your account has been created successfully';
				  $class="text-true";
				  $records = $conn->prepare('SELECT id FROM users WHERE email = :email');
				  $records->bindParam(':email', $_POST['email']);
				  if ($records->execute()){
					$results = $records->fetch(PDO::FETCH_ASSOC);
					$_SESSION['user_id'] = $results['id'];
				  }
				} else {
				  $message = 'Sorry, an unexpected error has occurred, your account has not been created';
				  $class="text-false";
				}				
			}else{
				$message = $correo.' -This email is already linked to an account';
				$class="text-false";
			}
		}else{
			$message = 'Passwords do not match, enter a valid password';
			$class="text-false";
		}
 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dimension Cube</title>
		<link rel="shortcut icon" type="image/x-icon" href="../IMAGENES/icono.png">
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../CSS/style SignUp.css" id="style"  disabled>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Ewert&display=swap" rel="stylesheet">
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
			<form action="SignUp.php" method="post">
				<br></br>
				<input type="email" name="email" placeholder="Enter your Email or name" required>
				<input type="password" name="password" placeholder="Enter your Password" required>
				<input type="password" name="confirm_password" placeholder="Confirm your Password" required>
				<input type="submit" value="Sign Up">
			</form>
			<center><hr></hr></center>
			<form action="Login.php" method="post">
				<input type="submit" value="Log In">
				<br></br>
			</form>
		</div>
		<br></br>
		<br></br>
		<?php if(!empty($_POST['email']) && !empty($_POST['password']) && $_POST['password']==$_POST['confirm_password']): ?>
			<?php if($repetido==False): ?>
				<script>
					setTimeout(alertFunc, 4000);
					function alertFunc() {
					  location.replace("../INICIO/index.php")
					}
				</script>
			<?php endif; ?>
		<?php endif; ?>
		</div>
	</body>
</html>