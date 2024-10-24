<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<?php
require_once("./config/connect.php");

$categorypage = "SELECT * FROM `category`";
$categorysql = mysqli_query($conn, $categorypage);



?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>NewsBlog a Blog Category Bootstrap Responsive Website Template | Home : W3layouts</title>

	<link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
	<!-- header -->
	<header class="w3l-header">
		<div class="container">
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
				<a class="navbar-brand" href="index.html">
					<span class="fa fa-newspaper-o"></span> NewsBlog</a>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->


				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<nav class="mx-auto">
						<div class="search-bar">
							<form class="search">
								<input type="search" class="search__input" name="search" placeholder="Discover news, articles and more"
									onload="equalWidth()" required>
								<span class="fa fa-search search__icon"></span>
							</form>
						</div>
					</nav>
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item dropdown @@pages__active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								More <span class="fa fa-angle-down"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php foreach($categorysql as $catsql) : ?>
								<a class="dropdown-item @@b__active" href="singlecat.php?id=<?=$catsql['c_name']?>"><?=$catsql['c_name']?></a>
								<?php endforeach; ?>
							</div>
						</li>
						<li class="nav-item @@contact__active">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
				<!-- //toggle switch for light and dark theme -->
		</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //header -->
	<!-- /homeblock1-->
	<section class="w3l-homeblock1 py-sm-5 py-4">
		<div class="container py-md-4">
			<div class="grids-area-hny main-cont-wthree-fea row">
				<?php while ($categoryresult = mysqli_fetch_assoc($categorysql)) : ?>
					<div class="col-lg-3 col-6 grids-feature mt-lg-0 mt-md-4 mt-3">
						<a href="singlecat.php?id=<?= $categoryresult['c_name'] ?>">
							<div class="area-box">
								<span class="fa fa-pie-chart"></span>
								<h4 class="title-head"><?= $categoryresult['c_name'] ?></h4>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<!-- //homeblock1-->