<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
</head>
<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? 'Гость';
        echo "Привет, $name!";
    } else {
        echo <<<HTML
            <form method="POST">
                <label for="name">Введите ваше имя:</label>
                <input type="text" id="name" name="name">
                <button type="submit">Отправить</button>
            </form>
        HTML;
    }
?>

</body></html>