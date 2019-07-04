<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
                    // Check connection
                    if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($link,$username); 

	$email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($link,$email);

	$password = stripslashes($_REQUEST['password_1']);
	$password = mysqli_real_escape_string($link,$password);

    $mobile = stripslashes($_REQUEST['mobile']);
	$mobile = mysqli_real_escape_string($link,,$mobile);
    
        $query = "INSERT into users (name, password_1, email,mobile)
VALUES ('$username', '".md5($password)."', '$email','$mobile')";
        if(mysqli_query($link, $query)){
            ?>
        <script>
        alert('Registration successful');
        window.location='login.php'
        </script>
        <?php
        }
        else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
}
    }
?>