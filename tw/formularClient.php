<!DOCTYPE HTML>
<apex:page  applyHtmlTag="false">

<html>
<head>
	<meta charset="UTF-8">
	<title>imprumuturi</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>
<body>
	<div id="header">
		<div>
		<?php
			if($_COOKIE['is_logged']==="LOGGED"){
				echo "<form action=".'"'."logout_process.php".'"'." method=".'"'."POST".'"'." >";	
				echo "<button type=".'"'."submit".'"'."name=".'"'."logbutton".'"'.">LOGOUT</button>";
				
				echo "</form>";
			}
			else header('Location: index.php');
			?>
			<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
			<form action="index.php">
				

			</form>
		</div>
		<div class="navigation">
			<ul>
				<li>
					<a href="index.php">home</a>
				</li>
				
				</li>
				<li class="selected">
					<a href="services.php">services</a>
					<ul>
						<li>
							<a href="serv/revizii.php">Revizii</a>
						</li>
						<li>
							<a href="serv/cadru.php">Cadru</a>
						</li>
						<li>
							<a href="serv/furca.php">Furca si shock</a>
						</li>
						<li>
							<a href="serv/roti.php">Roti</a>
						</li>
						<li>
							<a href="serv/frane.php">Frane</a>
						</li>
						<li>
							<a href="serv/transmisie.php">Transmisie</a>
						</li>
						<li>
							<a href="serv/alte.php">Altele</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="contact.php">comenzi</a>
				</li>
				<li class="booking">
					<a href="booking.php">Calendar</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="contact">
					
				<h1 class="avatar">Formular</h1>

   
        <form class="continut" action="make-request.php" method="POST">
            <div class="imgcontainer">


            </div>

            <div class="container">

               
                <br />
				 <br />
				 <select name="schedule" id="schedule">
								<option value="revizii">Revizii</option>
								<option value="cadru">Cadru</option>	
								<option value="fands">Furca Si Shock</option>
								<option value="roti">Roti</option>	
								<option value="frane">Frane</option>
								<option value="transmisie">Transmisie</option>	
								<option value="diverse">Diverse</option>	
							</select>
							<?php //echo $_POST['service-type'];
							 echo "<input type=".'"'."hidden".'"'." name=".'"'."service-date".'"'." value=".'"'.$_POST['service-date'].'"'." hidden>";
						//	 echo "<input type=".'"'."hidden".'"'." name=".'"'."service-type".'"'." value=".'"'.$_POST['service-type'].'"'." hidden>";
							?>
				<br />
				<br />
				 <br />
				
                <input type="text" placeholder="Enter Object Name" id="object" name="object-name" required>
                <input type="number" placeholder="Enter Number" id="price" name="object-number" required>

                <br />
                <label for="detalii"><b>Details</b></label>
                <br />

                <textarea rows="4" cols="50" class="detalii" name="details" placeholder="Enter Details" id="detalii">
                </textarea>


                <input type="file" name="myfile" name="object-file">

                <br />
                <label for="address"><b>Address</b></label>
                <br />
                <input type="text" placeholder="Enter Address" name="address" id="address" required>


                <button type="submit">Submit</button>


            </div>



        </form>
					
				</div>
			</div>
			<div class="sidebar">
				<div class="contact">
					<div>
						<a ><img src="images/lava2.jpg" alt=""></a>
					</div>
					
							<ul>
								<li>
									<b>address:</b> <span>426 strada repar</span>
								</li>
								<li>
									<b>phone:</b> <span>353737353</span>
								</li>
								<li>
									<b>fax:</b> <span>373753735533</span>
								</li>
								<li>
									<b>email:</b> <span><a href="">bicicleteSRL@yahoo.com</a></span>
								</li>
							</ul>
						
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
			<div>
				<div class="contact">
					<h3>contact information</h3>
					<ul>
						<li>
							<b>address:</b> <span>426 strada repar</span>
						</li>
						<li>
							<b>phone:</b> <span>04433344433</span>
						</li>
						<li>
							<b>fax:</b> <span>43322324432</span>
						</li>
						<li>
							<b>email:</b> <span><a href="">biciclete@yahoo.com</a></span>
						</li>
					</ul>
				</div>
				<div class="tweets">
					<h3>recent tweets</h3>
					<ul>
						<li>
							<a href="#">blablalbalbalalvalvalvlablalbalblalblablab.<span>1 day ago</span></a>
						</li>
						<li>
							<a href="#">blablalbalbla.<span>2 days ago</span></a>
						</li>
					</ul>
				</div>
				<div class="posts">
					<h3>recent blog post</h3>
					<ul>
						<li>
							<a href="#">roti noi</a>
						</li>
						<li>
							<a href="#">repar tot</a>
						</li>
						<li>
							<a href="#">stoc epuizat</a>
						</li>
						
					</ul>
				</div>
				<div class="connect">
					<h3>stay in touch</h3>
					<p>
						pentru detalii
					</p>
					<ul>
						<li id="facebook">
							<a href="">facebook</a>
						</li>
						<li id="twitter">
							<a href="">twitter</a>
						</li>
						<li id="googleplus">
							<a href="">googleplus</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="section">
				<p>
					&copy; uaic iasi
				</p>
				
			</div>
		</div>
	</body>
	<?php 
					
						?>
	</html>