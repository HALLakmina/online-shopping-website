<?php
	session_start();
	$db_name = "shopping";
	$connection = mysqli_connect("localhost","root","",$db_name);
?>
<!doctype html>
<html>
	<head>
		<title>Comen Women Blouse Page</title>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="../css_file/styleSheetOne.css">
		<link rel="stylesheet" href="../css_file/styleSheetProduct.css">

	</head>
	<body>
		<div class="headBox">
			<div class="row01">
				<div>
					<td><img src ="../web_side_image/clothing-store-logo-design-inspiration-vector-illustration_500223-477.webp" class= "img01"></td>
				</div>
				<div class="column01">
					<center><table class="headLink">
						<tr>
							<td><a href ="ComenHomePage.php"class="a01" >Home</a></td>
							<td><a href ="ComenWomenPageSkirt.php"class="a01" style="font-size:30px;text-decoration: none;font-family:Calibri;color:red;">Women's</a></td>
							<td><a href ="ComenMenT-ShirtPage.php"class="a01">Men's</a></td>
							<td><a href ="ComenKidT-ShirtPage.php"class="a01">Kid's</a></td>
							<td><a href ="ComenAboutUsPage.php"class="a01">About Us</a></td>
							<td><a href ="ComenFeedBackPage.php"class="a01">FeedBack</a></td>
							<td><a href ="ComenAdminLoginPage.php"class="a01">Admin</a></td>
						</tr>
					</table></center>
				</div>
				<div class="column02">
					<table class="headLine02">
						<tr>
							<td ><a href ="../user_pages/UserLoginPage.php" class="a02">Login/Register</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<div class="row05">
				<div class="column07">
					<center><table>
						<tr>
							<td ><a href ="ComenWomenPageSkirt.php" class="a01" >Skirt</a></td>
							<td><a href ="ComenWomenPageBlouse.php" style="font-size:30px;text-decoration: none;font-family:Calibri;color:red;font-weight:bold;">Blouse</a></td>
						</tr>
					</table></center>
				</div>
		</div>
		
		<div class="productBox">
        <?php
            $query01= "select* from selling_product where category_id = 01";
			$result01 = mysqli_query($connection,$query01);
            if(mysqli_num_rows ($result01)>0)
            {
                $query02= "select* from brand order by brand_id asc";
                $result02 = mysqli_query($connection,$query02);
                while($row = mysqli_fetch_array($result02))
                {?>

                    <img src="../brand_image/<?php echo $row["image"];?>" width="190px" height="100px">
                    <?php
                    $query03= "select* from selling_product where brand_id = $row[brand_id] order by product_id asc";
                    $result03 = mysqli_query($connection,$query03);

                    if(mysqli_num_rows($result03)>0)
                    {?>
                        <div class="row05">
                        <?php
                        while($row01 = mysqli_fetch_array($result03)){
                            ?>
                                <form method="post" action="gotoLogin.php" >
                                    <div class="column08">
                                        <img src="../selling_product_image/<?php echo $row01["image"];?>" width="170px" height="200px">
                                        <h5><?php echo $row01["product_name"];?></h5>
                                        <h5><?php echo $row01["prodct_price"];?></h5>
                                        <input type="hidden" name="image" value="<?php echo $row01["image"];?>">
                                        <input type="hidden" name="product_name" value="<?php echo $row01["product_name"];?>">
                                        <input type="hidden" name="price" value="<?php echo $row01["prodct_price"];?>">
                                        <input type="number" name="quantity" value="1">
										<input type="hidden" name="page_name" value="WomenPageUpdate01"><br>
                                        <center><input type="submit" name="add" value="add to cart"></center>
                                        
                                    </div>
                                </form>
                            <?php
                        }
                        ?>
                        </div>
                        <?php
			        }
                    
                }
            }
        ?>
	</body>
</html>