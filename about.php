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
        <link rel="stylesheet" href="./css/.css">
        <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
        <link rel="shortcut icon" href="./img/flame.svg" type="image/svg">
        <title class="lng-title-about">О нас</title>
    </head>
    <body onload="load()">
    <div class="logo_container">
        <span class="logo_content">
          <a href="./index.php" class="header_logo">
          <img src="./img/flame.svg" alt="kjujnbg" class="logo_head">
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
                            <a href="./index.php" class="nav_link lng-main">
                                Главная
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="./about.php" class="nav_link active lng-about">
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

    <section class="section-about_head">
        <div class="section-about_head_content">
            <h1 class="section-about_head_content_header lng-about-header">О нас</h1>
            <ul class="section-about_head_content_list">
                <li class="section-about_head_content_list_item">
                    <a href="./index.php" class="section-about_head_content_list_item_link lng-abuot-link">Главная</a>
                </li>
                <li class="section-covid_about_content_list_item">
                    <p class="section-about_head_content_list_item_text lng-about-header2">О нас</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="section-wcu">
            <div class="section-wcu_content">
                <p class="section-wcu_content_info lng-wcu-info">
                    Качественные газовые услуги
                </p>
                <h2 class="section-wcu_content_heading lng-wcu-heading">
                    Почему выбирают нас
                </h2>
                <p class="section-wcu_content_description lng-wcu-description">
                    Наши мастера ежегодно проходят проверку знаний для подтверждения аттестации, эта необходимость обусловлена сложностью работ в сфере монтажа газового оборудования. Мы даем гарантии на все выполненные работы, а так же ставим отметки в паспорте на установленное оборудование, благодаря чему Вы получаете гарантию от завода изготовителя. 
                </p>
                <ul class="section-wcu_content_list">
                    <li class="section-wcu_content_list_item lng-wcu-item1">
                        Лицензировано & Застраховано
                    </li>
                    <li class="section-wcu_content_list_item lng-wcu-item2">
                        Аварийная служба
                    </li>
                    <li class="section-wcu_content_list_item lng-wcu-item3">
                        Известная репутация
                    </li>
                </ul>
                <div class="section-wcu_content_links">
                    <a href="tel:+992901439494" class="section-wcu_content_list_item_link">
                        <img src="./img/phone-call.svg" alt="" class="section-wcu_content_list_item_img">
                        <b>+992 901-43-94-94</b>
                    </a>
                    <a href="mailto:dushgaz@gmail.com" class="section-wcu_content_list_item_link">
                        <img src="./img/email.svg" alt="" class="section-wcu_content_list_item_img">
                        <b>dushgaz@gmail.com</b>
                    </a>
                    <a href="#map" class="section-wcu_content_list_item_link">
                        <img src="./img/pin.svg" alt="" class="section-wcu_content_list_item_img">
                        <b class="lng-wcu-location">ул. А. Гулямова 30</b>
                    </a>
                </div>
            </div>
    </section>

    <section class="section-history">
        <div class="container">
            <h2 class="section-history_heading lng-history-heading">Наша История</h2>
            <div class="section-history_card">
                <h3 class="section-history_card_date">2006&#8722;2009</h3>
                <p class="section-history_card_description lng-history-description1">Душанбинская газовая служба начала свою деятельность по  оказанию услуг в сфере внутридомового газового оборудования.</p>
            </div>
            <div class="section-history_card">
                <h3 class="section-history_card_date">2009&#8722;2012</h3>
                <p class="section-history_card_description lng-history-description2">Компания начала оказывать услуги более чем в 3 городах и расширила список предоставления услуг по  по перемонтажу газопровода, замене газовых колонок и установке счетчиков газа. Работы по замене газовых колонок и установке приборов учета газа проводятся исключительно с использованием качественного, проверенного и получившего необходимые сертификаты оборудования.</p>
            </div>
            <div class="section-history_card ">
                <h3 class="section-history_card_date">2012&#8722;2021</h3>
                <p class="section-history_card_description lng-history-description3">Обслужено более 500 клиентов по всей стране</p>
            </div>
            <ul class="row">
                <h3 class="section-history_card-heading lng-counter-head">Информация в цифрах</h3>
                <li class="col section-history_reach-item">
                    <div class="section-history_reach-card">
                        <img src="./img/users.svg" alt="" style="width: 90px; height: 90px;">
                        <h2 class="section-history_reach-card_counter" id="0101"></h2>
                        <p class="section-history_reach-card_description lng-counter-description1">Обслужено болеее   клиентов</p>
                    </div>
                </li>
                <li class="col section-history_reach-item">
                    <div class="section-history_reach-card">
                        <img src="./img/medal.svg" alt="" style="width: 90px; height: 90px;">
                        <h2 class="section-history_reach-card_counter" id="0102"></h2>
                        <p class="section-history_reach-card_description lng-counter-description2">Сотруднчаем с   компаниями</p>
                    </div>
                </li>
                <li class="col section-history_reach-item">
                    <div class="section-history_reach-card">
                        <img src="./img/certificate.svg" alt="" style="width: 90px; height: 90px;">
                        <h2 class="section-history_reach-card_counter" id="0103"></h2>
                        <p class="section-history_reach-card_description lng-counter-description3">Имеем   сертифированных мастеров</p>
                    </div>
                </li>
                <li class="col section-history_reach-item">
                    <div class="section-history_reach-card">
                        <img src="./img/maps-and-location.svg" alt="" style="width: 90px; height: 90px;">
                        <h2 class="section-history_reach-card_counter" id="0104"></h2>
                        <p class="section-history_reach-card_description lng-counter-description4">Более офисов по всей стране</p>
                    </div>
                </li>
                <!-- <li class="col-lg-2 section-history_reach-item">
                    <div class="section-history_reach-card">
                        <img src="./img/maps-and-location.svg" alt="" style="width: 90px; height: 90px;">
                        <h2 class="section-history_reach-card_counter" id="value5"></h2>
                        <p class="section-history_reach-card_description lng-counter-description4">Experts across a range of specializations</p>
                    </div>
                </li> -->
            </ul>
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
              <img src="./img/flame.svg" alt="logo" class="footer_logo">
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
                            <a href="https://www.facebook.com/profile.php?id=100018315274856" target="_black" class="footer_link"><img src="./img/facebook.svg" alt="" class="footer_img"></a></li>
                        <li class="footer_item"><a href="https://vk.com/rasulov_aki" target="_black"  class="footer_link"><img src="./img/vk.svg" alt="" class="footer_img"></a></li>
                        <li class="footer_item"><a href="https://www.youtube.com/" target="_black"  class="footer_link"><img src="./img/youtube.svg" alt="" class="footer_img"></a></li>
                    </ul>
                        </div>
                </div>
                <div class="col-md-5">
                    <h2 class="footer_logo_heading lng-footer_contactus">Наши Контакты</h2>
                    <hr>
                    <ul class="footer_contact">
                    <li class="footer_item">
                        <img src="./img/tel.svg" alt="" class="footer_rigth_img">
                        <a href="tel:+74995356434" class="footer_link">
                          +992 901-43-94-94
                        </a>
                      </li>
                      <li class="footer_item">
                        <img src="./img/email.svg" alt="" class="footer_rigth_img">
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
            myMap.getObjects.add(myPlacemark);
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
        <script src="./js/lang.js"></script>
        <script src="./js/app.js"></script>
        <script src="./js/counter.js"></script>
    </body>
    </html>