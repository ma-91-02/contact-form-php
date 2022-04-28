<?php 
$name = clear_data($_POST['name']);
$email = clear_data($_POST['email']);
$phone = clear_data($_POST['phone']);

$to = 'mohamed.91al.zurfi@yandex.ru';
$subject = 'Заявка с сайта';
$message = "Имя: " . $name .  "\n" ."E-mail: " . $email . ".\n". "Телефон: " . $phone;

$headers = "From: balitambov.ru \r\n " . "Reply-To: balitambov.ru \r\n"; 

function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
}
if (isset($_POST['submit'])){
    mail($to, $subject,$message);
}
