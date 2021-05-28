<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Best Tour Plan - Hotel Booking</title>
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&family=Nunito:wght@400;700;800&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="css/swiper-bundle.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="https://api-maps.yandex.ru/2.1/?apikey=fcc4a816-19a1-4820-8536-aa291075221f&lang=en_US"></script>
	</head>
	<body>
		<header class="navbar">
			<div class="container">
				<div class="navbar-top">
					<a href="index.html" class="logo">
						<img
							src="img/horizontal-logo.svg"
							alt="Logo: Best Tour Plan"
							class="logo__image"
						/>
					</a>

					<form action="#" class="search navbar__search">
						<input
							type="text"
							class="search__input"
							placeholder="Search Location"
						/>
						<button class="search__button">
							<img
								src="img/search.svg"
								alt="Icon: search"
								class="search__image"
							/>
						</button>
					</form>

					<a href="#" class="user navbar__user">
						<img
							src="img/user-avatar.jpg"
							alt="Avatar: Nathan"
							class="user__avatar"
						/>
						<span class="user__name">Nathan</span>
					</a>
					<!-- /.user -->
					<button class="menu-button navbar-top__menu-button">
						<span class="menu-button__line"></span>
						<span class="menu-button__line"></span>
						<span class="menu-button__line"></span>
					</button>
				</div>
				<!-- /.navbar-top -->
			</div>
			<!-- /.container -->
			<div class="navbar-bottom">
				<div class="container">
					<ul class="navbar-menu navbar__menu">
						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">All Deals</a>
						</li>

						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">Hotels</a>
						</li>

						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">Activities</a>
						</li>

						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">Hotel Day Packages</a>
						</li>

						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">Restaurants</a>
						</li>

						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">Events</a>
						</li>

						<li class="navbar-menu__item">
							<a href="#" class="navbar-menu__link">Rodrigues</a>
						</li>
					</ul>
					<!-- /.navbar-menu -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.navbar-bottom -->
		</header>
		<nav class="breadcrumbs">
			<div class="container">
				<ul class="breadcrumbs-list">
					<li class="breadcrumbs-list__item">
						<a href="#" class="breadcrumbs-list__link">Home</a>
					</li>
					<li class="breadcrumbs-list__item">
						<a href="#" class="breadcrumbs-list__link">Flash Offers</a>
					</li>
					<li class="breadcrumbs-list__item">Grand Hilton Hotel</li>
				</ul>
			</div>
			<!-- /.container -->
		</nav>
		<!-- /.breadcrumbs -->
		<section class="hotel">
			<div class="container">
				<div class="hotel-info">
					<div class="hotel-info__text">
						<div class="hotel-wrapper">
							<h1 class="hotel-name hotel-info__name">
								<?php echo $_SESSION['thankyou_title'];?>
							</h1>
						</div>
						<!-- /.hotel-wrapper -->
						<p class="hotel-description hotel-info__description">
						<?php  echo $_SESSION['thankyou_description'];?>
						</p>						
							<a href="index.html" class="hotel__button">Go Back</a>						
					</div>
				</div>
				<!-- /.hotel-info -->
			
			</div>
			<!-- /.container -->
		</section>

			
		</section>
		<!-- /.reviews -->
	
		<footer class="footer">
			<div class="container">
				<div class="footer-wrapper">
					<img
						src="img/vertical-logo.svg"
						alt="Logo: Best Tour Plan"
						class="logo footer__logo"
					/>
					<div class="footer__list footer__categories">
						<h3 class="footer__title">All Categories</h3>
						<ul class="footer__ul">
							<li class="footer__item">
								<a href="#" class="footer__link">All Deals</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Hotels</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Activities</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Spa Packages</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Hotel Day Packages</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Restaurants</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Fitness</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Rodrigues</a>
							</li>
						</ul>
					</div>
					<!-- /.footer__list -->
					<div class="footer__list footer__additional">
						<h3 class="footer__title">Additional information</h3>
						<ul class="footer__ul">
							<li class="footer__item">
								<a href="#" class="footer__link">About Us</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Contact Us</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">How does it work?</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Frequently Asked Questions</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Deals.mu loyalty program </a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link"
									>Promote your Business on BTP</a
								>
							</li>
						</ul>
					</div>
					<!-- /.footer__list -->
					<div class="footer__social-network">
						<h3 class="footer__title footer__title--inline">Social Network</h3>
						<div class="footer__social-links">
							<a href="#" class="footer__link">
								<img src="img/facebook.svg" alt="icon: facebook" />
							</a>
							<a href="#" class="footer__link">
								<img src="img/youtube.svg" alt="icon: youtube" />
							</a>
							<a href="#" class="footer__link">
								<img src="img/instagram.svg" alt="icon: instagram" />
							</a>
						</div>
						<!-- /.footer__social-links -->
					</div>
					<!-- /.footer__social-network -->
					<div class="footer__list footer__legal">
						<h3 class="footer__title">Legal information</h3>
						<ul class="footer__ul">
							<li class="footer__item">
								<a href="#" class="footer__link">Terms & Conditions </a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Disclaimer</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Cancellation policy</a>
							</li>
							<li class="footer__item">
								<a href="#" class="footer__link">Privacy</a>
							</li>
						</ul>
					</div>
					<!-- /.footer__list -->
					<div class="footer__contact-details contact-details">
						<h3 class="footer__title">Contact Details</h3>
						<p class="footer__text">
							Feel free to contact us by phone, email or by our contact form
						</p>
						<ul class="footer__ul contact-details__ul">
							<li class="footer__item footer__item--map">
								<div class="footer__icon-wrapper">
									<img
										class="footer__icon"
										src="img/map-marker.svg"
										alt="icon: map"
									/>
								</div>
								9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
								States
							</li>
							<li class="footer__item footer__item--phone">
								<div class="footer__icon-wrapper">
									<img
										class="footer__icon"
										src="img/contact-phone-call.svg"
										alt="icon: phone"
									/>
								</div>
								<div class="footer__numbers">
									<a href="tel:269 1500" class="footer__contact-link"
										>Tel (business hours) : 269 1500</a
									>

									<a href="tel:52-56-61-38" class="footer__contact-link"
										>Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am –
										20:00 pm)</a
									>

									<a href="tel:52-56-61-38" class="footer__contact-link"
										>Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)</a
									>
								</div>
							</li>
							<li class="footer__item footer__item--email">
								<div class="footer__icon-wrapper">
									<img
										class="footer__icon"
										src="img/email.svg"
										alt="icon: email"
									/>
								</div>
								<a
									href="mailto:cherly.lawson@example.com"
									class="footer__link footer__contact-link"
									>cherly.lawson@example.com</a
								>
							</li>
						</ul>
					</div>
					<!-- /.footer__contact-details -->
					<div class="contact-form footer__contact-form">
						<h3 class="footer__title contact-form__title">Send us a message</h3>
						<form action="send.php" method="POST" class="footer__form">
							<input
								type="text"
								class="input footer__input"
								placeholder="Your Full Name"
								name="name"
							/>
							<input
								type="text"
								class="input footer__input"
								placeholder="Phone Number"
								name="phone"
							/>
							<textarea
								class="footer__message"
								cols="30"
								rows="10"
								placeholder="Message"
								name="message"
							></textarea>
							<div class="footer__button-wrapper">
								<button class="button footer__button" type="submit">
									Send
								</button>
								<span class="footer__info">* Required Fields</span>
							</div>
						</form>
					</div>
					<!-- /.footer__contact-form -->
				</div>
				<!-- /.footer-wrapper -->
			</div>
			<!-- /.conteiner -->
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/parallax.min.js"></script>
		<script src="js/swiper-bundle.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
