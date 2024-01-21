<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas Operativos</title>
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
            <li class="nav-item active mr-5">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-5">
              <a class="nav-link" href="windows.php">Windows</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="linux.php">Linux</a>
              </li>
          </ul>
          <a href="#">
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

    <h2 class="title">Sistemas Operativos</h2>
    <hr>
    <div class="text">
      Um Sistema Operativo é um programa que gere os recursos do sistema e atua como intermediário entre o utilizador, as aplicações e o hardware. 
      <br>
      Este tem como objetivos fazer a gestão dos recursos de hardware e de software do sistema, como o processador e a memória, fornecer um método estável e consistente para as aplicações usufruirem corretamente do hardware do computador.
      <br>
        <br>
      Para o nosso trabalho, decidimos escolher o tema "Arquitetura/Estrutura de Sistemas Operativos", onde falamos em específico sobre máquinas virtuais. Neste website, poderá encontrar informações relativas aos sistemas operativos windows e linux, onde explicamos um pouco mais sobre cada um deles, assim como a sua instalação.
      <br>
        <br>
      <b>Membros do Grupo:</b>
      <div class="member">
        <img src="assets/andre.png" alt="">
        <p>André Campos, CTeSP de Cibersegurança</p>
      </div>

      <div class="member">
        <img src="assets/lucas.jpg" alt="">
        <p>Lucas Coelho, CTeSP de Cibersegurança</p>
      </div>

      <div class="member">
        <img src="assets/pedro.jpg" alt="">
        <p>Pedro Serafim, CTeSP de Cibersegurança</p>
      </div>

      <div class="member">
        <img src="assets/guilherme.jpg" alt="">
        <p>Guilherme Moura, CTeSP de Cibersegurança</p>
      </div>

      <div class="member">
        <img src="assets/tiago.jpg" alt="">
        <p>Tiago Melo, CTeSP de Cibersegurança</p>
      </div>

      <div class="member">
        <img src="assets/nuno.jpg" alt="">
        <p>Nuno Cota, CTeSP de Desenvolvimento de Videojogos e Aplicações Multimédia</p>
      </div>
    </div>