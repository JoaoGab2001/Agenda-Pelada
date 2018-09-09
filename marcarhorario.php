<?php 
    $hora = $_GET['hora'];
    $semana = $_GET['semana'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="imagem/png" href="imagens/logo.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/horarios.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Agenda Pelada - Marcar horário na Arena Prêmio</title> <!-- MUDAR O TITULO DE ACORDO COM A QUADRA -->
</head>
<body>
    <?php include 'includes/componentes/menu.php';?>

    <?php include 'includes/componentes/loginadm.html';?>

    <div class='row' id='localizacao'>
        <div class='container col s12 m10 offset-m1'>
            <span class='endereco'> <b> Marcar Horário </b> </span> 
        </div>
    </div>

    <div class='row' id='quadras'>
        <div class='container col s12 m10 offset-m1' id="tudo">
            <span class='col s12 endereco' style="display: flex; justify-content: center;text-align: center;"> 
                <b class="blue-text"> Arena Prêmio - <i> <?php print($semana); ?> as <?php print($hora); ?> horas </i> </b> 
            </span>            
            <div class='col s12 quadra' style="padding-bottom: 2%;">
                <form method="post" action="" class="col s12">
                    <h4 align="center" class="white-text"> Preencha o formulário para marcar o horário</h4>
                    <div class="input-field col s12 m4 offset-m1">
                      <input id="nome" type="text" autocomplete="off" class="white-text" required="">
                      <label for="nome" class="white-text">Nome</label>
                    </div>
                    <div class="input-field col s12 m4 offset-m2">
                      <input type="tel" id="telefone" name="telefone" class="white-text" pattern="[9][0-9]{8}" required='' />
                      <label for="telefone" class="white-text">Telefone</label>
                    </div>                    
                </form>
                <button type="submit" class="waves-effect col s12 m10 offset-m1 waves-light btn-large blue"> Marcar Horário </button>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });

        var windowWidth = window.innerWidth;
        if(windowWidth < 992){
            var title = document.getElementById("brand-logo");
            title.innerHTML = 'Agenda';
        }

        //MODAL DO LOGIN ADM

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
          });
    </script>
</body>
</html>