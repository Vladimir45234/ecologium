<?php
require_once "../php/connect.php";
session_start();
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
    <link rel="stylesheet" href="../css/style.css?v=<?= time()?>" type="text/css">
    <link rel="stylesheet" href="../css/modal.css?v=<?= time()?>" type="text/css">
</head>
<body>
<?php if($_SESSION['user']){ ?>
    <?php include_once "../php/includes/header_teoria.php"; ?>
    <div class="modalBackground1">
        <div class="modalActive1">
            <div class="modalClose1">
                <img src="../images/icons/svg/modalCross.svg" />
            </div>

            <div class="modalWindow1">
                <form action="../php/upload.php" method="post" enctype="multipart/form-data">
                    <img src=<?= "images/users/$unique_id/$avatar" ?> class="avatar">
                    <input type="file" name="avatar">
                    <button type="submit">Submit</button>
                    <h2><?= $_SESSION['user']['fname']." ".$_SESSION['user']['lname'] ?></h2>
                    <a href="#"><?= $_SESSION['user']['email'] ?></a>
                    <a href="../php/logout.php" class="logout">Выйти</a>
                </form>
            </div>
        </div>
    </div>
    <section class="glavnaya2" id="glavnaya2">
        <div class="container">
            <div class="blocker">

            </div>
        </div>
    </section>
<?php } else{ ?>
    <?php include_once "../php/includes/header_login.php"; ?>
    <main>
        <div class="modalBackground2">
            <div class="modalActive2">
                <div class="modalClose2">
                    <img src="../images/icons/svg/modalCross.svg" />
                </div>
                <div class="modalWindow2">

                    <form action="../php/signin.php" method="post">
                        <label>Почта</label><br>
                        <input type="text" name="email"><br><br>
                        <label>Пароль</label><br>
                        <input type="password" name="password"><br><br>
                        <button type="submit">Войти</button>
                    </form><br><br>
                    <p>Ещё не зарегистрированы?</p><a class="trigger3">Регистрация</a><br><br>
                </div>
            </div>
        </div>
        <div class="modalBackground3">
            <div class="modalActive3">
                <div class="modalClose3">
                    <img src="../images/icons/svg/modalCross.svg" />
                </div>
                <div class="modalWindow3">

                    <form action="/php/signup.php" method="post">
                        <label for="">Фамилия</label><br>
                        <input type="text" name="fname"><br><br>
                        <label for="">Имя</label><br>
                        <input type="text" name="lname"><br><br>
                        <label for="">Почта</label><br>
                        <input type="email" name="email"><br><br>
                        <label for="">Пароль</label><br>
                        <input type="password" name="password"><br><br>
                        <label for="">Подтверждение пароля</label><br>
                        <input type="password" name="password_confirm"><br><br>
                        <button type="submit">Регистрация</button>
                    </form><br><br>
                    <p>Уже зарегистрированы?</p><a class="trigger2">Авторизация</a><br><br>
                </div>
            </div>
        </div>
        <section class="glavnaya">
            <div class="content">
                <h1>Ecosys</h1>
                <p>Экология будущего</p>
            </div>
        </section>
    </main>
<?php } ?>

</body>
</html>