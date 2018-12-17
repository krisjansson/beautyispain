<?php
session_start();
require( 'util.php' );

$cmd = $_POST['cmd'] ?? null;// ?? operator returns the left-hand operand if it is not null, or else it returns the right operand
	
	switch ($cmd){
		case 'createuser':
			//header("Refresh:0");
			$un = filter_input(INPUT_POST, 'un') or die('Missing or illegal un parameter');	
			$pw = filter_input(INPUT_POST, 'pw') or die('Missing or illegal pw parameter');	
			if (createUser($un, $pw) > 0){
				loginUser($un, $pw);
			}
		
			else {
				echo '<script>alert("unable to create user - username already exists!");window.location.href="login.php"</script>';
			}
			
			break;
			
		    case 'login':
			//header("Refresh:0");
			$un = filter_input(INPUT_POST, 'un') or die('Missing or illegal un parameter');	
			$pw = filter_input(INPUT_POST, 'pw') or die('Missing or illegal pw parameter');	
			loginUser($un, $pw);
			break;
			
		    case 'logout':
			logoutUser();
			break;
		    default:
			
	}

?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
    width: 400px;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
                <!--Is the session already running???-->
                <?php
				if ( isset( $_SESSION[ 'uid' ] ) ) {
					?>
				<!--If the session is running with af uid (userid), the run the code below-->
                <h3>Logged in as <?=$_SESSION['uname'] ?></h3>
                <button class="primary" type="submit" name="cmd" value="logout">Logout</button>
				<button><a class="primary" type="button" href="index.php">til kalnderen</a></button>
				<!--Create User-->
				
				<!--If the SESSION is NOT running, the run the code below.-->
				<?php } else { ?>
                

        <label for="un"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="un" required>

        <label for="pw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pw" required>
            
        <button type="submit" name="cmd" value="login">Login</button>
        <button class="secondary" type="submit" name="cmd" value="createuser">Create</button>
        <?php } ?>   
  </div>

</form>

</body>
</html>