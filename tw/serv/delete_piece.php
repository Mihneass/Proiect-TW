<?php

$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
  $m = oci_error();
   echo $m['message'], "\n";
   exit;
      }
$enquiry="UPDATE piese SET NR_PIESE=NR_PIESE-1 where NUME=:toMod";
$stid = oci_parse($conn, $enquiry);
$piece=$_POST['toModify'];
oci_bind_by_name($stid,':toMod',$piece);
oci_execute($stid);	
header('Location: stock.php');
?>