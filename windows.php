<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Windows</title>
    <!-- CSS -->
    <link rel="stylesheet" href="styles/main.css">
    <!-- BOOSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- BOXICONS -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!--<a class="navbar-brand" href="index.html">SO GEEKS</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item mr-5">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active mr-5">
              <a class="nav-link" href="windows.php">Windows</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="linux.php">Linux</a>
              </li>
          </ul>
          <a href="">
            <box-icon type='solid' name='moon' class="mr-2"></box-icon>
          </a>
          <?php
            if (isset($_SESSION['perfil'])) {
                $userType = $_SESSION['perfil'];
                if ($userType === 'user') {
                    echo '<a href="editarPerfil.php"><box-icon name="user" type="solid"></box-icon></a>';
                } elseif ($userType === 'adm') {
                    echo '<a href="areaAdmin.php"><box-icon name="user" type="solid"></box-icon></a>';
                }
            } else {
                echo '<a href="login.php"><box-icon name="user" type="solid"></box-icon></a>';
            }
          ?>
        </div>
    </nav>

    <h2 class="title">Windows</h2>
    <hr>
  <div class="text">
    O Windows é um sistema operativo desenolvido pela Microsoft e, atualmente um dos mais utilizados em todo o mundo.
    <br>
    Ao longo dos anos, a Microsoft lançou várias versões deste sistema operativo, fazendo sempre melhorias e colocando novos recursos. As versões do windows mais conhecidas são o Windows 95, o Windows XP, o Windows 7, 8, 10 e 11.
    <br>
      <br>
    O objetivo deste era facilitar a utilização do computador utilizando a interface gráfica (GUI) e o mouse, e assim, ao invés do utilizaor memorizar e escrever comandos complexos, basta selecionar as opções na tela.
    <br>
      <br>
    <b>Windows 1.0</b>
    <br>
    Lançado a 20 de novembro de 1985, o windows 1.0 foi o primeiro lançamento, podendo então dizer que foi onde tudo começou. Este não era bem um sistema operativo e sim uma interface gráfica, sendo o seu principal elemento o gestor de ficheiros.
    <br>
    Esta primeira versão do windows esteve longe de ser um sucesso, pois foi apenas uma das várias iinterfaces gráficas que nasceram após o lançamento do Macintosh. Uma das prinicpais criticas que este sofria era relativamente ao peso do sistema, que exigia no minimo, um PC XT.
    <br>
      <br>
    <b>Windows 2.0</b>
    <br>
    Lançado em 1987, esta foi a primeira versão do windows onde uma aplicação podia-se sobrepor a outra, e foi onde nasceu também as opção de maximizar e minimizar.
    <br>
    O windows 2.0 também foi a primira versão capaz de aproveitar o poder de processamento dos Intel 286 e 386, onde era possível executar múltiplos programas ao mesmo tempo, cada um numa sessão do MS-DOS.
    <br>
      <br>
    <b>Windows 3.x</b>
    <br>
    O windows 3.x foi a primeira versão a ter um sucesso considerável, recebendo vários elogios relativamente à sua capacidade de mmultitarefa e facilidade de utilização. Este também trouxe inovações, sendo uma delas o gestor de programas.
    <br>
    Este foi lançado no ano de 1990.
    <br>
      <br>
    <b>Windows 95</b>
    <br>
    O windows 95 cresceu muito rápido, pois o seu lancamento foi apoiado por uma campanha de marketing bilionária, que utilizou uma musica dos Rolling Stones, intitulada de "Start me Up".
    <br>
    Neste sistema, foi estreado o menu iniciar e a barra de tarefas e, o seu objetivo era facilitar o upgrade do computador attravés da tecnologia Plug & Play. Para isto, era necessário conectar uma placa de expanção e instalar um driver para começar a utilizá-lo, sem o utilizaodr ter de se preocupar com configurações e endereços de memórias.
    <br>
      <br>
    <b>Windows 98</b>
    Lançado em 1998, este tinha como foco principal a Internet. O Internet Explorer tornou-se um componente deste sistema operativo e a este também foi conectado um recurso intitulado de "Active Desktop", que permitia visualizar informações vindas de websites e atualizadas sempre que o computador é conectado à internet. Este também foi o pioneiro, no que toca ao suporte a USB's, drives de DVD e ao baramento AGP.
    <br>
      <br>
    <b>Windows Me</b>
    <br>
    O Windows Millenium Edition foi um intermediário entre o windows 98 e o windows XP que ficou apenas 1 ano no mercado. Esta foi a última versão que rodava no MS-DOS e tinha como objetivo melhorar o suporte da criação de conteuído, com a ajuda de várias aplicações como o Windows Movie Maker, o Movie Maker, o Windows DVD Player e o Windows Media Player.
  </div>
</body>
</html>