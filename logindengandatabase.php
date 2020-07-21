

<html>
<title>Login</title>
    <body>

      <div class = "container form-signin">
         
         <?php
            $servername = "localhost";
			$username = 'root';
			$password = '';
			$dbname = "dbeas";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$username = isset($_POST['username']) ? $_POST['username'] : ' ';
			$password = isset($_POST['password']) ? $_POST['password'] : ' ';

			$sql = "select * from nasabah where username='$username' and password='$password'";
			$result=$conn->query($sql);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				$_SESSION['username'] = $row["username"];
				header("location:template.php");
			}else {
			    $error = "Your Login Name or Password is invalid";
			}
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      <center>
         <form class = "form-signin" role = "form"  
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post"
            style ="width:250px;
            border:1px solid black;
            padding : 25px;" 
            >
            <h4 class = "form-signin-heading">Login</h4>
            <label for="username">username  </label>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus><br><br>
            <label for="password">password  </label>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required><br><br>
            <p align = "right"><button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login" >Login</button></p>
         </form>
         
      </div> 
      </center>

    </body>
</html>
