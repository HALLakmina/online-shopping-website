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
		<title>User Feedback Page</title>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../css_file/feedbackSheet.css">

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
							<td><a href ="UserAboutUsPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01">About Us</a></td>
							<td><a href="UserFeedBackPage.php?user_name=<?php echo $user_name?>&user_id=<?php echo $user_id?>"class="a01" style="font-size:30px;text-decoration: none;font-family:Calibri;color:red;">FeedBack</a></td>
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



		<form method="POST" action="feedback_connect.php" style="margin-top:150px;">
			<center><table style="font-family:Calibri;padding:20px; border-radius: 10px; background-color:rgba(255, 255, 255);box-sizing:border-box;box-shadow:-10px -10px 25px gray,10px 10px 25px black;"cellspacing="10" width="300px" height="500px">
				
				<tr>
					<th><center><h2 style="color:black;">FEEDBACK</h2></center></th>
				</tr>
				<tr>
					<th><input type="text" placeholder="Name" class="details" id="back" name="name"></th>
				</tr>
				<tr border="20px">
					<th ><input type="email" placeholder="Email"  class="details" id="back" name="email"></th>
				</tr>
				<tr border="20px">
					<th ><input type="text" placeholder="Subject" class="details" id="back" name="subject"></th>
				</tr>
				<tr border="20px">
					<th ><TEXTAREA ROWS="5" COLS="20" PLACEHOLDER="Feedback" class="details" id="back" name="feedback"></TEXTAREA></th>
				</tr>
				<tr>
					<th COLSPAN="2"><input class="updateButton" type="submit" value="Submit"></th>
				</tr>
			</table></center><br><br><br>
			</form>
			<p style="font-size:30px;font-weight:bold;font-family:Calibri;text-align:center;">
				SHOW FEEDBACK
			</p> <br><br><br>
		
		<?php
		require_once('connection.php');
		
		
		$q= "select * from booking";
		
		$r = @mysqli_query($con,$q);
		
		$num = mysqli_num_rows($r);
		
		
		if($num > 0){
			while($row = mysqli_fetch_array($r)){
				echo "<center><table style='font-family:Calibri;background-color:rgba(150,0,0,.7);'cellspacing='10' width='1000px'height='200px' cellspacing='30px'>";
					echo "<tr border='20'>";
						echo "<th style='text-align:left;font-family:Calibri;color:white;'>";echo $row['name']."<br>";
						echo'</th>';
					echo '</tr>';
				
					echo '<tr>';
						echo '<td style="text-align:left;font-family:Calibri;color:white;">';echo $row['feedback']."<br>";
						echo'</td>';
					echo '</tr>';
				echo '</table></center>';
				echo "<br>";
			}
				
		}
		else{
			echo "No records";
		}
		
		?>
	</body>
</html>