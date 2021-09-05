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
    <title class="lng-services-aside_link6-6">Демонтаж Газовых Труб</title>
</head>
<body>
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
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="34px" viewBox="0 0 24 24" width="34px" fill="#FF9900"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?>)</a>
                    </li>
                </ul>
                <button class="nav_btn">
                    <a href="#feedback" class="nav_btn_link lng-contact">Связаться</a>
                </button>
            </div>
        </nav>
</header>
<hr>

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

    <section class="service_description"> 
    <div class="container">
      <ul class="row">
        <li class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="service_description_header lng-description_header6">Перенос газовой плиты</h2>
          </li>
        <li class="col-md-6 col-sm-6 col-xs-12">
          <div class="service_description_content">
            <img class="service_description_content_img" src="./img/services page/cropped-gazplita1.jpg" alt="">
            </div>
          </li>
        <li class="col-md-6 col-sm-6 col-xs-12">
        <div class="service_description_content">
              <h4 class="service_description_content_heading lng-description_content_heading6">Описание услуги перенос газовой плиты</h4>
              <p class="service_description_content_info lng-description_content_info6">
              В ходе ремонта или перепланировки кухонного пространства часто требуется перенос газовой плиты. Газовое оборудование является источником повышенной опасности, и любые изменения в размещении газового оборудования производятся с привлечением специалистов газовой службы. 
              <br>Служба имеет в своем штате аттестованных газовщиков, осуществляющих быстро и качественно перенос газовой плиты и другого газового оборудования в квартире или частном доме.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

   
    <section class="section-favor">
        <div class="container">
            <ul class="row">
            <li class="col-lg-4 section-favor_container">
                <div class="section-favor_bordery">
                  <div class="section-favor_bordery_top"><b class="lng-service-card-heading19">Перенос газовой плиты по Душанбе</b>
                    <p class="section-favor_features lng-service-card-descr19">В стоимость входит Вызов, диагностика, услуги по установке. Мастер осуществляет установку/переустановку плиты, без перемонтажа газовых труб. Цена за услугу указана по Душанбе.</p>
                  </div>
                    <div class="section-favor_bordery_direction">
                    <p class="section-favor_bordery_price">180</p><p class="somoni lng-somoni"> сомони</p>
                    <button class="section-favor_bordery_btn">
                    <a class="section-favor_bordery_btn_link lng-type-more2" namespace="lnk" href="#feedback">Подронее</a>
                    </button>
                    </div>
                </div>
              </li>
              <li class="col-lg-4 section-favor_container">
                <div class="section-favor_bordery">
                  <div class="section-favor_bordery_top">
                  <b class="lng-service-card-heading20">Перенос газовой плиты по пригороду</b>
                    <p class="section-favor_features lng-service-card-descr20">В стоимость входит Вызов, диагностика, услуги по установке. Мастер осуществляет установку/переустановку плиты, без перемонтажа газовых труб. Цена за услугу указана по пригороду.</p>
                  </div>
                    <div class="section-favor_bordery_direction">
                    <p class="section-favor_bordery_price">+50</p><p class="somoni lng-somoni2"> сомони</p>
                    <button class="section-favor_bordery_btn">
                    <a class="section-favor_bordery_btn_link lng-type-more3" namespace="lnk" href="#feedback">Подронее</a>
                    </button>
                    </div>
                </div>
              </li>
              </ul>
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
        <script>
      $(document).ready(function(){
   $('#lnk').click(function(e) {
       e.preventDefault();

       $("#toform").focus(); 
   });
});
        </script>

    <script src="./js/lang.js"></script>
    <script src="./js/app.js"></script>
    </body>
    </html>