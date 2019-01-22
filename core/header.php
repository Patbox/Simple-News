<!DOCTYPE html>
<html lang="pl-PL" prefix="og: http://ogp.me/ns#">
	<head>
		<meta property="og:title" content="<?php echo $nazwa;?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo $adres;?>" />
		<link rel="canonical" href="<?php echo $adres;?>" />
		<meta property="og:locale" content="pl_PL" />
		<title><?php echo $nazwa; ?></title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php echo $path;?>core/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<a class="navbar-brand" href="<?php echo $adres; ?>"><?php echo $nazwa; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo $adres;?>">Strona główna</a>
					</li>
					<?php 
					$i = 0;
					while (isset($link[$i])) {
						echo '<li class="nav-item"><a class="nav-link" href="';
						echo $link[$i];
						echo '">';
						echo $link_nazwa[$i];
						echo '</a>';
						$i = $i+1;
						} ?>
					</li>
				</ul>
			</div>
		</nav>
		<br><br><br>
		<div class="container">
