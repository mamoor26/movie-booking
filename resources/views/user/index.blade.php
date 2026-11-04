@extends("user.navbar")
@section("user")
<!-- mobile menu -->
	<div class="menu">
		<!-- menu search -->
		<form action="#" class="menu__search">
			<input type="text" placeholder="Search">
			<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
		</form>
		<!-- end menu search -->

		<!-- menu nav -->
		<ul class="menu__nav">
			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="index.html">Home style 1</a></li>
					<li><a href="index2.html">Home style 2</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="catalog1.html">Catalog Grid</a></li>
					<li><a href="catalog2.html">Catalog List</a></li>
					<li><a href="details1.html">Details Movie</a></li>
					<li><a href="details2.html">Details TV Series</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<li class="menu__nav-item">
				<a href="pricing.html" class="menu__nav-link">Pricing plans</a>
			</li>

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/></svg></a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="about.html">About us</a></li>
					<li><a href="faq.html">Help center</a></li>
					<li><a href="profile.html">Profile</a></li>
					<li><a href="actor.html">Actor</a></li>
					<li><a href="contacts.html">Contacts</a></li>
					<li><a href="privacy.html">Privacy policy</a></li>
				</ul>
			</li>
			<!-- end dropdown -->

			<!-- dropdown -->
			<li class="menu__nav-item">
				<a class="menu__nav-link menu__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/></svg>
				</a>

				<ul class="dropdown-menu menu__dropdown-menu">
					<li><a href="signin.html">Sign In</a></li>
					<li><a href="signup.html">Sign Up</a></li>
					<li><a href="forgot.html">Forgot password</a></li>
					<li><a href="404.html">404 Page</a></li>
				</ul>
			</li>
			<!-- end dropdown -->
		</ul>
		<!-- end menu nav -->
	</div>
	<!-- end mobile menu -->

	<!-- home -->
	<section class="home home--bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>
				</div>

				<div class="col-12">
					<div class="home__carousel splide splide--home">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">

    @forelse($movies as $movie)

        <li class="splide__slide">
            <div class="item item--big">

                <a href="{{ route('movie.show', $movie->id) }}" class="item__cover">
                    <img src="{{ asset('storage/poster_folder/' . $movie->Poster) }}"
                         alt="{{ $movie->Movie_name }}">

                    <span class="item__play">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/>
                        </svg>
                    </span>
                </a>

                <div class="item__content">

                    <h3 class="item__title">
                        <a href="#">{{ $movie->Movie_name }}</a>
                    </h3>

                    <span class="item__category">
                        <a href="#">{{ $movie->Genre }}</a>
                    </span>

                    <span class="item__rate">
                        {{ $movie->Release_date }}
                    </span>

                </div>
            </div>
        </li>

    @empty

        <li class="splide__slide">
            <h3>No Movies Available</h3>
        </li>

    @endforelse

</ul>
						</div>
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
						<h2 class="content__title">Recently Updated</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">New items</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Movies</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">TV Shows</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="4-tab" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">Anime</button>
							</li>
						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
					<div class="row">
						<!-- item -->
						<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
							<div class="item item--list">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/1.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>

								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Lost City</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>

									<div class="item__wrap">
										<span class="item__rate"> 8.4</span>

										<ul class="item__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="item__description">
										<p>When a renowned archaeologist goes missing, his daughter sets out on a perilous journey to the heart of the Amazon rainforest to find him. Along the way, she discovers a hidden city and a dangerous conspiracy that threatens the very balance of power in the world. With the help of a charming rogue, she must navigate treacherous terrain and outwit powerful enemies to save her father and uncover the secrets of the lost city.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
							<div class="item item--list">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/2.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>

								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Undercurrents</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>

									<div class="item__wrap">
										<span class="item__rate"> 7.1</span>

										<ul class="item__list">
											<li>FHD</li>
											<li>18+</li>
										</ul>
									</div>

									<div class="item__description">
										<p>A brilliant scientist discovers a way to harness the power of the ocean's currents to create a new, renewable energy source. But when her groundbreaking technology falls into the wrong hands, she must race against time to stop it from being used for evil. Along the way, she must navigate complex political alliances and confront her own past to save the world from disaster.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
							<div class="item item--list">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/3.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>

								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Redemption Road</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>

									<div class="item__wrap">
										<span class="item__rate"> 6.3</span>

										<ul class="item__list">
											<li>HD</li>
											<li>12+</li>
										</ul>
									</div>

									<div class="item__description">
										<p>A down-on-his-luck boxer struggles to make ends meet while raising his young son. When an old friend offers him a chance to make some quick cash by fighting in an illegal underground boxing tournament, he sees it as his last shot at redemption. But as the stakes get higher and the fights get more brutal, he must confront his own demons and find the strength to win not just for himself, but for his son.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
							<div class="item item--list">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/4.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>

								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Tales from the Underworld</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>

									<div class="item__wrap">
										<span class="item__rate"> 7.9</span>

										<ul class="item__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="item__description">
										<p>When a luxury cruise ship sets sail on its final voyage before retirement, the passengers and crew expect nothing but relaxation and indulgence. But when a mysterious illness spreads through the ship, they find themselves fighting for survival in the middle of the ocean. As tensions rise and resources dwindle, they must confront their own mortality and make impossible choices to stay alive.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
							<div class="item item--list">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/5.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>

								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Voices from the Other Side</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>

									<div class="item__wrap">
										<span class="item__rate"> 8.4</span>

										<ul class="item__list">
											<li>HD</li>
											<li>12+</li>
										</ul>
									</div>

									<div class="item__description">
										<p>In a world where magic is outlawed and hunted, a young witch must use her powers to fight back against the corrupt authorities who seek to destroy her kind. With the help of a rogue witch hunter, she sets out on a dangerous mission to uncover the truth about the government's dark secrets and restore balance to the world. But as the stakes get higher and the risks get greater, she must confront her own fears and decide what she's willing to sacrifice for the greater good.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-12 col-lg-6 col-xxl-4">
							<div class="item item--list">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/6.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>

								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Unseen World</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>

									<div class="item__wrap">
										<span class="item__rate"> 7.1</span>

										<ul class="item__list">
											<li>HD</li>
											<li>16+</li>
										</ul>
									</div>

									<div class="item__description">
										<p>When a brilliant scientist invents a machine that can access parallel universes, she unwittingly unleashes a dangerous force that threatens to destroy everything she holds dear. With the help of her trusted colleagues, she must race against time to stop the machine from falling into the wrong hands and prevent a catastrophic chain reaction that could unravel the fabric of reality itself. But as she delves deeper into the unseen world, she realizes that the greatest danger may be closer than she ever imagined.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
					<div class="row">
						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/7.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Lost Key</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/8.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Red Sky at Night</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/9.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Forgotten Road</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/10.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Dark Horizons</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/11.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Echoes of Yesterday</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/12.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Into the Unknown</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/13.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Broken Path</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/14.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">A Light in the Darkness</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/15.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Endless Horizon</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/16.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Unseen Journey</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/17.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Reckoning</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/18.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Savage Beauty</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
					<div class="row">
						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/1.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Midnight Sun</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/2.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Shadow Hunter</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/3.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Wild Hearts</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/4.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Dark Horizons</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/5.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Electric Dreams</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/6.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Broken Promises</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/7.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Fierce Grace</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/8.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Burning Bridges</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/9.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Forbidden Love</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/10.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Timekeeper's Daughter</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/11.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">The Enchanted Forest</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/12.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Relentless</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab" tabindex="0">
					<div class="row">
						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/13.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Starlight Chronicles</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/14.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Rising Sun Academy</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/15.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Eternal Bonds</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/16.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Chronicles of the Elements</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/17.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Fantasia Journey</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/18.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Phoenix's Destiny</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/1.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Guardians of the Lost City</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/2.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Divine Intervention</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/3.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Infinite Horizon</a></h3>
									<span class="item__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="item__rate">6.3</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/4.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Beyond the Stars</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="item__rate">7.9</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/5.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Shadows of the Past</a></h3>
									<span class="item__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="item__rate">8.4</span>
								</div>
							</div>
						</div>
						<!-- end item -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="item">
								<a href="details1.html" class="item__cover">
									<img src="img/covers/6.png" alt="">
									<span class="item__play">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									</span>
								</a>
								<div class="item__content">
									<h3 class="item__title"><a href="details1.html">Wings of Freedom</a></h3>
									<span class="item__category">
										<a href="#">Comedy</a>
									</span>
									<span class="item__rate">7.1</span>
								</div>
							</div>
						</div>
						<!-- end item -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->

			<div class="row">
				<div class="col-12">
					<a href="catalog1.html" class="section__btn"><span>to catalog</span></a>
				</div>
			</div>
		</div>
	</section>
	<!-- end content -->

	<!-- now watching -->
	<section class="section section--dark">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--carousel">Now Watching</h2>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__carousel splide splide--content">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/></svg></button>
							<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="img/covers/7.png" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
											<span class="item__rate">8.4</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="img/covers/8.png" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Undercurrents</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
											<span class="item__rate">7.1</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="img/covers/9.png" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Tales from the Underworld</a></h3>
											<span class="item__category">
												<a href="#">Romance</a>
												<a href="#">Drama</a>
												<a href="#">Music</a>
											</span>
											<span class="item__rate">6.3</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="img/covers/10.png" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Savage Beauty</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
												<a href="#">Drama</a>
											</span>
											<span class="item__rate">7.9</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="img/covers/11.png" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">The Unseen Journey</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
											<span class="item__rate">8.4</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<a href="details1.html" class="item__cover">
											<img src="img/covers/12.png" alt="">
											<span class="item__play">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
											</span>
										</a>
										<div class="item__content">
											<h3 class="item__title"><a href="details1.html">Endless Horizon</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
											<span class="item__rate">7.1</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end carousel -->
			</div>
		</div>
	</section>
	<!-- end now watching -->

	<!-- pricing plans -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Select Your Plan</h2>
				</div>
				<!-- end section title -->
			</div>

			<div class="row">
				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
					<div class="plan">
						<h3 class="plan__title">Starter</h3>
						<span class="plan__price">Free</span>
						<ul class="plan__list">
							<li>7 days</li>
							<li>720p Resolution</li>
							<li>Limited Availability</li>
							<li>Desktop Only</li>
							<li>Limited Support</li>
						</ul>
						<a href="signin.html" class="plan__btn"><span>Register</span></a>
					</div>
				</div>
				<!-- end price -->

				<!-- price -->
				<div class="col-12 col-lg-4 order-md-1 order-lg-2">
					<div class="plan plan--premium">
						<h3 class="plan__title">Premium</h3>
						<span class="plan__price">$19.99</span>
						<ul class="plan__list">
							<li>1 Month</li>
							<li>Full HD</li>
							<li>Lifetime Availability</li>
							<li>TV & Desktop</li>
							<li>24/7 Support</li>
						</ul>
						<button type="button" data-bs-toggle="modal" class="plan__btn" data-bs-target="#plan-modal"><span>Choose plan</span></button>
					</div>
				</div>
				<!-- end price -->

				<!-- price -->
				<div class="col-12 col-md-6 col-lg-4 order-md-3 order-lg-3">
					<div class="plan">
						<h3 class="plan__title">Cinematic</h3>
						<span class="plan__price">$39.99</span>
						<ul class="plan__list">
							<li>2 Months</li>
							<li>Ultra HD</li>
							<li>Lifetime Availability</li>
							<li>Any Device</li>
							<li>24/7 Support</li>
						</ul>
						<button type="button" data-bs-toggle="modal" class="plan__btn" data-bs-target="#plan-modal"><span>Choose plan</span></button>
					</div>
				</div>
				<!-- end price -->
			</div>
		</div>
	</section>
	<!-- end pricing plans -->

	<!-- partners -->
	<section class="section section--bt">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12 col-xl-10">
					<h2 class="section__title">Our Partners</h2>

					<p class="section__text">We strive for long-term cooperation with our partners, and our team is always ready to meet and consider new opportunities for mutual benefits. If you would like to become our partner, we are always open to new offers and look forward to hearing from you. <a href="contacts.html">Become a partner</a></p>
				</div>
				<!-- end section text -->
			</div>

			<div class="row">
				<div class="col-12">
					<div class="partners">
						<a href="#" class="partners__item">
							<img src="img/partners/themeforest-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="img/partners/audiojungle-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="img/partners/codecanyon-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item">
							<img src="img/partners/photodune-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item partners__item--prelast">
							<img src="img/partners/activeden-light-background.png" alt="">
						</a>

						<a href="#" class="partners__item partners__item--last">
							<img src="img/partners/3docean-light-background.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end partners -->


@endsection
