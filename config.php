<?php
     //configuração da ligação ao servidor
     $liga = mysqli_connect('localhost','root');

     //verifica a ligação ao servidor
     if(!$liga) {
         echo "<script type='text/javascript'>alert('Falha na ligação ao servidor!')</script>";
         exit;
     }

     //Ligação à base de dados
     $escolheBD = mysqli_select_db($liga, 'trabalho_so');

     //Verifica a ligação à BD
     if(!$escolheBD) {
         echo "<script type='text/javascript'>alert('Base de dados não encontrada!')</script>";
         exit;
     }
?>