<?php 
if(!isset($_REQUEST['id'])){ 
    header("Location: shop.php"); 
} 
 
// Include the database config file 
require_once 'dbConfig.php'; 
 
// Fetch order details from database 
$result = $db->query("SELECT r.*, c.first_name, c.last_name, c.email, c.phone FROM orders as r LEFT JOIN customers as c ON c.id = r.customer_id WHERE r.id = ".$_REQUEST['id']); 
 
if($result->num_rows > 0){ 
    $orderInfo = $result->fetch_assoc(); 
}else{ 
    header("Location: shop.php"); 
} 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../css/index.css">
</head>
<link rel="shortcut icon" href="../img/flame.svg" type="image/svg">
<title class="lng-title-status">Сатус</title>
<body>
    
<div class="container">
    <h1 class="success_heading">СТАТУС ЗАКАЗА</h1>
    <div class="success_content">
        <?php if(!empty($orderInfo)){ ?>
                <h2 class="success_content_info">Ваш заказ был успешно обработан.</h2>
         
            <div class="success_table">
                <h3 class="success_table_info">Информация о заказе</h3>
                <p class="success_table_description"><b>ID Заказа:</b> #<?php echo $orderInfo['id']; ?></p>
                <p class="success_table_description"><b>Всего:</b> <?php echo ''.$orderInfo['grand_total'].' сомони'; ?></p>
                <p class="success_table_description"><b>Время Заказа:</b> <?php echo $orderInfo['created']; ?></p>
                <p class="success_table_description"><b>Покупатель:</b> <?php echo $orderInfo['first_name'].' '.$orderInfo['last_name']; ?></p>
                <p class="success_table_description"><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
                <p class="success_table_description"><b>Телефон:</b> <?php echo $orderInfo['phone']; ?></p>
            </div>
			
           
            <div class="">
                <table class="success_table">
                    <thead>
                        <tr>
                            <th>Товар</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Всего</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                       
                        $result = $db->query("SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id WHERE i.order_id = ".$orderInfo['id']); 
                        if($result->num_rows > 0){  
                            while($item = $result->fetch_assoc()){ 
                                $price = $item["price"]; 
                                $quantity = $item["quantity"]; 
                                $sub_total = ($price*$quantity); 
                        ?>
                        <tr>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo '&nbsp;'.$price.' сомони'; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo '&nbsp;'.$sub_total.' сомони'; ?></td>
                        </tr>
                        <?php } 
                        } ?>
                    </tbody>
                </table>
            </div>
        <?php } else{ ?>
        <div class="col-md-12">
            <div class="alert alert-danger">Your order submission failed.</div>
        </div>
        <?php } ?>
    </div>
    <div>
    <img class="success_img" src="../img/checked.png" alt="">
</div>
<h3 class="success_alert">Мы получили ваш запрос на покупку, ператор свяжется с вами в ближайшее время!</h3>
<button class="payment_buttons_btn btn_success">
<a href="shop.php" class="btn_success_link">Назад в корзину</a>
 </button>
</div>
</body>
</html>