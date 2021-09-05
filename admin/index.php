<?php
require_once "connection.php";
if(isset($_REQUEST['delete_id']))
{

$id=$_REQUEST['delete_id'];	
$select_stmt= $db->prepare('SELECT * FROM products WHERE id =:id');	
$select_stmt->bindParam(':id',$id);
$select_stmt->execute();
$row=$select_stmt->fetch(PDO::FETCH_ASSOC);

$delete_stmt = $db->prepare('DELETE FROM products WHERE id =:id');
$delete_stmt->bindParam(':id',$id);
$delete_stmt->execute();	
header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<link rel="shortcut icon" href="../img/flame.svg" type="image/svg">
<title class="">Админ панеь</title>
		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
		
</head>

	<body>
	
	
	
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h3><a href="add.php"><span class="glyphicon glyphicon-plus"></span>&nbsp; Добавить</a></h3>
                        </div>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                        <th>Имя</th>
											<th>Описание</th>
                                            <th>Цена</th>
											<th>Рисунок</th>
                                            <th>Изменить</th>
                                            <th>Удалить</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$select_stmt=$db->prepare("SELECT * FROM products");
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
											<td><?php echo $row['description']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
											<td><?php echo $row['image']; ?></td>
                                            <td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Изменить</a></td>
                                            <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Вы уверен?')">Удалить</a></td>
                                        </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                    </div>
                   
                </div>
				
		</div>
		
	</div>
			
	</div>
									
	</body>
</html>