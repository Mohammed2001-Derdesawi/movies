@extends('main.layout')
@section('content')

<!-- header -->
<header class="header">
	<div class="header__wrap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="index.html" class="header__logo">
							<img src="{{asset('assets/main/img/logo.svg')}}" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
									<li><a href="index.html">Home slideshow bg</a></li>
									<li><a href="index2.html">Home static bg</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
									<li><a href="catalog1.html">Catalog Grid</a></li>
									<li><a href="catalog2.html">Catalog List</a></li>
									<li><a href="details1.html">Details Movie</a></li>
									<li><a href="details2.html">Details TV Series</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="pricing.html" class="header__nav-link">Pricing Plan</a>
							</li>

							<li class="header__nav-item">
								<a href="faq.html" class="header__nav-link">Help</a>
							</li>

							<!-- dropdown -->
							<li class="dropdown header__nav-item">
								<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/></svg>
								</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
									<li><a href="about.html">About</a></li>
									<li><a href="profile.html">Profile</a></li>
									<li><a href="signin.html">Sign In</a></li>
									<li><a href="signup.html">Sign Up</a></li>
									<li><a href="forgot.html">Forgot password</a></li>
									<li><a href="privacy.html">Privacy Policy</a></li>
									<li><a href="contacts.html">Contacts</a></li>
									<li><a href="404.html">404 Page</a></li>
								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<button class="header__search-btn" aria-label="search btn" type="button">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg>
							</button>

							<!-- dropdown -->
							<div class="dropdown header__lang">
								<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>

								<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
									<li><a href="#">English</a></li>
									<li><a href="#">Spanish</a></li>
									<li><a href="#">Russian</a></li>
								</ul>
							</div>
							<!-- end dropdown -->

							<a href="signin.html" class="header__sign-in">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/></svg>
								<span>sign in</span>
							</a>
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- header search -->
	<form action="#" class="header__search">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__search-content">
						<input type="text" placeholder="I'm looking for...">
						<button type="button">Search</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- end header search -->
</header>
<!-- end header -->

<!-- home -->
<section class="home">
	<!-- home bg -->
	<div class="owl-carousel home__bg">
		<div class="item home__cover" data-bg="{{asset('assets/main/img/home/home__bg.jpg')}}"></div>
		<div class="item home__cover" data-bg="{{asset('assets/main/img/home/home__bg2.jpg')}}"></div>
		<div class="item home__cover" data-bg="{{asset('assets/main/img/home/home__bg3.jpg')}}"></div>
		<div class="item home__cover" data-bg="{{asset('assets/main/img/home/home__bg4.jpg')}}"></div>
	</div>
	<!-- end home bg -->

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

				<button class="home__nav home__nav--prev" aria-label="prev card" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg>
				</button>
				<button class="home__nav home__nav--next" aria-label="next card" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg>
				</button>
			</div>

			<div class="col-12">
				<div class="owl-carousel home__carousel">
					<!-- card -->
					<div class="card card--big">
						<a href="details1.html" class="card__cover">
							<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
							<span class="card__play">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
							</span>
						</a>
						<div class="card__content">
							<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
							<span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
							<span class="card__rate"> 8.4</span>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="card card--big">
						<a href="details1.html" class="card__cover">
                            <img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
							<span class="card__play">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
							</span>
						</a>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Benched</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
							</span>
							<span class="card__rate"> 7.1</span>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="card card--big">
						<a href="details1.html" class="card__cover">
							<img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
							<span class="card__play">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
							</span>
						</a>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Whitney</a></h3>
							<span class="card__category">
								<a href="#">Romance</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"> 6.3</span>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="card card--big">
						<a href="details1.html" class="card__cover">
							<img src="{{asset('assets/main/img/covers/cover4.jpg')}}" alt="">
							<span class="card__play">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
							</span>
						</a>
						<div class="card__content">
							<h3 class="card__title"><a href="#">Blindspotting</a></h3>
							<span class="card__category">
								<a href="#">Comedy</a>
								<a href="#">Drama</a>
							</span>
							<span class="card__rate"> 7.9</span>
						</div>
					</div>
					<!-- end card -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end home -->

<!-- content -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- content title -->
					<h2 class="content__title">New items</h2>
					<!-- end content title -->

					<!-- content tabs nav -->
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a>
						</li>
					</ul>
					<!-- end content tabs nav -->

					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<input type="button" value="New items">
							<span></span>
						</div>

						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

								<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

								<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

								<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a></li>
							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- content tabs -->
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				<div class="row row--grid">


					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover6.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover5.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover4.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
                                <img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
			</div>

			<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
				<div class="row row--grid">
					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
                                <img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
                                <img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
                                <img src="{{asset('assets/main/img/covers/cover4.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover5.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover6.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover5.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover4.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
			</div>

			<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
				<div class="row row--grid">
					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover4.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover5.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover6.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover6.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover5.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover4.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="card">
							<a href="details1.html" class="card__cover">
								<img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
			</div>
		</div>
		<!-- end content tabs -->
	</div>
</section>
<!-- end content -->

<!-- expected premiere -->
<section class="section section--bg" data-bg="{{asset('assets/main/img/section/section.jpg')}}">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<h2 class="section__title">Expected premiere</h2>
			</div>
			<!-- end section title -->
		</div>

		<div class="row row--grid">
			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details1.html" class="card__cover">
						<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
						<span class="card__category">
							<a href="#">Action</a>
							<a href="#">Triler</a>
						</span>
						<span class="card__rate">8.4</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details1.html" class="card__cover">
						<img src="{{asset('assets/main/img/covers/cover3.jpg')}}" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Benched</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
						</span>
						<span class="card__rate">7.1</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details1.html" class="card__cover">
						<img src="{{asset('assets/main/img/covers/cover2.jpg')}}" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Whitney</a></h3>
						<span class="card__category">
							<a href="#">Romance</a>
							<a href="#">Drama</a>
							<a href="#">Music</a>
						</span>
						<span class="card__rate">6.3</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details1.html" class="card__cover">
						<img src="{{asset('assets/main/img/covers/cover6.jpg')}}" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Blindspotting</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
							<a href="#">Drama</a>
						</span>
						<span class="card__rate">7.9</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details1.html" class="card__cover">
						<img src="{{asset('assets/main/img/covers/cover.jpg')}}" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
						<span class="card__category">
							<a href="#">Action</a>
							<a href="#">Triler</a>
						</span>
						<span class="card__rate">8.4</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- card -->
			<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
				<div class="card">
					<a href="details1.html" class="card__cover">
						<img src="{{asset('assets/main/img/covers/cover5.jpg')}}" alt="">
						<span class="card__play">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
						</span>
					</a>
					<div class="card__content">
						<h3 class="card__title"><a href="#">Benched</a></h3>
						<span class="card__category">
							<a href="#">Comedy</a>
						</span>
						<span class="card__rate">7.1</span>
					</div>
				</div>
			</div>
			<!-- end card -->

			<!-- section btn -->
			<div class="col-12">
				<a href="#" class="section__btn">Show more</a>
			</div>
			<!-- end section btn -->
		</div>
	</div>
</section>
<!-- end expected premiere -->

<!-- partners -->
<section class="section">
	<div class="container">
		<div class="row">
			<!-- section title -->
			<div class="col-12">
				<h2 class="section__title">Our Partners</h2>

				<p class="section__text">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
			</div>
			<!-- end section text -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="#" class="partner">
					<img src="{{asset('assets/main/img/partners/themeforest-light-background.png')}}" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="#" class="partner">
					<img src="{{asset('assets/main/img/partners/audiojungle-light-background.png')}}" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="#" class="partner">
					<img src="{{asset('assets/main/img/partners/codecanyon-light-background.png')}}" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="#" class="partner">
					<img src="{{asset('assets/main/img/partners/photodune-light-background.png')}}" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="#" class="partner">
					<img src="{{asset('assets/main/img/partners/activeden-light-background.png')}}" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->

			<!-- partner -->
			<div class="col-6 col-sm-4 col-lg-2">
				<a href="#" class="partner">
					<img src="{{asset('assets/main/img/partners/3docean-light-background.png')}}" alt="" class="partner__img">
				</a>
			</div>
			<!-- end partner -->
		</div>
	</div>
</section>
<!-- end partners -->
@endsection

