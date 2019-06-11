<?php

$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
$enquiry="SELECT * FROM CERERI";
$stid = oci_parse($conn, $enquiry);

oci_execute($stid);
$i=0;
$myfile=fopen("csv/requests.csv","r");
while($data = fgetcsv($myfile, 1000)){
  //  var_dump($data);
    $i=0;
    while($i<8){
    echo $data[$i].", ";
    $i++;}
  //  if($i===7){$i=0;
    echo "<br>";
//}
}
?>