<!DOCTYPE HTML>
<apex:page  applyHtmlTag="false">
<html>
<head>
	<meta charset="UTF-8">
	<title>cos</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/cos.css" type="text/css">
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
					<a href="contact.php">cereri</a>
				</li>
				<li class="booking">
					<a href="booking.php">calendar</a>
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
							<a href="index.php">home</a>
						</li>
						<li>
							<a href="services.php">books</a>
						</li>
						<li>
								<a href="cos.php">cos</a>
							</li>
						
					</ul>
				</div>
				<div class="services">
					<h2>shopping cart</h2>
					<?php
					$fileContent = file_get_contents('./books/cosul_curent.json');
					$books = json_decode($fileContent,true);
					$nrBooks=0;
					$valueBooks=0;
					foreach($books as $element){
					$nrBooks++;
					if($element['buyOrLease']!='imprumuta')
						$valueBooks+=$element['price'];
					echo "
					<table class='buy'>


					<tr><th>Book Name</th>";
							echo"<td>".$element['bookName']; 
							echo"</td>";
							echo "<tr><th>Book Price</th>";

					if($element['buyOrLease']!="imprumuta")
					echo "<td>".$element['price']; 
							else echo "<td>Imprumut"; 
							echo"</td>";
							
					echo "
					<tr><th>Type</th>";
					echo"<td>".$element['buyOrLease']; 
					echo"</td>";
					echo "
							
							
		              
						 <th>
						 <form method=".'"'."POST".'"'." action=".'"'."books/basket_eliminate.php".'"'.">
						 <input type=".'"'."text".'"'." name=".'"'."position_to_delete".'"'." value=".'"'.$element['positionInBasket'].'"'." hidden>
							<button type=".'"'."submit".'"'."> &times</button></form>
							
						</th></tr>
					</tr>";
					echo"<tr><li class='no'>--------------------------</li></tr>";
					echo"

					</table>";
					}

					echo "<table class='buy2'>
					<tr><li class='no'>--------------------------</li></tr>
					<th>	
						<h4>Total Nr. of Book = ".$nrBooks;
					echo "</h4>
						<h4>Total Book price= ".$valueBooks;
					echo "	</h4>			
									
					</th>
	
							
					<tr>
						
						<th>";
						if($nrBooks!=0)echo "<form method=".'"'."POST".'"'." action=".'"'."books/finalize_purchase.php".'"'."><button type=".'"'."submit".'"'.">place your order</button>";
						echo"	</th>
					</tr>
					
				</table>";
				?>
				</table>
				</div>
			</div>
			<div class="sidebar">
				<div class="navigation">
					
					<h3>Servicii</h3>
					<ul>
						<li class="selected">
							<a href="serv/revizii.html">revizii</a>
						</li>
						<li>
							<a href="serv/cadru.html">cadru</a>
						</li>
						<li>
							<a href="serv/furca.html">furca si shock</a>
						</li>
						<li>
							<a href="serv/roti.html">roti</a>
						</li>
						<li>
							<a href="serv/frane.html">frane</a>
						</li>
						<li>
							<a href="serv/transmisie.html">transmisie</a>
						</li>
						<li>
							<a href="serv/diverse.html">diverse</a>
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
</html>