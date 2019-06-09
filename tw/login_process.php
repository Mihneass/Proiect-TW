<?php
$conn = oci_connect("student", "student", "localhost:1521/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
$enquiry="BEGIN GET_ONE_USER"."("."'".$_POST['uname']."'".",:pass,:id_user,:admin,:phone,:addre,:email);end;";
$stid = oci_parse($conn, $enquiry);
oci_bind_by_name($stid,':pass',$rpassword,40);
oci_bind_by_name($stid,':id_user',$id_user,40);
oci_bind_by_name($stid,':admin',$adm,40);
oci_bind_by_name($stid,':phone',$phone,40);
oci_bind_by_name($stid,':addre',$address,40);
oci_bind_by_name($stid,':email',$email,40);
oci_execute($stid);
/*
$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
$rc=$row['MRFC'];
oci_execute($rc);
$rc_row = oci_fetch_array($rc, OCI_ASSOC+OCI_RETURN_NULLS);
*/
echo $rpassword;
if($rpassword==null){setcookie("is_logged","USER_NOT_FOUND",time()+(86400*10),"/");
            echo $enquiry;
           // header('Location: index.php');
            }
        else if($rpassword!=$_POST['pass']){
            setcookie("is_logged","PASS_NOT_FOUND",time()+(86400*10),"/");
            header('Location: index.php');
        }
            else {setcookie("is_logged","LOGGED",time()+(86400*10),"/");
                  setcookie("user",$_POST['uname'],time()+(86400*10),"/");
                  setcookie("userID",$id_user,time()+(86400*10),"/");
                  setcookie("userAdmin",$adm,time()+(86400*10),"/");
                  $thisUser=array(
                    'id'=>$id_user,
                    'admin'=>$adm,
                    'phone'=>$phone,
                    'addre'=>$address,
                    'email'=>$email
                  );
                  $fileContent = file_get_contents('./jsons/current_fellow.json');
                  $information = json_decode($fileContent); 
	              array_push($information,$thisUser);
                  $formatedInfo=json_encode($information);
                  file_put_contents('./jsons/current_fellow.json',$formatedInfo);
        //          fclose('./jsons/current_fellow.json');
        
                $conn = oci_connect("student", "student", "localhost:1521/xe");
                if (!$conn) {
                  $m = oci_error();
                   echo $m['message'], "\n";
                   exit;
                      }
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
                
                            header('Location:index.php');
                          }
                }
?>