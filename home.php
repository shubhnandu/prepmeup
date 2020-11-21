<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Prepmeup.com - Home</title>
    <style>
        .full {

            background-color: rgb(253, 251, 214);
            width: 100%;
            height: 100%;


        }

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

        .profileicon:hover{
            max-width: 36px;
        }


        .welcome {
            display: flex;
            margin-left: 2px;
            box-sizing: border-box;

        }

        .welcome-text {
            order: 0;
        }

        .illus1 {

            order: 2;
            margin-left: 100px;
            margin-top: 100px;
            max-height: 350px;
        }

        .welcome h2,
        p {

            width: 600px;
        }

        .signup{
            width: 120px;
            height: 40px;
            background: transparent;
            border: solid black 2px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: normal;
            margin-bottom: 10px;
            font-family: 'Poppins',sans-serif;
            cursor: pointer;
            transition:0.5s ;
        }

        .signup:hover{
            color: rgb(255, 241, 202);
            font-size: 22px;
            border-color: white;
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
    <div class="full">
        <div class="upper">
            <div class="topcont">
                <nav class="navbar">
                    <img class="logo" src="Images/preplogo2.png" id="logo" onmouseover="setNewLogo()" onmouseout="setOldLogo()">

                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <!--<li><a href="testnew.html">Quiz Time</a></li>!-->
                        <!--<li><a>Stressed Up?</a></li>!-->
                        <li><a href="testim.php">Testimonials</a></li>

                        <li><a href="aboutus.php">About Us</a></li>
                        
                    </ul>

                    <a href="register.php">
                    <img onmouseover="setNewProfIcon()" onmouseout="setOldProfIcon()" id="proficon" class="profileicon" src="Images/profileicon.png">
                    </a>
                    
                </nav>

                <div class="line">

                </div>

                <div class="welcome">
                    <div class="welcome-text">
                        <h2>
                            Finding subjects boring and difficult to study?
                        </h2>

                        <p>
                            Here at Prepmeup, we specialize in making quizzes, thus making studying a better &
                            interesting experience.

                        </p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, iste perspiciatis.
                            Perferendis
                            distinctio similique maiores totam error aliquid sapiente, qui vitae ratione odit? Ex
                            voluptatum
                            exercitationem voluptas dolor, blanditiis omnis praesentium soluta eum ducimus atque
                            consequatur
                            voluptatem eveniet cum vero recusandae qui. Sit, aliquam vel? Voluptatem, quibusdam. Nostrum
                            eos
                            aliquam ipsum fugiat deleniti incidunt cumque omnis laboriosam eum perferendis, maxime rem
                            esse
                            nt magni
                            ex rem veritatis architecto explicabo odit officia nemo suscipit cupiditate deserunt quod
                            vitae
                            ipsa eius maiores, id repudiandae. Aut omnis quod repellendus incidunt exercitationem
                            placeat.
                            Itaque iste, non alias consequatur quibusdam et sunt soluta quis voluptates odio fuga neque
                            veniam unde corporis perferendis vitae omnis natus ipsum repellendus dolores, distinctio
                            consectetur assumenda quae. Voluptate ipsa voluptas architecto nostrum quos aliquam?
                        </p>

                        <button class="signup" type="submit"><a href="login.php" style="text-decoration:none;color:white;">Log In</a></button>
                    </div>

                    <img class="illus1" src="Images/illus1.png">
                </div>



            </div>
        </div>


        <div class="rank">
            <table id="rank">
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Points</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Lee Haney</td>
                  <td>8</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ronnie Coleman</td>
                  <td>8</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Arnold</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Phil Heath</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dorian Yates</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Jay Cutler</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Sergio Oliva</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Frank Zane</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Larry Scott</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Franco Columbu</td>
                    <td>2</td>
                </tr>
              </table>
        </div>
    </div>
</body>

<script>

    function setNewProfIcon()
    {
        
        document.getElementById("proficon").src="Images/profileicon5.png";
    }

    function setOldProfIcon()
    {
        document.getElementById("proficon").src="Images/profileicon.png";
    }

    function setNewLogo(){
        document.getElementById("logo").src="Images/preplogo3.png";
    }

    function setOldLogo(){
        document.getElementById("logo").src="Images/preplogo2.png";
    }
</script>

</html>