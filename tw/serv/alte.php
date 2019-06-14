<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>drama</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	
	<style>
		
	</style>

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
			?>
			<a href="../index.php" class="logo"><img src="../images/logo.png" alt=""></a>
			<form action="../index.php">
				
			</form>
		</div>
		<div class="navigation">
			<ul>
				<li>
					<a href="../index.php">home</a>
				</li>
				
				</li>
				<li class="selected">
                <a href="../services.php">services</a>
					<ul>
						<li>
							<a href="revizii.php">Revizii</a>
						</li>
						<li>
							<a href="cadru.php">Cadru</a>
						</li>
						<li>
							<a href="furca.php">Furca si shock</a>
						</li>
						<li>
							<a href="roti.php">Roti</a>
						</li>
						<li>
							<a href="frane.php">Frane</a>
						</li>
						<li>
							<a href="transmisie.php">Transmisie</a>
						</li>
						<li>
							<a href="alte.php">Altele</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="../contact.php">cereri</a>
				</li>
				<li class="booking">
					<a href="../booking.php">calendar</a>
				</li>
				<li class="booking">
					<a href="stock.php">Stock</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="breadcrumb">
					<span>You are here:</span>
					<ul>
						<li>
							<a href="../index.php">home</a>
						</li>
						<li>
							<a href="../services.php">srvices</a>
						</li>
						<li>
								<a href="alte.php">alte</a>
							</li>
						
					</ul>
				</div>
				<div class="services">
					<h2>alte servicii</h2>
					<table class="table">
							<tr >
								<th><h1>Servicii</h1></th>
								<td><h1>Pret</h1></td>
							</tr>"
							<tr >
								<th><h2>Montat/ demontat /schimbat mansoane</h2></th>
								<td><h2>5</h2></td>
							</tr>"
							<tr >	
								<th><h2>Strans suruburi cu cheie dinamometrica</h2></th> 
								<td><h2>15</h2></td> 
							</tr>"
							<tr >
								<th><h2>Montat/ demontat/ schimbat coarne</h2></th>
								<td><h2>50</h2></td>
							</tr>"
							<tr >
								<th><h2>Montat/ demontat/ schimbat far sau stop</h2></th>
								<td><h2>30</h2></td>
							</tr>"
							<tr >
								<th><h2>Montat/ demontat/ schimbat cric</h2></th>
								<td><h2>10</h2></td>
								
							</tr>"
							<tr >
								<th><h2>Montat/ demontat/ schimbat vitezometru</h2></th> 
								<td><h2>15</h2></td> 
								
							</tr>"
							<tr >
								<th><h2>Montat/ demontat/ schimbat ghidolina</h2></th>
								<td><h2>30</h2></td>
								
							</tr>"
							<tr >
								<th><h2>Extractie/ extragere surub rupt (daca se poate)</h2></th>
								<td><h2>20</h2></td>
								
							</tr>"
							<tr >
								<th><h2>Asamblat bicicleta </h2></th>
								<td><h2>100</h2></td>
								
							</tr>"
							
								
								
								
								
								
					
					</table>
				</div>
			</div>
			<div class="sidebar">
				<div class="navigation">
                <h3>Servicii</h3>
					<ul>
						<li class="selected">
							<a href="revizii.php">revizii</a>
						</li>
						<li>
							<a href="cadru.php">cadru</a>
						</li>
						<li>
							<a href="furca.php">furca si shock</a>
						</li>
						<li>
							<a href="roti.php">roti</a>
						</li>
						<li>
							<a href="frane.php">frane</a>
						</li>
						<li>
							<a href="transmisie.php">transmisie</a>
						</li>
						<li>
							<a href="alte.php">diverse</a>
						</li>	
					</ul>
				</div>
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