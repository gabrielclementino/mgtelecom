<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $file = fopen("submissions.csv", "a");
    fputcsv($file, [$name, $email, $message]);
    fclose($file);

    echo "Obrigado por entrar em contato!";
} else {
    echo "Método de requisição não permitido.";
}
?>
