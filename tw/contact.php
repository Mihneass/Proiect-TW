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
					
					
					<div class="corp" id="corp">
        <?php
		/*
		<div class="cerere1">
			<a href="CerereTrimisa.php">
				<p>Trimis acum .. ore</p>
				<p>Ultima actualizare:</p>
				<p>Detaliile cererii:</p>
				<p>Status: In asteptare</p>
			</a>
		</div>
	
	
		<div class="cerere2">
   <a href="CerereTrimisa.php">
			<p>Trimis acum .. ore</p>
			<p>Ultima actualizare:</p>
			<p>Detaliile cererii:</p>
			<p>Status: In asteptare</p>
	</a>
	</div>
	*/
?>
<script>
   let body = document.getElementById('corp');
   const MAX_NUMBER = 1000;
   const MIN_DISTANCE = 300; // pixels


   fetch('jsons/requests.json')
   .then(response => {
       if (!response.ok) {
           throw new Error("HTTP error " + response.status);
       }
       return response.json();
   })
   .then(json => {
       this.users = json;
       console.log(this.users);
	   

let i=0;
   while(i<15){
   const p = document.createElement('div');
   p.setAttribute("class","cerere");
   const a= document.createElement('a');
   let destination="CerereTrimisa.php?page=";
   destination=destination.concat(json[i].id);
   a.setAttribute("href",destination);
   p.appendChild(a);
   const txt3 = document.createElement('p');
   let str1="Detaliile cererii: ";
   str1=str1.concat(this.users[i].address);
   txt3.innerText=str1;
   a.appendChild(txt3);
   const txt5 = document.createElement('p');
   let str2="Status: ";
   str2=str2.concat(this.users[i].situation);
   txt5.innerText=str2;
   a.appendChild(txt5);

   body.appendChild(p);
   i++;
   }
   
let j=0;

   	const more=document.createElement('button');
    more.innerText="more";
	body.appendChild(more);
    more.addEventListener('click', function(){
	body.removeChild(more);
		
	j=i+5;

    while(i<j){
	const p = document.createElement('div');
   p.setAttribute("class","cerere");
   const a= document.createElement('a');
   let destination="CerereTrimisa.php?page=";
   destination=destination.concat(json[i].id);
   a.setAttribute("href",destination);
   p.appendChild(a);
   const txt3 = document.createElement('p');
   let str1="Detaliile cererii: ";
   str1=str1.concat(json[i].address);
   txt3.innerText=str1;
   a.appendChild(txt3);
   const txt5 = document.createElement('p');
   let str2="Status: ";
   str2=str2.concat(json[i].situation);
   txt5.innerText=str2;
   a.appendChild(txt5);

   body.appendChild(p);
   i++;
		}
		body.appendChild(more);

	});

   })
   .catch(function () {
       this.dataError = true;
   })



</script>

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