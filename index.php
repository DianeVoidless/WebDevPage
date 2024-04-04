<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Freelancing</title>
	<link rel="stylesheet" href="style.css">
</head>





<body>
	<header>

		<img src="logo.png" alt="logo" id="logoImage">
		<div id="desktopMenu">
			<a id="homeButton" class="include" href="#list-image">Home</a>
			<a id="servicesButton" class="include" href="#services">Services</a>
			<a id="portofolioButton" class="include" href="#portofolio">Portofolio</a>
			<a id="contactButton" class="include" href="#divLineBlue">Contact</a>
		</div>

    <div id="smallContainer">
      <div id="slider">
        <div id="square">
          <div id="circle"></div>
        </div>
      </div>
      <img id="list-image" src="list.png" alt="list">
    </div>

		<nav id="mobileMenu" style="display: none;">
			<img id="xMark" src="x-mark.png" alt="x-mark">
			<ul>
				<li><a id="hButton" href="#list-image">Home</a></li>
				<li><a id="sButton" href="#services">Services</a></li>
				<li><a id="pButton" href="#portofolio">Portofolio</a></li>
				<li><a id="cButton" href="#divLineBlue">Contact</a></li>
			</ul>
		</nav>
	</header>
	<div id="heroBg">
		<div id="hero_container">
				<div id="intro"><h1>DianeV.</h1>
					<p id="include">Lorem ipsum, dolor sit amet.</p>
					<p id="include">Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Quia, ut!</p>
				</div>
				<img src="portrait.png" alt="portrait">
		</div>
	</div>
	<!--</section>-->
	<section id="services">
		<div id="service1">
			<article>
				<header style="margin-top:0px">
					<h2>Sketch</h2>
					<img src="pencil.png" alt="" id="pencilImage">
				</header>
				<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Sunt provident atque, qui mollitia alias deleniti ab nostrum voluptatum accusantium repudiandae laboriosam, veritatis optio perferendis, quos cupiditate laborum, obcaecati aliquid consequuntur?</p>
			</article>
		</div>
		<div id="service2">
		<article>
			<header>
				<h2>Ink</h2>
				<img src="pen.png" alt="" id="penImage">
			</header>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae eveniet iusto, fugit natus, veritatis iste quod velit, aperiam, vel deleniti voluptatem impedit quam eaque! Voluptas sint debitis dignissimos ut magnam impedit officiis praesentium cupiditate veniam facere, atque itaque doloribus ratione, eaque laboriosam tempora nulla, rem consectetur excepturi eligendi, ab. Facilis?</p>
		</article>
		</div>
		<div id="service3">
			<article>
				<header>
					<h2>Color</h2>
					<img src="paint.png" alt="" id="paintImage">
				</header>
				<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Sunt provident atque, qui mollitia alias deleniti ab nostrum voluptatum accusantium repudiandae laboriosam, veritatis optio perferendis, quos cupiditate laborum, obcaecati aliquid consequuntur?</p>
			</article>
		</div>
		<div id="service4">
			<article>
				<header>
					<h2>Full render</h2>
					<img src="rainbow.png" alt="" id="rainbowImage">
				</header>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae eveniet iusto, fugit natus, veritatis iste quod velit, aperiam, vel deleniti voluptatem impedit quam eaque! Voluptas sint debitis dignissimos ut magnam impedit officiis praesentium cupiditate veniam facere, atque itaque doloribus ratione, eaque laboriosam tempora nulla, rem consectetur excepturi eligendi, ab. Facilis?</p>
			</article>
		</div>
	</section>
	<hr id="divLine">


	<?php 
		$connection = mysqli_connect("localhost", "root", "1Q2w3e4r5t6y7u8i", "myDatabase");

		if(!$connection)
		{
			die("could not connect".mysqli_connect_error());
		}

		$query = "select * from portofolio";

		$stmt = mysqli_query($connection, $query);

		/*while($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC))
		{
			echo $row['entryTitle'].'</br>';
			echo $row['entryDesc'].'</br>';
		}*/

		$sql = 'SELECT *';
		$sql .= 'FROM portofolio';
		$results = $connection -> query($sql);
	?>

	<table>
		<tr>
			<th>Titles</th><th>Descriptions</th>
		</tr>
		<?php
		foreach($results as $row)
		{
			echo '<tr>';
			echo '<td>' . $row['entryTitle'] . '</td><td>' . $row['entryDesc'] . '</td>';
			echo '</tr>';
		}
		?>
	</table>

	<!--<div id="portofolio">
			<article>
				<header>
					<h3>20XX - Portofolio 1</h3>
				</header>
				<p id="exclude">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae eveniet iusto, fugit natus, veritatis iste quod velit, aperiam, vel deleniti voluptatem impedit quam eaque! Voluptas sint debitis dignissimos ut magnam impedit officiis praesentium cupiditate veniam facere, atque itaque doloribus ratione, eaque laboriosam tempora nulla, rem consectetur excepturi eligendi, ab.</p>
				<p id="exclude">https://(link)</p>
			</article>
			<hr id="divLine">
			<article>
				<header>
					<h3>20XX - Portofolio 2</h3>
				</header>
				<p id="exclude">Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Sunt provident atque, qui mollitia alias deleniti ab nostrum voluptatum accusantium repudiandae laboriosam, veritatis optio perferendis, quos cupiditate laborum, obcaecati aliquid consequuntur.</p>
				<p id="exclude">https://(link)</p>
				<p id="exclude">https://(link)</p>
			</article>
	</div>*/-->

	<hr id="divLineBlue">


	<form action="#" method="POST">
    <!-- Your form fields go here -->
		<div id="contact">
			<h2>Contact</h2>	
			<p>Send an e-mail at dv.freelancing@email.com or contact me here:</p>
		</div>
		<div id="name">
			<label for="name">Full Name<span class="required">*</span></label>
			<input type="text" id="nameBox" name="name" required>
		</div>
		<p></p>
		<div id="mail">
			<label for="mail">E-mail Address<span class="required">*</span></label>
			<input type="text" id="mailBox" name="mail" required>
		</div>
		<p></p>
		<div id="phone">
			<label for="phone">Phone Number<span class="required">*</span></label>
			<input type="text" id="phoneBox" name="phone" required>
		</div>
		<p></p>
		<div id="message">
    		<label for="messageText">Message: <span class="required">*</span></label>
    		<textarea id="messageBox" name="messageText" rows="5"></textarea>
		</div>
		<br>
		<br>
		<br>
		<br>
		<button type="submit" id="sendButton">Send</button>
	</form>
	<br>
	<hr id="divLine">
	<br>
	<div id="end">
		<img src="logo.png" alt="logo2" id="logoImage">
		<p>©2023. Design and Implementation: DianeV. All rights reserved.</p>
	</div>
	<script src="js.js"> </script>
</body>
</html>