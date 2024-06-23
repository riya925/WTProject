<html>
<head>
</head>
<body>

<?php


if(isset($_REQUEST['sub']))
{
$sub=$_REQUEST['sub'];
if($sub=="SIGN UP")
{
$us=$_REQUEST['tus'];
$pa=$_REQUEST['tpa'];
$link=new mysqli("localhost","root","","fit");
$link->query("insert into values('$us','$pa')");
$link->close();
echo"<br> NOW YOU ARE THE MEMBER OF OUR FITNESS CLUB";
}
}

else{

?>

<html>



<head>

    <title>Login</title>

    <link rel="stylesheet" href="style.css">

    <script>

        function checkuid() {

            var data = f1.uid.value;

        }

    </script>

</head>



<body>

    <div class="hero">

        <div class="form-box">

            <div class="button-box">

                <div id="btn"></div>

                <button type="button" class="toggle-btn" onclick="login()">Login</button>

                <button type="button" class="toggle-btn" onclick="register()">Register</button>

            </div>



            <div class="logo-image">

                <img src="login logo.jpg" align="center" alt="Login">

            </div>



            <form class="inp-grp" id="login">

                <input type="text" class="inp-field" onblur="checkuid()" name="uid" placeholder=" User Id" required>

                <input type="password" class="inp-field" onblur="checkupw()" name="upw" placeholder=" Password" required>

                <input type="checkbox" class="check-box"><span>Remember Password</span>

                <button type="submit" class="submit-btn">Login</button>

            </form>



            <form class="inp-grp" id="register">

                <input type="text" class="inp-field" placeholder=" User Id" required>

                <input type="text" class="inp-field" placeholder=" Email Id" required>

                <input type="password" class="inp-field" placeholder=" Password" required>

                <input type="checkbox" class="check-box"><span>I agree to the Terms and Conditions</span>

                <button type="submit" class="submit-btn"><a href="form.html">Register</button>

            </form>

        </div>

    </div>



    <script>

        var x = document.getElementById("login");

        var y = document.getElementById("register");

        var z = document.getElementById("btn");



        function register() {

            x.style.left = "-450px";

            y.style.left = "50px";

            z.style.left = "110px"

        }



        function login() {

            x.style.left = "50px";

            y.style.left = "450px";

            z.style.left = "0px"

        }

    </script>

</body>



</html>















<?php
}
?>






</body>
</html>