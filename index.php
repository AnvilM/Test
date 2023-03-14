<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="/style.css">
    <title>Title</title>
</head>
<?php
$query = new mysqli('localhost', 'root', 'root', 'test');
$response = $query->query("SELECT * FROM `check_ups`");
$response = mysqli_fetch_all($response);


?>
<body>
    <div class="main-content">
        <div class="mobile-header">
            <div class="menu" id="menu-button" onclick="menuSwitch()">
                <img src="/images/menu.svg" alt="">
            </div>
            <div class="logo">
                <img src="/images/logo.svg" alt="">
            </div>
            <div class="number-place">
                <div class="phone">+7(863) 000 00 00</div>
                <div class="place">Ростов-на-Дону</div>
            </div>
        </div>
        <div class="menu-open menu-close" id="menu">
            <div class="links">
                <a href="/" class="about">О клинике</a>
                <a href="/" class="services">Услуги</a>
                <a href="/" class="specialists">Специалисты</a>
                <a href="/" class="price">Цены</a>
                <a href="/" class="contacts">Контакты</a>
            </div>
            <div class="button" onclick="formShow()">Записаться на прием</div>
        </div>
        <div class="header">
            <div class="about">
                <div class="content">
                   <div class="logo-place">
                        <div class="logo">
                            <img src="/images/logo.svg" alt="">
                        </div>
                        <div class="place">
                            <div class="icon">
                                <img src="/images/place.svg" alt="">
                            </div>
                            <div class="text">
                                <div class="city">Ростов-На-Дону</div>
                                <div class="street">Ул. Ленина 2Б</div>
                            </div>
                        </div>
                   </div>
                   <div class="info">
                        <div class="phone">
                            <div class="icon">
                                <img src="/images/whatsup.svg" alt="">
                            </div>
                            <div class="number">+7(863) 000 00 00</div>
                        </div>
                        <div class="link button" onclick="formShow()">Записаться на прием</div>
                   </div>
                </div>
            </div>
            <div class="links">
                <div class="content">
                    <div class="links">
                        <a href="/" class="about">О клинике</a>
                        <a href="/" class="services">Услуги</a>
                        <a href="/" class="specialists">Специалисты</a>
                        <a href="/" class="price">Цены</a>
                        <a href="/" class="contacts">Контакты</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="main">
            <div class="first">
                <div class="content">
                <div class="img">
                        <img src="/images/image_1.png" alt="">
                    </div>
                    <div class="text">
                        <div class="title">Многопрофильная клиника для детей и взрослых</div>
                        <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                    </div>
                    
                </div>
            </div>
            <div class="second">
                <div class="content">
                    <div class="slider">

                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="wrapper">
                                        <div class="info">
                                            <div class="checkup">
                                                <div class="title">Check-UP</div>
                                                <div class="description">для мужчин</div>
                                                <div class="list">
                                                    <?php
                                                        for($i=0; $i < count($response); $i++){
                                                            echo '
                                                            <div class="list-element">
                                                                <div class="point"></div>
                                                                <div class="text">'.$response[$i][0].'</div>
                                                            </div>
                                                            ';
                                                        }

                                                    ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="all">Всего 2800₽</div>
                                                <div class="discount"><s>3500₽</s></div>
                                            </div>
                                            <div class="buttons">
                                                <div class="enroll button" onclick="formShow()">Записаться</div>
                                                <div class="about">Подробнее</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img"><img src="/images/image_2.png" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="wrapper">
                                        <div class="info">
                                            <div class="checkup">
                                                <div class="title">Check-UP</div>
                                                <div class="description">для мужчин</div>
                                                <div class="list">
                                                    <?php
                                                        for($i=0; $i < count($response); $i++){
                                                            echo '
                                                            <div class="list-element">
                                                                <div class="point"></div>
                                                                <div class="text">'.$response[$i][0].'</div>
                                                            </div>
                                                            ';
                                                        }

                                                    ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="all">Всего 2800₽</div>
                                                <div class="discount"><s>3500₽</s></div>
                                            </div>
                                            <div class="buttons">
                                                <div class="enroll button" onclick="formShow()">Записаться</div>
                                                <div class="about">Подробнее</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img"><img src="/images/image_2.png" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="wrapper">
                                        <div class="info">
                                            <div class="checkup">
                                                <div class="title">Check-UP</div>
                                                <div class="description">для мужчин</div>
                                                <div class="list">
                                                    <?php
                                                        for($i=0; $i < count($response); $i++){
                                                            echo '
                                                            <div class="list-element">
                                                                <div class="point"></div>
                                                                <div class="text">'.$response[$i][0].'</div>
                                                            </div>
                                                            ';
                                                        }

                                                    ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="all">Всего 2800₽</div>
                                                <div class="discount"><s>3500₽</s></div>
                                            </div>
                                            <div class="buttons">
                                                <div class="enroll button" onclick="formShow()">Записаться</div>
                                                <div class="about">Подробнее</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img"><img src="/images/image_2.png" alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide">
                                    <div class="wrapper">
                                        <div class="info">
                                            <div class="checkup">
                                                <div class="title">Check-UP</div>
                                                <div class="description">для мужчин</div>
                                                <div class="list">
                                                    <?php
                                                        for($i=0; $i < count($response); $i++){
                                                            echo '
                                                            <div class="list-element">
                                                                <div class="point"></div>
                                                                <div class="text">'.$response[$i][0].'</div>
                                                            </div>
                                                            ';
                                                        }

                                                    ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="all">Всего 2800₽</div>
                                                <div class="discount"><s>3500₽</s></div>
                                            </div>
                                            <div class="buttons">
                                                <div class="enroll button" onclick="formShow()">Записаться</div>
                                                <div class="about">Подробнее</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="img"><img src="/images/image_2.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                       <div class="buttons">
                            <div class="prev"><img src="/images/arrow.svg" alt=""></div>
                            <div class="number"><div class="from">1</div>/4</div>
                            <div class="next"><img src="/images/arrow.svg" alt=""></div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="content">
                <div class="logo"><img src="/images/logo_2.svg" alt=""></div>
                    <div class="links">
                        <a href="/" class="about">О клинике</a>
                        <a href="/" class="services">Услуги</a>
                        <a href="/" class="specialists">Специалисты</a>
                        <a href="/" class="price">Цены</a>
                        <a href="/" class="contacts">Контакты</a>
                    </div>
                <div class="contacts">
                    <a href="/">
                        <img src="/images/instagram.svg" alt="">
                    </a>
                    <a href="/">
                        <img src="/images/whatsup_2.svg" alt="">
                    </a>
                    <a href="/">
                        <img src="/images/telegram.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <form action="script.php" method="POST" class="form" id="form">
        <div class="title">Запись</div>
        <div class="f-content">
            <input type="text" placeholder="Ф.И.О." id="FIO" name="fio" required>
            <input type="text" placeholder="Контактный телефон" id="phone" name="phone" required>
            <input type="text" placeholder="Электронная почта" id="email" name="email">
            <button class="button">Отправить</button>
            <div class="button" onclick="formHide()">Закрыть</div>
        </div>
    </form>







    <script src="/script.js"></script>





</body>
</html>