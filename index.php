<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecologium</title>
    <link rel="stylesheet" href="css/style.css?v=<?= time()?>" type="text/css">

</head>
<body>
    <main class="main">
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="#" class="item-button but-1 active-button">Главная</a></li>
                <li><a href="#biologia" class="item-button but-2">Биология</a></li>
                <li><a class="join">Войти</a></li>
                <li><a class="register">Регистрация</a></li>
            </ul>
            <div class="menu">
                <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                <label for="burger-checkbox" class="burger"></label>
                <ul class="menu-list">
                    <li><a href="#" class="menu-item button-3 active-button">Главная</a><li><br><br>
                    <li><a href="#biologia" class="menu-item button-4">Биология</a><li><br><br>
                    <li><a class="join-1">Войти</a><li><br><br>
                    <li><a class="join-1">Регистрация</a><li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <h1>Ecologium</h1>
            <p>Экология будущего</p>
        </div>
    </main>
    <section class="biologia" id="biologia">
        <div class="slider">
    <div class="slides">
        <div class="slide"><h1>Вода</h1><p>Здесь должен быть текст воды.</p></div>
        <div class="slide"><h1>Воздух</h1><p>Здесь должен быть текст воздуха.</p></div>
        <div class="slide"><h1>Продукты</h1><p>Здесь должен быть текст продуктов.</p></div>
        <div class="slide"><h1>Переработка</h1><p>Здесь должен быть текст переработки.</p></div>
    </div>
    <div class="controls">
        <button class="control" id="prevBtn">&lt;</button>
        <button class="control" id="nextBtn">&gt;</button>
     </div>
</div>
 
    </section>
<footer>
    <br>
    &copy; Скворцов Владимир 2025. Все права защищены.
</footer>
<script type="text/javascript" src="app/app.js?v=<?= time()?>"></script>

</body>
</html>