<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nab It</title>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand navColor" href="#">Nab It</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li class="active"><a href="#">Home</a></li> -->
					<li><a class="navColor" href="#FAQ">FAQ</a></li>
					<li><a class="navColor" href="#">Sell</a></li>
					<li class="dropdown" id="menuLogin">
						<a class="dropdown-toggle navColor" href="#" data-toggle="dropdown" id="navLogin">Log In</a>
						<div class="dropdown-menu">
							<form class="form" id="formLogin" class="formLogin"> 
								<input class="LogInBreak" name="username" id="username" type="text" placeholder="Username"> 
								<input name="password" id="password" type="password" placeholder="Password"><br>
								<button type="button" class="btn btn-info enterLogin">Log In</button>
							</form>
						</div>
					</li>
					<li class="dropdown" id="menuSignup">
						<a class="dropdown-toggle navColor" href="#" data-toggle="dropdown" id="navLogin">Sign Up</a>
						<div class="dropdown-menu">
							<form class="form" id="formLogin" class="formLogin"> 
								<input class="LogInBreak" name="usernamesignup" id="usernamesignup" type="text" placeholder="Username"> 
								<input class="LogInBreak"name="emailsignup" id="emailsignup" type="text" placeholder="Email"><br>
								<input name="password" id="passwordsignup" type="passwordsignup" placeholder="Password"><br>
								<button type="button" class="btn btn-info enterLogin">Sign Up</button>
								<h4 class="signInDisclaimer">* Currently, you must be a Wash U student.</h4>
							</form>
						</div>
					</li>
					<!-- <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			          </ul>
			      </li> -->
			  </ul>


			</div><!-- nav coll.-->
		</div>
	</nav>

	<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="col-xs-7">
				<!-- <div class="productName"><h2 class="box">Chelsea FC Flag</h2><h4 class="box"> | </h4><h4 class="box">glubin</h4></div> -->
				<div class="productName"><h2 class="">Chelsea FC Flag</h2></div>
			</div>

			<div class="row">
				<div class="col-xs-7"><img class="productImage" src="img/chelsea.png" alt="Chelsea FC Flag"></div>
				<div class="col-xs-4"><h3><strong>Time Left:</strong> <i> 10:00 </i></h3></div>
				<div class="col-xs-4 productInfo"><h3><strong>Seller:</strong> <i> Wash U Student </i></h3></div>
				<div class="col-xs-4 productInfo"><h3><strong>Condition: </strong> <i>Mint</i></h3></div>
				<div class="col-xs-4 productInfo"><h3><strong>Suggested Price:</strong> <i>$20</i></h3></div>
				<div class="col-xs-4 productInfo"><h3><strong>Description:</strong> </h3> </div>
				<div class="col-xs-4 productDescription"><h4>This is a flag in mint condition. I have never even opened it before! I'm excited to get this off my hands because I recently stopped watching soccer</h4></div>
			</div>

				<!-- <div class="row">
					<div class="col-xs-7"><p>This is a flag in mint condition. I had never even opened it before!</p></div>
				</div> -->
				<p class="center-block nabIt">For $<input class="box price" type="text" name="price" value="20"> I'd</p>
				<button type="button" class="btn btn-info center-block nabIt nabButton">Nab It</button>
			</div>

		<!-- 		<label for="price"></label>
					  <select class="form-control price box" id="price">
					    <option>$1</option>
					    <option>$2</option>
					    <option>$3</option>
					    <option>$4</option>
					  </select>
					-->

				</div>

			</div> <!-- /container -->
		</div>
	</div>
</body>
</html>