<?php

$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
if(empty($_FILES))
{
  echo "File not found";
  exit;
}
$i=0;
$j=$_COOKIE['id_cerere'];
var_dump($_FILES);
$myfile=fopen($_FILES['impCsv']['tmp_name'],"r");
while($data = fgetcsv($myfile, 1000)){
  //  var_dump($data);
    $i=0;

    $enquiry="UPDATE PIESE SET NR_PIESE=NR_PIESE+:obj_nr WHERE ID=:idd";
$stid = oci_parse($conn, $enquiry);
$j++;
oci_bind_by_name($stid,':idd',$data[0]);
oci_bind_by_name($stid,':obj_nr',$data[1]);

oci_execute($stid);

    
    while($i<=1){
    echo $data[$i].", ";
    $i++;}
  //  if($i===7){$i=0;
    echo "<br>";
//}
}
setcookie('id_cerere',$j,time()+time()+(86400*100));
?>