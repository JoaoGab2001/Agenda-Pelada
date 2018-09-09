<?php
    $quadra = $_GET['quadra'];
    if($quadra == '1'){
        $quadra = 'Arena Prêmio';
    }
    else if($quadra == '2'){
        $quadra = 'Joaquim';
    }
    else{
        $quadra = 'Euclides';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/horarios.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Agenda Pelada - Arena Prêmio</title> <!-- MUDAR O TITULO DE ACORDO COM A QUADRA -->
</head>
<body>
    <?php include 'includes/componentes/menu.php';?>
    <div class='row' id='localizacao'>
        <div class='container col s12 m10 offset-m1'>
            <center><span class='endereco'> <b> <?php print($quadra); ?>:</b> &nbsp; Rua Xesquedele, n° 0, Bairro Aqui </span></center> <!-- ENDEREÇO DA QUADRA -->
        </div>
    </div>

    <div class='row' id='quadras'>
        <div class='container col s12 m10 offset-m1' id="tudo">
            <span class='col s12 endereco' style="display: flex; justify-content: center;"> 
                <b> Horários</b> 
            </span>            
                <table class="table table-responsive">
                    <thead>
                        <tr class="grey">
                            <td> HORÁRIOS </td>
                            <td data-semana='segunda'> Segunda </td>
                            <td data-semana='terca'> Terça </td>
                            <td data-semana='quarta'> Quarta </td>
                            <td data-semana='quinta'> Quinta </td>
                            <td> Sexta </td>
                            <td> Sábado </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="grey"> 8:00 </td>
                            <td class="orange" data-hora='8' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='8' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='8' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='8' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='8' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='8' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 9:00 </td>
                            <td class="orange" data-hora='9' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='9' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='9' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='9' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='9' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='9' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 10:00 </td>
                            <td class="orange" data-hora='10' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='10' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='10' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='10' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='10' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='10' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 11:00 </td>
                            <td class="orange" data-hora='11' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='11' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='11' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='11' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='11' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='11' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 12:00 </td>
                            <td class="orange" data-hora='12' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='12' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='12' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='12' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='12' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='12' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 13:00 </td>
                            <td class="orange" data-hora='13' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='13' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='13' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='13' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='13' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='13' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 14:00 </td>
                            <td class="orange" data-hora='14' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='14' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='14' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='14' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='14' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='14' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 15:00 </td>
                            <td class="orange" data-hora='15' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='15' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='15' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='15' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='15' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='15' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 16:00 </td>
                            <td class="orange" data-hora='16' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='16' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='16' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='16' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='16' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='16' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 17:00 </td>
                            <td class="orange" data-hora='17' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='17' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='17' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='17' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='17' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='17' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 18:00 </td>
                            <td class="orange" data-hora='18' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='18' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='18' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='18' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='18' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='18' data-semana='sabado'> Horário Livre </td>
                        </tr>
                        <tr>
                            <td class="grey"> 19:00 </td>
                            <td class="orange" data-hora='19' data-semana='segunda'> Cléber </td>
                            <td class="orange" data-hora='19' data-semana='terca'> Junior </td>
                            <td class="blue" data-hora='19' data-semana='quarta'> Horário Livre </td>
                            <td class="blue" data-hora='19' data-semana='quinta'> Horário Livre </td>
                            <td class="orange" data-hora='19' data-semana='sexta'> Luan </td>
                            <td class="blue" data-hora='19' data-semana='sabado'> Horário Livre </td>
                        </tr>
                    </tbody>
                </table> 
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

        $(document).on('click','.blue', function() {
            var hora = $(this).data('hora');
            var semana = $(this).data('semana');                     
            location.href='marcarhorario.php?hora='+hora+'&semana='+semana;
        });
    </script>
</body>
</html>