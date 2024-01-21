<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux</title>
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


    <style>
      .toturial-details{
        cursor: pointer !important;
        color: black;
      }
    </style>
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
            <li class="nav-item mr-5">
              <a class="nav-link" href="windows.php">Windows</a>
            </li>
            <li class="nav-item active">
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

    <h2 class="title">Linux</h2>
    <hr>
    <div class="text">
      O Linux é um Sistema Operativo de código aberto baseado no sistema Unix. Este começou a ser desenvolvido por Linus Torvalds em 1991 e tem sido melhorado até aos dias de hoje.
      <br>
      Este Sistema Operativo é conhecido pela sua estabilidade e segurança, sendo muito utilizado em servidores e cada vez mais a escolha para o desenolvimento de software. O Linux também é a base para várias distruições suas, como o Ubuntu, o Fedora, o Arch, o Debian, etc.
      <br>
        <br>
      <b>Passo a passo de como instalar uma distribuição Ubuntu:</b>
      <br>
        <br>
      <b>1º Passo - Fazer o download do ficheiro .iso</b>
      <br>
      Para instalarmos seja qual for a distruição de Linux, vamos necessitar do ficheiro .iso, este é onde está armazenado todo o sistema que pretendemos instalar.
      <br>
      Para fazer o download do ficheiro .iso, precisamos de ir ao respetivo website da distruição que pretendemos, sendo neste caso o <a href="https://ubuntu.com/download">https://ubuntu.com/download</a>

      <br>
        <br>

      <b>2º Passo - Fazer o download da aplicação responsável por tornar a pen bootable</b>
      <br>
      Para fazermos o download de alguma distribuição do Linux, necessitamos de uma pen, que por sua vez precisa de um programa para que se torne bootable, isto é, para que seja possível instalar o sistema através desta.
      <br>
      Alguns exemplos de aplicações são o Rufus (<a href="https://rufus.ie/pt/">https://rufus.ie/pt/</a>), o Ventoy (<a href="https://www.ventoy.net/en/index.html">https://www.ventoy.net/en/index.html</a>) ou o Balena Etcher (<a href="https://etcher.balena.io/">https://etcher.balena.io/</a>).
      <br>
        <br>

      <b>3º Passo - Reiniciar o computador com a pen inserida e aceder à BIOS</b>
      <br>
      Para aceder à BIOS, normalmente utilizamos a tecla F2, podendo esta variar de acordo com o computador, sendo as mais comuns as teclas ESC, F7, F10 e F12.
      <br>
        <br>
      <div class="toturial-details d-flex justify-content-center align-items-center mb-5" data-toggle="collapse" data-target="#toturial" onclick="exibirMensagem()">
        <p class="m-0">Continuar a ver</p>
        <box-icon name='chevron-down'></box-icon>
      </div>
      <div id='toturial' class='collapse'>
        <b>4º Passo - Dentro da BIOS, selecionamos a opção "Boot Menú"</b>
        <br>
        Normalmente podemos aceder com a tecla F8, podendo também esta variar de acordo com o computador.
        <br>
          <br>

        <b>5º Passo - Quando executar o Boot Menu, selecione a primeira opção, "Try or Install Ubuntu" e aguarde.</b>
        <img src="assets/linux/1.png" alt="" class="d-flex mx-auto" style="padding-top: 10px;">
        <br>
          <br>

        <b>6º Passo - Após o 5º Passo estar concluído, selecionamos o idioma que pretendemos e selecionamos "Install Ubuntu".</b>
        <img src="assets/linux/2.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">

        <br>
          <br>
        <b>7º Passo - Selecione a disposição do teclado.</b>
        <img src="assets/linux/3.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">

        <br>
          <br>
        <b>8º Passo - Selecione a opção "Instalação normal" e continue.</b>
        <img src="assets/linux/4.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">

        <br>
          <br>
        <b>9º Passo - Aqui podemos selecionar a primeira opção, "Apagar o disco e instalar o Ubuntu", e continuar.</b>
        <img src="assets/linux/5.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">

        <br>
          <br>
        <b>11º Passo - Coloque a sua localização.</b>
        <img src="assets/linux/6.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">

        <br>
          <br>
        <b>12º Passo - E, por fim, preencha os campos pedidos com o seu nome, o nome do computador, o nome de utilizador e a sua palavra-passe e carregue em "continuar".</b>
        <img src="assets/linux/7.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">

        <br>
          <br>
        <b>E, voilá! O Ubuntu está instalado e agora já pode disfrutar do seu novo sistema operativo.</b>
        <img src="assets/linux/8.png" alt="" class="d-flex mx-auto" style="padding-top: 10px; max-width: 718px; max-height: 410px;">
      </div>
    </div>

    <script>
        function exibirMensagem() {
            if (!<?php echo isset($_SESSION['perfil']) ? 'true' : 'false'; ?>) {
                alert("Por favor, faça login para continuar a ler.");
                window.location.href = "login.php";
            }
        }
    </script>
</body>
</html>