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

$myfile=fopen("csv/requests.csv","w");
while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
    fwrite($myfile,$row['IDK'].','.$row['ID_USER'].','.$row['SITUATIE'].','.$row['NUME_OBIECT'].','.$row['NR_OBIECTE'].','.$row['ADDRESS'].','.$row['DETALII']. "\n");
}

header('Location: services.php');
?>