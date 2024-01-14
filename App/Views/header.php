<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebTools</title>
</head>
<body>
<?php
    if (!$data['user'])
    {
        echo '<form class="d-flex" method="post" action="/login">';
        echo '<input class="form-control me-2" type="text" placeholder="Логин" name="login" aria-label="Логин"/>';
        echo '<input class="form-control me-2" type="text" placeholder="Пароль" name="password" aria-label="Пароль"/>';
        echo '<button class="btn btn-outline-success" type="submit">Войти</button>';
        echo '</form>';
    }
    else
    {
        echo 'Привет, ' . $data['user']->name . ' ' . $data['user']->surname ;
        echo '<br><a href="/logout">Выйти</a>';
    }
?>
