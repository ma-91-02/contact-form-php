<?php 

$name = clear_data($_POST['name']);
$email =Clear_data( $_POST['email']);
$phone =Clear_data( $_POST['phone']);
$subject = "Заявка с сайта";
$message = "Имя: " . $name .  "\n" ."E-mail: " . $email . ".\n". "Телефон: " . $phone;

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "mohamed.91al.zurfi@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");
function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
}
if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}




// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $subject = "Заявка с сайта";
// $message = "Имя: " . $name .  "\n" ."E-mail: " . $email . ".\n". "Телефон: " . $phone;

// $mailheader = "From: balitambov.ru \r\n " . "Reply-To: balitambov.ru \r\n"; 

// $recipient = "mohamed.91al.zurfi@gmail.com";

// mail($recipient, $subject, $message, $mailheader) or die("Error!");

// if (isset($_SERVER["HTTP_REFERER"])) {
//     header("Location: " . $_SERVER["HTTP_REFERER"]);
// }



?>
