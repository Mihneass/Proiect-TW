<?php


if(empty($_FILES['myfile']['tmp_name']))
{
  echo "File not found";
  //exit;
}
if(!isset($_COOKIE['id_cerere']))setcookie('id_cerere',61,time()+time()+(86400*100));
$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
$enquiry="INSERT INTO CERERI VALUES(:idd,:id_user,:situatie,:obj_name,:obj_nr,:adresa,:detalii,:date1,:date2)";
$stid = oci_parse($conn, $enquiry);
$idd=$_COOKIE['id_cerere'];
oci_bind_by_name($stid,':idd',$idd);
$idd2=$_COOKIE['userID'];
oci_bind_by_name($stid,':id_user',$idd2);
$situat="pending";
oci_bind_by_name($stid,':situatie',$situat);
oci_bind_by_name($stid,':obj_name',$_POST['object-name']);
oci_bind_by_name($stid,':obj_nr',$_POST['object-number']);
oci_bind_by_name($stid,':adresa',$_POST['address']);
oci_bind_by_name($stid,':detalii',$_POST['details']);
$dateToSend=date("d-m-Y",strtotime($_POST['service-date']));
oci_bind_by_name($stid,':date1',$dateToSend);
oci_bind_by_name($stid,':date2',$dateToSend);
oci_execute($stid);


var_dump($_FILES);
if(move_uploaded_file($_FILES['myfile']['tmp_name'],"saved_images/".$_FILES['myfile']['name']))
echo "yes";
rename("saved_images/".$_FILES['myfile']['name'],"saved_images/request_file.".$_COOKIE['id_cerere'].".jpg");

setcookie('id_cerere',$_COOKIE['id_cerere']+1,time()+time()+(86400*100));
$thisUser=array();
                $fileContent = file_get_contents('./jsons/requests.json');
                $thisUser=json_encode($thisUser);
                file_put_contents('./jsons/requests.json',$thisUser);
                            $enquiry="SELECT * FROM cereri";
                            $stid = oci_parse($conn, $enquiry);
                            oci_execute($stid);	
                                  while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
                                      $thisReq=array(
                                          'id'=>$row['IDK'],
                                          'id_user'=>$row['ID_USER'],
                                          'situation'=>$row['SITUATIE'],
                                          'obj_name'=>$row['NUME_OBIECT'],
                                          'obj_nr'=>$row['NR_OBIECTE'],
                                          'address'=>$row['ADDRESS']
                                        );
                                        $fileContent = file_get_contents('./jsons/requests.json');
                                        $information = json_decode($fileContent); 
                                      array_push($information,$thisReq);
                                        $formatedInfo=json_encode($information);
                                        file_put_contents('./jsons/requests.json',$formatedInfo);
                                      }

//header('Location: contact.php');
?>