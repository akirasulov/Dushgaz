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
<meta charset="utf-8">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../css/shop.css">
<link rel="stylesheet" href="./css/cart.css">
<link rel="shortcut icon" href="../img/flame.svg" type="image/svg">
<title class="lng-title-checkout">Оформление</title>
</head>
<style>
    h1 {
        color: #fff;
    }
</style>
<body>
    <div class="payment_wrapper">
        <div class="container">
            <form method="post" class="payment_form" action="cartAction.php">
                <h1 class="payment_heading">
                    Информация о доставке
                </h1>
                <div class="payment_name">
                    <div class="payment_name_content">
                        <label class="payment_name_label" for="first_name">Имя</label>
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
                      <p class="item-name" style="font-size: 20px; color:#fff;"><?php echo $item["name"]; ?></p>
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
</html>