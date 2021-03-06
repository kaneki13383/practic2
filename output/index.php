<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>YouTube 2.0</title>
</head>
<body>
    <header>
        <div class="f">
            <div class="container_2">
                <div class="menu-burger__header">
                    <span></span>
                </div>
                <nav class="header__nav">
                    <ul class="menu header__menu">
                        <li><a href="" class="menu__item">Главная</a></li>
                        <li><a href="" class="menu__item">Товары</a></li>
                        <li><a href="" class="menu__item">Акции</a></li>
                        <li><a href="" class="menu__item">Новинки</a></li>
                        <li><a href="" class="menu__item">Доставка</a></li>
                        <li><a href="" class="menu__item">Контакты</a></li>
                    </ul>
                </nav>
                <img src="<?=$_SESSION['user']['avatar']?>" alt=""> 
                <a href="../output/profile.php">Профиль</a>
                <a href="../functions/logout.php">Выход</a>
             </div>
    </header>
    <!-- OPEN MAIN -->
    <div class="a">picture and text</div>
    <div class="b">slider</div>
    <div class="container">
        <div class="c">element</div>
        <div class="d">element</div>
        <div class="e">element</div>
        <div class="e">element</div>
    </div>
    <!-- CLOSE MAIN -->
    <footer>
        <div class="e">footer</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/script.js"></script> 

</body>
</html>