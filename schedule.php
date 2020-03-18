<?php include("functions.class.php"); ?>
<?php include("session.class.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Sistema de Agendamento de Reposições</title>
  </head>
  <body>
  <div class="container-box">

    <?php 
        if($new_schedule){
            echo $schedule_alert;
         }
    ?>

  <div class="card">
  <div class="card-header">
    Agendar Reposição <a href="dashboard.php" class="btn btn-danger btn-sm float-right">Cancelar</a>
  </div>
  <div class="card-body">
    <form method="post">
        
        <div class="form-group">
            <label>Nome do aluno</label>
            <input type="text" class="form-control" name="student_schedule" autofocus required>
        </div>
        <div class="row">
            <div class="col">
                <label>Data</label>
                <input type="date" class="form-control" name="date_schedule" required maxlength="10">
            </div>
            <div class="col">
                <label>CTR</label>
                <input type="text" class="form-control" name="ctr_schedule" required maxlength="3">
            </div>
            <div class="col">
                <label>Curso</label>
                <input type="text" class="form-control" name="course_schedule" required maxlength="3">
            </div>
            <div class="col">
                <label>Professor</label>
                <select class="form-control" id="exampleFormControlSelect1" name="teacher_schedule">
                    <?php
                        while($list_teacher_select_field = mysqli_fetch_array($get_teacher_select_field)){
                            echo "<option> $list_teacher_select_field[name_user] </option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group mt-3">
            <label>Materia</label>
            <textarea class="form-control" name="class_schedule" required rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-success float-right" name="btn_schedule">Agendar</button>

    </form>
  </div>
</div>
</div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>