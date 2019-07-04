<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>DESHANTOR</title>
    <style>




/* Registration & Login */

* {
  margin: 0;
  padding: 0;
}
p {
  font-size: 15px;
}
body {
  font-size: 120%;
  background: #f8f8ff;
}

.header {
  width: 30%;
  margin: 50px auto 0;
  color: #fff;
  background: #5f9ea0;
  text-align: center;
  border:1px solid #b0c4de;
  border-bottom: none;
  border-radius: 10px 10px 0 0;
  padding: 20px;
}
.header h2 {
  font-size: 35px;
  color: #fff;
}

form {
  width: 30%;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #b0c4de;
  background: #fff;
  border-radius: 0px 0px 10px 10px;
}

.input-group {
  margin: 10px 0 10px 0;
}

.input-group label {
  display: block;
  text-align:left;
  margin: 3px;
}

.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid grey;
}

.btn:hover {
  color: #fff;
  background: green;
}

.btn {
  padding: 10px 25px;
  font-size: 17px;
  color: #fff;
  background: #5f9ea0;
  border: none;
  border-radius: 5px;
  margin-top: 15px;
  transition: .4s;
}







    body,
    html {
        height: 80%;

        margin: 0;
        font-size: 16px;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        line-height: 1.8em;

    }

    .navbar {
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;

    }

    .navbar li a,
    .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }

    .navbar-nav li a:hover {
        color: #939496 !important;
    }

    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 20px;
        font-family: Arial;
        letter-spacing: 3px;


    }

    footer a {
        color: #f5f5f5;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }

    
     .dropdown-menu{
       background-color: #282e34;
       height: 150px;
       width:400px;
       padding:25px;
       float: justify;
       color: white;


   }
   .dropdown{
       position: absolute;

   }
    .eg {
        padding: 50px;
        margin: 0px;
        background-color: #d9d9db;
    }
    .cg{
        margin-top: 55px;
        margin-bottom: 25px;
        padding: 25px;


    }
  a.btn:hover{
    color:red;
  }

    .box{
        border: 1px solid  #f5f5f5;
        padding: 15px;
        font-size: 12px;
        margin-bottom: 55px;

        font-family: Arial Unicode MS;
        text-align: center;
        float: center;
        width: 600px;
        height:500px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(218,220,222,1);
        -moz-box-shadow: 10px 10px 5px 0px rgba(218,220,222,1);
        box-shadow: 10px 10px 5px 0px rgba(218,220,222,1);
        background-color:#2d2d30;
        color: #bebec2;




    }
    .hg{
        border: 1px solid  #408ea1;
        border-radius: 10px 10px 10px 10px;
        font-family: Arial Unicode MS;
        font-size: 12px;
        width:250px;
        height: 380px;
        margin-top: 20px;

        background-color:#408ea1;
        color: white;
    }






    </style>
</head>
<body>
    <nav class="navbar navbar-defalut navbar-fixed-top">
        <div class="container-fluid ">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-family:Berlin Sans FB Demi" href="bus.php">DESHANTOR.COM</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
     </button>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class=" nav navbar-nav navbar-right">
                    <li><a href="bus.php">HOME</a></li>
                    <li><a href="bkash.php">VERIFY BKASH</a></li>
                    <li><a href="cancel.php">CANCEL TICKET</a></li>
                    <li><a href="reg.php">BUS RESERVATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>

                     <li class="dropdown"><a href="#" class="dropdown-toogle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="font-size: 10px;"></span>LOGIN/SIGN-UP</a>

                        <ul class="dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2"> 
                                        <li><a href="login.php" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;background-color: #6d756a;border: none;padding: 16px 32px;text-align: center; margin: 15px 5px;opacity: 1; transition: 0.3s;"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                                    </div>
                                    <div class="col-sm-2">
                                        <li><a href="sign up.php" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;background-color: #6d756a;border: none;padding: 16px 32px;text-align: center; margin: 15px 5px;opacity: 1; transition: 0.3s;"><span class="glyphicon glyphicon-user"></span>SIGN-UP</a></li>

                                    </div>

                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </nav>

    <div class="container-fluid cg">
        <h3 style="text-align:center;">WELCOME TO DESHANTOR.COM !</h3>
        <h4 style="text-align:center;">Please enter your username and password to proceed</h4>
    </div>

    




<div class="header">
        <h2>LOGIN</h2>
    </div>
    
    <form action="checklog.php" method="post">

        <div class="input-group">
            <label for=""> UserName </label>
            <input type="text" name="name">
        </div>

        <div class="input-group">
            <label for=""> Password </label>
            <input type="password" name="password_1">
        </div>

        <button class="btn" type="submit" name="login">Login</button>
        <br />
        <br />
        <p>Not yet a member ?<a href="sign up.php"> Registration</a></p>

    </form>














    <div class="container-fluid eg">
        <div class="row">
            <div class="col-sm-4">
                <h4 style="color:#404043;padding:20px;margin-top:25px;"><strong>Top Bus Router</strong></h4>
                <ul style="list-style-type:none;margin-left:-18px;color:#979799;font-size:15px;">
                    <li>Dhaka To Chittagong (Vise Versa)</li>
                    <li>Dhaka To Cox Bazar (Vise Varsa)</li>
                    <li>Dhaka To Sylhet (Vise Versa)</li>
                    <li>Dhaka To Rajshahi (Vise Versa)</li>
                    <li>Dhaka To Bogra (Vise Versa)</li>
                    <li>Dhaka To Kushtia (Vise Versa)</li>
                    <li>Dhaka To Feni (Vise Versa)</li>
                    <li>Dhaka To Noakhali(Vise Versa)</li>
                    <li>Dhaka To Rangpur (Vise Versa)</li>
                    <li>Dhaka To Khulna (Vise Versa)</li>
                    <li>Dhaka To Panchagar(Vise Versa)</li>
                    <li>Dhaka To Rangamati (Vise Versa)</li>
                    <li>Dhaka To Comilla (Vise Versa)</li>

                </ul>
            </div>
            <div class="col-sm-4">
                <h4 style="color:#404043;padding:20px;margin-top:25px;"><strong>Top Bus Operators</strong></h4>
                <ul style="list-style-type:none;margin-left:-18px;color:#979799;font-size:15px;">
                    <li>Green Line Paribahan</li>
                    <li>Shyamoli paribahan</li>
                    <li>Dipjol Enterprise</li>
                    <li>Hanif Enterprise</li>
                    <li>Royal Coach</li>
                    <li>Saint Martin Hyundai</li>
                    <li>Star Line Special Limited</li>


            </div>


        </div>
    </div>



    <!--footer-->
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
        <p style="font-size:10px;">Copyright © 2018 TRANSPORTBD.COM All Rights Reserved</p>
    </footer>

</body>
</html>
