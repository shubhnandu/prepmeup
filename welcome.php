<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Prepmeup.com - Quiz</title>

    <style>

    a{
        color:black;
    }
    html {
        scroll-behavior: smooth;
    }

    .upper {
        height: fit-content;

        
        background-image: linear-gradient(to right, rgb(252, 136, 27), rgb(253, 230, 21));
        /*background-image: linear-gradient(to right, rgb(255, 255, 255), rgb(250, 250, 242));*/
        margin-bottom:60px;

    }

    .topcont {
        width: 1200px;
    
        
        height: fit-content;
        font-family: 'Poppins', sans-serif;
        

    }

    .navbar {
        top:-1px;
        left:-5px;
        padding:0px 200px;
        display: flex;
        width:1200px;
        height: 50px;
        background-image: linear-gradient(to right, rgb(252, 136, 27), rgb(253, 230, 21));
        position:fixed;
        
 
        
        justify-content: space-between;
        align-items: center;
        border-bottom:2px solid black;
        

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
        color: rgb(0, 132, 255);
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



    .dropdown-content {

        display: none;
        position: absolute;
        background-color: #ffc171;
        min-width: 160px;
        border-radius: 10px;
        box-shadow: 0px 8px 16px 0px rgba(250, 166, 117, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        margin: 5px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #fdcece9a;
        border-radius: 10px;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .quiz {
        font-family: 'Poppins', sans-serif;
        width: 1200px;
        
        height: fit-content;
        margin: auto;
        
        border-radius: 20px;
    }

    .quiz div {
        width: 500px;
        margin: auto;
    }


    .c1,
    .c2,
    .c3,
    .c4,
    .c5,
    .c6 {


        left: 200px;
        top: 200px;

    }



    .next,
    .prev {
        border: 1px solid black;
        width: 100px;
        background: none;
        font-size: 18px;
        font-weight: bold;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
    }

    .next {
        float: right;
    }

    .submit {


        border: 1px solid black;
        width: 200px;
        background: none;
        font-size: 18px;
        font-weight: bold;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;


    }

    #submit {
        border: 1px solid black;
        width: 100px;
        background: none;
        font-size: 18px;
        font-weight: bold;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        margin-bottom: 10px;

    }

    .submit:hover {
        font-weight: bolder;
    }

    .display {
        visibility: hidden;
    }

    #notreqdsub {
        visibility: hidden;

    }

    .quiz-topic {


        color: red;
        font-size: 28px;
    }

   #quiz11,#quiz33{
       background-color: rgb(255, 236, 125) ;
   }

   #quiz22{
       background-color: rgb(255, 162, 74);
   }

   #w1para,#w2para,#w3para,#w4para,#w5para,#w6para{
       
   }

   .text-danger{
       

   }

   
    
</style>
    
</head>

<body>





    <div class="full">

        <div class="upper">
            <div class="topcont">
                <nav class="navbar">
                    <img class="logo" src="Images/preplogo2.png">

                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="aboutme.php">ME!</a></li>
                        <li class="dropdown"><a class="dropdown-button">Quiz Time</a>
                            <div class="dropdown-content">
                                <a href="#quiz1">Quiz 1</a>
                                <a href="#quiz2">Quiz 2</a>
                                <a href="#quiz3">Quiz 3</a>
                            </div>
                        </li>
                        <!--<li><a>Stressed Up?</a></li>!-->
                        
                    </ul>

                    
                    <a href="logout.php">

                        <img onmouseover="setNewProfIcon()" onmouseout="setOldProfIcon()" id="proficon" class="profileicon" src="Images/profileicon.png">


                    </a>
                    
                </nav>

                

                
            </div>
        </div>
    </div>


<div class="lower">

<div class="quiz1" id="quiz1">

    <div class="quiz" id="quiz11">


        <div class="c1">

            <h2 class="quiz-topic">Theory Of Computer Science</h2>
            <h3>What is 8 x 9 + 10 / 2 ?</h3>
            <input type="radio" id="result1" name="choice1" value="A1" class="butt2" />234<br />
            <input type="radio" id="result2" name="choice1" value="B1" class="butt2" />112<br />
            <input type="radio" id="result3" name="choice1" value="C1" class="butt2" />876<br />
            <input type="radio" id="result4" name="choice1" value="D1" class="butt2" />77<br />
            <p id="w1para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="1">Next</button>!-->
        </div>

        <div class="c2">
            <h3>What is 2 x 6 + 10</h3>
            <input type="radio" id="result5" name="choice2" value="A2" class="butt2" />22<br />
            <input type="radio" id="result6" name="choice2" value="B2" class="butt2" />72<br />
            <input type="radio" id="result7" name="choice2" value="C2" class="butt2" />32<br />
            <input type="radio" id="result8" name="choice2" value="D2" class="butt2" />1092<br />
            <p id="w2para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="2">Next</button>!-->
        </div>

        <div class="c3">
            <h3>Who is the President of INDIA?</h3>
            <input type="radio" id="result9" name="choice3" value="A3" class="butt2" />Shri. Ramnath
            Kovind<br />
            <input type="radio" id="result10" name="choice3" value="B3" class="butt2" />Rahul Gandhi<br />
            <input type="radio" id="result11" name="choice3" value="C3" class="butt2" />Harshad Mehta<br />
            <input type="radio" id="result12" name="choice3" value="D3" class="butt2" />Shri. Rajnath
            Singh<br />
            <p id="w3para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="3">Next</button>!-->
        </div>

        <div class="c4">
            <h3>How many options are given in KBC?</h3>
            <input type="radio" id="result13" name="choice4" value="A4" class="butt2" />8<br />
            <input type="radio" id="result14" name="choice4" value="B4" class="butt2" />4<br />
            <input type="radio" id="result15" name="choice4" value="C4" class="butt2" />1<br />
            <input type="radio" id="result16" name="choice4" value="D4" class="butt2" />3<br />
            <p id="w4para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="4">Next</button>!-->
        </div>

        <div class="c5">
            <h3>What is Absolute Zero temperature?</h3>
            <input type="radio" id="result17" name="choice5" value="A5" class="butt2" />0 K<br />
            <input type="radio" id="result18" name="choice5" value="B5" class="butt2" />0 C<br />
            <input type="radio" id="result19" name="choice5" value="C5" class="butt2" />-273 C<br />
            <input type="radio" id="result20" name="choice5" value="D5" class="butt2" />32 K<br />
            <p id="w5para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="5">Next</button>!-->
        </div>

        <div class="c6">
            <h3>What is 2 + 3?</h3>
            <input type="radio" id="result21" name="choice6" value="A6" class="butt2" />-1<br />
            <input type="radio" id="result22" name="choice6" value="B6" class="butt2" />8<br />
            <input type="radio" id="result23" name="choice6" value="C6" class="butt2" />55<br />
            <input type="radio" id="result24" name="choice6" value="D6" class="butt2" />5<br />
            <p id="w6para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" onclick="next()" id="6">Next</button>!-->



            <p id="para2"></p>

            <button id="submit" type="button" onclick="getInput(this.value)">Submit</button>
            <button class="submit" onclick="check()">Check Answers</button>
            <h4 id="para3" class="bg-success"></h4>
            <h4 id="para4" class="bg-danger"></h4>
            <h4 id="para20" class="bg-warning"></h4>
            <h4 id="para21" class="bg-warning"></h4>

        </div>




    </div>

</div>

<div class="quiz2" id="quiz2">

    <div class="quiz" id="quiz22">


        <div class="c1">

            <h2 class="quiz-topic">Quiz 2</h2>
            <h3>What is 8 x 9 + 10 / 2 ?</h3>
            <input type="radio" id="result1" name="choice1" value="A1" class="butt2" />234<br />
            <input type="radio" id="result2" name="choice1" value="B1" class="butt2" />112<br />
            <input type="radio" id="result3" name="choice1" value="C1" class="butt2" />876<br />
            <input type="radio" id="result4" name="choice1" value="D1" class="butt2" />77<br />
            <p id="w1para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="1">Next</button>!-->
        </div>

        <div class="c2">
            <h3>What is 2 x 6 + 10</h3>
            <input type="radio" id="result5" name="choice2" value="A2" class="butt2" />22<br />
            <input type="radio" id="result6" name="choice2" value="B2" class="butt2" />72<br />
            <input type="radio" id="result7" name="choice2" value="C2" class="butt2" />32<br />
            <input type="radio" id="result8" name="choice2" value="D2" class="butt2" />1092<br />
            <p id="w2para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="2">Next</button>!-->
        </div>

        <div class="c3">
            <h3>Who is the President of INDIA?</h3>
            <input type="radio" id="result9" name="choice3" value="A3" class="butt2" />Shri. Ramnath
            Kovind<br />
            <input type="radio" id="result10" name="choice3" value="B3" class="butt2" />Rahul Gandhi<br />
            <input type="radio" id="result11" name="choice3" value="C3" class="butt2" />Harshad Mehta<br />
            <input type="radio" id="result12" name="choice3" value="D3" class="butt2" />Shri. Rajnath
            Singh<br />
            <p id="w3para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="3">Next</button>!-->
        </div>

        <div class="c4">
            <h3>How many options are given in KBC?</h3>
            <input type="radio" id="result13" name="choice4" value="A4" class="butt2" />8<br />
            <input type="radio" id="result14" name="choice4" value="B4" class="butt2" />4<br />
            <input type="radio" id="result15" name="choice4" value="C4" class="butt2" />1<br />
            <input type="radio" id="result16" name="choice4" value="D4" class="butt2" />3<br />
            <p id="w4para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="4">Next</button>!-->
        </div>

        <div class="c5">
            <h3>What is Absolute Zero temperature?</h3>
            <input type="radio" id="result17" name="choice5" value="A5" class="butt2" />0 K<br />
            <input type="radio" id="result18" name="choice5" value="B5" class="butt2" />0 C<br />
            <input type="radio" id="result19" name="choice5" value="C5" class="butt2" />-273 C<br />
            <input type="radio" id="result20" name="choice5" value="D5" class="butt2" />32 K<br />
            <p id="w5para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="5">Next</button>!-->
        </div>

        <div class="c6">
            <h3>What is 2 + 3?</h3>
            <input type="radio" id="result21" name="choice6" value="A6" class="butt2" />-1<br />
            <input type="radio" id="result22" name="choice6" value="B6" class="butt2" />8<br />
            <input type="radio" id="result23" name="choice6" value="C6" class="butt2" />55<br />
            <input type="radio" id="result24" name="choice6" value="D6" class="butt2" />5<br />
            <p id="w6para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" onclick="next()" id="6">Next</button>!-->



            <p id="para2"></p>

            <button id="submit" type="button" onclick="getInput(this.value)">Submit</button>
            <button class="submit" onclick="check()">Check Answers</button>
            <h4 id="para3" class="bg-success"></h4>
            <h4 id="para4" class="bg-danger"></h4>
            <h4 id="para20" class="bg-warning"></h4>
            <h4 id="para21" class="bg-warning"></h4>

        </div>




    </div>

</div>

<div class="quiz3" id="quiz3">

    <div class="quiz" id="quiz33">


        <div class="c1">

            <h2 class="quiz-topic">Quiz 3</h2>
            <h3>What is 8 x 9 + 10 / 2 ?</h3>
            <input type="radio" id="result1" name="choice1" value="A1" class="butt2" />234<br />
            <input type="radio" id="result2" name="choice1" value="B1" class="butt2" />112<br />
            <input type="radio" id="result3" name="choice1" value="C1" class="butt2" />876<br />
            <input type="radio" id="result4" name="choice1" value="D1" class="butt2" />77<br />
            <p id="w1para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="1">Next</button>!-->
        </div>

        <div class="c2">
            <h3>What is 2 x 6 + 10</h3>
            <input type="radio" id="result5" name="choice2" value="A2" class="butt2" />22<br />
            <input type="radio" id="result6" name="choice2" value="B2" class="butt2" />72<br />
            <input type="radio" id="result7" name="choice2" value="C2" class="butt2" />32<br />
            <input type="radio" id="result8" name="choice2" value="D2" class="butt2" />1092<br />
            <p id="w2para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="2">Next</button>!-->
        </div>

        <div class="c3">
            <h3>Who is the President of INDIA?</h3>
            <input type="radio" id="result9" name="choice3" value="A3" class="butt2" />Shri. Ramnath
            Kovind<br />
            <input type="radio" id="result10" name="choice3" value="B3" class="butt2" />Rahul Gandhi<br />
            <input type="radio" id="result11" name="choice3" value="C3" class="butt2" />Harshad Mehta<br />
            <input type="radio" id="result12" name="choice3" value="D3" class="butt2" />Shri. Rajnath
            Singh<br />
            <p id="w3para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="3">Next</button>!-->
        </div>

        <div class="c4">
            <h3>How many options are given in KBC?</h3>
            <input type="radio" id="result13" name="choice4" value="A4" class="butt2" />8<br />
            <input type="radio" id="result14" name="choice4" value="B4" class="butt2" />4<br />
            <input type="radio" id="result15" name="choice4" value="C4" class="butt2" />1<br />
            <input type="radio" id="result16" name="choice4" value="D4" class="butt2" />3<br />
            <p id="w4para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="4">Next</button>!-->
        </div>

        <div class="c5">
            <h3>What is Absolute Zero temperature?</h3>
            <input type="radio" id="result17" name="choice5" value="A5" class="butt2" />0 K<br />
            <input type="radio" id="result18" name="choice5" value="B5" class="butt2" />0 C<br />
            <input type="radio" id="result19" name="choice5" value="C5" class="butt2" />-273 C<br />
            <input type="radio" id="result20" name="choice5" value="D5" class="butt2" />32 K<br />
            <p id="w5para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" id="5">Next</button>!-->
        </div>

        <div class="c6">
            <h3>What is 2 + 3?</h3>
            <input type="radio" id="result21" name="choice6" value="A6" class="butt2" />-1<br />
            <input type="radio" id="result22" name="choice6" value="B6" class="butt2" />8<br />
            <input type="radio" id="result23" name="choice6" value="C6" class="butt2" />55<br />
            <input type="radio" id="result24" name="choice6" value="D6" class="butt2" />5<br />
            <p id="w6para" class="text-danger"></p>
            <!--<button type="submit" class="prev">Prev</button>
            <button type="submit" class="next" onclick="next()" id="6">Next</button>!-->



            <p id="para2"></p>

            <button id="submit" type="button" onclick="getInput(this.value)">Submit</button>
            <button class="submit" onclick="check()">Check Answers</button>
            <h4 id="para3" class="bg-success"></h4>
            <h4 id="para4" class="bg-danger"></h4>
            <h4 id="para20" class="bg-warning"></h4>
            <h4 id="para21" class="bg-warning"></h4>

        </div>




    </div>

</div>

</div>




    
    


    <script>
        var names = [];
        function getInput(butt2) {
            var elem = document.getElementsByClassName("butt2");
            for (var k = 0; k < elem.length; k++) {

                if (elem[k].checked) {
                    names.push(elem[k].value);
                }
            }


        }

        function check2(butt2){

        }

        function display() {

            for (var j = 0; j < names.length; j++) {
                document.getElementById("para2").innerHTML = names;
            }


        }

        function check() {
            var c = 0;
            var w = 0;
            var wrong = [];
            var result = new Array("D1", "A2", "A3", "B4", "C5", "D6");

            for (var i = 0; i < 6; i++) {
                if (result[i] == names[i]) {
                    c = c + 1;
                }
                else {
                    w = w + 1;
                    wrong.push(i + 1);
                }
            }
            var score = (c * 3) - w;
            var per = (score / 18) * 100;
            document.getElementById("para3").innerHTML = "The total right answers are " + c;
            document.getElementById("para4").innerHTML = "The total wrong answers are " + w;
            document.getElementById("para20").innerHTML = "Your score is " + score;
            if (score > 0) {
                document.getElementById("para21").innerHTML = "The percentage is " + per;
            }
            else {
                document.getElementById("para21").innerHTML = "";
            }
            if (wrong.includes(1)) {
                document.getElementById("w1para").innerHTML = "WRONG.The right answer is " + result[0];
                document.getElementById("w1para").style.backgroundColor="red";
                document.getElementById("w1para").style.fontWeight="bold";
                document.getElementById("w1para").style.padding="5px";
                document.getElementById("w1para").style.borderRadius="5px";
            }
            else {
                document.getElementById("w1para").innerHTML = "<p class='text-success'>Your Answer is RIGHT</p>";
                document.getElementById("w1para").style.backgroundColor="green";
                document.getElementById("w1para").style.fontWeight="bold";
                document.getElementById("w1para").style.padding="5px";
                document.getElementById("w1para").style.borderRadius="5px";
            }
            if (wrong.includes(2)) {
                document.getElementById("w2para").innerHTML = "WRONG.The right answer is " + result[1];
                document.getElementById("w2para").style.backgroundColor="red";
                document.getElementById("w2para").style.fontWeight="bold";
                document.getElementById("w2para").style.padding="5px";
                document.getElementById("w2para").style.borderRadius="5px";
            }
            else {
                document.getElementById("w2para").innerHTML = "<p class='text-success'>Your Answer is RIGHT</p>";
                document.getElementById("w2para").style.backgroundColor="green";
                document.getElementById("w2para").style.fontWeight="bold";
                document.getElementById("w2para").style.padding="5px";
                document.getElementById("w2para").style.borderRadius="5px";
            }
            if (wrong.includes(3)) {
                document.getElementById("w3para").innerHTML = "WRONG.The right answer is " + result[2];
                document.getElementById("w3para").style.backgroundColor="red";
                document.getElementById("w3para").style.fontWeight="bold";
                document.getElementById("w3para").style.padding="5px";
                document.getElementById("w3para").style.borderRadius="5px";
            }
            else {
                document.getElementById("w3para").innerHTML = "<p class='text-success'>Your Answer is RIGHT</p>";
                document.getElementById("w3para").style.backgroundColor="green";
                document.getElementById("w3para").style.fontWeight="bold";
                document.getElementById("w3para").style.padding="5px";
                document.getElementById("w3para").style.borderRadius="5px";
            }
            if (wrong.includes(4)) {
                document.getElementById("w4para").innerHTML = "WRONG.The right answer is " + result[3];
                document.getElementById("w4para").style.backgroundColor="red";
                document.getElementById("w4para").style.fontWeight="bold";
                document.getElementById("w4para").style.padding="5px";
                document.getElementById("w4para").style.borderRadius="5px";
            }
            else {
                document.getElementById("w4para").innerHTML = "<p class='text-success'>Your Answer is RIGHT</p>";
                document.getElementById("w4para").style.backgroundColor="green";
                document.getElementById("w4para").style.fontWeight="bold";
                document.getElementById("w4para").style.padding="5px";
                document.getElementById("w4para").style.borderRadius="5px";
            }
            if (wrong.includes(5)) {
                document.getElementById("w5para").innerHTML = "WRONG.The right answer is " + result[4];
                document.getElementById("w5para").style.backgroundColor="red";
                document.getElementById("w5para").style.fontWeight="bold";
                document.getElementById("w5para").style.padding="5px";
                document.getElementById("w5para").style.borderRadius="5px";
            }
            else {
                document.getElementById("w5para").innerHTML = "<p class='text-success'>Your Answer is RIGHT</p>";
                document.getElementById("w5para").style.backgroundColor="green";
                document.getElementById("w5para").style.fontWeight="bold";
                document.getElementById("w5para").style.padding="5px";
                document.getElementById("w5para").style.borderRadius="5px";
            }
            if (wrong.includes(6)) {
                document.getElementById("w6para").innerHTML = "WRONG.The right answer is " + result[5];
                document.getElementById("w6para").style.backgroundColor="red";
                document.getElementById("w6para").style.fontWeight="bold";
                document.getElementById("w6para").style.padding="5px";
                document.getElementById("w6para").style.borderRadius="5px";
            }
            else {
                document.getElementById("w6para").innerHTML = "<p class='text-success'>Your Answer is RIGHT</p>";
                document.getElementById("w6para").style.backgroundColor="green";
                document.getElementById("w6para").style.fontWeight="bold";
                document.getElementById("w6para").style.padding="5px";
                document.getElementById("w6para").style.borderRadius="5px";
            }

        }


    </script>

<script>

    function setNewProfIcon()
    {
        
        document.getElementById("proficon").src="Images/profileicon5.png";
    }

    function setOldProfIcon()
    {
        document.getElementById("proficon").src="Images/profileicon.png";
    }

</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>



</body>

</html>