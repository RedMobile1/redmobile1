<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nickname = htmlspecialchars($_POST['nickname']);
    $password = htmlspecialchars($_POST['password']);
    $line = "Никнейм: $nickname, Пароль: $password\n";
    file_put_contents("registrations.txt", $line, FILE_APPEND | LOCK_EX);
    echo "Заявка успешно отправлена!";
}
?>