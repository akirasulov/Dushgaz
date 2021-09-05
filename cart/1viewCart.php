<?php 

include_once 'Cart.class.php'; 
$cart = new Cart; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>View Cart - PHP Shopping Cart</title>
<meta charset="utf-8">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../js/sticky.js">
    <link rel="stylesheet" href="../cart/css/cart">
    <link rel="stylesheet" href="../cart/css/cart.css">
    <script src="../js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
</head>
<body>
<div class="logo_container">
    <span class="logo_content">
      <a href="../index.php" class="header_logo">
      <img src="../img/flame.svg" alt="logo" class="logo_head">
      <div class="logo_right"> 
      <p class="logo_city_head lng-logo_city">Душанбинская</p>
        <p class="logo_title_head lng-logo_title">Газовая служба</p>
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
      <li class="burger_list_item"><a href="../index.php" class="burger_list_item_link">Главная</a></li>
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
      <a href="../index.php" class="header_logo">
      <img src="../img/flame.svg" alt="logo" class="logo">
      <div class="logo_right"> 
      <p class="logo_city lng-logo-city-mobile">Душанбинская </p>
      <p class="logo_title lng-logo-title-mobile">Газовая служба</p>
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
                        <a href="../index.php" class="nav_link  lng-main">
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
                            <li class="dropdown_item"><a class="dropdown_item_link lng-dropdown1" href="../services-type-equipment.php">Услуги по виду оборудования</a></li>
                            <li class="dropdown_item"><a class="dropdown_item_link lng-dropdown2" href="../services-type-work.php">Услуги по виду работ</a></li>
                          </ul>
                    </li>
                    <li class="nav_list_item">
                        <a href="../contacts.php" class="nav_link  lng-contacts">
                            Контакты
                        </a>
                    </li>
                    <li class="nav_list_item">
                        <a href="./shop.php" class="nav_link lng-shop">
                            Магазин
                        </a>
                    </li>
                    <li class="nav_list_item nav_cart">
                    <a class="nav_cart_link" href="./viewCart.php" title="View Cart">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="34px" viewbox="0 0 24 24" width="34px" fill="#FF9900"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg></a>
                    </li>
                </ul>
            
            </div>
        </nav>
</header>
<hr>
<div class="container">
    <div class="row">
        <div class="cart">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="lng-cart-product">Товар</th>
                                <th class="lng-cart-price">Цена</th>
                                <th class="lng-cart-quantity">Количество</th>
                                <th class="lng-cart-total">Промежуточный итог</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody style="width: 100xp;">
                            <?php 
                            if($cart->total_items() > 0){ 
                                
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
                            <tr>
                                <td style="padding-right: 10px;"><?php echo $item["name"]; ?></td>
                                <td><?php echo ''.$item["price"].''; ?><span class="somoni lng-somoni4"> сомони</span></td>
                                <td><input class="form-control" min="0" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td class="text-right"><?php echo ''.$item["subtotal"].''; ?><span class="somoni lng-somoni3"> сомони</span><a class="btn-remove" onclick="return confirm('Are you sure? ,Вы уверен?, Шумо мутмаъин ҳастед?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"/><img class="trash" src="../cart/images/remove-del.svg" alt=""></a></td>
                                
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5"><p class="lng-empty">Your cart is empty.....</p></td>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <ul class="row lower">
                        <li class="col-lg-2">
                            <p class="lower-name">
                                <strong class="lng-total_price_lower">Всего</strong>
                            </p>
                        </li>
                        <li class="col-lg-2">
                            <p class="lower-total"><strong><?php echo ''.$cart->total().''; ?></strong><span class="somoni lng-somoni6"> сомони</span></p>
                        </li>
                    </ul>
                    
                </div>
            </div>
            <div class="col mb-2 low">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="./shop.php" class="btn btn-block btn-light lng-cart-cont"><img class="left-arrow" src="../cart/images/arrow.svg" alt=""> Продолжить покупки</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-lg btn-block btn-primary lng-cart-check">Оформить заказ
                            <img class="right-arrow" src="../cart/images/right-arrow.svg" alt="">
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/lang.js"></script>
<script src="../js/app.js"></script>
</body>
</html>