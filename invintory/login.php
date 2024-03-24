<?php 
ob_start();
session_start();
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Inventory.php';
	$inventory = new Inventory();
	$login = $inventory->login($_POST['email'], $_POST['pwd']); 
	if(!empty($login)) {
		$_SESSION['userid'] = $login[0]['userid'];
		$_SESSION['name'] = $login[0]['name'];			
		header("Location:index.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<Style>
		/* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f2f2f2;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.login-container {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  padding: 40px;
  max-width: 400px;
  width: 90%;
  text-align: center;
  margin: 0 auto;
}

.login-form {
  display: flex;
  flex-direction: column;
}

.login-form h1 {
  margin-bottom: 10px;
  color: #333;
}

.login-form p {
  margin-bottom: 20px;
  color: #777;
}

.input-group {
  margin-bottom: 20px;
}

.input-group input {
  padding: 15px;
  border-radius: 8px;
  border: 1px solid #ddd;
  width: 100%;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

.input-group input:focus {
  border-color: #007bff;
  outline: none;
}

button {
  padding: 15px;
  border: none;
  border-radius: 8px;
  background-color: #007bff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

.bottom-text {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
  color: #777;
}

.bottom-text p {
  margin-bottom: 10px;
}

.bottom-text a {
  color: #007bff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.bottom-text a:hover {
  color: #0056b3;
}

/* Responsive */
@media screen and (max-width: 600px) {
  .login-container {
    width: 100%;
    border-radius: 0;
  }
}

	</Style>
</head>
<body>
<form method="post" action="">
	<div class="form-group">
		<?php if ($loginError ) { ?>
			<div class="alert alert-danger rounded-0 py-1"><?php echo $loginError; ?></div>
		<?php } ?>
		</div>
    <h1>Welcome Back</h1>
	<br>
    <div class="input-group">
		<label for="email" class="control-label">Admin Username</label>
		<input name="email" id="email" type="email" class="form-control rounded-0" placeholder="Username" autofocus="" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
	</div>
    <div class="input-group">
		<label for="password" class="control-label">Admin Password</label>
	<input type="password" class="form-control rounded-0" id="password" name="pwd" placeholder="Password" required>					
    </div>
    <button type="submit">Login</button>
    
  </form>
</div>
</body>
</html>
