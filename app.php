<html>
<head>
</head>
<body>

<?php


if(isset($_REQUEST['sub']))
{
$sub=$_REQUEST['sub'];

$da=$_REQUEST['date'];
$ti=$_REQUEST['time'];
$na=$_REQUEST['name'];
$link=new mysqli("localhost","root","root","app");
$link->query("insert into values('$da','$ti','$na')");
$link->close();
echo"<br> YOUR APPOINTMENT IS FIX.";

}

else{
?>

<html>
  <head>
    <title>Appointments</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="home.css">

    <style>
      .parentx
      {
        display: flex;
        flex-direction: row;
      }
      .child-1
      {
        order: 1;
        flex-grow: 1;
      }
      .child-2
      {
        order: 2;
        flex-grow: 1;
      }
      .childy
      {
        text-align: center;
      }
      body
      {
        font-family: Arial, Helvetica, sans-serif;
        background-repeat: no-repeat;
        background-size: cover;
        padding-bottom:50px;
      }
      form
      {
        /* border: 3px solid black; */
        border-style:solid double; 
        border-color:black;
        padding-left:20px;
        border-radius:50px;
        text-align: center;
      }

      input[type=text],input[type=date],input[type=time]
      {
        /* width: 100%; */
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        text-align:left;
      }

      button
      {
        background-color: lightgreen;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        /* width: 100%; */
      }

      button:hover
      {
        opacity: 0.8;
      }

      .cancelbtn
      {
        width: auto;
        padding: 10px 18px;
        background-color: crimson;
      }

      .container
      {
        padding: 5px;
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px)
      {
        span.psw
        {
          display: block;
          float: none;
        }
        .cancelbtn
        {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
    <nav style="position:fixed; top: 0px; left:0px; right:width:150%">
        <ul>
            <li><img src="l1.png"></li>
            <li><a href="Home.html">Home</a></li>
            <li><a href="#abot">About Us</a></li>
            <li><a href="#fec">Benefits</a></li>
            <li><a href="./facilities.html">Facilities</a></li>
            <li><a href="./program.html">Programs</a></li>
            <li><a href="./app.html">Appointments</a></li>
            <li><div class="dropdown">
              <button class="dropbtn">Login
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="./login.html">Users</a>
                  <a href="./login.html">Trainers</a>
                  <a href="./login.html">Admin</a>
              </div>
            </div></li>
            <li><img src="s1.png"><li>
        </ul>
    </nav>

    <h1 style="text-align: center; padding-top:60px;">Our Timings</h1>

   <div class="parentx">
                <div class="childy child-1">
                    <h2 style="text-align:left;">Morning</h2>
                    <table>
                        <tr>
                            <td>Monday</td>
                            <td>Zumba</td>
                            <td>8:00 am-10:00 am</td>
                        </tr>

                        <tr>
                            <td>Tuesday</td>
                            <td>Power Garba</td>
                            <td>8:00 am-10:00 am</td>
                        </tr>

                        <tr>
                            <td>Wednesday</td>
                            <td>Yoga</td>
                            <td>8:00 am-10:00 am</td>
                        </tr>

                        <tr>
                            <td>Thursday</td>
                            <td>Personal Training</td>
                            <td>8:00 am-10:00 am</td>
                        </tr>

                        <tr>
                            <td>Friday</td>
                            <td>Diet Counselling</td>
                            <td>8:00 am-10:00 am</td>
                        </tr>

                        <tr>
                            <td>Saturday</td>
                            <td>Extra Activity</td>
                            <td>8:00 am-10:00 am</td>
                        </tr>
                    </table>
                </div>

                <div class="childy child-2">
                    <h2 style="text-align:left;">Evening</h2>
                    <table style="padding-bottom:20px;">
                        <tr>
                            <td>Monday</td>
                            <td>Zumba</td>
                            <td>6:00 am-8:00 am</td>
                        </tr>

                        <tr>
                            <td>Tuesday</td>
                            <td>Power Garba</td>
                            <td>6:00 am-8:00 am</td>
                        </tr>

                        <tr>
                            <td>Wednesday</td>
                            <td>Yoga</td>
                            <td>6:00 am-8:00 am</td>
                        </tr>

                        <tr>
                            <td>Thursday</td>
                            <td>Personal Training</td>
                            <td>6:00 am-8:00 am</td>
                        </tr>

                        <tr>
                            <td>Friday</td>
                            <td>Diet Counselling</td>
                            <td>6:00 am-8:00 am</td>
                        </tr>

                        <tr>
                            <td>Saturday</td>
                            <td>Extra Activity</td>
                            <td>6:00 am-8:00 am</td>
                        </tr>
                    </table>
                </div>
            </div>

    <form action="" method="post">
      <h1 style="align:center;">Request For An Appointment</h1>
      <div class="container" style="padding-bottom: 10px;">
      <label for="date"><b>Date : </b></label><br>
      <input type="date" placeholder="Enter Date" name="date" required><br>

      <label for="time"><b>Time : </b></label><br>
      <input type="time" placeholder="Enter Time" name="time" required><br>

      <label for="name"><b>Name : </b></label><br>
      <input type="text" placeholder="Enter Name" name="name" required><br>
        
      <button type="submit" name="sub">Save</button>
      
      <button type="button" class="cancelbtn">Cancel</button><br>

      </div>
    </form>
    
    <div class="footer">
        <p>Any Questions? Contact Us: +91 9876543211
          Email Id:fitnessclub@gmail.com
        </p>
    </div>
  </body>
</html>





<?php
}
?>
</body>
</html>