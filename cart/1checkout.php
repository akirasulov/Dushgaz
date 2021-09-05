<?php 

require_once 'dbConfig.php'; 
 

include_once 'Cart.class.php'; 
$cart = new Cart; 
 

if($cart->total_items() <= 0){ 
    header("Location: shop.php"); 
} 
 

$postData = !empty($_SESSION['postData'])?$_SESSION['postData']:array(); 
unset($_SESSION['postData']); 
 

$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
if(!empty($sessData['status']['msg'])){ 
    $statusMsg = $sessData['status']['msg']; 
    $statusMsgType = $sessData['status']['type']; 
    unset($_SESSION['sessData']['status']); 
} 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<title>Checkout - PHP Shopping Cart Tutorial</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../css/index.css">

<link rel="stylesheet" href="../css/normalize.css">

</head>
<body>
<header class="header">
  <div class="logo_container">
          <span class="logo_content">
            <a href="#" class="header_logo">
            <img src="../img/flame.svg" alt="logo" class="logo">
            <div class="logo_right"> 
            <p class="logo_city lng-logo_city">Душанбинская </p>
              <p class="logo_title lng-logo_title">Газовая служба</p>
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
            <li class="burger_list_item"><a href="../main.php" class="burger_list_item_link">Главная</a></li>
            <li class="burger_list_item"><a href="../about.php" class="burger_list_item_link">О нас</a></li>
            <li class="burger_list_item"><a href="../services.php" class="burger_list_item_link">Услуги</a></li>
            <li class="burger_list_item"><a href="../contacts.php" class="burger_list_item_link">Контакты</a></li>
            <li class="burger_list_item"><a href="./shop.php" class="burger_list_item_link">Магазин</a></li>
            <li class="burger_list_item"><a href="./viewCart.php" class="burger_list_item_link">Корзина</a></li>
        </ul>
    </div>
  </div>
  </div>
      </nav>
  
      <header class="header">
          <div class="header_top">
              <div class="container">
              <span class="logo_content">
            <a href="#" class="header_logo">
            <img src="../img/flame.svg" alt="logo" class="logo">
            <div class="logo_right"> 
              <p class="logo_city lng-logo-city-mobile">Душанбинская </p>
              <p class="logo_title lng-logo-title-mobile">Газовая служба</p>
            </div>
            </a>
          </span>
                  <span class="header_info">
                      <img src="../img/clock-circular-outline.svg" alt="" class="header_info_img">
                      <a href="" class="header_info_link">
                          <p class="header_info_link_text lng-work-time">Часы работы</p>
                          <p class="header_info_link_text lng-work-time-description">Будни: 10:00 - 21:00<br> Выходные: 11:00 - 19:00</p>
                      </a>
                      <img src="../img/phone-call.svg" alt="" class="header_info_img">
                      <a href="" class="header_info_link">
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

    <div class="payment_wrapper">
        <div class="container">
            <form method="post" class="payment_form" action="cartAction.php">
                <h1 class="payment_heading">
                    Информация о доставке
                </h1>
                <div class="payment_name">
                    <div class="payment_name_content">
                        <label class="payment_name_label" for="first_name" lc>Имя</label>
                        <input type="text" class="payment_name_input" name="first_name" value="<?php echo !empty($postData['first_name'])?$postData['first_name']:''; ?>" required>
                    </div>
                    <div class="payment_name_content">
                        <label class="payment_name_label" for="last_name">Фамилия</label>
                        <input type="text"class="payment_name_input" name="last_name" value="<?php echo !empty($postData['last_name'])?$postData['last_name']:''; ?>" required>
                    </div>
                </div>
                <div class="payment_address-info">
                    <div class="payment_address-info_content">
                        <label class="payment_name_label" for="email">Email</label>
                        <input type="email" class="payment_name_input" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                    </div>
                    <div class="payment_address-info_content">
                        <label class="payment_name_label" for="phone">Телефон</label>
                        <input type="text" class="payment_name_input" name="phone" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>" required>
                    </div>
                    <div class="payment_address">
                    <label class="payment_name_label" for="last_name">Адрес</label>
                    <input type="text" class="payment_name_input" name="address" value="<?php echo !empty($postData['address'])?$postData['address']:''; ?>" required>
                </div>
                  
                </div>

                <div class="payment-form dark inline">
        <div class="products">
          <span class="title">Ваши покупки:</span>
          <span class="title"><?php echo $cart->total_items(); ?></span>
            <div>
            <div class="">
            <?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
            <div class="">
            <div class="alert alert-success"><?php echo $statusMsg; ?></div>
            </div>
            <?php }elseif(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
            <div class="">
            <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
            </div>
             <?php } ?>
             </div>
             <ul class="item">
             <?php 
             if($cart->total_items() > 0){ 
                 
                  $cartItems = $cart->contents(); 
                  foreach($cartItems as $item){ 
                      ?>
                      <li class="">
                      <div>
                      <p class="item-name" style="font-size: 20px;"><?php echo $item["name"]; ?></p>
                      <p style="font-size: 20px;" class="price"><?php echo '&nbsp;'.$item["price"]; ?>(<?php echo $item["qty"]; ?>) сомони</p>
                      </div>
                      <span class="item-description" style="font-size: 14px;"><?php echo '&nbsp;'.$item["subtotal"]; ?> сомони</span>
                      </li>
                      <?php } } ?>                                        
                      <li class="total_item">
                      <p class="total">Всего</p>
                      <strong class="price" style="font-size: 26px; color: #adddec;"><?php echo '&nbsp;'.$cart->total(); ?> сомони</strong>
                      </li>
                      </ul>
                      </div>
                    </div>

                



                <div class="payment">
                <h1 class="payment_heading">
                  Кредитная Карта
                </h1>
                <div class="payment_num">
                    <label class="payment_name_label">Номер кредитной карты</label>
                    <input class="payment_name_input" type="text" name="card-num">
                </div>
                <div class="payment-info">
                    <div class="payment-info_content">
                        <label class="payment_name_label" for="card-num">ФИО</label>
                        <input class="payment_name_input" type="text" name="expire">
                    </div>
                    <div class="payment-info_content">
                        <label class="payment_name_label" for="card-num">CCV</label>
                        <input class="payment_name_input" type="text" name="security">
                    </div>
                </div>
                <div class="payment_buttons">
                    <button class="payment_buttons_btn btn_left">
                    <a href="shop.php" class="payment_buttons_btn_link">Назад в корзину</a>
                    </button>
                    <button class="payment_buttons_btn btn_right">
                    <input type="hidden" name="action" value="placeOrder"/>
                    <input class="payment_buttons_btn btn_right" type="submit" size="16px" name="checkoutSubmit" placeholder="Заказать" target="_blank">
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>

    
    

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>