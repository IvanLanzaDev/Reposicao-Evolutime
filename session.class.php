<?php
//NEW SESSION
session_start();
$email_session = $_SESSION["email_user"];
$password_session = $_SESSION["pass_user"];
if(!isset($email_session) || !isset($password_session)){
    header("Location: index.php");
    exit;
    session_destroy();
}

$get_user_info_session = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$email_session'");
$count_user_info_session = mysqli_num_rows($get_user_info_session);
if($count_user_info_session == 1){
    $list_user_info_session = mysqli_fetch_array($get_user_info_session);
}
?>