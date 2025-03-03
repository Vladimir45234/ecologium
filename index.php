<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecologium</title>
    <link rel="stylesheet" href="css/style.css?v=<?= time()?>" type="text/css">

</head>
<body>
<?php if($_SESSION['user']){ ?>
    <header class="header">
        <a href="#" class="logo">EC</a>
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <nav class="nav">
            <ul class="menu">
                <li><a href="#glavnaya" class="item-button active-button">Главная</a></li>
                <li><a href="#biologia" class="item-button">Биология</a></li>
                <li><a class="item-button profile trigger">Профиль</a></li>
            </ul>
        </nav>
    </header>
    <div class="modalBackground">
        <div class="modalActive">
            <div class="modalClose">
                <img src="/src/modalCross.svg" />
            </div>
            <div class="modalWindow">
                <form>
                    <h2><?= $_SESSION['user']['full_name'] ?></h2>
                    <a href="#"><?= $_SESSION['user']['email'] ?></a><br>
                    <a href="/php/logout.php" class="logout">Выйти</a>
                </form>
            </div>
        </div>
    </div>
    <section class="glavnaya" id="glavnaya">
    <div class="content">
        <h1>Ecologium</h1>
        <p>Экология будущего</p>
    </div>
    </section>
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
<?php } else{ ?> 
    <header class="header">
        <a href="#" class="logo">EC</a>
        <input class="side-menu" type="checkbox" id="side-menu"/>
        <label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
        <nav class="nav">
            <ul class="menu">
                <li><a href="#" class="item-button active-button">Главная</a></li>
                <li><a href="#biologia" class="item-button">Биология</a></li>
                <li><a class="item-button join trigger">Войти</a></li>
                <li><a class="item-button register trigger">Регистрация</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="modalBackground">
            <div class="modalActive">
                <div class="modalClose">
                    <img src="/src/modalCross.svg" />
                </div>
                <div class="modalWindow">
                    <form action="/php/signin.php" method="post">
                        <label>Логин</label><br>
                        <input type="text" name="login"><br>
                        <label>Пароль</label><br>
                        <input type="password" name="password"><br>
                        <button type="submit">Войти</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="modalBackground">
            <div class="modalActive">
                <div class="modalClose">
                    <img src="/src/modalCross.svg" />
                </div>
                <div class="modalWindow">
                    <form action="/php/signup.php" method="post">
                        <label for="">ФИО</label><br>
                        <input type="text" name="full_name"><br>
                        <label for="">Логин</label><br>
                        <input type="text" name="login"><br>
                        <label for="">Почта</label><br>
                        <input type="email" name="email"><br>
                        <label for="">Пароль</label><br>
                        <input type="password" name="password"><br>
                        <label for="">Подтверждение пароля</label><br>
                        <input type="password" name="password_confirm"><br>
                        <button type="submit">Регистрация</button>
                    </form>
                </div>
            </div>
        </div>
    <section class="glavnaya">
    <div class="content">
        <h1>Ecologium</h1>
        <p>Экология будущего</p>
    </div>
    </section>
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
    </main>
<?php } ?>
    <script type="text/javascript" src="app/app.js?v=<?= time()?>"></script>
</body>
</html>