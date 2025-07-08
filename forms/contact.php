<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Caminho correto para o PHPMailer
require '../assets/vendor/phpmailer/PHPMailer.php';
require '../assets/vendor/phpmailer/SMTP.php';
require '../assets/vendor/phpmailer/Exception.php';

// Ativa o modo de relatório de erros (debug)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Valida os dados recebidos
  $name    = strip_tags(trim($_POST["name"]));
  $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
  $subject = trim($_POST["subject"]);
  $message = trim($_POST["message"]);

  if (empty($name) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Por favor, preencha todos os campos corretamente.";
    exit;
  }

  // Inicia o envio do e-mail
  $mail = new PHPMailer(true);

  try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'icanadareparos@gmail.com';          // Seu e-mail Gmail
    $mail->Password   = 'auztinimdqtjwniq';            // 🔒 Coloque aqui a senha de app
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('icanadareparos@gmail.com', 'Site iCanada Reparos');
    $mail->addAddress('icanadareparos@gmail.com'); // Pode ser o mesmo, caso vá para si mesmo

    $mail->isHTML(true);
    $mail->Subject = "Contato do site: $subject";
    $mail->Body    = "
      <strong>Nome:</strong> $name<br>
      <strong>Email:</strong> $email<br>
      <strong>Mensagem:</strong><br>$message
    ";

    $mail->send();
    http_response_code(200);
    echo "success";
  } catch (Exception $e) {
    file_put_contents("log_erro.txt", date('Y-m-d H:i:s') . " - Erro PHPMailer: " . $mail->ErrorInfo . "\n", FILE_APPEND);
    http_response_code(500);
    echo "Erro ao enviar: " . $mail->ErrorInfo;
  }
} else {
  http_response_code(403);
  echo "Método inválido.";
}
