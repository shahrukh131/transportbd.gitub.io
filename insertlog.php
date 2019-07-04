<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
                    // Check connection
                    if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['name'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($link,$username);
	$password = stripslashes($_REQUEST['password_1']);
	$password = mysqli_real_escape_string($link,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE name='$username'
and password_1='".md5($password)."'";
	$result = mysqli_query($link,$query);
	$rows = mysqli_num_rows($result);
         if($rows==1){
	    $_SESSION['name'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	         ?>
        <script>
        alert('Username or Password does not match');
        window.location='login.php'
        </script>
        <?php
	}
    }
?>