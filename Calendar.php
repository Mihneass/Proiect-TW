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

$myform="'formular.php'";

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
    $week .=  $day . '<a href="formular.php"><p class="button">Make an appointment</p></a>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/stilizare-calendar.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/stilizare-butoane.css">
</head>
<body>
<div class="header">
        <a href="Cereri.php"><img alt="Logo" src="biciclete.png" class="bicla"/></a>
        <div class="meniu">
            <a href="Calendar.php"><p class="calendar">Calendar</p></a>
            <a href="Cereri.php"><p class="cont">Comenzile mele</p></a>
        </div>
    </div>
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
            <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">next &gt;</a></li>
        </ul>
        <p class="text-right"><a href="calendar.php">Today</a></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>M</th>
                    <th>T</th>
                    <th>W</th>
                    <th>T</th>
                    <th>F</th>
                    <th>S</th>
                    <th>S</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($weeks as $week) {
                echo $week;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>