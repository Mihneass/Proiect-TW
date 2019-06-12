<?php

$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
$enquiry="UPDATE PIESE SET NR_PIESE=NR_PIESE+".$_POST['object-number']." WHERE NUME=:nume";
$stid = oci_parse($conn, $enquiry);
oci_bind_by_name($stid,':nume',$_POST['object-name']);
oci_execute($stid);
echo $_POST['object-name'];

header('Location: index.php');

?>