<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Создайте простую HTML-форму, которая принимает имя пользователя и отображает его с помощью оператора PHP echo -->
    <form action="" method="get">
        <label for="">Введите имя:</label> <input type="text" placeholder="Введите имя" name="yourvalue">
        <input type="submit" value="Показать резултат">
    </form>
    <?php
    $result = $_GET['yourvalue'];
    if (!empty($result)) {
        echo $result;
    }
    
    ?>
</body>

</html>