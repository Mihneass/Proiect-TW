<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>stock</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	
	<style>
		
	</style>

</head>
<body>
	<div id="header">
		<div>
		<?php
			if($_COOKIE['is_logged']==="LOGGED"){
				if($_COOKIE['userAdmin']!=="true")header('Location: ../index.php');
				echo "<form action=".'"'."../logout_process.php".'"'." method=".'"'."POST".'"'." >";	
				echo "<button type=".'"'."submit".'"'."name=".'"'."logbutton".'"'.">LOGOUT</button>";
				echo "</form>";
			}
			else header('Location: ../index.php');
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
					<a href="../contact.php">comenzi</a>
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
								<a href="stock.php">stock</a>
							</li>
						
					</ul>
				</div>
				<div class="services">
					<h2>Stocul disponibil</h2>
					
					<table class="table">
							<tr >
								<th><h1>Nume</h1></th>
								<td><h1>Numar</h1></td>
								<th><h1>Add/Remove</h1></th>
							</tr>"
							<tr >
							<?php
							if(!isset($_COOKIE['id_cerere']))setcookie('id_cerere',61,time()+time()+(86400*100));
							$conn = oci_connect("student", "student", "localhost:1521/xe");
							if (!$conn) {
							   $m = oci_error();
							   echo $m['message'], "\n";
							   exit;
							}
							?>
								<th><h2>Servicii</h2></th>
								<td><h2>
								
								<?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Servicii";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?>
								
								</h2></td>
								<th>
								<form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Servicii">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Servicii">
								<button type="submit" name="remv1">-</button>
								</form>
								</th>
							</tr>"
							<tr >
								<th><h2>Cadru</h2></th>
								<td><h2><?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Cadru";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?></h2></td>
								<th>
								<form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Cadru">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Cadru">
								<button type="submit" name="remv1">-</button>
								</form>
								</th>
							</tr>"
							<tr >
								<th><h2>Furca si shock</h2></th>
								<td><h2><?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Furca";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?></h2></td>
								<th><form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Furca">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Furca">
								<button type="submit" name="remv1">-</button>
								</form></th>
							</tr>"
							<tr >
								<th><h2>Roti</h2></th>
								<td><h2><?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Roti";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?></h2></td>
								<th><form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Roti">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Roti">
								<button type="submit" name="remv1">-</button>
								</form></th>
							</tr>"
							<tr >
								<th><h2>Frane</h2></th>
								<td><h2><?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Frane";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?></h2></td>
								<th><form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Frane">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Frane">
								<button type="submit" name="remv1">-</button>
								</form></th>
							</tr>"
							<tr >
								<th><h2>Transmisie</h2></th>
								<td><h2><?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Transmisie";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?></h2></td>
								<th><form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Transmisie">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Transmisie">
								<button type="submit" name="remv1">-</button>
								</form></th>
							</tr>"
							<tr >
								<th><h2>Altele</h2></th>
								<td><h2><?php
								$enquiry="SELECT NR_PIESE FROM PIESE WHERE NUME=:Servicii";
								$stid = oci_parse($conn, $enquiry);
								$piece="Diverse";
								oci_bind_by_name($stid,':Servicii',$piece);
								oci_execute($stid);
								$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
								echo $row['NR_PIESE'];
															?></h2></td>
								<th><form action="add_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Diverse">
								<button type="submit" name="add1">+</button>
								</form>
								<form action="delete_piece.php" method="POST">
								<input type="hidden" name="toModify" value="Diverse">
								<button type="submit" name="remv1">-</button>
								</form></th>
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