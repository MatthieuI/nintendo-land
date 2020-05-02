<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nintendo Land</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body class="bg-danger">

	<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
		<a class="navbar-brand" href="#"><img id="logo" src="images/nintendo-land-logo-transparent-white.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Accueil</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Attractions</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Réservations</a>
				</li>
			</ul>

			<button class="btn btn-outline-danger my-2 mx-2 my-sm-0 btn-lg" data-toggle="modal" data-target="#inscriptionModal">S'inscrire</button>
			<button class="btn btn-outline-danger my-2 mx-2 my-sm-0 btn-lg" data-toggle="modal" data-target="#connectModal">Se connecter</button>

			<div class="modal fade text-danger" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header bg-danger text-white">
							<h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="name">Nom</label>
								<input type="text" class="form-control" id="name" placeholder="Doe">
							</div>
							<div class="form-group">
								<label for="firstName">Prénom</label>
								<input type="text" class="form-control" id="firstName" placeholder="John">
							</div>
							<div class="form-group">
								<label for="mail1">Email</label>
								<input type="email" class="form-control" id="mail1" placeholder="johndoe@exemple.fr">
							</div>
							<div class="form-group">
								<label for="confirmMail1">Confirmation</label>
								<input type="email" class="form-control" id="confirmMail1" placeholder="johndoe@exemple.fr">
							</div>
							<div class="form-group">
								<label for="password1">Mot de passe</label>
								<input type="password" class="form-control" id="password1" placeholder="********">
							</div>
							<div class="form-group">
								<label for="confirmPassword1">Confirmation</label>
								<input type="password" class="form-control" id="confirmPassword1" placeholder="********">
							</div>
							<div class="row">
								<div class="col text-right">
									<button type="submit" class="btn btn-danger">Valider</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade text-danger" id="connectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header bg-danger text-white">
							<h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="mail2">Email</label>
								<input type="email" class="form-control" id="mail2">
							</div>
							<div class="form-group">
								<label for="password2">Mot de passe</label>
								<input type="password" class="form-control" id="password2">
							</div>
							<div class="row">
								<div class="col text-right">
									<button type="submit" class="btn btn-danger">Valider</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</nav>

	<div id="carouselExampleControls" class="carousel slide bg-dark" data-ride="carousel">

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/carousel1.jpg" class="d-block mx-auto w-75" alt="img1">
			</div>
			<div class="carousel-item">
				<img src="images/carousel2.jpg" class="d-block mx-auto w-75" alt="img2">
			</div>
			<div class="carousel-item">
				<img src="images/carousel3.jpg" class="d-block mx-auto w-75" alt="img3">
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>

	<div class="container bg-white text-danger">

		</br>
		<h1 class="text-center"><u>Licences exposées dans le parc :</u></h1>

		</br>

		<div class="row">
			<div class="col-6">
				<h2>Mario :</h2>
				<!-- <p class="description-text">Récoltez des pièces et des étoiles en compagnie de Mario, Peach et Bowser !!! 
					Faites le plein de sensations fortes dans nos attractions colorées sur le thème de Mario et du Royaume Champignon !
					Retrouvez une parade tous les jours et retrouvez vos personnages favoris de la licence Super Mario<p> -->
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem sed voluptas cupiditate possimus ut beatae deleniti sequi, ab nobis adipisci pariatur laborum omnis, explicabo animi excepturi illo incidunt ex magni.</p>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem sed voluptas cupiditate possimus ut beatae deleniti sequi, ab nobis adipisci pariatur laborum omnis, explicabo animi excepturi illo incidunt ex magni.</p>
			</div>
			<div class="col-3 offset-3">
				<img class="img-thumbnail" src="images/mario-logo.jpg">
			</div>
		</div>

		</br>
		<hr class="dot-red">
		</br>
		
		<div class="row">
			<div class="col-3">
				<img class="img-thumbnail" src="images/zelda-logo.jpg">
			</div>
			<div class="col-6 offset-3 text-right">
				<h2>Zelda :</h2>
				<!-- <p class="description-text">Explorez des temples iconiques de la série The Legend of Zelda !!
					Mangez dans notre zone repas dans la forêt sacrée !!!
					Retrouvez une parade tous les jours et retrouvez vos personnages favoris de la licence Super Mario<p> -->
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum magnam eligendi ipsam fugit blanditiis vitae voluptate beatae, dolores distinctio eum id, impedit doloribus sint est, similique ipsa consequuntur totam rem.</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum magnam eligendi ipsam fugit blanditiis vitae voluptate beatae, dolores distinctio eum id, impedit doloribus sint est, similique ipsa consequuntur totam rem.</p>
			</div>
		</div>

		</br>
		<hr class="dot-red">
		</br>

		<div class="row">
			<div class="col-6">
				<h2>Pokémon :</h2>
				<!-- <p class="description-text">Récoltez des pièces et des étoiles en compagnie de Mario, Peach et Bowser !!! 
					Faites le plein de sensations fortes dans nos attractions colorées sur le thème de Mario et du Royaume Champignon !
					Retrouvez une parade tous les jours et retrouvez vos personnages favoris de la licence Super Mario<p> -->
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum magnam eligendi ipsam fugit blanditiis vitae voluptate beatae, dolores distinctio eum id, impedit doloribus sint est, similique ipsa consequuntur totam rem.</p>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum magnam eligendi ipsam fugit blanditiis vitae voluptate beatae, dolores distinctio eum id, impedit doloribus sint est, similique ipsa consequuntur totam rem.</p>
			</div>
			<div class="col-3 offset-3">
				<img class="img-thumbnail" src="images/pokemon-logo.jpg">
			</div>
		</div>
		
	</div>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	
</body>

</html>