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
  <div class="card">
  <div class="card-header">
    Olá, <?php echo $list_user_info_session['name_user']; ?> <a href="schedule.php" class="btn btn-primary btn-sm float-right">Agendar reposição</a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Reposições agendadas</h5>
    <div class="container">
    <div class="row">
        <a href="#" class="btn btn-light text-primary">Bianca <span class="badge badge-warning">
        <?php echo $count_schedule_teacher_bianca; ?>
        </span></a>
        <a href="#" class="btn btn-light text-primary ml-2">Emerson <span class="badge badge-warning">
        <?php echo $count_schedule_teacher_emerson; ?>
        </span></a>
        <a href="s" class="btn btn-light text-primary ml-2">Andrey <span class="badge badge-warning">
          <?php echo $count_schedule_teacher_andrey; ?>
        </span></a>
        <a href="#" class="btn btn-light text-primary ml-2">Mike <span class="badge badge-warning">
          <?php echo $count_schedule_teacher_mike; ?>
        </span></a>
        <a href="#" class="btn btn-light text-primary ml-2">Novo Professor(a) <span class="badge badge-warning">4</span></a>
    </div>  
    </div>
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