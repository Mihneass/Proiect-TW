<?php
setcookie("is_logged",0,time()+(86400*10),"/");
    setcookie("user",0,time()-(86400*10),"/");
    $thisUser=array();
    $fileContent = file_get_contents('./jsons/current_fellow.json');
    $thisUser=json_encode($thisUser);
    file_put_contents('./jsons/current_fellow.json',$thisUser);
    fclose('./jsons/current_fellow.json');
    header('Location: index.php');
?>