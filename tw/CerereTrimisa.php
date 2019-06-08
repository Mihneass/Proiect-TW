<!DOCTYPE HTML>
<html>
<head>
	
	
	<meta charset="utf-8">
	<title>PHP Calendar</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stilizare-calendar.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/stilizare-butoane.css">

    <link rel="stylesheet" href="css/stilizare-cerere.css" />
	
</head>
<body>
	<div id="header">
		<div>
		<?php
		setcookie("schedule2",$_POST['schedule2'],time()-86400);
		setcookie("INp",$_POST['INp'],time()-86400);
			if($_COOKIE['is_logged']==="LOGGED"){
				echo "<form action=".'"'."logout_process.php".'"'." method=".'"'."POST".'"'." >";	
				echo "<button type=".'"'."submit".'"'."name=".'"'."logbutton".'"'.">LOGOUT</button>";
				echo "</form>";
			}
			
			
			
			?>
			<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
			<form action="index.php">
					<a href="cos.php"><img  src="images/cos.jpg" alt="" name="cos" id="cos"></a>

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
					<a href="booking.php">calendar</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content" id="nn">
			<div class="section">
           
            <div class="main-body">
    <div class="corp-cerere">
        <h1>"
        
        
        Text lung aici AAAAAAAAAAAAAAAAAAA
        
        
        
        "</h1>
        <h2>
            Status: In asteptare
        </h2>
        <p class="trimis">Trimis acum .. ore</p>
        <p class="actualizare">Ultima actualizare acum .. ore</p>
    </div>
        </div>
            </div>
            </div>	
	<div id="footer">
		
			<div class="contact">
				<h3>contact information</h3>
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
</html>