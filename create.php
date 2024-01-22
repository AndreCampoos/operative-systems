<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
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

        .box-create{
            position: relative;
            margin-top: 3%;
            max-width: 100%;
            height: 760px;
            border-radius: 7px;
            border: 1px solid #d9d9d9;
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

      .inputBox{
          position: relative;
          width: 350px;
          margin-top: 35px;
      }

      .inputBox input{
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

      .inputBox span{
          position: absolute;
          left: 0;
          padding: 20px 0px 10px;
          font-size: 14px;
          color: black;
          pointer-events: none;
          letter-spacing: 0.05em;
          transition: 0.5s;
      }

      .inputBox input:valid ~ span,
      .inputBox input:focus ~ span {
          color: black;
          transform: translateX(0px) translateY(-28px);
          font-size: 12px;
      }

      .inputBox i{
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

      .inputBox input:valid ~ i,
      .inputBox input:focus ~ i{
          height: 38px;
      }

      input[type='submit']{
        width: 350px;
        height: 35px;
        border: 1px solid black;
        font-weight: 700;
        border-radius: 4px;
        margin-top: 35px;
        font-family: 'K2D';
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

      @media (max-width: 374px){
        .box-create{
            width: 300px;
            height: 600px;
            margin-top: 10%;
        }

        .form h2{
            font-size: 25px;
        }

        .inputBox{
            width: 200px;
        }

        input[type="submit"]{
            width: 200px;
        }
      }

      @media (min-width: 375px) and (max-width: 424px){
        .box-create{
            width: 350px;
            height: 600px;
            margin-top:10%;
        }

        .form h2{
            font-size: 25px;
        }

        .inputBox{
            width: 250px;
        }

        input[type="submit"]{
            width: 250px;
        }
      }

      @media (min-width: 425px) and (max-width: 767px){
        .box-create{
            width: 400px;
            height: 600px;
            margin-top: 10%;
        }

        .form h2{
            font-size: 25px;
        }

        .inputBox{
            width: 300px;
        }

        input[type="submit"]{
            width: 300px;
        }
      }

      @media (min-width: 768px) and (max-width: 1023px) {
        .box-create{
            width: 500px;
            height: 650px;
            margin-top: 7%;
        }

        .form h2{
            font-size: 30px;
        }

        .inputBox{
            width: 300px;
        }

        input[type="submit"]{
            width: 300px;
        }
      } 

      @media (min-width: 1024px){
        .box-create{
            width: 500px;
            height: 640px;
            margin-top: 3%;
        }

        .form h2{
            font-size: 30px;
        }

        .inputBox{
            width: 330px;
        }

        input[type="submit"]{
            width: 330px;
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
        <li class="nav-item mr-5">
          <a class="nav-link" href="windows.php">Windows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="linux.php">Linux</a>
          </li>
      </ul>
      <a href="create.php">
        <box-icon name='user' type='solid'></box-icon>
      </a>
    </div>
  </nav>

  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <div class="box-create mb-md-5 col-md-4 mx-auto">
            <div class="form">
                <h2>Criar Conta</h2>
                <div class="inputBox mx-auto pt-md-3">
                    <input type="text" name="utilizador" id="iduser" required="required" autocomplete="off">
                    <span>Nome</span>
                    <i></i>
                </div>

                <div class="inputBox mx-auto">
                    <input type="email" name="email" id="email" required="required" autocomplete="off">
                    <span>E-mail</span>
                    <i></i>
                </div>

                <div class="inputBox mx-auto">
                    <input type="password" name="senha1" id="idsenha" required="required">
                    <span>Palavra-Passe</span>
                    <i></i>
                </div>

                <div class="inputBox mx-auto">
                    <input type="password" name="senha2" id="idsenha" required="required">
                    <span>Confirmar Palavra-Passe</span>
                    <i></i>
                </div>

                <input class="mx-auto" type="submit" value="Enviar">
                <div class="links mx-auto">
                    <a href="login.php">Iniciar Sessão &#10132; </a>
                </div>
            </div>
        </div>
    </form>

    <?php
        $msg = '';

        include("config.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST"){ #Verifica se o formulário foi enviado com o método POST, ou seja, todo o texto aqui dentro só será executado quando o formulário for submetido. 
            $nome = $_POST['utilizador'];
            $password = $_POST['senha1'];
            $confirm = $_POST['senha2'];
            $email = $_POST['email'];

            if (empty ($nome) || empty ($password) || empty ($confirm) || empty ($email)) {
                echo"<script>alert('Preencha todos os campos!')</script>";
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo"<script>alert('Introduza um e-mail válido!')</script>";
            }elseif($password != $confirm) {
                echo"<script>alert('As passwords não correspondem!')</script>";
            }else{
                $msg=registaUtilizador($nome, $email, $password);
            }
        }

        #Esta função verifica se o e-mail já está registado na base de dados
        function mailExiste($email) {  
            include("config.php");
            $query = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
            $resultado = mysqli_query($liga, $query);
            $contar = mysqli_num_rows($resultado);
            if($contar == 0) {
                return false;
            }else{
                return true;
            }
        }

        #Esta função faz o registo do utilizador
        function registaUtilizador($nome, $email, $password) {
            $nome = ucwords(strtolower($nome));
            $pass = md5($password);
            $mailExiste = mailExiste($email);

            #Verifica se o e-mail já existe. Se já existir exibe a mensagem de erro, se não tenta fazer o registo do utilizador.
            if($mailExiste){
                echo"<script>alert('E-mail já registado, tente outro e-mail!')</script>";
            }else{
                include("config.php");
                $query = "INSERT INTO users (nome,password,email) VALUES ('$nome','$pass','$email')";
                $resultado = mysqli_query($liga,$query);
                if($resultado == true) {
                    echo"<script>alert('Utlizador registado com sucesso!')</script>";
                    echo "<script>window.location.href = '/../index.php';</script>";
                }else{
                    echo"<script>alert('Utlizador não registado!')</script>";
                }
            }
        }
    ?>

</body>
</html>