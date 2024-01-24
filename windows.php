<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" class="">
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
          <?php
            if (isset($_SESSION['perfil'])) {
                $userType = $_SESSION['perfil'];
                if ($userType === 'user') {
                    echo '<a href="editarPerfil.php"><box-icon name="user" type="solid"></box-icon></a>';
                } elseif ($userType === 'adm') {
                    echo '<a href="areaAdmin.php"><box-icon name="user" type="solid"></box-icon></a>';
                }
            } else {
                echo '<a href="login.php"><img src="assets/bxs-user.svg"></a>';
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
    Esta primeira versão do windows esteve longe de ser um sucesso, pois foi apenas uma das várias interfaces gráficas que nasceram após o lançamento do Macintosh. Uma das prinicpais criticas que este sofria era relativamente ao peso do sistema, que exigia no minimo, um PC XT.
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
    <br>
    Lançado em 1998, este tinha como foco principal a Internet. O Internet Explorer tornou-se um componente deste sistema operativo e a este também foi conectado um recurso intitulado de "Active Desktop", que permitia visualizar informações vindas de websites e atualizadas sempre que o computador é conectado à internet. Este também foi o pioneiro, no que toca ao suporte a USB's, drives de DVD e ao baramento AGP.
    <br>
      <br>
    <b>Windows Me</b>
    <br>
    O Windows Millenium Edition foi um intermediário entre o windows 98 e o windows XP que ficou apenas 1 ano no mercado, sendo o a último a rodar no MS-DOS que tinha como objetivo melhorar o suporte da criação de conteuído, com a ajuda de várias aplicações como o Windows Movie Maker, o Movie Maker, o Windows DVD Player e o Windows Media Player.
    <br>
      <br>
    <b>Windows XP</b>
    <br>
    Este foi lançado em 2001 e, quase 16 anos depois, o windows tornou-se um sistema operativo independente, com isto quero dizer que não dependia mais do MS-DOS, sendo baseado no windows NT, criado principalmente para o mundo corporativo e empresarial.
    <br>
    No windows XP, a interface visual também foi alterada, para melhor, ganhando assim mais cores e animações. Este também melhorou a nível de desempenho, estabilidade e segurança, pois foi neste também que a Microsoft começou a implementar recursos de segurança, como a Central de Segurança do Windows XP Service Pack 2, que facilitava os utilizaodres na configuração de recursos como a firewall, etc.
    <br>
      <br>
    <b>Windows Vista</b>
    <br>
    O Windows Vista foi um sistema operativo lançado pela Microsoft em janeiro de 2007. Neste destaca-se a mudança drástica de visual, as novas ferramentas implementadas, como o Windows DVD Maker e a elevação do nível de comunicação entre computadores, utilizando o P2P (Peer-to-Peer)
    <br>
    Este sistema possuía ainda a versão 3.0 do Microsoft .NET Framework, que tem como objetivo melhorar o desempenho e facilitar o desenvolvimento de aplicações de alta qualidade. Para que este sistema operativo funcione corretamente, é necessário que o computador tenha, pelo menos, 1 Gb de memória RAM.
    <br>
      <br>
    <b>Windows 7</b>
    <br>
    O Windows 7 foi lançado em outubro de 2009 e, assim como nos seus antecessores (o Windows XP e o Windows Vista), este fez melhorias no design, nos recursos e nas ferramentas disponiveis ao utilizador.
    <br>
    Para instalar este sistema operativo, o computador tem de ter, no mínimo, um processador de 32 bits, 1 Gb de RAM, 16 Gb de memória em disco e um dispositivo gráfico DirectX 9 com driver WDDM 1.0.
    <br>
    No total, foram lançadas 6 versões do Windows 7, sendo elas o Windows 7 Starter, o Windows 7 Home Basic, Windows 7 Home Premium, Windows 7 Professional, Windows 7 Enterprise e o Windows 7 Ultimate.
    <br>
      <br>
    <b>Windows 8</b>
    <br>
    Depois do sucesso do Windows 7, este veio trazer algumas melhorias e uma ideia nova relativamente ao comportamente das aplicações. Este sistema operativo estava melhor que o anterior, porém tinha um problema, que como era uma dependetende de toques, a sua utilização não era prática.
    <br>
    Também foi no windows 8 que apareceu a Microsoft Store, loja de aplicações oficial da marca, que já vem instalada diretamente no sistema.
    <br>
      <br>
    <b>Windows 10</b>
    <br>
    Lançado a 29 de julho de 2015, o Windows 10 trouxe várias mudanças relativamente ao seu antecessor, na forma como este é produzido e comercializado, sendo vendido como um serviço.
    <br>
    Algumas das novidades que o Windows 10 trouxe aos utilizadores foi o Menu Iniciar, que foi retirado no Windows 8, implementado novamente no Windows 8.1 e continuou neste sistema, porém mais personalizável. Outro destaque foi o modo de jogo no creators update, este novo recurso desliga os serviços que diminuem o desempenho do computador.
    <br>
    Outros recursos muito elogiados pelos utilizadores foi as multiplas áreas de trabalho e a cortana, a assistente pessoal do Windows, que pode ser ativa através de comandos de voz, como "Hey Cortana".
    <br>
      <br>
    <b>Nota - A assistente pessoal do Windows (Cortana) não se encontra disponível em português, e por esse motivo não funciona caso o sistema operativo se encontre configurado com este idioma.</b>

    <br>
      <br>
    <b>Como instalar o Windows através do ISO</b>
    <br>
      <br>
    Esta opção destina-se apenas a quem pretende fazer a instalação através de uma pen com o ficheiro .iso, porém no página oficial da Microsoft (<a href="https://www.microsoft.com/pt-pt/software-download/windows11">https://www.microsoft.com/pt-pt/software-download/windows11</a>) é possível encontrar as restantes alternativas para a instalação deste sistema.
  </div>

</body>
</html>