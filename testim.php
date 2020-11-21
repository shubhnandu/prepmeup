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

        .profileicon:hover {
            max-width: 36px;
        }

        .myprofile {
            margin: auto;
            text-align: center;
        }

        .name {
            font-weight: 500;
            font-size: 34px;
        }

        .rc {
            max-width: 100px;
            margin:5px;
        }

        .below1 {
            width: 1200px;
            margin: auto;
            font-family: 'Poppins', sans-serif;
        }

        .below {

            float: left;
            margin-top: 70px;

            width: 600px;
            font-family: 'Poppins', sans-serif;

        }

        .l {

            font-weight: bold;
            display: inline-block;
        }

        .email {
            background-color: rgba(255, 127, 80, 0.521);
            width: 370px;
            padding: 5px;
            border-radius: 7px;
            display: inline-block;
            float: right;


        }

        .a,
        .b,
        .c,
        .d,
        .e,
        .f {
            margin: 20px 0px;
        }

        #illus {
            height: 400px;
            float: right;
        }

        .testi{
            background-color: rgba(252, 136, 27, 0.74);
            margin-top: 10px;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 20px;
            width: 700px;
            
        }

        #testi2{
            background-color: rgba(255, 197, 7, 0.815);
            float: right;
        }

        #rc1,#rc3{
            float: right;
        }
        #rc2{
            float: left;
        }

        #testi3{
            clear: both;
        }

        h1{
            font-size: 46px;
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
                    <li><a href="home.php">Home</a></li>
                    <!--<li><a href="testnew.html">Quiz Time</a></li>!-->
                    <!--<li><a>Stressed Up?</a></li>!-->
                    <li><a href="testim.php">Testimonials</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>

                <a href="register.php">
                    <img onmouseover="setNewProfIcon()" onmouseout="setOldProfIcon()" id="proficon" class="profileicon"
                        src="Images/profileicon.png">
                </a>

            </nav>

            <div class="line"></div>


        </div>


    </div>

    <div class="below1">

        <h1>Testimonials</h1>

        <div class="testi">
            <div class="name">Ronnie Coleman</div>
            <img class="rc" id="rc1" src="Images/rc2.png">
            <div class="para">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae expedita nesciunt amet. Laboriosam,
                tempora. Magnam iure sint quod quis velit qui? Fuga tempora aspernatur nulla optio consequatur amet hic
                deleniti. Eligendi ab numquam minus earum rerum sunt asperiores in quo accusamus autem. Tempore sapiente
                nobis earum, modi neque ullam enim hic pariatur inventore? Qui, assumenda sint! Voluptates quasi est
                numquam accusantium fugiat. Esse, distinctio cum perferendis fugiat amet ratione quibusdam laboriosam
                vero ipsum fugit quam!deleniti. Eligendi ab numquam minus earum rerum sunt asperiores in quo accusamus autem. Tempore sapiente
                nobis earum, modi neque ullam enim hic pariatur inventore? Qui, assumenda sint! Voluptates quasi est
                numquam accusantium fugiat. 
            </div>
            <div class=""></div>
        </div>

        <div class="testi" id="testi2">
            <div class="name">Lee Haney</div>
            <img class="rc" id="rc2" src="Images/lh2.png">
            <div class="para">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae expedita nesciunt amet. Laboriosam,
                tempora. Magnam iure sint quod quis velit qui? Fuga tempora aspernatur nulla optio consequatur amet hic
                deleniti. Eligendi ab numquam minus earum rerum sunt asperiores in quo accusamus autem. Tempore sapiente
                nobis earum, modi neque ullam enim hic pariatur inventore? Qui, assumenda sint! Voluptates quasi est
                numquam accusantium fugiat. Esse, distinctio cum perferendis fugiat amet ratione quibusdam laboriosam
                vero ipsum fugit quam!deleniti. Eligendi ab numquam minus earum rerum sunt asperiores in quo accusamus autem. Tempore sapiente
                nobis earum, modi neque ullam enim hic pariatur inventore? Qui, assumenda sint! Voluptates quasi est
                numquam accusantium fugiat. 
            </div>
            <div class="img"></div>
        </div>

        <div class="testi" id="testi3">
            <div class="name">Phil Heath</div>
            <img class="rc" id="rc3" src="Images/ph2.png">
            <div class="para">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae expedita nesciunt amet. Laboriosam,
                tempora. Magnam iure sint quod quis velit qui? Fuga tempora aspernatur nulla optio consequatur amet hic
                deleniti. Eligendi ab numquam minus earum rerum sunt asperiores in quo accusamus autem. Tempore sapiente
                nobis earum, modi neque ullam enim hic pariatur inventore? Qui, assumenda sint! Voluptates quasi est
                numquam accusantium fugiat. Esse, distinctio cum perferendis fugiat amet ratione quibusdam laboriosam
                vero ipsum fugit quam!deleniti. Eligendi ab numquam minus earum rerum sunt asperiores in quo accusamus autem. Tempore sapiente
                nobis earum, modi neque ullam enim hic pariatur inventore? Qui, assumenda sint! Voluptates quasi est
                numquam accusantium fugiat. 
            </div>
            <div class="img"></div>
        </div>



        <div class="below">





        </div>

    </div>

</body>

</html>