<?php
  //inicia a seção
  session_start();
  //print_r($_SESSION);
  /*if((!isset($_SESSION['matricula']) == true ) and (!isset($_SESSION['senha']) == true))
  {
      unset($_SESSION['matricula']);
      header('Location: login.html');
  }
  $logado = $_SESSION['matricula'];
  $matricula = $_SESSION['matricula'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="adminPage.css">
    <title>Document</title>
</head>
<body>

<header>
    <div class="logo">
        <img src="../images/logo_pequena.png" alt="Logo">
        <div class="column">
            <div class="titulo-header">Núcleo de Operações Aéreas e Resgate</div>
            <div class="sub">Assoc. de Serviços Sociais</div>
            <div class="sub2">Voluntários</div>
        </div>
    </div>
</header>

<main>
<nav class="nav-lateral">
    <ul>
        <li class="item-menu">
            <a href="#">Cadastrar Usuário</a>
        </li>
        <li class="item-menu">
            <a href="#">Lista de Usuário</a>
        </li>
        <li class="item-menu">
            <a href="#">Histórico de Ocorrências</a>
        </li>
    </ul>
</nav>


    <div class="main">
        <div class="titulo">Cadastrar Usuário</div>
        <div class="form">
            <form class="form" method="post" action="../../php/inserts/inserir_usuario.php" id="form1">
                <div class="input-container">
                    <label for="matricula">Matrícula:</label>
                    <input type="number" id="matricula" name="matricula">
                </div>
                <div class="input-container">
                    <label for="nome">Nome do Usuário:</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="input-container">
                    <label for="admin">Admin:</label>
                    <input type="text" id="admin" name="admin">
                </div>
                <div class="input-container">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf">
                </div>
                <div class="input-container">
                    <label for="senha">Senha:</label>
                    <input type="text" id="senha" name="senha">
                </div>
                <div class="input-container">
                    <label for="cargo">Cargo:</label>
                    <select name="cargo" id="cargo">
                        <option value="1">Socorrista</option>
                        <option value="2">Motorista</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="cep">CEP:</label>
                    <input type="number" id="cep" name="cep">
                </div>
                <input type="button" name="enviar" value="Enviar" onclick="Cadastrar();" />
            </form>
        </div>
    </div>
</main>

<script>
function Cadastrar() {
    var dados = $('#form1').serialize(); // Este trecho de código depende do uso do jQuery.

    $.ajax({
        type: "POST",
        url: "../../php/inserts/inserir_usuario.php",
        data: dados,
        dataType: 'json',

        success: function(meu_json) {
            var nome = meu_json;
            console.log(nome);
        }
    })
}
</script>
</body>
</html>