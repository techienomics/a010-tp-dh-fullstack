<?php
	$errors = [];

	if ($_POST) {
		$userFullName = $_POST['userFullName'];

		if (empty($userFullName)) {
			$errors['userFullName'] = 'Please fill te blank';
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap example</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
		<style>
			[class*=col-]{
				/* background-color: #ededed;
				border: solid 1px #d9d3d3; */
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark myNavDark">
			<a class="navbar-brand" href="index.php"><img src="images/yoda.jpg" style="width: 100px;" class="rounded"></a>

		   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar" aria-expanded="false" aria-label="Toggle navigation">
		     <span class="navbar-toggler-icon"></span>
		   </button>

		   <div class="collapse navbar-collapse" id="myNavBar">
		     <ul class="navbar-nav mr-auto">
		       <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
		       <li class="nav-item"><a class="nav-link" href="#">About</a></li>
		       <li class="nav-item dropdown">
		         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		           Servicios
		         </a>
		         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		           <a class="dropdown-item" href="#">Servicio 1</a>
		           <a class="dropdown-item" href="#">Servicio 2</a>
		           <a class="dropdown-item" href="#">Servicio 3</a>
		         </div>
		       </li>
		       <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
		     </ul>
		     <form class="form-inline my-2 my-lg-0">
		       <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		       <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
		     </form>
		   </div>
		</nav>

		<div id="myOwnCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/img-banner.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/img-banner.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/img-banner.jpg" alt="Third slide">
				</div>
			</div>

			<a class="carousel-control-prev" href="#myOwnCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#myOwnCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>

			<ol class="carousel-indicators">
				<li data-target="#myOwnCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myOwnCarousel" data-slide-to="1"></li>
				<li data-target="#myOwnCarousel" data-slide-to="2"></li>
			</ol>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="characters-home">
						<div class="alert alert-success" role="alert">Darth Vader</div>
						<img src="images/dathvader.jpg" class="img-fluid img-thumbnail">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="characters-home">
						<div class="alert alert-success" role="alert">Han Solo</div>
						<img src="images/hansolo.jpg" class="img-fluid img-thumbnail">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="characters-home">
						<div class="alert alert-success" role="alert">Lando</div>
						<img src="images/lando.jpg" class="img-fluid img-thumbnail">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="characters-home">
						<div class="alert alert-success" role="alert">Leia</div>
						<img src="images/leia.jpg" class="img-fluid img-thumbnail">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="characters-home">
						<div class="alert alert-success" role="alert">Luke</div>
						<img src="images/luke.jpg" class="img-fluid img-thumbnail">
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 col-lg-2">
					<div class="characters-home">
						<div class="alert alert-success" role="alert">Yoda</div>
						<img src="images/yoda.jpg" class="img-fluid img-thumbnail">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<form class="" method="post">
						<div class="form-group">
							<label>Full name:</label>
							<input type="text" class="form-control <?= isset($errors['userFullName']) ? 'is-invalid' : ''  ?>" name="userFullName" placeholder="Enter email">
							<span class="invalid-feedback"><?= isset($errors['userFullName']) ? $errors['userFullName'] : ''  ?></span>
						</div>
						<div class="form-group">
							<label>Email address:</label>
							<input type="email" class="form-control" name="userEmail" placeholder="Enter email">
						</div>
						<div class="form-group">
							<label>Country:</label>
							<select class="form-control" name="userCountry">
								<option value="ar">Argentina</option>
								<option value="br">Brasil</option>
								<option value="co">Colombia</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Submit now!</button>
					</form>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
		  Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <h2>Lorem ipsum dolor sit amet,magna</h2>
				  <img src="images/leia.jpg" class="rounded img-fluid">
				  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Librería de jQuery -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- Librería de JS de Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
