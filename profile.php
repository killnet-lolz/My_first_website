<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Радченко С.А.</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container nav_bar">
    <div class="row">
        <div class="col-3 nav_logo"></div>
        <div class="col-9">
            <div class="nav_text"><h2>Моя страничка!</h2></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3>Здравствуйте, я Радченко Сергей - студент с глубоким интересом к кибербезопасности и большим потенциалом для развития. Обладаю базовыми знаниями в области сетевой безопасности, криптографии и анализа уязвимостей. Мои академические знания и стремление к постоянному обучению делают меня идеальным кандидатом для быстрого роста в вашей компании по кибербезопасности.</h3>
        </div>
        <div class="col-4">
            <div class="row"><img class="img_size" src="image/1.jpeg" alt="Моё фото"></div>
            <div class="row"><p class="title_photo">Радченко С.А.</p></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Мои достижения в сфере кибербезопасности:</h4>
            <ul>
                <li>Награда "Лучший студент по кибербезопасности" на университетской конференции</li>
                <li>Сертификат открытого курса "Основы криптографии" от Coursera</li>
                <li>Публикация статьи о сетевой безопасности в журнале "Cyber Defense"</li>
                <li>Участие в соревнованиях по хакингу и занятие 3-го места в региональном чемпионате</li>
            </ul>
        </div>
        <div class="col-6">
            <h4>Контакты:</h4>
            <p>Email: example@example.com</p>
            <p>Телефон: +1234567890</p>
            <p>Адрес: Улица Примерная, дом Примерный, город Примерный</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="button_js col-12">
            <button id="myButton">Потрогай меня</button>
            <p id="demo"></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="hello">
                Привет, <?php echo $_COOKIE['User']; ?>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="profile.php">
                <div class="form-group">
                    <label for="title">Заголовок вашего поста</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Заголовок вашего поста">
                </div>
                <div class="form-group">
                    <label for="text">Введите текст вашего поста ...</label>
                    <textarea class="form-control" name="text" id="text" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn_red" name="submit">Сохранить пост!</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/button.js"></script>
</body>
</html>
<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}