<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<title>Login Demo</title>
</head>
<body style="background-image: linear-gradient(rgb(0, 153, 204), rgb(204, 204, 255));">


<div id="center" style=" display: flex; flex-wrap: wrap; margin-bottom:10%;">




<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div style="width: 40%; padding: 10px; height: 339px; margin-top: 149px; 
            background-color: rgb(0, 102, 153); color: white; margin-left: 100px; border-radius: 25px" align="center">

<span><h3>Have an account?<h3></span>

<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">

<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg"><h1 style="padding: 15px;">Login Here<h1></div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg"><h3 style="padding: 15px;">Login Failed!, Invalid Credentials<h3></div> ';
}
?>



<table border="0"  cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name" style="margin-bottom: 10px;">Username:</div></td>
<td><input type="text" id="tb-box" name="username" class="form-control" style="margin-bottom: 10px;"/></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name" style="margin-bottom: 10px;">Password:</div></td>
<td><input id="tb-box" type="password" name="password" class="form-control" id="exampleInputPassword1" style="margin-bottom: 10px;"/></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Login" id="st-btn" class="btn btn-primary"/></div>
</form>
<div id="reg-bottom" class="btmrg"></div>

</div>

</div>
</div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div style="width: 40%; margin:auto; padding: 10px; margin-top: 149px;
            background-color: rgb(0, 102, 153); color: white; border-radius: 25px" align="center">

<span><h3>New here?<h3></span>

<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg"><h1 style="padding: 15px;">Register Now<h1></div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg"><h1 style="padding: 15px;">Registration Success<h1></div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg"><h1 style="padding: 15px;">Registration Failed!, Username exists<h1></div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg"><h1 style="padding: 15px;">Registration Failed! <br> Error: '.$_GET['value'].' <h1></div> ';
}
?>

<form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
<table border="0"  cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name" style="margin-bottom: 10px;">First&nbsp;Name:</div>
</td>
<td width="300">
<input type="text" name="fname" id="tb-box" class="form-control" style="margin-bottom: 10px;"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name" style="margin-bottom: 10px;">Last&nbsp;Name:</div></td>
<td><input type="text" name="lname" id="tb-box" class="form-control" style="margin-bottom: 10px;"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name" style="margin-bottom: 10px;">Email:</div></td>
<td><input type="email" id="tb-box" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="margin-bottom: 10px;"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name" style="margin-bottom: 10px;">Username:</div></td>
<td><input type="text" id="tb-box" name="username" class="form-control"style="margin-bottom: 10px;"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name" style="margin-bottom: 10px;">Password:</div></td>
<td><input id="tb-box" type="password" name="password" class="form-control" id="exampleInputPassword1" style="margin-bottom: 10px;"/></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Submit" id="st-btn" class="btn btn-primary"/></div>
</form>
<div id="reg-bottom" class="btmrg"></div>
</div>






</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
</html>