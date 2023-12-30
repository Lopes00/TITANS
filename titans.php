<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se a opção foi selecionada
    if (isset($_POST["opcoes"])) {
        // Obtém o valor da opção selecionada
        $selectedOption = $_POST["opcoes"];

        // Redireciona para a página correspondente
        header("Location: $selectedOption.php");
        exit();
    } else {
        // Se nenhuma opção for selecionada, redireciona para uma página padrão ou exibe uma mensagem de erro
        header("Location: erro.php");
        exit();
    }
}


?>


