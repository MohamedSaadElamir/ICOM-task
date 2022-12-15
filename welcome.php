<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<title>Login Demo</title>
</head>
<body style="background-image: linear-gradient(rgb(0, 153, 204), rgb(204, 204, 255)); color:aliceblue; margin-bottom:10%;">

<div id="center">
<div id="center-set">
<h1 align='center' style="padding:50px;">Welcome <?php echo $loggedin_session; ?>,</h1>
<h5 style="margin-bottom: 50px;" align="center">You are now logged in. you can logout by clicking on signout link given below.<h5>
<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg" align="center"><h3 style="margin-bottom: 30px;">Your Profile<h3></div>
<table border="0" align="center" cellpadding="2" cellspacing="0" class="table table-striped" style="width: 40%; border-radius: 25px;">
<tr class="table-primary">
<td class="table-primary"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="table-primary"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr class="table-primary">
<td class="table-primary"><div align="left" id="tb-name">Username:</div></td>
<td class="table-primary"><?php echo $rows['username']; ?></td>
</tr>
<tr class="table-primary">
<td class="table-primary"><div align="left" id="tb-name">Name:</div></td>
<td class="table-primary"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr class="table-primary">
<td class="table-primary"><div align="left" id="tb-name">Email id:</div></td>
<td class="table-primary"><?php echo $rows['address']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg"></div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg" align="center">
<a href="logout.php" id="st-btn"><button class="btn btn-secondary">Sign Out</button></a>
<a href="deleteac.php" id="st-btn"><button class="btn btn-danger">Delete Account</button></a>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
</br>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>