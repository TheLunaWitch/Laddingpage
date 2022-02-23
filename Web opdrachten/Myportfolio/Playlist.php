<!doctype html>
<html lang="nl">

<head>
	<title>My portfolio</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/playlist.css" type="text/css">

	<style>

	body{
		background-color: black;
	}
	a{
		text-decoration: none;
		color: ghostwhite;
	}

	p{
		color: ghostwhite;
	}

	ul li{
		font-size: 20px;
	}
	h2{
		font-size: 35px;
		color: ghostwhite;
	}

	</style>
</head>

<body>
	<?php
	require_once("header.php");
	?>
<main>
	<h2>Mijn favorieten liedjes</h2>
	<p>Dit zijn mijn favorieten liedjes:</p>
	<ul>
		<li><a href="https://www.youtube.com/watch?v=1mYYcFWMor8">Emeline - Flowers and Sex</a></li>
		<li><a href="https://www.youtube.com/watch?v=FP-IopSHomc">Billie Eilish - I didn't change my number</a></li>
		<li><a href="https://www.youtube.com/watch?v=wqZnO71PBis">CORPSE - HOT DEMON B!TCHES NEAR U !!!</a></li>
		<li><a href="https://www.youtube.com/watch?v=d8ekz_CSBVg"> Three days Grace - I hate everything about you</a></li>
		<li><a href="https://www.youtube.com/watch?v=eVbShUW6QBM">Hatari - Hatrið mun sigra</a></li>
	</ul>
	<img src="img/spotify.jpg" alt="">
	<img src="img/billie.jfif" alt="">
	<img src="img/hatari.jpg" alt="">
</main>
<footer>
<?php

require_once("footer.php");

?>
</footer>
</body>