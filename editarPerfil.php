<?php
    session_start();

    #Verifica se o tipo de utilizador armazenasdo na sessão é diferente de "user", se for diferente, é reenchaminhado para a página de login
    if ($_SESSION['perfil'] !== 'user') {
        header("Location: login.php");
        exit();
    }

    include("config.php");

    $coduser = $_SESSION['coduser']; #Obtém o código do cliente armazenado na variável de sessão

    $consulta = "SELECT * FROM users WHERE coduser = $coduser"; #Faz uma consulta a todos os campos da tabela clientes onde o código do cliente é igual ao código armazenado em $codcliente 
    $resultado = mysqli_query($liga, $consulta); #Executa a consulta
    $registo = mysqli_fetch_assoc($resultado);

    #Armazena o valor dos campos da tabela nas variáveis
    $nome = $registo['nome'];
    $email = $registo['email'];
    $password = $registo['password'];

    $pass = md5($password);

    #Verifica se o utilizador carregou no botão "sair", se sim, a sessão é terminada e o utilizador é redirecionado para a página de login
    if (isset($_POST["sair"])) {
        session_destroy();
        header("Location: login.php");
        exit;
    }

    #Verifica se o formulário foi enviado através do método POST e obtém os novos valores e armazena-os nas respetivas variáveis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $password = $registo['password'];

        // Atualize os valores na base de dados
        $query = "UPDATE users SET nome = '$nome', email = '$email', password = '$password' WHERE coduser = $coduser";
        $resultado = mysqli_query($liga, $query);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
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

      .editBox{
          position: relative;
          margin-top: 3%;
          max-width: 100%;
          height: 500px;
          border-radius: 7px;
          border: 1px solid rgba(0, 0, 0, 0.25);
          background: #ECECEC;
      }

      .form{
          position: absolute;
          inset: 2px;
          border-radius: 8px;
          z-index: 10;
          padding: 50px 40px;
          display: flex;
          flex-direction: column;
          margin-top: 6%;
      }

      .form h2{
          color: black;
          font-family: 'K2D';
          font-size: 30px;
          text-align: center;
          font-weight: 700;
          letter-spacing: 0.06em;
      }

      .editInputBox{
          position: relative;
          width: 350px;
          margin-top: 35px;
      }

      .editInputBox input{
          position: relative;
          width: 100%;
          padding: 20px 10px 10px;
          background: transparent;
          border: none;
          outline: none;
          color: black;
          font-size: 13px;
          letter-spacing: 0.05em;
          z-index: 10;
      }

      .editInputBox span{
          position: absolute;
          left: 0;
          padding: 20px 0px 10px;
          font-size: 14px;
          color: black;
          pointer-events: none;
          letter-spacing: 0.05em;
          transition: 0.5s;
      }

      .editInputBox input:valid ~ span,
      .editInputBox input:focus ~ span {
          color: black;
          transform: translateX(0px) translateY(-28px);
          font-size: 12px;
      }

      .editInputBox i{
          position: absolute;
          left: 0;
          bottom: 0;
          width: 100%;
          height: 2px;
          background: white;
          border-radius: 4px;
          transition: 0.5s;
          pointer-events: none;
          z-index: 9;
      }

      .editInputBox input:valid ~ i,
      .editInputBox input:focus ~ i{
          height: 38px;
      }

      input[type='submit']:hover{
        background: white;
        transition: 0.5s;
      }

      .links a{
        color: black;
        font-size: 13px;
      }

      .links a:hover{
        text-decoration: none;
      }

      .editButton{
        max-width: 100%;
        width: 44%;
        height: 35px;
        border: 1px solid black;
        font-weight: 700;
        border-radius: 4px;
        margin-top: 35px;
        margin-right: 10px;
        font-family: 'K2D';
      }

      .divEdit{
        margin-left: 7px;
        display: flex;
        justify-content: center;
        align-items:center;
      }

      @media (max-width: 374px){
        .editBox{
            width: 300px;
            height: 400px;
            margin-top: 10%;
        }

        .form h2{
            font-size: 25px;
        }

        .editInputBox{
            width: 200px;
        }

        .editButton{
          width: 45%;
        }
      }

      @media (min-width: 375px) and (max-width: 424px){
        .editBox{
            width: 350px;
            height: 430px;
            margin-top:10%;
        }

        .form h2{
            font-size: 25px;
        }

        .editInputBox{
            width: 250px;
        }

        input[type="submit"]{
            width: 250px;
        }
      }

      @media (min-width: 425px) and (max-width: 767px){
        .editBox{
            width: 400px;
            height: 450px;
            margin-top: 10%;
        }

        .form h2{
            font-size: 25px;
        }

        .editInputBox{
            width: 300px;
        }

        input[type="submit"]{
            width: 300px;
        }
      }

      @media (min-width: 768px) and (max-width: 1023px) {
        .editBox{
            width: 500px;
            height: 500px;
            margin-top: 7%;
        }

        .form h2{
            font-size: 30px;
        }

        .editInputBox{
            width: 360px;
        }

        .editButton{
          width: 43%;
        }
      } 

      @media (min-width: 1024px){
        .editBox{
            width: 500px;
            height: 500px;
            margin-top: 3%;
        }

        .form h2{
            font-size: 30px;
        }

        .editInputBox{
            width: 330px;
        }

        .editButton{
          width: 39%;
        }
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
            <li class="nav-item active mr-5">
              <a class="nav-link" href="windows.php">Windows</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="linux.php">Linux</a>
              </li>
          </ul>
          <a href="editarPerfil.php">
            <box-icon name='user' type='solid'></box-icon>
          </a>
        </div>
    </nav>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="editBox col-md-4 mx-auto">
            <div class="form">
                <h2>Editar Perfil</h2>
                <div class="editInputBox mx-auto pt-md-3">
                    <input type="text" name="nome" autocomplete="off" value="<?php echo $nome; ?>">
                    <span>Nome</span>
                    <i></i>
                </div>
                <div class="editInputBox mx-auto">
                    <input type="email" name="email" id="email" autocomplete="off" value="<?php echo $email; ?>">
                    <span>E-mail</span>
                    <i></i>
                </div>

                <div class='divEdit'>
                    <input class="editButton" type="submit" name="sair" value="Sair">
                    <input class="editButton" type="submit" value="Salvar">
                </div>

            </div>
        </div>
    </form>

    <?php
        if (!$nome || !$email){
            echo"<script>alert('Por favor, preencha todos os campos!')</script>";
            exit;
        }

        include("config.php");

        $atualiza = "UPDATE users SET nome = '$nome', email = '$email' WHERE coduser = '$coduser'";
        $resultado=mysqli_query($liga,$atualiza);
    ?>

</body>
</html>