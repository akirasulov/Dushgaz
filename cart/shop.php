<?php 

include_once 'Cart.class.php'; 
$cart = new Cart; 

require_once 'dbConfig.php'; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="shortcut icon" href="../img/flame.svg" type="image/svg">
    <title class="lng-title-shop">Магазин</title>
</head>
<body>
  <div class="logo_container">
        <span class="logo_content">
          <a href="../index.php" class="header_logo">
          <img src="../img/flame.svg" alt="Логотип" class="logo_head">
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
          <li class="burger_list_item"><a href="../covid.php" class="burger_list_item_link">Covid-19</a></li>
          <li class="burger_list_item"><a href="../index.php" class="burger_list_item_link lng-main-mobile">Главная</a></li>
          <li class="burger_list_item"><a href="../about.php" class="burger_list_item_link lng-about-mobile">О нас</a></li>
          <li class="burger_list_item"><a href="../services.php" class="burger_list_item_link lng-services-mobile">Услуги</a></li>
          <li class="burger_list_item"><a href="../contacts.php" class="burger_list_item_link lng-contacts-mobile">Контакты</a></li>
          <li class="burger_list_item"><a href="./shop.php" class="burger_list_item_link lng-shop-mobile">Магазин</a></li>
          <li class="burger_list_item"><a href="./viewCart.php" class="burger_list_item_link lng-cart-mobile">Корзина</a></li>
      </ul>
  </div>
</div>
</div>
    </nav>
    <header class="header">
        <div class="header_top">
            <div class="container">
            <span class="logo_content">
          <a href="../index.php" class="header_logo">
          <img src="../img/flame.svg" alt="logo" class="logo">
          <div class="logo_right"> 
          <p class="logo_city lng-logo-city">Душанбинская </p>
          <p class="logo_title lng-logo-title">Газовая служба</p>
          </div>
          </a>
        </span>
                <span class="header_info">
                    <img src="../img/clock-circular-outline.svg" alt="" class="header_info_img">
                    <a href="tel:+79992055981" class="header_info_link">
                        <p class="header_info_link_text lng-work-time">Часы работы</p>
                        <p class="header_info_link_text lng-work-time-description">Будни: 10:00 - 21:00<br> Выходные: 11:00 - 19:00</p>
                    </a>
                    <img src="../img/phone-call.svg" alt="" class="header_info_img">
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
                            <a href="../covid.php" class="nav_link">
                                <b>COVID-19</b>
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="../index.php" class="nav_link lng-main">
                                Главная
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="../about.php" class="nav_link lng-about">
                            О нас
                           </a>
                        </li>
                        <li class="nav_list_item navd">
                            <a href="../services.php" class="nav_link lng-services">
                                Услуги &dtrif;
                            </a>
                            <ul class="dropdown">
                                <li class="dropdown_item"><a class="dropdown_item_link" href="../services-type-equipment.php">Услуги по виду оборудования</a></li>
                                <li class="dropdown_item"><a class="dropdown_item_link" href="../services-type-work.php">Услуги по виду работ</a></li>
                              </ul>
                        </li>
                        <li class="nav_list_item">
                            <a href="../contacts.php" class="nav_link lng-contacts">
                                Контакты
                            </a>
                        </li>
                        <li class="nav_list_item">
                            <a href="./shop.php" class="nav_link active lng-shop">
                                Магазин
                            </a>
                        </li>
                        <li class="nav_list_item nav_cart">
                        <a class="nav_cart_link" href="./viewCart.php" title="View Cart">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="34px" viewBox="0 0 24 24" width="34px" fill="#FF9900"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?>)</a>
                        </li>
                    </ul>
                    <button class="nav_btn">
                        <a href="#feedback" class="nav_btn_link lng-contact">Связаться</a>
                    </button>
                </div>
            </nav>
    </header>
     
      <aside class="category"> 
          <h4 class="category_heading lng-category_heading">Выбрать категорию</h4>
        <details class="category_details">
          <summary class="category_details_heading lng-details_heading1">Запчасти к колонкам</summary>
          <ul class="category_details_list">
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link1" href="#block-upr">Блоки управления</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link2" href="">Водяные узлы</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link3" href="">Мембраны</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link4" href="">Микровыключатели</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link5" href="">Теплообменники</a>
            </li>
          </ul>
        </details>
        <details class="category_details">
          <summary class="category_details_heading lng-details_heading2">Газовые колонки</summary>
          <ul class="category_details_list">
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link6" href="">Колонки BOSCH</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link7" href="">Колонки NEVA</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link8" href="">Колонки WERT</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link9" href="">Колонки OASIS</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link10" href="">Колонки VECTOR</a>
            </li>
          </ul>
        </details>
        <details class="category_details">
          <summary class="category_details_heading lng-details_heading3">Газовые котлы</summary>
          <ul class="category_details_list">
            
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link11" href="">Котлы BOSCH</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link12" href="">Котлы NEVA</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link13" href="">Котлы WERT</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link14" href="">Котлы OASIS</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link15" href="">Котлы VECTOR</a>
            </li>
          </ul>
        </details>
        <details class="category_details">
          <summary class="category_details_heading lng-details_heading4">Газовые краны</summary>
          <ul class="category_details_list">
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link16" href="">Газовые краны</a>
            </li>
          </ul>
        </details>
        <details class="category_details">
          <summary class="category_details_heading lng-details_heading5">Газовая подводка</summary>
          <ul class="category_details_list">
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link17" href="">Сильфонная подводка</a>
            </li>
            <li class="category_details_list_item">
              <a class="category_details_list_item_link lng-list_item_link18" href="">Резиновая подводка</a>
            </li>
          </ul>
        </details>
      </aside>
  
      <section class="section-cards">
        <div class="container">
          <ul class="row list">
          <?php 
        $result = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 200"); 
        if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
            <li class="col">
              <div class="wrapper">
                <div class="container">
                <div class="top"><a href="#"><img style="width: 100%; height:100%;" class="top_img" src="images/<?php echo $row['image']; ?>"></a></div>
                  <div class="bottom">
                    <div class="left">
                      <div class="details">
                        <h1><?php echo $row["name"]; ?></h1>
                        <p><?php echo ''.$row["price"].''; ?> сомони</p>
                      </div>
                      <div class="buy">
                        <a href="./cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">
                        <img class="material-icons"  src="../img/shopping_cart_black_24dp.svg" alt="">
                      </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inside">
                  <div class="icon"><img class="material-icons" src="../img/info.svg" alt=""></div>
                  <div class="contents"><?php echo $row["description"]; ?>
                  </div>
                </div>
              </div>
            </li>
            <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
        <button id="loadmore">Больше товаров...</button>
          </ul>
         
        </div>
    </section> 
    <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                        <a href="../index.php" class="header_logo">
                      <img src="../img/flame.svg" alt="logo" class="footer_logo">
                      <div class="logo_right"> 
                      <h2 class="logo_city lng-city_footer">Душанбинская </h2>
                      <h2 class="logo_title lng-title_footer">Газовая служба</h2>
                      </div>
                      <hr>
                      </a>
                            <div class="footer_row">
                                    <ul class="footer_row_list">
                                        <li class="footer_item"><a href="../covid.php" class="footer_link">
                                            Covid-19
                                        </a></li>
                                        <li class="footer_item"><a href="../index.php" class="footer_link lng-main_footer">
                                            Главная
                                        </a></li>
                                        <li class="footer_item"><a href="../about.php" class="footer_link lng-about_footer">
                                            О нас
                                        </a></li>
                                    </ul>
                                <ul class="footer_row_list">
                                        <li class=""> <a href="../services.php" class="footer_link lng-services_footer">
                                            Услуги
                                        </a></li>
                                        <li class=""> <a href="../contacts.php" class="footer_link lng-contacts_footer">
                                            Контакты
                                        </a></li>
                                        <li class=""> <a href="../cart/shop.php" class="footer_link lng-shop_footer">
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
                                <img src="../img/tel.svg" alt="" class="footer_rigth_img">
                                <a href="tel:+74995356434" class="footer_link">
                                  +992 901-43-94-94
                                </a>
                              </li>
                              <li class="footer_item">
                                <img src="../img/email.svg" alt="" class="footer_rigth_img">
                                <a href="mailto:dushgaz@gmail.com" class="footer_link">          
                                    dushgaz@gmail.com
                                </a>
                            </li>
                                <li class="footer_item">
                                    <img src="../img/pin.svg" alt="" class="footer_rigth_img">
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
      
        window.onscroll = function() {myFunction()};
        
     
        var header = document.getElementById("myHeader");
        
    
        var sticky = header.offsetTop;
       
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
    <script src="../js/lang.js"></script>
    <script src="../js/app.js"></script>
    </body>
    </html>

    