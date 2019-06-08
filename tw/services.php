<!DOCTYPE php>

<php>
<head>
	<meta charset="UTF-8">
	<title>Service - reparatii biciclete</title>
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
				<div class="breadcrumb">
					<span>You are here:</span>
					<ul>
						<li>
							<a href="index.php">home</a>
						</li>
						<li>
							<a href="services.php">services</a>
						</li>
						
					</ul>
				</div>
				<div class="services">
				<h1><?php if($_COOKIE['is_logged']==="LOGGED")echo "Welcome, ".$_COOKIE['user'];  ?></h1>
				<h2>servicii</h2>
					<ul>
						<li>
							<a href="formular.php" class="figure"><img src="images/drinking.jpg" alt=""></a>
							<div>
								<h3>Revizii</h3>
								<p>
										Bicicletele au nevoie de intretinere regulata pentru a functiona in parametrii 
										optimi. Se recomanda ca cel putin o data pe an sa faceti o revizie prin care sa
										 curatati, reglati si ungeti bicicleta. Perioada recomandata pentru astfel de 
										 revizii este primavara, inainte de sezonul cald, si toamna, inainte de
										  hibernare. Daca nu aveti timpul necesar sau cunostintele tehnice puteti 
										  sa veniti cu bicicleta la noi pentru o revizie chiar si personalizata.
								</p>
							</div>
						</li>
						<li>
							<a href="formular.php" class="figure"><img src="images/navigator.jpg" alt=""></a>
							<div>
								<h3>Cadru</h3>
								<p>
										Aceasta sectiune cuprinde operatiile de service adresate cadrului. 
										Fiindca acesta uneste toate componentele bicicletei trebuie sa ii acordam
										 importanta cuvenita. Aici discutam despre montari, demontari, ajustari si 
										 un plus de grija si atentie pentru cadrul bicicletei tale.
								</p>
							</div>
						</li>
						<li>
							<a href="formular.php" class="figure"><img src="images/tool-box.jpg" alt=""></a>
							<div>
								<h3>Furca si shock</h3>
								<p>
										Orice furca de bicicleta sau shock (amortizor spate) are nevoie periodic
										 de service. Intervalele de service la furci/shock-uri sunt intre 30-50 
										 ore pentru service "small" si 80-100 ore pentru service "big". Revizia 
										 la furca sau shock nu este un moft fiindca de ea depind performatele
										  componentelor si mai ales siguranta voastra. Tu cand ai facut ultima 
										  revizie la furca/amortizor?
								</p>
							</div>
						</li>

						<li>
							<a href="formular.php" class="figure"><img src="images/roti.jpg" alt=""></a>
							<div>
								<h3>Roti</h3>
								<p>									
										Nu vrem sa reinventam roata, dar promitem sa o readucem in forma optima
										 pentru pedalat. Drept urmare realizam majoritatea operatiilor: centram,
										  construim, inlocuim, indreptam, filetam, etc orice tip de roata.
								</p>
							</div>
						</li>

						<li>
							<a href="formular.php" class="figure"><img src="images/frane.jpg" alt=""></a>
							<div>
								<h3>Frane</h3>
								<p>									
								Chiar daca ne place viteza sau doar plimbarea prin
								 parc, in mod cert trebuie sa ne mai si oprim din cand in cand … :)
								</p>
							</div>
						</li>

						<li>
					     	<a href="formular.php" class="figure"><img src="images/transmisie.jpg" alt=""></a>
							<div>
								<h3>Transmisie</h3>
								<p>									
										Partea de transmisie contine cele mai multe componente in miscare.
										 Acestea trebuiesc curatate si unse periodic pentru a reduce frecarile si
										  pentru a prelungi durata de viata a componentelor.
								</p>
							</div>
						</li>

						<li>
							<a href="formular.php" class="figure"><img src="images/diverse.jpg" alt=""></a>
							<div>
								<h3>Diverse</h3>
								<p>									
									Tot felul de ajustari si reparatii pentru bicicleta ta si accesoriile din 
									dotare. 
								</p>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<div class="sidebar">
				<div class="navigation">
				<h3>Servicii</h3>
					<ul>
						<li class="selected">
							<a href="formular.html">revizii</a>
						</li>
						<li>
							<a href="formular.html">cadru</a>
						</li>
						<li>
							<a href="formular.html">furca si shock</a>
						</li>
						<li>
							<a href="formular.html">roti</a>
						</li>
						<li>
							<a href="formular.html">frane</a>
						</li>
						<li>
							<a href="formular.html">transmisie</a>
						</li>
						<li>
							<a href="formular.html">diverse</a>
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
</php>