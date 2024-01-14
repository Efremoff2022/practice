<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form {
        margin-bottom: 20px;
    }

    .result {
        margin-top: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
    }
</style>

<body>
<!-- Создайте простую HTML-форму, которая принимает имя пользователя и отображает его с помощью оператора PHP echo -->
<form action="" method="get">
    <div class="form">
        <label for="yourvalue">Введите имя:</label>
        <input type="text" placeholder="Введите имя" name="yourvalue" id="yourvalue">
    </div>
        
    <input type="submit" value="Показать результат">
</form>

<?php
    $result = $_GET['yourvalue'];
    if (!empty($result)) {
        echo "<p class='result'>";
        echo $result;
        echo "</p>";
    }
?>
</body>

</html>