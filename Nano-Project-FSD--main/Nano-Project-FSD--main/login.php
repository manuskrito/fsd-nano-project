<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>login page.</h1>
		<p>This login page is mainly used for collecting information of any user,
			and it can be used or fit for any website.
		</p>
		<span>
			<p>login with social media</p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
		</span>
		</div>
	</div>


		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" placeholder="user name">
			<br>
			<input type="password" placeholder="password">
		</div>

			<br><br>

			<br>
			<button name="login_Btn"></button>Login</button>
	</div>

</div>
<!-- partial -->

</body>
</html>

<?php
$conn = mysql1_connect("localhost", "root", "");
if(isset($_POST['loginBtn'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql= "SELECT * FROM login_page.login WHERE username = '$username'";
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result)){
    $resultPassword = $row['password'];
    if($password == $resultPassword){
      header('Location: index.html');
    }else{
      echo "<script>
      alert('Login unsuccessful');
      </script>";
    }
  }
}
?>
