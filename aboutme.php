<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepmeup.com - About Me</title>
    <style>
        .upper {
            height: fit-content;
            right: -10px;
            top: -10px;
            left: -10px;
            background-image: linear-gradient(to right, rgb(252, 136, 27), rgb(253, 230, 21));
            /*background-image: linear-gradient(to right, rgb(255, 255, 255), rgb(250, 250, 242));*/
            border-bottom: 3px solid black;
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
            margin-left: 700px;
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
        }



        .logo {
            max-width: 180px;

            margin-left: 2px;

            margin-top: 10px;
            
            cursor: pointer;

            
        }


        .profileicon {
            max-width: 34px;
            cursor: pointer;
            transition: 0.5s;


        }

        .profileicon:hover{
            max-width: 36px;
        }

        .myprofile{
            margin: auto;
            text-align: center;
        }

        .name{
            font-weight: 500;
            font-size: 34px;
        }

        .rc{
            max-width: 100px;
        }

        .below1{
            width: 1200px;
            margin: auto;
        }

        .below{
            
            float: left;
            margin-top: 70px;
            
            width: 600px;
            font-family: 'Poppins', sans-serif;
           
        }

        .l{
            
            font-weight: bold;
            display: inline-block;
        }

        .email{
            background-color: rgba(255, 127, 80, 0.521);
            width: 370px;
            padding: 5px;
            border-radius: 7px;
            display: inline-block;
            float: right;
            
            
        }

        .a,.b,.c,.d,.e,.f{
            margin:20px 0px;
        }

        #illus{
            height: 400px;
            float: right;
        }
    </style>
</head>

<body>


    <div class="upper">
        <div class="topcont">
            <nav class="navbar">
                <img class="logo" src="Images/preplogo2.png" id="logo" onmouseover="setNewLogo()"
                    onmouseout="setOldLogo()">

                <ul>
                    <!--<li><a href="Homepagenew.html">Home</a></li>!-->
                    <li><a href="welcome.php">Quiz Time</a></li>
                    <!--<li><a>Stressed Up?</a></li>!-->
                    <!--<li><a href="aboutusnew.html">About Us</a></li>!-->
                </ul>

                <a href="logout.php">
                    <img onmouseover="setNewProfIcon()" onmouseout="setOldProfIcon()" id="proficon" class="profileicon"
                        src="Images/profileicon.png">
                </a>

            </nav>

            <div class="line"></div>

            <div class="myprofile">
                <div class="name">ABCD ABCD</div>
                <div class="image"><img class="rc" src="Images/aa2.png"></div>
            </div>
        </div>

        
    </div>

    <div class="below1">

    <img id="illus" src="images/undraw_profile_6l1l.png">

    <div class="below">

        

        <div class="details">

            <div class="a">

                <div class="l">Email: </div>
                <div class="email">abcd@gmail.com</div>

            </div>

            <div class="b">
                <div class="l">Date Of Birth: </div>
                <div class="email">13/09/2000</div>

            </div>

            
            <div class="c">

                <div class="l">Age: </div>
                <div class="email">56</div>

            </div>

            <div class="d">

                <div class="l">No. Of Quizzes: </div>
                <div class="email">0</div>

             </div>

            <div class="e">

                 <div class="l">Points: </div>
                <div class="email">8</div>

            </div>

            <div class="f">

                <div class="l">Achievements: </div>
                <div class="email">None</div>

             </div>

            

        </div>

    </div>

</div>

</body>

</html>