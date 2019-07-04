<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TRANSPORT BD</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
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

        .bg {
            padding: 50px;
            margin-top: 100px;
            margin-bottom: 200px;
            background-color: #e2e2e2;

            margin-left: 20px;
            margin-right: 20px;
        }

        .eg {
            padding: 50px;
            margin: 0px;
            background-color: #d9d9db;
        }

        input[type=text]:focus {
            border: 2px solid #555;
        }
        .btn {
        background-color: #6d756a;

        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 15px 5px;
        opacity: 1;
        transition: 0.3s;
    }

        .btn-primary:hover {
            transform: scale(1.2);

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



        }
    </style>
</head>

<body>
    <nav class="navbar navbar-defalut navbar-fixed-top">
        <div class="container-fluid ">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-family:Berlin Sans FB Demi" href="bus.php">TRANSPORT BD.COM</a>
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
                                        <li><a href="login.php" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                                    </div>
                                    <div class="col-sm-2">
                                        <li><a href="#" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;"><span class="glyphicon glyphicon-user"></span>SIGN-UP</a></li>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <div class="container-fluid bg">
        <p style="font-size:12px;">NB:All (<span class="glyphicon glyphicon-star"></span>)marks are required field.</p>
        <h4><strong>Journey Details</strong></h4>
        <hr style="border-color:#8d9093;">
        <div class="row">
		
            <div class="col-sm-4">
                <form method="post" action="../../bashar/project/reg.php">
                    <div class="form-group">
                        <label style="font-size:14px;">Date of journey: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="date" name="dateofj" class="form-control" placeholder="pick a date" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Origin City ( with Boarding Point ): <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" name="ocity" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Number of seats in the bus: <span class="glyphicon glyphicon-star"></span></label>
                        <select class="form-control" placeholder="select" name="seat" required>
                           <option>select</option>
                           <option>27</option>
                           <option>28</option>
                           <option>34</option>
                           <option>36</option>
                           <option>40</option>
                        </select>
                    </div>
                


            </div>
			
            <div class="col-sm-4">
                 <div class="form-group">
                        <label style="font-size:14px;">Date of Return: </label>
                        <input type="date" class="form-control" name="dateofre" placeholder="pick a date" >
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Destination City ( with dropping Point ): <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" class="form-control" name="destcity" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:14px;">Number of tickets: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" class="form-control" name="destcity" placeholder="" required>
                    </div>
                    

            </div>
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Bus type <span class="glyphicon glyphicon-star"></span></label>
                        <select class="form-control" placeholder="select" name="typebus" required>
                           <option>select</option>
                           <option>AC</option>
                           <option>Non AC</option>
                           <option>AC Business Class</option>

                        </select>
                    </div>
                    
              
            </div>
        </div>
        <br>
        <br>
        <h4><strong>Contact Details</strong></h4>
        <hr style="border-color:#8d9093;">

        <div class="row">
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Contact person name: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="text" class="form-control" name="cont" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                        <label style="font-size:14px;">Address:</label>
                        <input type="text" name="add" class="form-control" placeholder="" style="width:342px;">
                    </div>


                

            </div>
            <div class="col-sm-4">
                
                    <div class="form-group">
                        <label style="font-size:14px;">Mobile No.: <span class="glyphicon glyphicon-star"></span></label>
                        <input type="tele" name="mob" class="form-control" placeholder="" required>
                    </div>
                    




                

            </div>
            <div class="col-sm-4">
               
                    <div class="form-group">
                        <label for="email">Email:<span class="glyphicon glyphicon-star"></span></label>
                        <input type="email" name="ename" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                

            </div>


        </div>
        <button type="submit" name="save" class="btn btn-primary" style="float:right;">Submit Reservation request</button>
		</form>
    </div>
	

<?php

    $link = mysqli_connect("localhost", "root", "", "demo");
 
                    // Check connection
                    if($link === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
    
        
     date_default_timezone_set("Asia/Dhaka");

    

     
    
        if(isset($_POST['save'])){
        
    $datj=$_POST['dateofj'];
    $orcity=$_POST['ocity'];
    $nseat=$_POST['seat'];
    $dater=$_POST['dateofre'];
    $destc=$_POST['destcity'];
    $typeb=$_POST['typebus'];
    $contn=$_POST['cont'];
    $mobile=$_POST['mob'];
    $addr=$_POST['add'];
    $email=$_POST['ename'];
     $_SESSION['ename']= $email;
      $date=date(' H:i:s');
    
    
    $sql = "INSERT INTO reg_table(doj,dor,bt,oc,dc,nos,cpn,mbn,email,adress,diff) VALUES ('$datj','$dater','$typeb','$orcity','$destc','$nseat','$contn','$mobile','$email','$addr','$date')";
    
        if($link->query($sql) === true){
            
            echo "<script>
            alert('Succesfully Reserved');
            window.location='bkash.php'
            </script>";
            
        }


        else{

           
        }
        
        }
?>
	




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
        <p style="font-size:10px;">Copyright © 2018 TRANSPORT BD.COM All Rights Reserved</p>
    </footer>
</body>

</html>
