<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Balax trade</title>
		<link rel="stylesheet" href="./css/index.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
		/>
		<link rel="stylesheet" href="./css/particles.css" />
		<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
		<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

		<!--Slider-->
		<link rel="stylesheet" href="owlcarousel/dist/assets/owl.carousel.css" />
		<!-- <link
			rel="stylesheet"
			href="owlcarousel/dist/assets/owl.carousel.min.css"
		/> -->
	</head>

	<body>

		<?php 
			// session_start();

			// if(isset($_SESSION['ID'])){
			// 	header('Location:dashboard.php');
			// }

		?>	


		<nav class="nav">
			<div class="flex">
				<a href="./index.php"><div class="logo"></div></a>

				<div class="links_cont">
					<a href="about.html" class="links">About</a>
					<a href="#plans" class="links">Plans</a>
					<a href="#testimonials" class="links">Testimonials</a>
					<a href="#team" class="links">Team</a>
					<a href="#contact" class="links">Contact Us</a>
				</div>

				<a href="./Sign_up.php" class="sign_up">Sign up</a>
				<a href="./Sign_in.php" class="sign_in">Sign in</a>

				<button id="toggle">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						data-slot="icon"
						class="w-6 h-6"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M3.75 9h16.5m-16.5 6.75h16.5"
						/>
					</svg>
				</button>
			</div>

			<ul id="menu" class="close">
				<li class="menu_link">
					<a href="/about.html">About</a>
				</li>
				<li class="menu_link">
					<a href="/#plans">Plans</a>
				</li>
				<li class="menu_link">
					<a href="/#team">Team</a>
				</li>
				<li class="menu_link">
					<a href="/#testimonials">Testimonials</a>
				</li>
				<li class="menu_link">
					<a href="/#contact">Contact</a>
				</li>
				<li class="menu_link">
					<a href="./Sign_up.php">
						<button class="menu_btn">Sign Up</button>
					</a>
				</li>
			</ul>
		</nav>

		<div class="complex_hero">
			<div class="complex_hero1">
				<div class="container">
					<div class="container_fixed">
						<div class="chrome">
							<h1>
								Instant Access<br />
								To Investing <br />
								Anytime And Anywhere
							</h1>
						</div>
						<p>
							Worlds best trading broker 2023
							<i class="fa fa-trophy header_icon" aria-hidden="true"></i>
						</p>
						<p>Ease of acess to investing in over 1000 crupto currencies.</p>
						<p>
							<i class="fa fa-check header_icon"></i>
							20% interest instantly on all crypto related investment
						</p>
						<p>
							<i class="fa fa-check header_icon"></i>
							100% Secure and reliable method of validating all transaction
						</p>

						<a href="#" class="get_started_btn">Get Started</a>
						<a href="#plans" class="viewplans_btn"
							>View Plans
							<i style="margin-left: 10px" class="fas fa-arrow-down fa-beat"></i
						></a>

						<div class="rating_section">
							<i
								style="
									color: #d0aa53;
									margin-right: 4px;
									margin-left: 4px;
									--fa-animation-duration: 1.5s;
								"
								class="fa fa-star fa-beat"
								aria-hidden="true"
							></i>
							<i
								style="
									color: #d0aa53;
									margin-right: 4px;
									margin-left: 4px;
									--fa-animation-duration: 1.5s;
								"
								class="fa fa-star fa-beat"
								aria-hidden="true"
							></i>
							<i
								style="
									color: #d0aa53;
									margin-right: 4px;
									margin-left: 4px;
									--fa-animation-duration: 1.5s;
								"
								class="fa fa-star fa-beat"
								aria-hidden="true"
							></i>
							<i
								style="
									color: #d0aa53;
									margin-right: 4px;
									margin-left: 4px;
									--fa-animation-duration: 1.5s;
								"
								class="fa fa-star fa-beat"
								aria-hidden="true"
							></i>
							<i
								style="
									color: #d0aa53;
									margin-right: 4px;
									margin-left: 4px;
									--fa-animation-duration: 1.5s;
								"
								class="fa fa-star fa-beat"
								aria-hidden="true"
							></i>

							4.9 out of 5
						</div>
					</div>
				</div>
				<div id="particles-js"></div>
			</div>

		</div>

		<!-- partners -->

		<!-- <div class="owl-carousel" style="width: 5000px; height: 5000px">
			<div class="cont_con"><p>1</p></div>
			<div class="cont_con"><p>2</p></div>
			<div class="cont_con"><p>3</p></div>
			<div class="cont_con"><p>4</p></div>
			<div class="cont_con"><p>5</p></div>
			<div class="cont_con"><p>6</p></div>
			<div class="cont_con"><p>7</p></div>
			<div class="cont_con"><p>8</p></div>
		</div> -->

		<!-- end of partners -->

		<div class="second_section">
			<div class="orb_container" style="z-index: 10">
				<div class="orb_cover"></div>
				<div class="orb1"></div>
				<div class="orb2"></div>
				<div class="orb3"></div>
			</div>
			<div class="suit_img relative" style="z-index: 30"></div>

			<div class="container" style="z-index: 30">
				<h1>Trade in the world’s most popular currency's</h1>
				<hr />
				<p>Find your next trade with access to a wide range of markets.</p>

				<div class="flex-boxes">
					<div class="boxes">
						<div class="flex_box">
							<div class="icon_part">
								<img src="./assets/icons/in-equity-11-icon-1.svg" />
							</div>

							<div class="text_part">
								<h3 class="text-header">Forex</h3>

								<p class="text_body">
									Trade 40+ major, minor, and exotic currency pairs, all ETFs,
									Bonds and Pairs included
								</p>
							</div>
						</div>
					</div>
					<div class="boxes">
						<div class="flex_box">
							<div class="icon_part">
								<img src="./assets/icons/in-equity-11-icon-2.svg" />
							</div>

							<div class="text_part">
								<h3 class="text-header">Stocks</h3>

								<p class="text_body">
									Trade 40+ major, minor, and exotic currency pairs, all ETFs,
									Bonds and Pairs included
								</p>
							</div>
						</div>
					</div>

					<div class="boxes">
						<div class="flex_box">
							<div class="icon_part">
								<img src="./assets/icons/in-equity-11-icon-3.svg" />
							</div>

							<div class="text_part">
								<h3 class="text-header">Bonds</h3>

								<p class="text_body">
									Trade 40+ major, minor, and exotic currency pairs, all ETFs,
									Bonds and Pairs included
								</p>
							</div>
						</div>
					</div>

					<div class="boxes">
						<div class="flex_box">
							<div class="icon_part">
								<img src="./assets/icons/in-equity-11-icon-4.svg" />
							</div>

							<div class="text_part">
								<h3 class="text-header">Gold</h3>

								<p class="text_body">
									Trade 40+ major, minor, and exotic currency pairs, all ETFs,
									Bonds and Pairs included
								</p>
							</div>
						</div>
					</div>

					<div class="boxes">
						<div class="flex_box">
							<div class="icon_part">
								<img src="./assets/icons/in-equity-11-icon-5.svg" />
							</div>

							<div class="text_part">
								<h3 class="text-header">Crypto</h3>

								<p class="text_body">
									Trade 40+ major, minor, and exotic currency pairs, all ETFs,
									Bonds and Pairs included
								</p>
							</div>
						</div>
					</div>

					<div class="boxes">
						<div class="flex_box">
							<div class="icon_part">
								<img src="./assets/icons/in-equity-11-icon-6.svg" />
							</div>

							<div class="text_part">
								<h3 class="text-header">Gas</h3>

								<p class="text_body">
									Trade 40+ major, minor, and exotic currency pairs, all ETFs,
									Bonds and Pairs included
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div style="position: relative">
			<!-- Backdrops -->
			<div class="orb_container">
				<div class="orb1"></div>
				<div class="orb2"></div>
				<div class="orb3"></div>
				<div class="orb4"></div>
				<div class="orb5"></div>
				<div class="orb6"></div>
			</div>

			<!-- Content -->
			<div class="content">
				<!-- Steps -->
				<div id="steps" class="third_container">
					<h1 class="header">
						<span style="color: #d0aa53">Get Started</span> <br />
						<span style="font-size: xx-large; display: block"
							>In Three Easy Steps</span
						>
					</h1>
					<div class="steps">
						<div class="w-40">
							<div class="border">1</div>
						</div>
						<div class="border-left">
							<h2>Qualify</h2>
							<p>
								Showcase your skills with our transparent evaluation process. No
								experience required, just raw talent and dedication.
							</p>
						</div>
						<div class="w-40">
							<div class="border">2</div>
						</div>
						<div class="border-left">
							<h2>Get Funded</h2>
							<p>
								Receive a real trading account with capital to put your
								strategies into action. No personal deposit needed, just trade
								our money and keep your profits.
							</p>
						</div>
						<div class="w-40">
							<div class="border">3</div>
						</div>
						<div class="border-left">
							<h2>Scale & Earn</h2>
							<p>
								Share your profits with us and unlock even bigger accounts as
								you consistently demonstrate your skills.
							</p>
						</div>
					</div>
				</div>

				<!-- Plans -->
				<div id="plans" class="third_container">
					<h1 class="header">
						<span style="color: #d0aa53">Select a Plan</span>
						<span style="font-size: xx-large; display: block"
							>A Plan For Every Budget</span
						>
					</h1>
					<!-- <div
						class="flex"
						style="color: #d0aa53; width: 100%; justify-content: center"
					>
						<button
							class="plan_btn"
							style="
								border-radius: 10px 0px 0px 10px;
								background-color: #d0aa53;
								color: black;
							"
						>
							Weekly
						</button>
						<button class="plan_btn" style="border-radius: 0px 10px 10px 0px">
							Monthly
						</button>
					</div> -->
					<div class="flex plans" style="gap: 24px; align-items: center">
						<div class="card">
							<div class="plan_header">
								<div class="chrome plan_header_content">
									<h1
										style="
											background-clip: unset;
											background: transparent;
											-webkit-text-fill-color: #d0aa53;
										"
									>
										3%
										<small>Bronze Plan</small>
									</h1>
								</div>
							</div>
							<div class="" style="padding: 40px; height: 100%">
								<ul class="plan_benefits">
									<li class="flex" style="gap: 8px">
										<div class="benefit1"></div>
										From $1,000 - $10,000
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit1"></div>
										3% weekly ROI
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit1"></div>
										0.3% Daily Comission
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit1"></div>
										24/7 Team Support
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit1"></div>
										100% Guaranteed Profit
									</li>
									<li class="planbtncont">
										<button class="planbtn1" style="z-index: 20;"><a href="./Sign_up.php">Select Plan</a></button>
									</li>
								</ul>
							</div>
						</div>
						<div class="card card2">
							<div class="plan_header">
								<div class="chrome plan_header_content">
									<h1>
										9%
										<small>Gold Plan</small>
									</h1>
								</div>
							</div>
							<div class="" style="padding: 40px; height: 100%">
								<ul class="plan_benefits">
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										From $50,000 and Above
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										9% weekly ROI
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										0.9% Daily Comission
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										24/7 Team Support
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										100% Guaranteed Profit
									</li>
									<li class="chrome planbtncont">
										
										<button class="planbtn2" style="z-index: 20;"><a href="./Sign_up.php">Select Plan</a></button>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="plan_header">
								<div class="chrome plan_header_content">
									<h1
										style="
											background-clip: unset;
											background: transparent;
											-webkit-text-fill-color: #ee7660;
										"
									>
										6%
										<small>Silver Plan</small>
									</h1>
								</div>
							</div>
							<div class="" style="padding: 40px; height: 100%">
								<ul class="plan_benefits">
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										From $10,000 - $50,000
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										6% weekly ROI
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										0.6% Daily Comission
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										24/7 Team Support
									</li>
									<li class="flex" style="gap: 8px">
										<div class="benefit2"></div>
										100% Guaranteed Profit
									</li>
									<li class="planbtncont">
										<button class="planbtn2" style="z-index: 20;"><a href="./Sign_up.php">Select Plan</a></button>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonials -->
				<div id="testimonials" class="third_container">
					<h1 class="header">
						<span style="color: #d0aa53">Testimonials</span>
						<span style="font-size: xx-large; display: block"
							>What People Say About Us</span
						>
					</h1>
					<div class="flex testimonials" style="gap: 24px">
						<div class="testimonial_card">
							<div class="rating_section" style="margin-top: 0px">
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
							</div>
							<p style="font-size: x-large; color: #b1b1b1">
								Profitable trading became a reality for me thanks to this prop
								firm's exceptional support and guidance.
							</p>
							<div class="flex" style="justify-content: space-between">
								<div class="flex team_content">
									<h1 class="card_title">Greg Davidson</h1>
									<h2 class="card_sub_title">Expert Trader</h2>
								</div>

								<div class="testimonial_icon">
									<img src="./assets/images/person (5).jpg" alt="" />
								</div>
							</div>
						</div>
						<div class="testimonial_card">
							<div class="rating_section" style="margin-top: 0px">
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
							</div>
							<p style="font-size: x-large; color: #b1b1b1">
								The prop firm's risk management strategies empowered me to
								maximize gains and build a successful portfolio.
							</p>
							<div class="flex" style="justify-content: space-between">
								<div class="flex team_content">
									<h1 class="card_title">Peter Felling</h1>
									<h2 class="card_sub_title">Manager</h2>
								</div>

								<div class="testimonial_icon">
									<img src="./assets/images/person (6).jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
					<div class="flex testimonials" style="gap: 24px; margin-top: 24px">
						<div class="testimonial_card">
							<div class="rating_section" style="margin-top: 0px">
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
							</div>
							<p style="font-size: x-large; color: #b1b1b1">
								Exceptional technology and expert mentorship make this prop
								trading firm the perfect platform for financial growth.
							</p>
							<div class="flex" style="justify-content: space-between">
								<div class="flex team_content">
									<h1 class="card_title">Jennifer Han</h1>
									<h2 class="card_sub_title">Mother</h2>
								</div>

								<div class="testimonial_icon">
									<img src="./assets/images/person (4).jpg" alt="" />
								</div>
							</div>
						</div>
						<div class="testimonial_card">
							<div class="rating_section" style="margin-top: 0px">
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
								<i class="star_icon fa fa-star fa-beat" aria-hidden="true"></i>
							</div>
							<p style="font-size: x-large; color: #b1b1b1">
								This prop firm's commitment to traders' success is evident in
								their comprehensive training and personalized support
							</p>
							<div class="flex" style="justify-content: space-between">
								<div class="flex team_content">
									<h1 class="card_title">John Laden</h1>
									<h2 class="card_sub_title">Developer</h2>
								</div>

								<div class="testimonial_icon">
									<img src="./assets/images/person (2).jpg" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Team -->
				<div id="team" class="third_container">
					<h1 class="header">
						<span style="color: #d0aa53">Meet the Team</span>
						<span style="font-size: xx-large; display: block"
							>Behind the Revolutionary Success</span
						>
					</h1>
					<div class="flex teams" style="gap: 24px">
						<div class="team_card">
							<div
								style="
									width: 100%;

									background-color: #d0aa53;
									border-radius: 5px;
									padding: 10px;
								"
							>
								<img
									src="./assets/images/tonye.jpg"
									style="
										aspect-ratio: 1;
										width: 100%;
										object-fit: cover;
										border-radius: 5px;
									"
									alt=""
								/>
							</div>
							<div
								class="flex"
								style="
									flex-direction: column;
									font-size: large;
									justify-content: space-between;
									margin-top: 10px;
								"
							>
								<h1 class="card_title">Tonye</h1>
								<h2 class="card_sub_title">Account officer</h2>
							</div>
						</div>
						<div class="team_card">
							<div
								style="
									width: 100%;

									background-color: #d0aa53;
									border-radius: 5px;
									padding: 10px;
								"
							>
								<img
									src="./assets/images/ceo.jpg"
									style="
										aspect-ratio: 1;
										width: 100%;
										object-fit: cover;
										object-position: top;
										border-radius: 5px;
									"
									alt=""
								/>
							</div>
							<div
								class="flex"
								style="
									flex-direction: column;
									font-size: large;
									justify-content: space-between;
									margin-top: 10px;
								"
							>
								<h1 class="card_title">Steve Bala</h1>
								<h2 class="card_sub_title">CEO</h2>
							</div>
						</div>
						<div class="team_card">
							<div
								style="
									width: 100%;

									background-color: #d0aa53;
									border-radius: 5px;
									padding: 10px;
								"
							>
								<img
									src="./assets/images/chris.jpg"
									style="
										aspect-ratio: 1;
										width: 100%;
										object-fit: cover;
										border-radius: 5px;
									"
									alt=""
								/>
							</div>
							<div
								class="flex"
								style="
									flex-direction: column;
									font-size: large;
									justify-content: space-between;
									margin-top: 10px;
								"
							>
								<h1 class="card_title">	Chris</h1>
								<h2 class="card_sub_title">Expert Trader and Analyst</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- Contact -->
				<div id="contact" class="third_container">
					<h1 class="header">
						<span style="color: #d0aa53">Contact Us</span>
						<span style="font-size: xx-large; display: block"
							>For Any Enquiries</span
						>
					</h1>
					<form action="" class="team_card" style="gap: 20px">
						<div class="flex flex-col">
							<label for="">Email</label>
							<input type="text" placeholder="hello@email.com" />
						</div>
						<div class="flex flex-col">
							<label for="">Message</label>
							<textarea type="text" placeholder="Hello, I am..."></textarea>
						</div>
						<button
							style="
								width: 33%;
								color: white;
								background: #d0aa53;
								font-size: larger;
								border-radius: 5px;
								padding-block: 10px;
							"
						>
							Send
						</button>
					</form>
				</div>
			</div>
		</div>
		<!-- CTA -->
		<div class="third_container" style="z-index: 30">
			<h1
				class="header"
				style="text-align: center; padding-bottom: 80px; font-size: xxx-large"
			>
				<span style="color: #d0aa53">Get Started Now</span>
				<span style="font-size: xx-large; display: block"
					>Join the Thousands Earning</span
				>
			</h1>
			<center><div class="flex" style="justify-content: center; align-items: center;">
				<a href="./Sign_up.php" style="width: 100%;"><button class="cta-btn">Get Started</button></a>
			</div>
		</center>
		</div>
		<footer class="flex">
			<h2 style="font-size: medium; font-weight: 300">
				Copyright 2023 BalaxTrade. All rights Reserved
			</h2>
			<ul class="flex">
				<li>
					<a href="/about.html">About</a>
				</li>
				<li>
					<a href="/#plans">Plans</a>
				</li>
				<li>
					<a href="/#team">Team</a>
				</li>
				<li>
					<a href="/#testimonials">Testimonials</a>
				</li>
				<li>
					<a href="/#contact">Contact</a>
				</li>
			</ul>
		</footer>

		<script src="./js/nav.js"></script>

		<!-- 
		<script src="./js/partners.js"></script>
		<script src="owlcarousel/docs_src/assets/vendors/jquery.min.js"></script>
		<script src="owlcarousel/dist/owl.carousel.min.js"></script> -->
		<script src="./js/particles.js"></script>
	</body>
</html>
