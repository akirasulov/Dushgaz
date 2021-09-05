<?php

require_once "connection.php";

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; 
		$select_stmt = $db->prepare('SELECT * FROM products WHERE id =:id'); 
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute(); 
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e)
	{
		$e->getMessage();
	}
	
}

if(isset($_REQUEST['btn_update']))
{
	
	$name	= $_REQUEST['txt_name'];	
	$description	= $_REQUEST['txt_description'];	
	$price	= $_REQUEST['number'];	
	$image	= $_REQUEST['image'];	
		
	if(empty($name)){
		$errorMsg="Please Enter Firstname";
	}
	else if(empty($description)){
		$errorMsg="Please Enter Lastname";
	}	
	else
	{
		try
		{
			if(!isset($errorMsg))
			{
				$update_stmt=$db->prepare('UPDATE tbl_person SET name=:fname, description=:ddescription, price=:pprice, image=:iimage, WHERE id=:id'); 
				$update_stmt->bindParam(':fname',$name);
				$update_stmt->bindParam(':ddescription',$description);	
				$update_stmt->bindParam(':pprice',$price);
				$update_stmt->bindParam(':iimage',$image);	
				$update_stmt->bindParam(':id',$id);
				 
				if($update_stmt->execute())
				{
					$updateMsg="Record Update Successfully.......";	
					header("refresh:3;index.php");	
				}
			}	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}	
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Изменить</title>
		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
		
</head>

	<body>
	
	
	
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>Не успешно ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($updateMsg)){
		?>
			<div class="alert alert-success">
				<strong>Успешно ! <?php echo $updateMsg; ?></strong>
			</div>
        <?php
		}
		?>   
			<center><h2>Изменить</h2></center>
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Имя</label>
				<div class="col-sm-6">
				<input type="text" name="txt_name" class="form-control" value="<?php echo $name; ?>">
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Описание</label>
				<div class="col-sm-6">
				<input type="text" name="txt_description" class="form-control" value="<?php echo $description; ?>">
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Цена</label>
				<div class="col-sm-6">
				<input type="number" name="number" class="form-control" value="<?php echo $price; ?>">
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Рисунок</label>
				<div class="col-sm-6">
				<input type="text" name="text" class="form-control" value="<?php echo $img; ?>">
				</div>
				</div>
						
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit" name="btn_update" class="btn btn-primary" value="Обновить">
				<a href="index.php" class="btn btn-danger">Отмена</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>