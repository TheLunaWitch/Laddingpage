<!doctype html>
<html lang="nl">

<head>
	<title>My portfolio</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/hobbies.css" type="text/css">
</head>

<body>
<header>
	<nav>
		<a href="index.php">Home</a>
	</nav>
</header>
<main>
	<h2>Hobbies</h2>
	<h3 class="title">Games</h3>
	<button id="button">DBD trailer</button>
	<img src="img/dead by daylight.png" alt="">
	<img src="img/kaneki.jpg" alt="">
	<ul>
		<li class="best">Dead by daylight</li>
		<li>Outlast</li>
		<li>Genshin Impact</li>
		<li>Five nights at freddy's sister location</li>
		<li>Five nights at freddy's</li>
	</ul>
	<h3 class="tilte">Series</h3>
	<ul>
		<li class="best">Anime</li>
		<li>Shadow hunters</li>
		<li>The Order</li>
	</ul>
</main>
<footer>
	<p>&copy; Luna, 2021</p>
</footer>
	<!-- ---------------------------------Javascript---------------------------------------- -->
	<script> 
      	document.getElementById('button').addEventListener ('click', function() {
	  	document.getElementById('text-hidden').style.display = 'block';
		document.getElementById('text-hidden').style.fontSize = '55px';
		})
		document.getElementById('button').onclick = function () {
			location.href = "https://www.youtube.com/watch?v=JGhIXLO3ul8";
		};
		document.getElementById('button').style.background='darkred';
        document.getElementById("button").style.fontFamily ='Noto Sans';
        document.getElementById("button").style.borderColor='black'

	</script>
</body>