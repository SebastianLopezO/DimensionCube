<?php
 require 'PHP/Seguridad.php';
?>
<?php if(!empty($user)): ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="IMAGENES/re.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dimension Cube</title>
  <link rel="stylesheet" type="text/css" href="CSS/style.css" id="style"  disabled>
  
	<script src="https://use.fontawesome.com/aceefab4f6.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" href="CSS/style load.css" id="style_load">
	<script src="SCRIPT/script load.js"></script>
</head>
<body id="body" class="body_load">
	<div id="contenedor_carga" class="loader">
		<div class="loading_1"></div>
		<div class="loading_2"><h1>Loading...</h1></div>
	</div>
<div id="html" style="opacity: 0; visibility: hidden;"> 
	<script>
	/*jquery*/
		$(document).ready (function(){
				
			/*More*/
				$('#link-1_More').on('click', function(){
					/*difuminar*/
					var difuminar = document.getElementById("html"); 
					difuminar.style.filter = "blur(7px)";
					
					let body = document.querySelector("#body");
					/*Crear tarjeta*/
					body.children[0].insertAdjacentHTML('afterend','<div id="container_cards_ReadMore" class="container_cards_ReadMore"><div id="card-1" class="card"> <div class="box"> <div class="content"> <h2>01</h2> <h3>&nbsp;&nbsp;</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p> <a id="link-Less" href="#">Read Less</a></div></div> </div></div><div id="container_cards_info" class="container_cards_info"><div class="card"><div class="content"><div class="imgBx-SLO"><img src="https://admin.inemjose.net/fotos/190030.JPG"></div><div class="contentBx"><h3>Sebastian Lopez Osorno<br><span>I.E INEM JOSE FELIX DE RESTREPO</span></h3></div></div><ul class="sci"><li style="--i:1"><a target="_blank" href="https://www.facebook.com/sebastian.lopezosoeno.9"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><li style="--i:1"><a target="_blank" href="https://www.instagram.com/sebastianlopezosorno/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><li style="--i:2"><a target="_blank" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><li style="--i:3"><a target="_blank" href="https://mobile.twitter.com/SebastinLpezOs1"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li style="--i:4"><a target="_blank" href="https://www.youtube.com/channel/UCGQHewWUzKma2xTWgYvE-lw"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li><li style="--i:5"><a target="_blank" href="mailto:sebastian.lopezosorno@inemjose.edu.co"><i class="fa fa-envelope" aria-hidden="true"></i></a></li></ul></div></div>');
					
					/*No permitir seleccionar*/
					body.children[0].insertAdjacentHTML('afterend','<div id="unselect" class="unselect"></div>');
					
					/*Less*/
					$('#link-Less').on('click', function(){
						var indet = document.getElementById("body");
						var cards_ReadMore = document.getElementById("container_cards_ReadMore");
						indet.removeChild(cards_ReadMore);
						var unselect = document.getElementById("unselect");
						indet.removeChild(unselect);
						var container_cards_info = document.getElementById("container_cards_info");
						indet.removeChild(container_cards_info);
						difuminar.style.filter = "blur(0px)";
					});
				});

				$('#link-2_More').on('click', function(){
					/*difuminar*/
					var difuminar = document.getElementById("html"); 
					difuminar.style.filter = "blur(7px)";
					
					let body = document.querySelector("#body");
					/*Crear tarjeta*/
					body.children[0].insertAdjacentHTML('afterend','<div id="container_cards_ReadMore" class="container_cards_ReadMore"><div id="card-2" class="card"> <div class="box"> <div class="content"> <h2>02</h2> <h3>&nbsp;&nbsp;</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p> <a id="link-Less" href="#">Read Less</a> </div>	</div> </div></div><div id="container_cards_info" class="container_cards_info"><div class="card"><div class="content"><div class="imgBx"><img src="https://admin.inemjose.net/fotos/190441.JPG"></div><div class="contentBx"><h3>Juan Sebastian Zapata<br><span>I.E INEM JOSE FELIX DE RESTREPO</span></h3></div></div><ul class="sci"><li style="--i:1"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><li style="--i:1"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><li style="--i:2"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><li style="--i:3"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li style="--i:4"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li><li style="--i:5"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li></ul></div></div>');
					
					/*No permitir seleccionar*/
					body.children[0].insertAdjacentHTML('afterend','<div id="unselect" class="unselect"></div>');
					
					/*Less*/
					$('#link-Less').on('click', function(){
						var indet = document.getElementById("body");
						var cards_ReadMore = document.getElementById("container_cards_ReadMore");
						indet.removeChild(cards_ReadMore);
						var unselect = document.getElementById("unselect");
						indet.removeChild(unselect);
						var container_cards_info = document.getElementById("container_cards_info");
						indet.removeChild(container_cards_info);
						difuminar.style.filter = "blur(0px)";
					});
				});
				
				$('#link-3_More').on('click', function(){
					/*difuminar*/
					var difuminar = document.getElementById("html"); 
					difuminar.style.filter = "blur(7px)";
					
					let body = document.querySelector("#body");
					/*Crear tarjeta*/
					body.children[0].insertAdjacentHTML('afterend','<div id="container_cards_ReadMore" class="container_cards_ReadMore"><div id="card-3" class="card"> <div class="box"> <div class="content"> <h2>03</h2> <h3>&nbsp;&nbsp;</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p> <a id="link-Less" href="#">Read Less</a> </div>	</div> </div></div><div id="container_cards_info" class="container_cards_info"><div class="card"><div class="content"><div class="imgBx"><img src="https://admin.inemjose.net/fotos/190441.JPG"></div><div class="contentBx"><h3>Maria Camila Mena Romaña<br><span>I.E INEM JOSE FELIX DE RESTREPO</span></h3></div></div><ul class="sci"><li style="--i:1"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><li style="--i:1"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><li style="--i:2"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><li style="--i:3"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li style="--i:4"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li><li style="--i:5"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li></ul></div></div>');
					
					/*No permitir seleccionar*/
					body.children[0].insertAdjacentHTML('afterend','<div id="unselect" class="unselect"></div>');
					
					/*Less*/
					$('#link-Less').on('click', function(){
						var indet = document.getElementById("body");
						var cards_ReadMore = document.getElementById("container_cards_ReadMore");
						indet.removeChild(cards_ReadMore);
						var unselect = document.getElementById("unselect");
						indet.removeChild(unselect);
						var container_cards_info = document.getElementById("container_cards_info");
						indet.removeChild(container_cards_info);
						difuminar.style.filter = "blur(0px)";
					});
				});
				
				$('#link-4_More').on('click', function(){
					/*difuminar*/
					var difuminar = document.getElementById("html"); 
					difuminar.style.filter = "blur(7px)";
					
					let body = document.querySelector("#body");
					/*Crear tarjeta*/
					body.children[0].insertAdjacentHTML('afterend','<div id="container_cards_ReadMore" class="container_cards_ReadMore"><div id="card-4" class="card"> <div class="box"> <div class="content"> <h2>04</h2> <h3>&nbsp;&nbsp;</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p> <a id="link-Less" href="#">Read Less</a> </div>	</div> </div></div><div id="container_cards_info" class="container_cards_info"><div class="card"><div class="content"><div class="imgBx"><img src="https://admin.inemjose.net/fotos/190441.JPG"></div><div class="contentBx"><h3>Caterin Martinez Badillo<br><span>I.E INEM JOSE FELIX DE RESTREPO</span></h3></div></div><ul class="sci"><li style="--i:1"><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li><li style="--i:1"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><li style="--i:2"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><li style="--i:3"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><li style="--i:4"><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li><li style="--i:5"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li></ul></div></div>');
					
					/*No permitir seleccionar*/
					body.children[0].insertAdjacentHTML('afterend','<div id="unselect" class="unselect"></div>');
					
					/*Less*/
					$('#link-Less').on('click', function(){
						var indet = document.getElementById("body");
						var cards_ReadMore = document.getElementById("container_cards_ReadMore");
						indet.removeChild(cards_ReadMore);
						var unselect = document.getElementById("unselect");
						indet.removeChild(unselect);
						var container_cards_info = document.getElementById("container_cards_info");
						indet.removeChild(container_cards_info);
						difuminar.style.filter = "blur(0px)";
					});
				});
				
		});
	</script>
  <header class="header">
    <div class="wrapper"></div>
      <div class="logo">Dimension Cube</div>
      <nav>
        <a href="inf del juego.php">INFORMACIÓN DEL JUEGO
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</a>
        <a href="PHP/LogOut.php">CERRAR SESION
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</a>
        <a href="#">JUGAR AHORA
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</a>
      </nav>
    </div>
  </header>
  <div class="animation">
      <video width="1350" autoplay preload="auto" loop >
      <source src="IMAGENES/Animated.mp4" type="video/mp4">
      </video>
    </div>
  <main class="main">
    <div class="contenedor">
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
        evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, <p>
  
        </p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
        volved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
          The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, <p>
  
        </p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
          their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
          evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
            The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, <p>
    
        </p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
            their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
            evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
              The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, <p>
      
        </p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
              their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
              evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>    
        </p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
            their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
            evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
              The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, <p>
      
        </p>content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as 
              their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have 
              evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>      
    </div>
    <footer>
				<div id="Title_cards" class="Title_cards">
					<h1>Developers</h1>
				</div>
				<div class="container_cards">
					<div id="card-1" class="card">
						<div class="box">
							<div class="content">
								<h2>01</h2>
								<h3>Sebastian Lopez Osorno</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p>
								<a id="link-1_More" href="#Title_cards">Read More</a>
							</div>	
						</div>
					</div>
					<div id="card-2" class="card">
						<div class="box">
							<div class="content">
								<h2>02</h2>
								<h3>Juan Sebastian Zapata</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p>
								<a id="link-2_More" href="#Title_cards">Read More</a>
							</div>	
						</div>
					</div>
					<div id="card-3" class="card">
						<div class="box">
							<div class="content">
								<h2>03</h2>
								<h3>Maria Camila Mena Romaña</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p>
								<a id="link-3_More" href="#Title_cards">Read More</a>
							</div>	
						</div>
					</div>
					<div id="card-4" class="card">
						<div class="box">
							<div class="content">
								<h2>04</h2>
								<h3>Caterin Martinez Badillo</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vestibulum leo at leo vehicula bibendum. Proin blandit suscipit ante, finibus pulvinar tellus sollicitudin vitae</p>
								<a id="link-4_More" href="#Title_cards">Read More</a>
							</div>	
						</div>
					</div>
				</div>
				<div class="container_info">
					<div class="sec aboutus">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut nunc mauris. Donec venenatis, est eu laoreet euismod, lorem urna tristique elit, nec euismod neque arcu ut dui. Integer tincidunt turpis at tellus feugiat, euismod pharetra ipsum interdum. Aenean venenatis ut orci id finibus. Duis lacinia vestibulum odio, ac semper tortor hendrerit vel.</p>
						
						<ul class="sci">
						<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
						
					</ul>
					</div>
					<div class="sec quickLinks">
						<h2>Quick Links<h2>
						<ul>
							<li><a href="#" >About</a></li>
							<li><a href="#" >FAQ</a></li>
							<li><a href="#" >Privacy Policy</a></li>
							<li><a href="#" >Help</a></li>
							<li><a href="#" >Terms &#38; Consitions</a></li>
							<li><a href="#" >Contact</a></li>
						</ul>
					</div>
					<div class="sec contact">
						<h2>Contact Info</h2>
						<ul class="info">
						<li>
							<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
							<span>647 Linda Street<br>Phoenixville, PA 19460,<br>USA</span>
						</li>
						<li>
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
							<p><a href="tel:+1 234 567 8900">+1 234 567 8900</a><br>
							<a href="tel:+1 897 567 2300">+1 897 567 2300</a></p>
						</li>
						<li>
							<span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
							<p><a target="_blank" href="https://api.whatsapp.com/send?phone=3218774053&text=Buenos%20d%C3%ADas,%20me%20comunico%20debido%20al%20juego%20Dimensi%C3%B3n%20cube.">+57 3218974053</a></p>
						</li>
						<li>
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<p><a href="mailto:Dimension.Cube.no.reply@gmail.com">Dimension.Cube.no.reply@gmail.com</a></p>
						</li>
						</ul>
					</div>
				</div>
			</footer>
			<div class="copyrightText">
				<p>Copyright © 2020 Dimension Cube. All Rights Reserved.</p>

			</div>
   </div>
</body>
</html>
<?php else: ?>

<!DOCTYPE html><!--html cuando no se inicio sesion-->
<html>
<body>
	<script>
		setTimeout(alertFunc, 1000);
		function alertFunc() {
		  location.replace("GAME OVER-ERROR.html")
		}
	</script>
</body>
</html>

<?php endif; ?>