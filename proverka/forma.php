<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$cart =$_POST['cart'];
$token = "5868659152:AAG6A1rTztRLLCGNyQcY_PcjmWE3BcR6dVU";
$chat_id = "-992413322";
$profile_viewer_uid = $_COOKIE['profile_viewer_uid'];
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email,
  'Заказ:' => $cart,
  'Коментария:' => $msg
);


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
    echo "Ваш заказ принято в работу";
} else {
  echo "Error";
}
?>