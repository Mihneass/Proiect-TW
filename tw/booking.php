<?php
// Set your timezone!!
date_default_timezone_set('Europe/Bucharest');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

$myform="'cos.php'";

// Check format
$timestamp = strtotime($ym . '-01');  // the first day of the month
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today (Format:2018-08-8)
$today = date('Y-m-j');

// Title (Format:August, 2018)
$title = date('F, Y', $timestamp);

// Create prev & next month link
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);

// 1:Mon 2:Tue 3: Wed ... 7:Sun
$str = date('N', $timestamp);

// Array for calendar
$weeks = [];
$week = '';

$availability=0;

// Add empty cell(s)
$week .= str_repeat('<td></td>', $str - 1);

for ($day = 1; $day <= $day_count; $day++, $str++) {

    $date = $ym . '-' . $day;
    if(date('yyyy-mm',strtotime($date))>date('yyyy-mm',strtotime($today)))$availability=1;

    
    if(substr($date,-5)==='04-29' || substr($date,-5)==='04-30' || substr($date,-4)==='05-1'|| substr($date,-4)==='05-2'|| substr($date,-4)==='05-3' || substr($date,-4)==='05-4'){
        if ($today != $date)$week .='<td class="holiday">
    ';
        else $week .='<td class="today-holiday">
    ';}
        else
        if(substr($date,-5)==='12-25' ||substr($date,-5)==='12-26' || substr($date,-5)==='12-27' || substr($date,-5)==='12-28' || substr($date,-5)==='12-29' || substr($date,-5)==='12-30' || substr($date,-5)==='12-31' ||substr($date,-4)==='01-1'||substr($date,-4)==='01-2'){
            if ($today != $date)$week .='<td class="holiday">
            ';
                else $week .='<td class="today-holiday">
            ';
    }
        else
    if ($today === $date) {
        $week .= '<td class="today" >
    ';
    $availability = 1;
    } else {
        if($availability==0){$week .= '<td class="passed">
        ';}
        else
    $week .= '<td class="work">
    ';
    }
    $week .=  $day . '<a href="cos.php"><p class="button">Make an appointment</p></a>
</td>';

    // Sunday OR last day of the month
    if ($str % 7 == 0 || $day == $day_count) {

        // last day of the month
        if ($day == $day_count && $str % 7 != 0) {
            // Add empty cell(s)
            $week .= str_repeat('<td></td>', 7 - $str % 7);
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>
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
				<div class="calendar">
			
        
    </div>
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
            <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">next &gt;</a></li>
        </ul>
        <p class="text-right"><a href="calendar.php">Today</a></p>
        <table class="table table-bordered">
            <td>
                <tr>
                    <th>M</th>
                    <th>T</th>
                    <th>W</th>
                    <th>T</th>
                    <th>F</th>
                    <th>S</th>
                    <th>S</th>
                </tr>
            </td>
            <tbody>
                <?php
                foreach ($weeks as $week) {
                echo $week;
                }
                ?>
            </tbody>
        </table>
    </div>
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