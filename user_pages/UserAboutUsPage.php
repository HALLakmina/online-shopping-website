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
		<title>User Home Page</title>

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
							<td ><a href ="UserHomePage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>" class="a01" >Home</a></td>
							<td><a href ="UserWomenPageSkirt.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01" >Women's</a></td>
							<td><a href ="UserMenT-ShirtPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Men's</a></td>
							<td><a href ="UserKidT-ShirtPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Kid's</a></td>
							<td><a href ="UserAboutUsPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01" style="font-size:30px;text-decoration: none;font-family:Calibri;color:red;">About Us</a></td>
							<td><a href="UserFeedBackPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01" >FeedBack</a></td>
							<td><a href="AdminLoginPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">Admin</a></td>
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
		<div style="margin-top:150px;">
			<h1 style="text-align:center;color:orange;font-family: Calibri;">ABOUT US</h1>
			<P style="text-align:center;  font-weight: bold; font-family: Calibri;font-size: 20px;">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro laboriosam labore sint, soluta ipsam odio rem ipsum consequatur deserunt facilis tenetur praesentium,<br>
				ducimus magni reiciendis quae illo, eum sequi laudantium quos quibusdam incidunt unde distinctio. Ducimus excepturi amet ab at tempore quas quasi soluta,<br> 
				iure itaque, modi, fugiat harum porro voluptas! Eius laborum officiis nam quam dolor rem facere nobis eos, id nulla, hic temporibus dicta in, recusandae<br>
				necessitatibus! Itaque dolores quidem est quam eligendi perferendis nemo numquam eveniet et temporibus,aut voluptatum veritatis officiis sed distinctio<br>
				ex, rerum ipsa eius illum error eum! Impedit nihil quasi aliquam beatae iusto!
			</P>
		</div>
		<footer style="position:fixed; width:100%; height:100px; bottom:0; background-color:rgba(0, 0, 0, 0.8);"><!--display:block; margin: 0;padding: 0; border:0;outline: 0; vertical-align: baseline;  margin-bottom:0; width: 100%; height:80px; background-color: red;-->
			<P style="font-family: Calibri;">
				E-Mail : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp onlineshopping@gmail.com<br>
				Mobile Number : &nbsp +94112257413<br>
				Address : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Galle road, Colombo 7, Sri Lanka<br>
			</P>
		</footer>

		
	</body>
</html>