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
					<a href="booking.php">Calendar</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div class="section">
				<div class="contact">
					
					<a href="cerereTrimisa.php" class="figure"><<h2>imprumuturile mele....ar trbui sa fie pe lucrurile din tabel</h2></a>

					<?php showBooks($_COOKIE['userID']); ?>
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
						function showBooks($userID){
						//	$table="carti";
						//	$bookType="'Drama'";
							$conn = oci_connect("student", "student", "localhost:1521/xe");
							if (!$conn) {
							  $m = oci_error();
							  $m4=4;
   							echo $m['message'], "\n";
							   exit;
							  

										}
							$enquiry="SELECT * FROM IMPRUMUTURI i JOIN CARTI c ON i.ID_CARTE_I=c.ID_CARTE where ID_DATORNIC=".$userID;
							$stid = oci_parse($conn, $enquiry);
							oci_execute($stid);
							echo "<table class="."table".">
							<tr >
								<th>ID CERERE</th>
								<th>PRET</th> 
								<th>NR. PIESE</th>
							<th>DATA CERERE</th>
							<th>DATA FINALIZARE</th>
							</tr>";
							while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
							echo "
							<tr >
								<th>".$row['ID_CARTE_I']."</th>
								<th>".$row['TITLU_CARTE']."</th> 
							<th>".$row['DATA_TRANZACTIE']."</th>
							<th>".$row['DATA_LIMITA']."</th>
							</tr>";
						}
						echo "	<tr>
								<th>"
								.n4."</th>
								<th>".'22lei'."</th> 
							<th>".'4'."</th>
							<th>".'22.04'."</th>
							<th>".'12.0'."</th>
							</tr>";
						echo "</table>";
							oci_close($conn);
							
						}

						?>
	</html>