<?php

$conn = oci_connect("student", "student", "localhost:1521/xe");
                if (!$conn) {
                  $m = oci_error();
                   echo $m['message'], "\n";
                   exit;
                      }
                      $enquiry="UPDATE PIESE SET NR_PIESE=NR_PIESE-".$_POST['request-nr']." WHERE NUME=:nume";
                      $stid = oci_parse($conn, $enquiry);
                      oci_bind_by_name($stid,":nume",$_POST['request-type']);
                      oci_execute($stid);	
                      $enquiry="UPDATE cereri SET DETALII="."'".$_POST['reason']."'"." where IDK=".$_POST['request-id'];
                      $stid = oci_parse($conn, $enquiry);
                      oci_execute($stid);	
                $enquiry="UPDATE cereri SET SITUATIE="."'"."accepted"."'"." where IDK=".$_POST['request-id'];
                $stid = oci_parse($conn, $enquiry);
                oci_execute($stid);	
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


header('Location: contact.php');
?>