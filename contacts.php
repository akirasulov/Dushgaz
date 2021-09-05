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
    <link rel="stylesheet" href="./js/sticky.js">
    <link rel="shortcut icon" href="./img/flame.svg" type="image/svg">
    <title class="lng-title-contacts">О нас</title>
</head>
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
                            <a href="./contacts.php" class="nav_link active lng-contacts">
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

            <section class="section_head">
                <div class="section_head_content">
                    <h1 class="section_head_content_header lng-head-contacts">Контакты</h1>
                    <ul class="section_head_content_list">
                        <li class="section_head_content_list_item">
                            <a href="./index.php" class="section_head_content_list_item_link lng-head-main">Главная</a>
                        </li>
                        <li class="section_head_content_list_item">
                            <p href="" class="section_head_content_list_item_text lng-head-contacts2">Контакты</p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-contacts">
                <div class="container">
                    <p class="section-contacts_info lng-contacts-info">Заинтересованы в наших услугах или вам нужен совет? <br> Тогда свяжитесь с нами, и мы будем рады помочь.</p>
                    <ul class="row">
                        <li class="col-md section-contacts_item">
                           <div class="section-contacts_content">
                            <h2 class="section-contacts_content_header lng-contacts_content_header">Есть вопросы?</h2>
                            <p class="section-contacts_content_paragrapgh lng-contacts_content_paragrapgh">Мы будем рады ответить на вашы вопросы.</p>
                            <div class="section-contacts_content_first">
                                <img src="./img/contacts-help.svg" alt="" class="section-contacts_content_img">
                            <a href="#input-form" class="section-contacts_content_link lng-contacts_content_link">Написать</a>
                            </div>
                           </div>
                        </li>
                        <li class="col-md section-contacts_item">
                            <div class="section-contacts_content">
                                <h2 class="section-contacts_content_header lng-contacts_content_header2">Наш Офис</h2>
                            <p class="section- lng-contacts_content_paragrapgh2">г. Душанбе улица Асадулло Гулямова 30</p>
                            <div class="section-contacts_content_second">
                                <img src="./img/contacts-map.svg" alt="" class="section-contacts_content_img">
                                <a href="#map" class="section-contacts_content_link lng-contacts_content_link2">Посмотреть локацию</a>
                            </div>
                            </div>
                        </li>
                        <li class="col-md section-contacts_item">
                            <div class="section-contacts_content">
                                <h2 class="section-contacts_content_header lng-contacts_content_header3">Время работы</h2>
                            <p class="section-contacts_content_paragrapgh lng-contacts_content_paragrapgh3">Понедельник - Пятница: 10:00 - 21:00 Выходные: 11:00 - 19:00</p>
                            <div class="section-contacts_content_third">
                            <img src="./img/contacts-clock.svg" alt="" class="section-contacts_content_img">
                            <a  href="tel:+74995356434" class="section-contacts_content_link lng-contacts_content_link3">Позвонить</a>
                           </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-feedback">
                <div class="container">
                    <div class="section-feedback_contain">
                        <img src="./img/DFGegStUMAA8utA.jpg" alt="" class="bb">
                        <img src="./img/istockphoto-165807994-612x612.jpg" alt="" class="cc">
                        <form action="./mail/mail-main.php" method="POST" class="section-feedback_contain_form">
                            <ul class="section-feedback_contain_form_list">
                                <li class="section-feedback_contain_form_list_item">
                                    <h3 class="section-feedback_contain_form_heading lng-feedback_contain_form_heading1">Полное имя *</h3>
                                    <input id="input-form" name="user_name" type="text" placeholder="Akmal Rasulov" required class="section-feedback_contain_form_input"> 
                                </li>
                                <li class="section-feedback_contain_form_list_item">
                                    <h3 class="section-feedback_contain_form_heading">Email *</h3>
                                    <input type="text" name="user_email" placeholder="example@gmail.com" required class="section-feedback_contain_form_input">
                                </li>
                                <li class="section-feedback_contain_form_list_item">
                                    <h3 class="section-feedback_contain_form_heading lng-feedback_contain_form_heading2">Номер телефона</h3>
                                    <input type="text" name="user_phone" placeholder="+7 (921)-11-22-33" required class="section-feedback_contain_form_input">
                                </li>
                                <li class="section-feedback_contain_form_list_item">
                                    <h3 class="section-feedback_contain_form_heading lng-feedback_contain_form_heading3">В чем проблема?</h3>
                                    <select name="" id="" class="section-feedback_contain_form_select">
                                        <option class="lng-feedback_contain_form_option1" value="">Выбрать</option>
                                        <option class="lng-feedback_contain_form_option2" value="">Газовая плита</option>
                                        <option class="lng-feedback_contain_form_option3" value="">Газовая колoнка</option>
                                        <option class="lng-feedback_contain_form_option4" value="">Перенос оборудования</option>
                                        <option class="lng-feedback_contain_form_option5" value="">Перемонтаж</option>
                                        <option class="lng-feedback_contain_form_option6" value="">Другая</option>
                                    </select>
                                </li>
                                <li class="section-feedback_contain_form_list_item">
                                    <h3 class="section-feedback_contain_form_heading lng-feedback_contain_form_heading4">Чем мы можем вам помочь? *</h3>
                                    <textarea name="user_message" id="" cols="30" rows="10" placeholder="..." class="section-feedback_contain_form_textarea lng-aki"></textarea>
                                    <button type="submit" class="section-feedback_contain_form_list_item_btn lng-feedback_contain_form_list_item_btn">Отправить</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </section>

            <section class="section_faqs">
                <div class="container">
                  <h2 class="section_faqs_heading lng-faqs_heading">Часто задаваемые вопросы</h2>
                  <details class="section_faqs_details">
                    <summary class="section_faqs_details_summary lng-faq-summary1">При заказе газовщика, как быстро приезжает специалист?</summary>
                    <p class="section_faqs_details_summary_info lng-faq-info1">
                      При заказе услуг Вы сообщаете оператору удобную дату и время прихода специалиста. Отдел логистики с учетом Ваших пожеланий назначает газовщика.Мастер связывается с Вами в течении часа после оформления заявки и Вы договариваетесь о точном времени его прихода.
                    </p>
                   </details>
                   <details class="section_faqs_details">
                    <summary class="section_faqs_details_summary lng-faq-summary2">Сколько времени занимает замена газовой калонки?</summary>
                    <p class="section_faqs_details_summary_info lng-faq-info2">Замена газовой колонки занимает около 2-3 часов.</p>
                   </details>
                   <details class="section_faqs_details">
                    <summary class="section_faqs_details_summary lng-faq-summary3">Заметила запах газа при выклеченной плите. Что делать?
                    </summary>
                    <p class="section_faqs_details_summary_info lng-faq-info3">Наличие запаха газа свидетельствует о том, что где-то происходит его утечка. Как правило, наиболее опасными в этом отношении местами являются: краны на отводе от газового стояка к плите и на самой плите, резьбовые соединения, особенно места соединения гибких подводок (шлангов) к газовой трубе и к плите, сами гибкие подводки (гарантированный срок службы большинства гибких подводок составляет 5 лет). Место утечки газа может находиться и внутри плиты, в местах соединений трубок, распределяющих газ к горелкам. Редко, но все же бывает, что утечки происходят в результате повреждения сварных стыков, особенно в местах присоединения отвода к стояку. В случае обнаружения утечки газа или даже подозрения на утечку, необходимо обратиться в аварийную газовую службу.</p>
                   </details>
                   <details class="section_faqs_details">
                    <summary class="section_faqs_details_summary lng-faq-summary4">Можно ли заменить газовый счетчик, если квартира не приватизирована?</summary>
                    <p class="section_faqs_details_summary_info lng-faq-info4">Установка приборов учета потребленных коммунальных услуг является обязанностью собственника помещения. Так как Вы используете квартиру по договору социального найма, Вам необходимо обратиться с соответствующим заявлением о замене газового счетчика в ГКУ ЖА (Государственное казенное учреждение жилищное агентство). Так же если Вы не хотите дожидаться бесплатной замены Вы можете произвести работы за свой счет.</p>
                   </details>
                   <details class="section_faqs_details">
                    <summary class="section_faqs_details_summary lng-faq-summary5"></summary>
                    <p class="section_faqs_details_summary_info lng-faq-info5">При первичной установке, ремонте, замене или поверке счетчика газа опломбировка у поставщика бесплатная в Федеральным законом.             Обратите внимание, что на территории города Душанбе поставщиком газа является Газпром Межрегионгаз, а обслуживающей и аварийной службой ООО ДушГаз. Опломбировка в Газпром Межрегионгаз будет бесплатной, а в ООО ДушГаз ее можно произвести только на коммерческой основе.</p>
                   </details>
                </div>
              </section>
            

            <section class="section-map">
                <div id="map" style="width: 100%; height: 500px"></div>
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

            // var myGeoObject = new ymaps.getObjects({
            //     geometry: {
            //         type: "Point",
            //         coordinates: [[38.56377780466606,68.73935585544791],[38.571939807345316,68.7599552206823]],
            //     }
            // });

            var myPlacemark = new ymaps.Placemark([38.56789148300483,68.74957982188249], {}, {
                iconLayout: 'default#image',
                iconImageHref: '/img/placeholder.svg',
                iconImageSize: [30, 42],
                iconImageOffset: [-3, -42]
            });
            
            // myMap.getObjects.add(myGeoObject);
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
    </body>
    </html>