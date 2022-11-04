<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/Style/StyleRegistration.css"/>
</head>
<body>
<div class="header">
    <h1 class="logo">Отдел кадров</h1>
</div>

<div class="middle">
    <div class="WindowPass">
        <div>
<form action="MainMenu.php" method="POST">
    
<p>Введите ваше имя: &nbsp <input type="text" name="name"/><p>
    Введите фамилию: <input type="text" name="surname"/><p>
        Введите отчество: <input type="text" name="middlename"/><p>
         Выберите должность:  <select name="post">
    <option value="s1">Сотрудник</option>
    <option value="s2" selected>Крокодил Гена</option>
    <option value="s3">Шапокляк</option>
    <option value="s3" label="Лариса">Крыса Лариса</option>
   </select> <p>
Введите пароль: <input type="text" name="password"><p>
<input type="submit" value="Войти">



</form>
Не удаётся войти?(<a class="reg" href="Registration.php">Регистрация</a>)
</div>
    </div>
</div>

<div class="footer">

</div>
</body>
</html>