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
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="shortcut icon" href="./img/flame.svg" type="image/svg">
    <title class="lng-dropdown4-1">Услуги по виду работ</title>
</head>
<body>
  <div class="logo_container">
    <span class="logo_content">
      <a href="./index.php" class="header_logo">
      <img src="./img/flame.svg" alt="logo" class="logo_head">
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
      <li class="burger_list_item"><a href="./index.php" class="burger_list_item_link">Главная</a></li>
      <li class="burger_list_item"><a href="./about.php" class="burger_list_item_link">О нас</a></li>
      <li class="burger_list_item"><a href="./services.php" class="burger_list_item_link">Услуги</a></li>
      <li class="burger_list_item"><a href="./contacts.php" class="burger_list_item_link">Контакты</a></li>
      <li class="burger_list_item"><a href="./cart/shop.php" class="burger_list_item_link">Магазин</a></li>
      <li class="burger_list_item"><a href="./cart/viewCart.php" class="burger_list_item_link">Корзина</a></li>
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
                    <p class="header_info_link_text">900-99-99-09</p>
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
                        <a href="./index.php" class="nav_link  lng-main">
                            Главная
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="./about.php" class="nav_link lng-about">
                        О нас
                       </a>
                    </li>
                    <li class="nav_list_item navd">
                        <a href="./services.php" class="nav_link active lng-services">
                            Услуги &dtrif;
                        </a>
                        <ul class="dropdown">
                            <li class="dropdown_item"><a class="dropdown_item_link lng-dropdown1" href="./services-type-equipment.php">Услуги по виду оборудования</a></li>
                            <li class="dropdown_item"><a class="dropdown_item_link lng-dropdown2" href="./services-type-work.php">Услуги по виду работ</a></li>
                          </ul>
                    </li>
                    <li class="nav_list_item">
                        <a href="./contacts.php" class="nav_link  lng-contacts">
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
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="34px" viewBox="0 0 24 24" width="34px" fill="#FF9900"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?>)</a>
                    </li>
                </ul>
                <button class="nav_btn">
                    <a href="#feedback" class="nav_btn_link lng-contact">Связаться</a>
                </button>
            </div>
        </nav>
</header>


    <section class="section_head">
        <div class="section_head_content_services">
            <h1 class="section_head_content_header lng-head-services">Услуги</h1>
            <ul class="section_head_content_list">
                <li class="section_head_content_list_item">
                    <a href="./main.php" class="section_head_content_list_item_link lng-head-services-link">Главная</a>
                </li>
                <li class="section_head_content_list_item">
                    <p href="" class="section_head_content_list_item_text lng-head-services2">Услуги</p>
                </li>
                <li class="section_head_content_list_item">
                    <p href="" class="section_head_content_list_item_text lng-head-services4">Услуги по виду работ</p>
                </li>
            </ul>
        </div>
    </section>

    <aside class="category"> 
          <h4 class="category_heading lng-category-service_heading">Выбрать услугу</h4>
        <details class="category_details">
          <summary class="category_details_heading lng-services-aside_heading1">По виду работ</summary>
          <ul class="category_details_list">
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link1" href="./gasman-services.php">Услуги газовщика</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link2" href="./Gasification.php">Газификация дома</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link3" href="./Gas-stove-repair.php">Ремонт плиты</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link4" href="./Dismantling-gas-pipes.php">Демонтаж труб</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link5" href="./Gas-water-heater-service.php">Ремонт колонки</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link6" href="./Gas-stove-transfer.php">Перенос плиты</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link7" href="./Replacing-the-gas-boiler.php">Замена котла</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link8" href="./Installing-a-gas-meter.php">Установка счетчика</a>
            </li>
          </ul>
        </details>
        <details class="category_details">
          <summary class="category_details_heading lng-services-aside_heading2">По виду оборудования</summary>
          <ul class="category_details_list">
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link9" href="./Gas-water-heater-repair.php">Ремонт колонки</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link10" href="./Installing-gas-stove.php">Установка плиты</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link11" href="./Connecting-the-gas-hob.php">Варочная панель</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link12" href="./Installing-a-gas-meter.php">Установка счетчика</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-services-aside_link13" href="./Gas-boiler-connection.php">Подключение котла</a>
            </li>
            <li class="category_details_list_item">
                <a class="category_details_list_item_link lng-services-aside_link14" href="./Gas-pipe-replacement.php">Замена трубы</a>
              </li>
          </ul>
        </details>
      </aside>

    <section class="section-services">
        <div class="container">
            <div class="section-services_blog">
                <img class="section-services_blog_img" src="./img/logo_4.png" alt="">
                <h2 class="section-services_blog_heading-work lng-head-services5">Услуги по виду работ</h2>
                <ul class="row">
                <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./gasman-services.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/services-1-775x517.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading1" href="./gasman-services.php">Услуги Газовщика</a>
                            </h3>
                            <p class="section-services_blog_content_description lng-work-info1">Услуги газовщика могут быть различны, это замена газовой подводки и ...</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more" href="./gasman-services.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Gasification.php">
                            <img class="section-services_blog_card_link_img" src="./img/services page/gazificaciya-doma-430x287.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                                <h3 class="section-services_blog_content_heading-work">
                                    <a class="section-services_blog_content_heading-work_link lng-work-heading2" href="./Gasification.php">Газификация дома</a>
                                </h3>
                                <p class="section-services_blog_content_description lng-work-info2">Это прежде всего решение вопроса с отоплением и горячей водой в частном доме.</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more2" href="./Gasification.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Gas-stove-repair.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/23190-1024x685.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading3" href="./Gas-stove-repair.php">Ремонт газовой плиты</a>
                            </h3>
                            <p class="section-services_blog_content_description lng-work-info3">При заказе ремонта газовой плиты, дополнительные услуги оказываются по минимальным ценам.</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more3" href="./Gas-stove-repair.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Dismantling-gas-pipes.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/555-600x400.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading4" href="./Dismantling-gas-pipes.php">Демонтаж газовых труб</a>
                            </h3>
                            <p class="section-services_blog_content_description lng-work-info4">Специалисты нашей компании оказывают весь необходимый спектр услуг по газовым работам...</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more4" href="./Dismantling-gas-pipes.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Gas-water-heater-service.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/ustanovka-i-podklyuchenie-gazovoy-kolonki-1-300x261.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading5" href="./Gas-water-heater-service.php">Обслуживание газовой колонки</a>
                            </h3>
                            <p class="section-services_blog_content_description lng-work-info5">Наши специалисты профессионально и быстро проведут сервисное обслуживание ...</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more5" href="./Gas-water-heater-service.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Gas-stove-transfer.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/cropped-gazplita1.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading6" href="./Gas-stove-transfer.php">Перенос газовой плиты</a>
                            </h3>
                            <p class="section-services_blog_content_description  lng-work-info6">В ходе ремонта или перепланировки кухонного пространства часто требуется перенос газовой плиты...</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more6" href="./Gas-stove-transfer.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Replacing-the-gas-boiler.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/Zamena-gazovogo-kotla.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading7" href="./Replacing-the-gas-boiler.php">Замена газового котла</a>
                            </h3>
                            <p class="section-services_blog_content_description  lng-work-info7">Перед тем как проводить работы, получите грамотную консультацию нашего специалиста...</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more7" href="./Replacing-the-gas-boiler.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="col section-services_card">
                        <div class="section-services_blog_card">
                            <a class="section-services_blog_card_link" href="./Installing-a-gas-meter.php">
                                <img class="section-services_blog_card_link_img" src="./img/services page/gas-meter_cropped_web-1-600x291.jpg" alt="">
                            </a>
                            <article class="section-services_blog_content">
                            <h3 class="section-services_blog_content_heading-work">
                                <a class="section-services_blog_content_heading-work_link lng-work-heading8" href="./Installing-a-gas-meter.php">Установка газового счетчика</a>
                            </h3>
                            <p class="section-services_blog_content_description  lng-work-info8">Установка газового счетчика, поможет вам сократить коммунальные расходы и даст возможность грамотно ...</p>
                            </article>
                            <div class="section-services_blog_content_more">
                                <a class="section-services_blog_content_more_link-work lng-type-more8" href="./Installing-a-gas-meter.php">Подробнее</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
    </body>
    </html>