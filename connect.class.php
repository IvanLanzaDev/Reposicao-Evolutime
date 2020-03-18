<?php
    $link = mysqli_connect("localhost","u640958987_repo","Evolutime2017!");
    if($link){
        mysqli_select_db($link, "u640958987_repo");
    }else{
        echo "Erro";
    }
?>