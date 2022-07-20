<?php include('process.php') ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style1.css">
  <script type="text/javascript">
 // function fun()
//{
//var x=document.getElementById('1').value;
//var y=document.getElementById('2').value;
//if(x==null||x=="")
//{
//alert("name in password must be filled");
//return false;

//}
//if(y==null||x=="")
//{
//alert("name in password 2 must be filled");
//return false;

//}
//if(x!=y)
//{
//alert("password is mismatch re enter the password");
//return false;
//}
//else
//{
//alert("correct password");
//return true;
//}
//}
</script>
</head>
<body>
  <form method="post" action="" id="register_form">
  	<h1>Register</h1>
  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
	  <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?>
  	</div>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"required>
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
  		<input type="password"  placeholder="Password" name="password" id="1" required>
  	</div>
    <p>

<input type="Password"  placeholder=" confirmPassword" name="pwd" id="2" required>
</p>
  	<div>
  		<button type="submit" name="register" id="reg_btn" >Register</button>
  	</div>
  </form>
  </body>
</html>
