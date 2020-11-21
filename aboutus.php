<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepmeup.com - About Us</title>

    <style>

            body{
                
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

        .rank{
            width: 1200px;
            margin: auto;
            margin-top: 10px;
            background-color: rgba(253, 230, 21,0.2);
            border-radius: 20px;
            
        }
        #rank{
            font-family: 'Poppins',sans-serif;
            width: 600px;
            font-size: 22px;
            text-align: center;
            margin: auto;
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

            <div class="line">

            </div>

        </div>
    </div>

    <div class="rank">
        <table id="rank">
            <tr>
              <th>Name:</th>
              <th>Sap Id:</th>
              
            </tr>
            <tr>
              <td>Shrey Dedhia</td>
              <td>60004180102</td>
              
            </tr>
            <tr>
              <td>Shubh Nandu</td>
              <td>60004180104</td>
              
            </tr>
            <tr>
                <td>Siddharth Salvi</td>
                <td>60004180105</td>
                
            </tr>
        </table>
    </div>



</body>

</html>