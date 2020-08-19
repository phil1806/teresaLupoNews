<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Webadev">
        <title>Térésa Lupo - Accueil</title>
        
        <!-- link public -->
		<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        
		<!-- animate.css -->
		{{-- <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
		<script src = "js/wow.min.js"> </script>
		<script src = "js/wow.js"> </script> --}}
		<!-- dépendances bootstrap -->
	</head>
	<body>
		<!-- HEADER -->
		<div class="container-md">
			<nav class="navbar navbar-expand-lg navbar-light p-0">
				<a class="navbar-brand" href="./index.html">
					<img src="./images/teresa-lupo.png" class="img-fluid logo-teresa" alt="teresa lupo" width="220" height="164">
				</a>
				<button class="navbar-toggler order-sm-2 mb-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
					<div class="collapse navbar-collapse order-sm-3 " id="navbarNav">
						<ul class="navbar-nav custom-nav ml-xl-2">
							<li class="nav-item active">
								<a class="nav-link" href="./realisations.html">NOS REALISATIONS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./essentiel.html">TARIFS</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./actualite.html">ACTUALITES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./contact.html">CONTACTS</a>
							</li>
							<li class="nav-item ml-lg-4 mb-3 mb-lg-0">
								<ul class="list-inline add-margin-icon-navbar">
									<li class="list-inline-item " ><a href="#"><img src="./images/pictos/telephone.png" alt="telephone"></a></li>
									<li class="list-inline-item"><a href="#"><img src="./images/pictos/facebook.png" alt="facebook"></a></li>
									<li class="list-inline-item"><a href="#"><img src="./images/pictos/instagram.png" alt="instagram"></a></li>
									<li class="list-inline-item"><a href="#"><img src="./images/pictos/maison.png" alt="maison"></a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!-- Btn prendre rendez-vous-->
				<a href="#" class="btn-lg btn-rendez-vous text-decoration-none order-1 order-sm-1 order-lg-3 size-btn-margin-md mb-3 mb-md-0 ">PRENDRE <br> RENDEZ-VOUS</a>
			</nav>
		</div>
		<div class="cercle">
			<div class="cercle-index-2"></div>
			<div class="cercle-index-1"></div>
		</div>
		<!-- MAIN -->
		<div class="container-small">
			<div class="d-flex flex-column position-relative align-items-center align-items-md-end">
				<img src="./images/home1.png" class="img-fluid mb-3 mb-md-0" alt="térésa lupo">
				<div class="circle-elue">
					<div class="text-center m-4 ">
						<img src="./images/pictos/trophé.png" alt="trophé">
							
						<p class="text-white text-center font-weight-bold mt-1 h4">ELUE <br>MEILLEURE <br>COIFFEUSE 2020
						</p>
						<div class="border mb-0 mb-lg-2"></div>
						<a href="#" class="text-white font-weight-bold h5 text-decoration-none">EN SAVOIR PLUS</a>
						
					</div>
				</div>
			</div>
			<section class="p-md-5">
				<div class="row no-gutters">
					<article class="col-md-5">
						<h1 class="h-100 d-flex justify-content-md-start justify-content-center pt-5 pr-md-5  mb-4 mb-md-0 font-cottage custom-title">Teresa Lupo</h1>
					</article>
					<div class="col-md-7">
						<div class="d-flex flex-column pr-md-5">
							<p class="text-justify">
								Volore dendundisi cores modis natur aut doloratemditis prem re velignist, que
								liae sequat ut fugit et adit reprorr ovitiae sed ut quodi octur as eicita dit quas
								aspisciis.Xerspic tem iuscimaxim reris ulparion plaboriati ut eos pernatur.
								Teresa Lupo autemquati blaut volupit autatio. Ut esto initas aliciate pellabor
								am quam quiatur aut quibus, sin remolor poreperem re, cum quam sapit pre
								rest, sitatatus eressit endus doloriatis inctam elluptature iduntia dolest estotatur
								rerovit volores tiorit ma dolorerem eatiam atemperum exceat.
							</p>
							<p class="text-justify mb-5 mb-lg-3">
								Equasse quossinis et volore dendundisi cores modis natur aut doloratem ditis
								prem re velignist, que liae sequat ut fugit et adit reprorr ovitiae sed ut quodi of-
								ctur as eicita dit quas aspisciis.Equasse quossinis et volore dendundisi cores
								modis natur aut doloratem ditis prem re velignist, que liae sequat ut fugit et
								adit reprorr ovitiae sed ut quodi octu.
		
							</p>		
						</div>

					</div>

				</div>
			</section>
		</div>
		<!-- FOOTER -->
		<footer class="bg-secondary p-4">
			<div class="container-small">
				<div class="p-md-5">
					<div class="row no-gutters">
						<div class="col-sm-5">
							<ul class="list-unstyled add-margin-li padidng-ul">
								<li><a href="#">ARTYSTYLE</a></li>
								<li><a href="#">NOS REALISATIONS</a></li>
								<li><a href="#">TARIFS</a></li>
								<li><a href="#">PRENDRE RENDEZ-VOUS</a></li>
								<li><a href="#">ACTUS</a></li>
								<li><a href="#">CONTACTS</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-12">
									<P class="m-0 font-weight-bold">CONTACT</P>
									<p class="m-0">Voie des Jardinets,8 <br>4537 Verlaine</p>
									<a href="" class="text-dark font-weight-bold">+32 470 65 04 46</a>
								</div>
								<div class="col-auto">
									<p class="mt-4 mb-0 font-weight-bold ">HEURES D'OUVERTURE</p>
									<P class="m-0">Uniquement sur RDV</P>
									<P>LU > ME : fermé <br>JE - VE :9h00 - 18h00 <br>SA : 8h00 - 17h30 <br>DI : fermé</P>
								</div>
							</div>

						</div>
						<div class="col-sm-4">
							<div class="h-100 d-flex flex-column justify-content-start align-items-sm-end mt-md-3">
								<div class="pr-lg-5">
									<p class="text-left">SUIVEZ-NOUS...</p>
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="#">
												<img src="./images/iconeFacebook.png" alt="facebook">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#">
												<img src="./images/insta.png" alt="instagram">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#">
												<img src="./images/iconeMaison.png" alt="Térésa lupo">
											</a>
										</li>
										
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col">
							<p class="text-center font-weight-normal letter-space size-copyright h-100 mb-0 mt-3">
								ARTY STYLE | VOIE DES JARDINETS , 8 |4537 VERLAINE,BELGIQUE|TVA:0651947589<br>
								POLITIQUE EN MATIÈRE DE VIE PRIVÉE | POLITIQUE EN MATIÈRE DE COOKIES<br>
								&copy ARTY STYLE TOUS DROITS RÉSERVÉS | REALISÉ PAR IDDUP & WEBADEV  |  DESIGN : IKONES
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>	
	</body>
</html>