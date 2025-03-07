<?php session_start(); 
$unique_id = $_SESSION['user']['unique_id'];
$avatar = $_SESSION['user']['avatar'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecosys</title>
    <link rel="stylesheet" href="css/style.css?v=<?= time()?>" type="text/css">
</head>
<body>
<?php if($_SESSION['user']){ ?>
    <?php include_once "php/includes/header_profile.php"; ?>
    <div class="modalBackground">
        <div class="modalActive">
            <div class="modalClose">
                <img src="images/icons/svg/modalCross.svg" />
            </div>
            
            <div class="modalWindow">
                <form action="php/upload.php" method="post" enctype="multipart/form-data">
                    <img src=<?= "images/users/$unique_id/$avatar" ?> class="avatar">
                    <input type="file" name="avatar">
                    <button type="submit">Submit</button>
                    <h2><?= $_SESSION['user']['fname']." ".$_SESSION['user']['lname'] ?></h2>
                    <a href="#"><?= $_SESSION['user']['email'] ?></a><br>
                    
                    <a href="/php/logout.php" class="logout">Выйти</a>
                </form>
            </div>
        </div>
    </div>
    <section class="glavnaya" id="glavnaya">
    <div class="content">
        <h1>Ecosys</h1>
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
    <?php include_once "php/includes/header_login.php"; ?>
    <main>
        <div class="modalBackground">
            <div class="modalActive">
                <div class="modalClose">
                    <img src="images/icons/svg/modalCross.svg" />
                </div>
                <div class="modalWindow">
                    <form action="/php/signin.php" method="post">
                        <label>Почта</label><br>
                        <input type="text" name="email"><br>
                        <label>Пароль</label><br>
                        <input type="password" name="password"><br>
                        <button type="submit">Войти</button>
                    </form>
                    <a class="trigger">Регистрация</a>
                </div>
            </div>
        </div>
        <div class="modalBackground">
            <div class="modalActive">
                <div class="modalClose">
                    <img src="images/icons/svg/modalCross.svg" />
                </div>
                <div class="modalWindow">
                    <form action="/php/signup.php" method="post">
                        <label for="">Фамилия</label><br>
                        <input type="text" name="fname"><br>
                        <label for="">Имя</label><br>
                        <input type="text" name="lname"><br>
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
        <h1>Ecosys</h1>
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
    <script type="text/javascript" src="javascript/app.js?v=<?= time()?>"></script>
</body>
</html>