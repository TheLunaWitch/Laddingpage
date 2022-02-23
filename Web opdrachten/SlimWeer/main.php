<main>
	<div class="main-menu">
		<div class="main-wrapper">
			<div class="background">
			<pre> <?php echo file_get_contents('prediction.txt')?></pre>

			<div class="arrow">
			<img id="img3" src="img/icon_down.png">
			</div>

			<h2>Over SlimWeer™</h2>
			<p id= "overons">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Omnis nisi at quae maxime,optio, quas, minima dolor ratione.</p>

			<div class="cloud">
			<img id= "img2" src="img/icon_cloud.png">
			</div>

			<h2>Contact met SlimWeer</h2>
			<p>Stel U weervraag via het formulier hieronder!</p>

				<div class="contact-main">
					<div class="wrapper">
						<div class="form">
							<form action="backend/contactController.php" method="post">

							 	<div class="contact">
					                <label for="name">Naam:</label>
					                <input type="text" name="name" rows="2" cols="100">
					            </div>

					            <div class="contact">
					                <label for="email">Email:</label>
					                <input type="email" name="email" rows="2" cols="100">
					            </div>

					            <div class="contact">
					                <label for="textarea">Weervraag:</label>
					                <textarea name="message" rows="5" cols="100"></textarea>
					            </div>

					            <input id= "button"type="submit" value="Verzenden">
							</form>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
