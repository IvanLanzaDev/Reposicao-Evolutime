<?php

include("connect.class.php");

$email_login = $_POST['email_user'];
$password_login = $_POST['pass_user'];
$btn_login = $_POST['btn_login'];

if(isset($btn_login)){
    $execute_login = mysqli_query($link, "SELECT * FROM user WHERE email_user = '$email_login' AND pass_user = '$password_login'");
    $count_execute_login = mysqli_num_rows($execute_login);
    $info_login = mysqli_fetch_array($execute_login);

    if($count_execute_login == 1){
        session_start();
        $_SESSION['email_user'] = $_POST['email_user'];
        $_SESSION['pass_user'] = $_POST['pass_user'];
    }else{
        header("location: index.php");
    }
    if($info_login['type_user'] == 1){
        header("location: dashboard.php");
    }
    if($info_login['type_user'] == 2){
        header("location: adm.php");
    }
}

$get_teacher_select_field = mysqli_query($link, "SELECT * FROM user where type_user = 2 ORDER BY `name_user` ASC");


$student_schedule = $_POST['student_schedule'];
$date_schedule = $_POST['date_schedule'];
$ctr_schedule = $_POST['ctr_schedule'];
$course_schedule = $_POST['course_schedule'];
$teacher_schedule = $_POST['teacher_schedule'];
$class_schedule = $_POST['class_schedule'];
$btn_schedule = $_POST['btn_schedule'];

if(isset($btn_schedule)){
    $new_schedule = mysqli_query($link, "INSERT INTO schedule(student_schedule,date_schedule,ctr_schedule,course_schedule,teacher_schedule,class_schedule)VALUES('$student_schedule','$date_schedule','$ctr_schedule','$course_schedule','$teacher_schedule','$class_schedule')");

    $schedule_alert = "
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Reposição agendada com sucesso !!!</strong>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>
    ";
}

$list_schedule_teacher_andrey = mysqli_query($link, "SELECT * FROM schedule WHERE teacher_schedule = 'Andrey'");
$list_schedule_teacher_bianca = mysqli_query($link, "SELECT * FROM schedule WHERE teacher_schedule = 'Bianca'");
$list_schedule_teacher_mike = mysqli_query($link, "SELECT * FROM schedule WHERE teacher_schedule = 'Mike'");
$list_schedule_teacher_emerson = mysqli_query($link, "SELECT * FROM schedule WHERE teacher_schedule = 'Emerson'");

$count_schedule_teacher_andrey = mysqli_num_rows($list_schedule_teacher_andrey);
$count_schedule_teacher_bianca = mysqli_num_rows($list_schedule_teacher_bianca);
$count_schedule_teacher_mike = mysqli_num_rows($list_schedule_teacher_mike);
$count_schedule_teacher_emerson = mysqli_num_rows($list_schedule_teacher_emerson);



