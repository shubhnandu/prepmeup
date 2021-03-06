<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                        
                    }

                }

    }
}    


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Prepmeup.com - Sign Up</title>

    <style>
        .full {

            height: fit-content;
            width: 100%;
            background-image: linear-gradient(to right, rgb(252, 136, 27), rgb(253, 230, 21));
            font-family: 'Poppins', sans-serif;
        }

        .upper {
            height: fit-content;
            right: -10px;
            top: -10px;
            left: -10px;
            background-image: linear-gradient(to right, rgb(252, 136, 27), rgb(253, 230, 21));
            /*background-image: linear-gradient(to right, rgb(255, 255, 255), rgb(250, 250, 242));*/

        }

        .topcont {
            width: 1200px;
            margin: auto;
            height: fit-content;
            font-family: 'Poppins', sans-serif;

        }

        .navbar {

            display: flex;
            height: 50px;

            justify-content: space-between;
            align-items: center;

        }


        .navbar ul {
            margin-left: 600px;
        }

        .navbar li {
            top: 50%;
            float: left;
            list-style: none;
            margin: 0px 10px;
            cursor: pointer;

        }

        .navbar li :hover {
            color: rgb(255, 0, 0);
        }

        .navbar li a {
            font-size: 16px;
            padding: 3px;
            text-decoration: none;


        }

        .line {

            margin-top: 4px;
            height: 1.5px;
            background-color: black;
            border-radius: 0.5px;
            margin-bottom: 5px;
        }


        .logo {
            max-width: 200px;

            margin-left: 2px;
            margin-top: 5px;
            cursor: pointer;
        }


        .profileicon {
            max-width: 34px;
            cursor: pointer;
            transition: 0.5s;


        }

        .profileicon:hover {
            max-width: 36px;
        }

        .content {
            margin: auto;
            width: 1200px;
            background-color: rgba(255, 255, 255, 0.2);
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            border-radius: 10px;
        }

        .content div {}

        .vertical-line {
            width: 1px;
            height: 300px;
            background-color: black;
            margin-top: 100px;
            margin-bottom: 100px;

        }

        .login {}

        .register {

            display: flex;
            flex-direction: column;
            align-items: center;


        }

        .register h1 {}

        .login h1 {}

        .register form {

            background-color: rgba(255, 143, 31, 0.3);
            padding: 10px;
            border-radius: 6px;


        }

        .register-form label {
            font-weight: bold;
        }

        .register-form input {
            width: 350px;
            margin-bottom: 10px;
            border-radius: 7px;
            border: 0.5px solid black;

            height: 25px;
        }

        .signup {

            width: 120px;
            height: 40px;
            background: transparent;
            border: solid black 2px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: 0.5s;

        }

        .signup:hover {

            font-size: 22px;
            font-weight: bolder;
            border-color: rgb(252, 27, 27);
            color: rgb(182, 0, 0);

        }

        .illusbox {

            display: flex;
            flex-direction: row;
            justify-content: center;

        }

        .illus2 {

            max-width: 700px;
            margin-right: 150px;

        }

        #login {
            margin-top: 10px;
        }

        .login-form {

            background-color: rgba(255, 143, 31, 0.3);
            padding: 10px;
            border-radius: 6px;
        }

        .login-form label {
            font-weight: bold;
        }

        .login-form input {
            width: 350px;
            margin-bottom: 10px;
            border-radius: 7px;
            border: 0.5px solid black;
            height: 25px;
        }
    </style>

</head>

<body>

    <div class="full">

        <div class="upper">
            <div class="topcont">
                <nav class="navbar">
                    <img class="logo" src="Images/preplogo2.png" id="logo" onmouseover="setNewLogo()"
                        onmouseout="setOldLogo()">

                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <!--<li><a href="testnew.html">Quiz Time</a></li>!-->
                        <!--<li><a>Stressed Up?</a></li>!-->
                        <li><a href="testim.php">Testimonials</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>


                    <a href="register.php">
                        <img onmouseover="setNewProfIcon()" onmouseout="setOldProfIcon()" id="proficon"
                            class="profileicon" src="Images/profileicon.png">
                    </a>

                </nav>

                <div class="line">

                </div>

            </div>
        </div>

        <div class="illusbox">
            <div class="illus2">
                <img src="Images/illus2.png">
            </div>
        </div>



        <div class="content">
            <div class="register">
                <h1>Register</h1>
                <form class="register-form">
                    <label for="name">Email:</label><br>
                    <input type="email" id="email" ><br>

                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name"><br>

                    <label for="dob">Date Of Birth:</label><br>
                    <input type="date" id="dob" name="dob"><br>

                    <label for="pass">Password:</label><br>
                    <input type="password" id="pass" ><br>

                    <label for="pass">Confirm Password:</label><br>
                    <input type="password" id="conf_pass" name="confirm_password"><br>

                    <button  class="signup">Sign Up</button>
                </form>
            </div>

            <div class="vertical-line">

            </div>

            <div class="login">
                <h1>Login</h1>
                <form id="login-form" class="login-form" method="post" action="">
                    <label for="name">Email:</label><br>
                    <input type="email" id="email1" name="username"><br>

                    <label for="pass">Password:</label><br>
                    <input type="password" id="pass1" name="password"><br>


                    <button type="submit" class="signup" id="login">Login</button>
                </form>
            </div>

        </div>

    </div>


    



    <script>



        function setNewProfIcon() {

            document.getElementById("proficon").src = "Images/profileicon5.png";
        }

        function setOldProfIcon() {
            document.getElementById("proficon").src = "Images/profileicon.png";
        }

        function setNewLogo() {
            document.getElementById("logo").src = "Images/preplogo3.png";
        }

        function setOldLogo() {
            document.getElementById("logo").src = "Images/preplogo2.png";
        }

        /*function checkDetails() {
            email = document.getElementById('email1').value;
            pass = document.getElementById('pass1').value;

            if (email == user[i].email && pass == user[i].password) {
                document.getElementById("login-form").action = "loggedin.html";
                return false;
            }
        }*/

        /*document.onkeydown = function (e) {
            if (e.keyCode == 13) {
                alert("Please enter valid username and password!");
                return false;
            }

        }*/
    </script>

    

    <script>
        const signUp = e => {
            let formData = {
                email: document.getElementById('email').value,
                name: document.getElementById('name').value,
                dob: document.getElementById('dob').value,
                pass: document.getElementById('pass').value
            }

            localStorage.setItem('formData', JSON.stringify(formData));
            console.log(localStorage.getItem('formData'));
            e.preventDefault();
        }
    </script>




</body>

</html>