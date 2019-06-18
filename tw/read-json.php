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


$data = file_get_contents($_FILES['impJson']['tmp_name']);
    
    $data=json_decode($data);
    
    
    foreach($data as $element){
        var_dump($element);
    $enquiry="UPDATE PIESE SET NR_PIESE=NR_PIESE+:obj_nr WHERE ID=:idd";

$stid = oci_parse($conn, $enquiry);

oci_bind_by_name($stid,':idd',$element->id);
oci_bind_by_name($stid,':obj_nr',$element->nr);

oci_execute($stid);


  }

?>