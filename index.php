<?php 
// Initialize shopping cart class 
include_once './cart/Cart.class.php'; 
$cart = new Cart; 
// Include the database config file 
require_once './cart/dbConfig.php'; 
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/gg.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./swiper/swiper-bundle.css">
    <link rel="stylesheet" href="./swiper/swiper-bundle.min.css">
    <link rel="shortcut icon" href="./img/flame.svg" type="image/svg">
    <script src="./swiper/swiper-bundle.js"></script>
    <script src="./swiper/swiper-bundle.min.js"></script>
    <title class="lng-title-main">Душанбинская газова служба</title>
</head>
<body>
<div class="logo_container">
        <span class="logo_content">
          <a href="./index.php" class="header_logo">
          <img src="./img/flame.svg" alt="" class="logo_head">
          <div class="logo_right"> 
          <p class="logo_city_head lng-logo_city-mobile">Душанбинская</p>
            <p class="logo_title_head lng-logo_title-mobile">Газовая служба</p>
          </div>
          </a>
        </span>
    </div>
    <nav class="burger">
        <div id="menuArea">
  <input class="burger_input" type="checkbox" id="menuToggle">
<label for="menuToggle" class="menuOpen">
  <div class="open"></div>
</label>

<div class="menu menuEffects">
  <label for="menuToggle"></label>
  <div class="menuContent">
      <ul class="burger_list">
          <li class="burger_list_item"><a href="./covid.php" class="burger_list_item_link">Covid-19</a></li>
          <li class="burger_list_item"><a href="./index.php" class="burger_list_item_link lng-main-mobile">Главная</a></li>
          <li class="burger_list_item"><a href="./about.php" class="burger_list_item_link lng-about-mobile">О нас</a></li>
          <li class="burger_list_item"><a href="./services.php" class="burger_list_item_link lng-services-mobile">Услуги</a></li>
          <li class="burger_list_item"><a href="./contacts.php" class="burger_list_item_link lng-contacts-mobile">Контакты</a></li>
          <li class="burger_list_item"><a href="./cart/shop.php" class="burger_list_item_link lng-shop-mobile">Магазин</a></li>
          <li class="burger_list_item"><a href="./cart/viewCart.php" class="burger_list_item_link lng-cart-mobile">Корзина</a></li>
      </ul>
  </div>
</div>
</div>
    </nav>
    <header class="header">
        <div class="header_top">
            <div class="container">
            <span class="logo_content">
          <a href="./index.php" class="header_logo">
          <img src="./img/flame.svg" alt="logo" class="logo">
          <div class="logo_right"> 
          <p class="logo_city lng-logo-city">Душанбинская </p>
          <p class="logo_title lng-logo-title">Газовая служба</p>
          </div>
          </a>
        </span>
                <span class="header_info">
                    <img src="./img/clock-circular-outline.svg" alt="" class="header_info_img">
                    <a href="tel:+79992055981" class="header_info_link">
                        <p class="header_info_link_text lng-work-time">Часы работы</p>
                        <p class="header_info_link_text lng-work-time-description">Будни: 10:00 - 21:00<br> Выходные: 11:00 - 19:00</p>
                    </a>
                    <img src="./img/phone-call.svg" alt="" class="header_info_img">
                    <a href="tel:+79992055981" class="header_info_link">
                        <p class="header_info_link_text lng-call">Позвонить</p>
                        <p class="header_info_link_text">+992 901-43-94-94</p>
                    </a>
                </span>
            </div>
        </div>
        <div class="container">
        <select class="header_change-lang">
                        <option class="header_change-lang_tj" value="tj">Тоҷ</option>
                        <option class="header_change-lang_ru" value="ru">Рус</option>
                        <option class="header_change-lang_en" value="en">Eng</option>
                    </select>
        </div>
            <hr>
            <nav class="nav" id="myHeader">
                <div class="container">
                    <ul class="nav_list">
                        <li class="nav_list_item">
                            <a href="./covid.php" class="nav_link">
                                <b>COVID-19</b>
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="./index.php" class="nav_link active lng-main">
                                Главная
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="./about.php" class="nav_link lng-about">
                            О нас
                           </a>
                        </li>
                        <li class="nav_list_item navd">
                            <a href="./services.php" class="nav_link lng-services">
                                Услуги &dtrif;
                            </a>
                            <ul class="dropdown">
                                <li class="dropdown_item"><a class="dropdown_item_link" href="./services-type-equipment.php">Услуги по виду оборудования</a></li>
                                <li class="dropdown_item"><a class="dropdown_item_link" href="./services-type-work.php">Услуги по виду работ</a></li>
                              </ul>
                        </li>
                        <li class="nav_list_item">
                            <a href="./contacts.php" class="nav_link lng-contacts">
                                Контакты
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="./cart/shop.php" class="nav_link lng-shop">
                                Магазин
                            </a>
                        </li>
                        <li class="nav_list_item nav_cart">
                        <a class="nav_cart_link" href="./cart/viewCart.php" title="View Cart">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="34px" viewBox="0 0 24 24" width="34px" fill="#FF9900"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?>)</a>
                        </li>
                    </ul>
                    <button class="nav_btn">
                        <a href="#feedback" class="nav_btn_link lng-contact">Связаться</a>
                    </button>
                </div>
            </nav>
    </header>

    <section class="section_swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-content-first">
                    <div class="swiper-content_container">
                        <h1 class="swiper-content_container_heading lng-swaiper-header">Официальная газовая служба</h1>
                        <p class="swiper-content_container_info lng-swaiper-info">Имеем разришительную документацию и атестованных специалистов. Узнайте больше</p>
                        <button class="swiper-content_container_btn">
                            <a href="./about.php" class="swiper-content_container_btn_link lng-swiper-btn">О нас</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-content-second">
                    <div class="swiper-content_container">
                    <h1 class="swiper-content_container_heading lng-2">ГАЗОВЩИК ДУШАНБЕ</h1>
                        <p class="swiper-content_container_info lng-swaiper-info2">Вызов газовщика на дом в Душанбе</p>
                        <button class="swiper-content_container_btn">
                            <a href="#feedback" class="swiper-content_container_btn_link lng-swiper-btn2">Вызвать</a>
                        </button>
                    </div>
                </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="section-services">
        <div class="container">
            <ul class="row">
            <li class="col-md-3 section-services_item">
            <div class="section-services_card">
                <a href="./gasman-services.php">
                <img src="./img/gas-mask.svg" alt="иконка газовщика" class="section-services_img">
                </a>
                <div class="section-services_card_content">
                <h2 class="section-services_card_content_heading lng-services_heading1">
                Вызов газовщика
                </h2>
                 <p class="section-services_card_content_info lng-services_info1">
                     Газовщики проводят диагностику оборудования и ...
                    </p>
                    </div>
                    <button class="section-services_card_content_btn">
                        <a href="./gasman-services.php" class="section-services_card_content_btn_link lng-services_details">Подробнее
                        </a>
                    </button>
                    </div>
                </li>
                <li class="col-md-3 section-services_item">
                <div class="section-services_card">
                    <a href="./Gas-pipe-replacement.php">
                    <img src="./img/plumbing.svg" alt="иконка трубы" class="section-services_img">
                    </a>
                    <div class="section-services_card_content">
                    <h2 class="section-services_card_content_heading  lng-services_heading2">
                        Газовые трубы
                    </h2>
                    <p class="section-services_card_content_info lng-services_info2">
                        По соображениям безопасности газовые трубы ...
                    </p>
                    </div>
                    <button class="section-services_card_content_btn">
                        <a href="./Gas-pipe-replacement.php" class="section-services_card_content_btn_link lng-services_details2">Подробнее
                        </a>
                    </button>
                    </div>
                </li>
                <li class="col-md-3 section-services_item">
                <div class="section-services_card">
                    <a href="./Gas-stove-repair.php">
                    <img src="./img/gas-stove.svg" alt="иконка плиты" class="section-services_img">
                    </a>
                    <div class="section-services_card_content">
                    <h2 class="section-services_card_content_heading  lng-services_heading3">
                    Газовые плиты
                    </h2>
                    <p class="section-services_card_content_info lng-services_info3">
                        Профессиональная установка и подключение газовой плиты ...
                    </p>
                    </div>
                    <button class="section-services_card_content_btn">
                        <a href="./Gas-stove-repair.php" class="section-services_card_content_btn_link lng-services_details3">Подробнее
                        </a>
                    </button>
                </div>
                </li>
                <li class="col-md-3 section-services_item">
                <div class="section-services_card">
                    <a href="./Connecting-the-gas-hob.php">
                    <img src="./img/handyman-tools.svg" alt="иконка ремонта" class="section-services_img">
                    </a>
                    <div class="section-services_card_content">
                    <h2 class="section-services_card_content_heading  lng-services_heading4">
                    Ремонт оборудования
                    </h2>
                    <p class="section-services_card_content_info lng-services_info4">
                        Решение вопросов с отоплением и горячой водой в частном доме.
                    </p>
                    </div>
                    <button class="section-services_card_content_btn">
                        <a href="./Connecting-the-gas-hob.php" class="section-services_card_content_btn_link lng-services_details4">Подробнее
                        </a>
                    </button>
                </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-appointment">
        <div class="container">
            <div class="section-appointment_content">
                <h2 class="section-appointment_heading lng-appointment_heading">
                    Оставить заявку
                </h2>
                <p class="section-appointment_paragraph lng-appointment_paragraph">
                    Оставьте заявку через сайт и получите скидку 10% на подключение
                </p>
                <form action="./mail/mail-appointment.php" method="POST" class="section-appointment_form">
                    <input name="user_name" type="text" placeholder="Akmal Rasulov" class="section-appointment_input lng-appointment_input-name">
                    <input name="user_phone" type="text" placeholder="+992 901-21-21-21" class="section-appointment_input">
                    <input name="user_date" type="date" class="section-appointment_input">
                    <input name="user_time" type="time" class="section-appointment_input">
                    <textarea name="user_message" id="" cols="30" rows="10" placeholder="..." class="section-appointment_textarea"></textarea>
                    <button type="submit" class="section-appointment_btn lng-appointment_btn">
                        Оставить заявку
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section-map">
        <div id="map" class="map_container" style="width: 100%; height: 500px"></div>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">
        </script>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                <a href="./index.php" class="header_logo">
              <img src="./img/flame.svg" alt="логотип" class="footer_logo">
              <div class="logo_right"> 
              <h2 class="logo_city lng-city_footer">Душанбинская </h2>
              <h2 class="logo_title lng-title_footer">Газовая служба</h2>
              </div>
              <hr>
              </a>
                    <div class="footer_row">
                            <ul class="footer_row_list">
                                <li class="footer_item"><a href="./covid.php" class="footer_link">
                                    Covid-19
                                </a></li>
                                <li class="footer_item"><a href="./index.php" class="footer_link lng-main_footer">
                                    Главная
                                </a></li>
                                <li class="footer_item"><a href="./about.php" class="footer_link lng-about_footer">
                                    О нас
                                </a></li>
                            </ul>
                        <ul class="footer_row_list">
                                <li class=""> <a href="./services.php" class="footer_link lng-services_footer">
                                    Услуги
                                </a></li>
                                <li class=""> <a href="./contacts.php" class="footer_link lng-contacts_footer">
                                    Контакты
                                </a></li>
                                <li class=""> <a href="./cart/shop.php" class="footer_link lng-shop_footer">
                                    Магазин
                                </a></li>
                            </ul>
                            <ul class="footer_row_list">
                        <li class="footer_item">
                            <a href="https://www.facebook.com/profile.php?id=100018315274856" target="_black" class="footer_link"><img src="./img/facebook.svg" alt="логотип фейсбук" class="footer_img"></a></li>
                        <li class="footer_item"><a href="https://vk.com/rasulov_aki" target="_black"  class="footer_link"><img src="./img/vk.svg" alt="логотив вконткте" class="footer_img"></a></li>
                        <li class="footer_item"><a href="https://www.youtube.com/" target="_black"  class="footer_link"><img src="./img/youtube.svg" alt="логотип ютуба" class="footer_img"></a></li>
                    </ul>
                        </div>
                </div>
                <div class="col-md-5">
                    <h2 class="footer_logo_heading lng-footer_contactus">Наши Контакты</h2>
                    <hr>
                    <ul class="footer_contact">
                    <li class="footer_item">
                        <img src="./img/tel.svg" alt="время" class="footer_rigth_img">
                        <a href="tel:+74995356434" class="footer_link">
                          +992 901-43-94-94
                        </a>
                      </li>
                      <li class="footer_item">
                        <img src="./img/email.svg" alt="телефон" class="footer_rigth_img">
                        <a href="mailto:dushgaz@gmail.com" class="footer_link">          
                            dushgaz@gmail.com
                        </a>
                    </li>
                        <li class="footer_item">
                            <img src="./img/pin.svg" alt="" class="footer_rigth_img">
                            <a href="#map" class="footer_link">
                                <b class="footer_link lng-footer-location">ул. А. Гулямова 30</b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                <form action="./mail/mail.php" method="POST">
                            <input type="email" class="footer_input" name="user_email" id="feedback" placeholder="Email">
                            <textarea class="footer_input" name="user_message" id="exampleMessage" placeholder="..."></textarea>
                            <button type="submit" class="footer_btn lng-footer_btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
      
      <script type="text/javascript">
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [38.567858922845524,68.7496555380651],
                zoom: 17
            });

            // var myGeoObject = new ymaps.getObjects({
            //     geometry: {
            //         type: "Point",
            //         coordinates: [[38.56377780466606,68.73935585544791],[38.571939807345316,68.7599552206823]],
            //     }
            // });

            // var myPlacemark = new ymaps.Placemark([38.56789148300483,68.74957982188249], {}, {
            //     iconLayout: 'default#image',
            //     iconImageHref: '/img/placeholder.svg',
            //     iconImageSize: [30, 42],
            //     iconImageOffset: [-3, -42]
            // });
            
            // myMap.getObjects.add(myGeoObject);
            myMap.getObjects.add(myPlacemark);
        }
    </script>
    

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("section-slaider_content_list_item");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
        </script>
        <script>
                 // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};
        
        // Get the header
        var header = document.getElementById("myHeader");
        
        // Get the offset position of the navbar
        var sticky = header.offsetTop;
        
        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
        <script>
        const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    //   direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        hide: true,
    },
    });
    </script>

<script src="./js/lang.js"></script>
<script src="./js/app.js"></script>
<script src="./js/jquery-3.4.1.slim.js"></script>
</body>
</html>