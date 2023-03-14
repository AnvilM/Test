<?php
if(isset($_POST['phone']) && isset($_POST['fio']) && isset($_POST['email']))
{
    if($_POST['email'] != ''){
        $email = '<br>Электронная почта клиента: '.$_POST['email'];
    }
    $text = 'Ф.И.О. клиента: '.$_POST['fio'].'<br>Телефон клиента: '.$_POST['phone'].$email;
    
    mail(
        'rbru-metrika@yandex.ru',
        'Запись на прием',
        $text,
        "From: no-reply@yukkamc.ru\r\n"
        ."Content-type: text/html; charset=utf-8\r\n"
        ."X-Mailer: PHP mail script"
    );
    
}

header('Location: /');