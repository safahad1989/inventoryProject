<?php
 include "auth/connection.php";
 $conn= connect();
 $m='';
 if(isset($_POST['submit'])){
	 $uName= $_POST['uname'];
	 $pass= $_POST['pass'];
	 
	 $sql= "SELECT * FORM users_info WHERE u_name='$uName' and password='$pass'";
	 $res= $conn->query($sql);
	 
	 if(mysqli_num_rows($res)==1){
		 header('loacation: dashboard.php');
	 }else{
		 $m= 'Credential mismatch!';
	 }
 }
?>
<head>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/login.css" />

</head>
<body>
 <div class="logo">
 
 </div>
 <form method="POST">
  <div class="box bg_img">
    <div class="content">
	  <h2>Log<spen>in</spen></h2>
	   <div class="forms">
	   <p style= "color:red; padding:20px;"><?php if($m!='') echo $m; ?></p>
	      <div class="user-input">
		    <input name="uname" type="text" class="login-input" placeholder="Username" id="name" />
			<i class="fas fa-user"></i>
		  </div>
		  <div class="pass-input">
		    <input name="pass"; type="password" class="login-input" placeholder="password" id=""/>
			<span class="eye" onclick="myfunction">
			  <i id="hide-1" class="fas fa-eye-slash"></i>
			  <i id="hide-2" class="fas fa-eye"></i>
			</span>
		  </div>
	   </div>
	   <button class="login-btn" type="submit">Sign In</button>
	   <p class="new-account">Not a user? <a href="register.php">Sign Up now</a></p>
	   <br />
	   <p class="f-pass"><a href="#">forgot password?</a></p>
	</div>
  </div>
 
 
 </form>

</body>
</html>
<script>
function myfunction(){
	var x= document.getElementById("my-password");
	var x= document.getElementById("hide-1");
	var x= document.getElementById("hide-2");
	if(x.type==="password"){
		x.type = "text";
		y.style.display ="block";
		z.style.display ="none";
	}else{
			x.type = "password";
		y.style.display ="none";
		z.style.display ="block";
	}
}

</script>