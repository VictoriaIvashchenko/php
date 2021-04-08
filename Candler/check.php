<?php
$nickname = $_POST['nickname'];
$password = $_POST['password'];
$chars = array("'","*","\\","/","<",">",";",":","(",")","^","%","#"," ");
$nickname = strip_tags($nickname);
$nickname = str_replace($chars,"",$nickname);
$password = strip_tags($password);
$password = str_replace($chars,"",$password);
$error="";
if(trim($nickname)==""):
    $error = "Введіть нікнейм!";
elseif ($nickname !='Hana123' || $password != 987):
    $error = "Неправильно введений пароль чи логін";
endif;

if($error != ''):
    print ($error);
else:
    setcookie('user','online', time() + 130, '/');
    setcookie('name', $nickname, time() +130, '/');
    header('Location: /Candler/index.php');
endif;

?>
