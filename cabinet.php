<?php
		// var_dump($_COOKIE);

		if (!isset($_COOKIE['email']) OR trim($_COOKIE['email']) == '') {
			header("Location: index.html");
			exit;
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto&display=swap"
		rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/all.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<section class="account">
		<div class="header">
			<div class="header_logo">
				Logo
			</div>
			<div class="header_menu">
				<a href="#" class="header_menu-item">Free test</a>
				<a href="#" class="header_menu-item header_menu-item-active">Catalog</a>
				<a href="#" class="header_menu-item">Help</a>
			</div>
			<div class="header_account">
				<a href="#" class="header_account-name">
					Michael Browk
				</a>
				<a href="#" class="header_account_avatar">
					<img src="assets/icons/🦁.png" alt="avatar">
				</a>
				<div class="nav_menu">
					<div class="menu_link">Account</div>
					<div class="menu_link">Settings</div>
					<div class="menu_link" id="logout">Log Out</div>
				</div>
			</div>
		</div>
		<div class="main">
			<h1 class="main_h1">Course catalog</h1>
			<div class="main_title">
				Each course contains video lectures, tasks, and text materials. All courses viewed by you are displayed in
				your personal account
			</div>
			<div class="main_search">
				<form class="main_search-form" action="search">
					<div class="search_input-container">
						<span class="icon"><i class="fa fa-search"></i></span>
						<input class="search_input" placeholder="Search" type="search">
					</div>
					<div class="search_filter">
						Your country
						<div class="arrow_icon"><i class="fas fa-chevron-down"></i></div>
						<div class="search_clear">
							&#10006;
						</div>
						<select aria-placeholder="Your country" class="filter_select">
							<option class="filter_select-item">USA</option>
							<option class="filter_select-item">China</option>
							<option class="filter_select-item">Ukraine</option>
						</select>
					</div>
				</form>
			</div>
			<div class="main_carts">
				<div class="main_cart">
					<div class="img_cart_back">
						<img src="assets/img/carts/alexa.png" alt="Alexa">
						<div class="cart_logo">
							<img src="assets/icons/carts_icon/Island/ava.png" alt="">
							<div class="cart_username">Alexa</div>
						</div>
					</div>
					<h3 class="cart_h3">
						Take exam in Mathematics at 100 points
					</h3>
					<div class="cart_about_studying">
						<div class="carts_number_lessons">
							<img src="assets/icons/student.svg" alt="student">
							<div class="carts_amount"><span>12</span>lessons</div>
						</div>
						<div class="carts_number_tasks">
							<img src="assets/icons/pen.svg" alt="pen">
							<div class="carts_amount"><span>12</span>tasks</div>
						</div>
						<div class="carts_number_time">
							<img src="assets/icons/video.svg" alt="video">
							<div class="carts_amount"><span>30</span>minutes</div>
						</div>
					</div>
					<div class="cart_buttons">
						<button class="cart_btn cart_btn-active">Continue</button>
						<button class="cart_btn">More</button>
					</div>
				</div>
				<div class="main_cart">
					<div class="img_cart_back">
						<img src="assets/img/carts/diane.png" alt="Diane">
						<div class="cart_logo">
							<img src="assets/icons/carts_icon/Island/ava-1.png" alt="">
							<div class="cart_username">Kathryn Nguyen</div>
						</div>
					</div>
					<h3 class="cart_h3">
						How buy new clothes without money in USA
					</h3>
					<div class="cart_about_studying">
						<div class="carts_number_lessons">
							<img src="assets/icons/student.svg" alt="student">
							<div class="carts_amount"><span>12</span>lessons</div>
						</div>
						<div class="carts_number_tasks">
							<img src="assets/icons/pen.svg" alt="pen">
							<div class="carts_amount"><span>12</span>tasks</div>
						</div>
						<div class="carts_number_time">
							<img src="assets/icons/video.svg" alt="video">
							<div class="carts_amount"><span>30</span>minutes</div>
						</div>
					</div>
					<div class="cart_buttons">
						<button class="cart_btn cart_btn-active">Continue</button>
						<button class="cart_btn">More</button>
					</div>
				</div>
				<div class="main_cart">
					<div class="img_cart_back">
						<img src="assets/img/carts/kathryn.png" alt="Kathryn">
						<div class="cart_logo">
							<img src="assets/icons/carts_icon/Island/ava-2.png" alt="">
							<div class="cart_username">Diane Miles</div>
						</div>
					</div>
					<h3 class="cart_h3">
						Why people hate me?
					</h3>
					<div class="cart_about_studying">
						<div class="carts_number_lessons">
							<img src="assets/icons/student.svg" alt="student">
							<div class="carts_amount"><span>12</span>lessons</div>
						</div>
						<div class="carts_number_tasks">
							<img src="assets/icons/pen.svg" alt="pen">
							<div class="carts_amount"><span>12</span>tasks</div>
						</div>
						<div class="carts_number_time">
							<img src="assets/icons/video.svg" alt="video">
							<div class="carts_amount"><span>30</span>minutes</div>
						</div>
					</div>
					<div class="cart_buttons">
						<button class="cart_btn cart_btn-active">Continue</button>
						<button class="cart_btn">More</button>
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<script src="./js/logout.js"></script>
	<script src="./js/ajax.js"></script>
	<script src="./js/main.js"></script>
</body>

</html>