<?php 

include_once 'Cart.class.php'; 
$cart = new Cart; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="./css/cart.css">
    <script src="../js/jquery.min.js"></script>
    <link rel="shortcut icon" href="../img/flame.svg" type="image/svg">
    <title class="lng-title-cart">Корзина</title>
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
<script>

var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;



$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});



function recalculateCart()
{
  var subtotal = 0;
  

  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  

  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  

  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}



function updateQuantity(quantityInput)
{

  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
 
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}



function removeItem(removeButton)
{

  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}
</script>
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
                            <a href="./shop.php" class="nav_link lng-shop">
                                Магазин
                            </a>
                        </li>
                        <li class="nav_list_item nav_cart">
                        <a class="nav_cart_link" href="./viewCart.php" title="View Cart">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="34px" viewbox="0 0 24 24" width="34px" fill="#FF9900"><g><rect fill="none" height="24" width="24"/><path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M18,20H6V8h2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8h4v2c0,0.55,0.45,1,1,1s1-0.45,1-1V8 h2V20z"/></g></svg>(<?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?>)</a>
                        </li>
                    </ul>
                    <button class="nav_btn">
                        <a href="#feedback" class="nav_btn_link lng-contact">Связаться</a>
                    </button>
                </div>
            </nav>
    </header>
<hr>

<section>
  <div class="container">
  <div class="wrap cf">
  <div class="heading cf">
    <h1 class="">Корзина</h1>
    <a href="./shop.php" class="continue lng-cart-cont">Продолжить покупки</a>
  </div>
  <div class="cart">
    <ul class="cartWrap row">
      <li class="items odd col-12">
      <?php 
                            if($cart->total_items() > 0){ 
                            
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
    <div class="infoWrap">
        <div class="cartSection">
          <p class="itemNumber"></p>
          <h3><?php echo $item["name"]; ?></h3>
          <input class="qty" min="0" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/>
          <p><?php echo ''.$item["price"].''; ?></p>
           <span class="somoni lng-somoni4"> сомони</span>
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p><?php echo ''.$item["subtotal"].''; ?><span class="somoni lng-somoni3"> сомони</span></p>
        </div>
              <div class="cartSection removeWrap">
           <a href="#" class="remove" onclick="return confirm('Are you sure? ,Вы уверен?, Шумо мутмаъин ҳастед?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"/>x</a>
        </div>
      </div>
      <?php } }else{ ?>
                            <p class="lng-empty">Your cart is empty.....</p>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                            <?php } ?>
      </li>
    </ul>
  </div>

  
  <div class="subtotal cf">
    <ul>
            <li class="totalRow final">
              <span class="label lng-total_price_lower">Всего</span>
              <span class="value"><?php echo ''.$cart->total().''; ?>
              <span class="lng-somoni6">сомони</span>
            </span>
            </li>
      <li class="totalRow"><a href="checkout.php" class="btn continue lng-cart-check">Оформить заказ</a></li>
    </ul>
  </div>
</div>
    </div>
</section>
<script src="../js/lang.js"></script>
<script src="../js/app.js"></script>
</body>
</html>