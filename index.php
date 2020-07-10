<!DOCTYPE html>
<html>
<title>J2MW</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">

<script src="jquery-3.5.1.min.js"></script>

<body>
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="content landing-page">
            <div class="landing-img header-img">
                <img src="images/head.png" alt="">
            </div>


            <div class="w3-row row-content">
                <div class="w3-half">
                    <div class="index-heading">
                        <h3 class="w3-padding-16">Journey to Mental Wealth</h3>
                        <p>You need someone that understands your pain - we are that someone. We are the safe space.
                        </p>
                    </div>

                    <!-- subscribe button -->
                    <div class="w3-center subscribe-form w3-padding-64">
                        <form action="">
                            <input class="email-field" type="text" placeholder="Enter your email">
                            <input class="subscribe" type="submit" value="Never Miss a Resource. Subscribe">
                        </form>

                        <a href="#info" class="glow">See more</a>

                    </div>



                </div>

                <!-- info links  -->
                <div id="info" class="info-links w3-center w3-padding-64 w3-half">
                    <button id="1" onclick="about()" class="aboutButton">What is Mental Wealth?</button>
                    <hr class="about-line">
                    <p class="centerp" id="about"></p><br>
                    <button id="2" onclick="student()" class="aboutButton">Why Should you care?</button>
                    <hr class="about-line">
                    <p class="centerp" id="student"></p><br>
                    <button id="3" onclick="tutor()" class="aboutButton">What do we do?</button>
                    <hr class="about-line">
                    <p class="centerp" id="tutor"></p><br>
                    <button id="4" onclick="benefits()" class="aboutButton">How can you help?</button>
                    <hr class="about-line">
                    <p class="centerp" id="benefits"></p><br>

                    <a class="w3-center w3-button w3-black" href="home.php">Check out our articles</a>
                </div>

            </div>






        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function about() {
            if (document.getElementById("about").innerHTML == "") {
                document.getElementById("about").innerHTML = "At UBtutoring, we know how challenging computer science courses can be (we are computer science students ourselves!), so we created a system to help student sand tutors find each other in a social setting. You are free to browse different courses for a tutor, view information about that tutor, and choose a tutor who's schedule aligns with yours.";

            } else {
                document.getElementById("about").innerHTML = "";
            }
        }

        function student() {
            if (document.getElementById("student").innerHTML == "") {
                document.getElementById("student").innerHTML = "Any current student at UB can sign up to be a student, we just ask that you are currently in the class that you choose to be tutored in to make sure the students that need help with their grades are able to get it. Once you create an account, you can start browsing classes, adding to your profile, and making appointments with tutors.!";
            } else {
                document.getElementById("student").innerHTML = "";
            }
        }

        function tutor() {
            if (document.getElementById("tutor").innerHTML == "") {
                document.getElementById("tutor").innerHTML = "Any student at UB, whether undergraduate, graduate, or post-graduate can sign up to be a tutor with UBtutoring as long as you have a valid UB email address. As of right now, our site only allows tutors to choose one class to teach, in the future we are hoping to expand those options! Once you choose a course an complete sign-up, it encouraged that you complete.";
            } else {
                document.getElementById("tutor").innerHTML = "";
            }
        }

        function benefits() {
            if (document.getElementById("benefits").innerHTML == "") {
                document.getElementById("benefits").innerHTML = "Being a tutor is fulfilling, looks great on a resume, and is easy to track the hours you put in with UBtutoring! On your tutor profile page, there is an element called \"tutor score\". This is updated every time a student completes a tutoring session with you. You can use this to track your time with us, as well as cite it on your resume. We are curently working with UB to allow a certain number of tutoring hours to count as credit hours so keep checking back!";
            } else {
                document.getElementById("benefits").innerHTML = "";
            }
        }
    </script>

</body>

</html>