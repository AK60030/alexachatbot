
<?php
		$conn=mysqli_connect("localhost","root","","ALIKASSEM");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}	
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
<style >
	body{
		background-image: url('https://www.solidbackgrounds.com/images/1920x1080/1920x1080-light-blue-solid-color-background.jpg' );
   		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: 100% 100%;
	}
	
	input{
		font-size: 1vw;
	}

	table{
		color: white;
		border-radius: 19px;
		
		background:linear-gradient(white,blue,white);
	}	
	#button 
	{
		background-color:rgba(0,0,0,0.6);
		color: white;
		height: 32px;
		width: 145px;
		border-radius: 25px;
		font-size: 16px;
	}
</style>


</head>
<br><br><br><br><br><br>
<br>
<br>
<form action="" method="POST">
	<table border="0" bgcolor="black" align="center" cellspacing="50">
			<div id="main-wrapper">
				<center>
			
			<div class="imgcontainer">
			<img src="image/bot_avatar.png" class="avatar"/>
		</center>
	</div>
		<tr>
			<td>Id</td>
			<td><input type="text" value="" name="id" placeholder="Type Id here..."required></td>
			
		</tr>
		

		<tr>
			<td>Question</td>
			<td><input type="text" value="" name="question" placeholder="Type your query here..."required></td>
			
		</tr>
		<tr>
			<td>Reply</td>
			<td><input type="text" value="" name="reply" placeholder="Type your response here..."required></td>
			
		</tr>
		
		</tr>
	<tr>
	<td  colspan="3" align="center"><input type="submit" id="button" name="submit" value="Submit"/></td>
	</tr>


</table>
	</form>


</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$question=$_POST['question'];
	$reply=$_POST['reply'];

$query="insert into chatbot_hints values('$id','$question','$reply')";
$query_run = mysqli_query($conn,$query);


						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Success!") </script>';						
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($conn).'") </script>';
						
					}
					?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/final-project/chatbot/qna.php">
<?php

}
?>
	