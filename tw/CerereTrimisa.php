<!DOCTYPE HTML>
<apex:page  applyHtmlTag="false">

<html>
<head>
	<meta charset="UTF-8">
	<title>imprumuturi</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/stilizare-butoane.css" />
    <link rel="stylesheet" href="css/stilizare-cerere.css" />
	
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
					
	<?php
$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
  $m = oci_error();
   echo $m['message'], "\n";
   exit;
			}
$enquiry="SELECT * FROM CERERI WHERE IDK=:iddd";

$stid = oci_parse($conn, $enquiry);
oci_bind_by_name($stid, ":iddd", $_GET['page']);

oci_execute($stid);
$i=0;
$currPag=1;
$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);

		echo "			
					<div class=".'"'."corp".'"'.">
        
		<div class=".'"'."k2".'"'.">
			<h2 >date despre timp</h2>
		<a>";
		echo	"<p>data aleasa de client: ".$row['CREATED_AT']."</p>";
		echo	"<p>timp estimativ: ".$row['CREATED_AT']."</p>";
		echo	"<p>termen limita: ".$row['CREATED_AT']."</p>
				
			</a>
		</div>

</div>
";
echo "
<div class=".'"'."corp".'"'.">
        
		<div class=".'"'."k2".'"'.">
			<h2>piese folosite</h2>
		<a >";
		echo "		<p>Piesele necesare: ".$row['NUME_OBIECT'].", in numar de ".$row['NR_OBIECTE']."</p>  ";
echo "			</a>
		</div>

</div>";
echo "
<div class=".'"'."corp".'"'.">
        
		<div class=".'"'."k2".'"'.">
			<h2>detalii suplimentare</h2>
		<a >
				<p>".$row['DETALII']."</p>
				
			</a>
		</div>";
	
	?>
		

</div>
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
				
	</html>