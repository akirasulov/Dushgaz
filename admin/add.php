<?php

require_once "connection.php";

if(isset($_REQUEST['btn_insert']))
{

	$name	= $_REQUEST['txt_name'];	
	$description	= $_REQUEST['txt_description'];	
	$price	= $_REQUEST['number'];	
	$img	= $_REQUEST['image'];	
		
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
				$insert_stmt=$db->prepare('INSERT INTO products(name,description,price,image) VALUES(:fname,:ddescription,:pprice,:iimage)'); 				
				$insert_stmt->bindParam(':fname',$name);
				$insert_stmt->bindParam(':lname',$description);   
				$insert_stmt->bindParam(':pprice',$price);
				$insert_stmt->bindParam(':iimage',$image);  
					
				if($insert_stmt->execute())
				{
					$insertMsg="Insert Successfully........"; 
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
<title>Добавить</title>
		
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
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>Успешно ! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?>   
			<center><h2>Добавить</h2></center>
			<form method="post" class="form-horizontal">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Имя</label>
				<div class="col-sm-6">
				<input type="text" name="txt_name" class="form-control" placeholder="Имя" />
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Описание</label>
				<div class="col-sm-6">
				<input type="text" name="txt_description" class="form-control" placeholder="Описание" />
				</div>
				</div>
						
				<div class="form-group">
				<label class="col-sm-3 control-label">Цена</label>
				<div class="col-sm-6">
				<input type="number" name="number" class="form-control" placeholder="Цена" />
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Рисунок</label>
				<div class="col-sm-6">
				<input type="text" name="text" class="form-control" placeholder="Рисунок" />
				</div>
				</div>
			
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_insert" class="btn btn-success " value="Обновить">
				<a href="index.php" class="btn btn-danger">Отмена</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>