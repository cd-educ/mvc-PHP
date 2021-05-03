<html>
	<head>
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./public/css/styles.css">
	</head>
	<body>

		<?php

			if(isset($_SESSION["msg"])) : 

			

		?>

		<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION["msg"] ?>
		</div>

		<?php

				unset($_SESSION["msg"]);
			
			endif;

		?>

		<div class="login-page">
		  <div class="form">
		    <form method="POST" action="index.php?controller=usuarios&action=registrar" class="register-form">
		      <input type="text" name="username" placeholder="name"/>
		      <input type="password" name="password" placeholder="password"/>
		      <button type="submit">create</button>
		      <p class="message">Already registered? <a href="#">Sign In</a></p>
		    </form>
		    <form method="POST" action="index.php?controller=usuarios&action=login" class="login-form">
		      <input type="text" name="username" placeholder="username"/>
		      <input type="password" name="password" placeholder="password"/>
			  <button type="submit">login</button>
		      <p class="message">Not registered? <a href="#">Create an account</a></p>
		    </form>
		  </div>
		</div>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script id="rendered-js" >
			$('.message a').click(function () {
			$('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
			});
    	</script>
	</body>

</html>