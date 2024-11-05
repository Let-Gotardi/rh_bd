<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $funcao = $_POST['funcao'];
    $salario = $_POST['salario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

  
    include "conexao.php";

    $sql = "INSERT INTO funcionarios (nome, data_nasc, funcao, salario, usuario, senha)
            VALUES ('$nome', '$data_nasc', '$funcao', '$salario', '$usuario', '$senha')";

    if (mysqli_query($con, $sql)) {
        echo "Cadastro realizado com sucesso!";
        header('Location: inicio.html'); 
    } else {
        echo "Erro ao cadastrar: " ;
        echo "<a href='index.html'>Voltar</a>";
    } }
?>
