<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/icon" href="imagens/dale.ico" />   
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/index.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Agenda Pelada - O Site onde você agenda o seu jogo</title>
</head>
<body>
    <?php include 'includes/componentes/menu.php';?>

    <?php include 'includes/componentes/loginadm.html';?>

    <div class='row' id='localizacao'>
        <div class='container col s12 m10 offset-m1'>
            <center><span class='endereco'> <b> Sua Localização:</b> &nbsp; Rua Xesquedele, n° 0, Bairro Aqui </span></center>
        </div>
    </div>

    <div class='row' id='quadras'>
        <div class='container col s12 m10 offset-m1'>
            <span class='col s12 endereco' style="display: flex; justify-content: center;"> 
                <b> Quadras Próximas</b> &nbsp; 
            </span>
            <a href="horarios.php?quadra=1" class="col s12"> <div class='col s12 quadra' > <span class='endereco'> 1 - Arena Prêmio - 500 m </span> </div> </a>
            <a href="horarios.php?quadra=2" class="col s12"> <div class='col s12 quadra' > <span class='endereco'> 2 - Joaquim - 650 m </span> </div> </a>
            <a href="horarios.php?quadra=3" class="col s12"> <div class='col s12 quadra' > <span class='endereco'> 3 - Euclides - 780 m </span> </div> </a>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
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