<?php 
	session_start();
	$db_name = "shopping";
	$connection = mysqli_connect("localhost","root","",$db_name);

	$user_name=$_GET['user_name'];
	$user_id= $_GET['user_id'];
?>
<!doctype html>
<html>
	<head>
		<title>Comen Home Page</title>

		<meta charset="UTF-8">
		<meta http="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=divice-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="../css_file/styleSheetOne.css">

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
							<td><a href ="UserHomePage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>" class="a01" style="font-size:30px;text-decoration: none;font-family:Calibri;color:red;">Home</a></td>
							<td><a href ="UserWomenPageSkirt.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Women's</a></td>
							<td><a href ="UserMenT-ShirtPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Men's</a></td>
							<td><a href ="UserKidT-ShirtPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Kid's</a></td>
							<td><a href ="UserAboutUsPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">About Us</a></td>
							<td><a href ="UserFeedBackPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">FeedBack</a></td>
							<td><a href ="AdminLoginPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Admin</a></td>
						</tr>
					</table></center>
				</div>
				<div class="column02">
					<table class="headLine02">
						<tr>
							
							<td style="text-decoration: none;font-family:Calibri;color:white;width:50%;padding:10px;background:rgb(0, 166, 255);box-sizing:border-box;border-radius:10px;"><?php echo $user_name?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		
		<div class="row02">
			<div class="column03" >
				<p class="line" style="font-size:55px;margin-left: 30px;">Women's Fashion</p><p style="font-size:30px;color:rgb(0, 0, 0);font-family: Calibri;margin-left: 30px;">A huge fashion collection for ever</p><p><a href="UserWomenPageSkirt.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>" class="a03" style="margin-left: 30px;">SHOP NOW</a></p>
			</div>
			<div class="column04">
				<div class="row03">
					<div class="column05" class="text01">
						<p class="line" style="margin-left: 30px;">Men's Fashion</p><p><a href="UserMenT-ShirtPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>" class="a03" style="margin-left: 30px;">SHOP NOW</a></p>
					</div>
				</div>
				<div class="row031">
					<div class="column06">
						<p class="line" style="margin-left: 30px;">Kid's Fashion<br></p><p><a href="UserKidT-ShirtPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>" class="a03" style="margin-left: 30px;">SHOP NOW</a></p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>