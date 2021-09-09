<?php
// https://api.telegram.org/bot1906769464:AAEyP_O-fy7ufw4IMDHdINfmblqgbrGSzqM/getUpdates
// где XXXXXXXXXXXXXX = наш токен полученный ранее

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject = $_POST['subject'];
$token = "1906769464:AAEyP_O-fy7ufw4IMDHdINfmblqgbrGSzqM";
$chat_id = "-522524208";

$arr = array(
  'NAME: ' => $name,
  'EMAIL: ' => $email,
  'TELEPHONE: ' => $subject,
  'MESSAGE: ' => $message
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b>".$value."%0A";
};

$send_to_telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($send_to_telegram) {
  header('Location: contact-page.php');
  return true;
} else {
  echo "Error";
}
 ?>
