<?php
session_start();
include_once "access-db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mental Health</title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- <div class="w3-center sidebar">
        <a class="active" href="home.php">Home</a>
        <a href="volunteer.html">Volunteer</a>
        <a href="recommend.php">recommend</a>
        <a href="about.html">About</a>
    </div> -->

    <div class="content category-content">

        <!-- header section -->
        <div class="header-sec category-header-sec">
            <!-- nav bar -->
            <ul class="topnav">
                <li><a class="logo" href="home.php">Journey to Mental Wealth</a></li>

                <li class="right"><a href="recommend.php">Recommend a Resource</a></li>
                <li class="right"><a href="about.html">About</a></li>
            </ul>

            <div class="w3-row">

                <div class="w3-third">
                    <div class="category-fly">
                        <img src="images/butterfly.png" alt="">
                    </div>
                </div>

                <div class="w3-third">
                    <div class="w3-center category-heading">
                        <h1>validating our feelings through reading people's expreiences changes the way we see our
                            selves. we become more human.</h1>
                    </div>
                </div>

                <div class="w3-third">
                    <div class="second-category-fly">
                        <img src="images/butterfly.png" alt="">
                    </div>
                    <div class="wilderness-fly">
                        <img src="images/nature-leaves.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>


        <!-- end of header -->

        <h2>cateogry: Help</h2>

        <div class="category-links">
            <button class="tablink" onclick="openPage('Home', this, '#D8BFD8')">Home</button>
            <button class="tablink" onclick="openPage('Relationships', this, '#D8BFD8')"
                id="defaultOpen">Relationships</button>
            <button class="tablink" onclick="openPage('Religious', this, '#D8BFD8')">Religious</button>
            <button class="tablink" onclick="openPage('Family', this, '#D8BFD8')">Family</button>

            <div id="Home" class="tabcontent">
                <h3>Home</h3>
                <p>Home is where the heart is..</p>
            </div>

            <div id="Relationships" class="tabcontent">
                <h3>Relationships</h3>
                <div class="vl"></div>

                <div class="w3-row scrollable ">

                    <?php 
                    $new_sql = "SELECT * FROM mental_help WHERE category_id=3";
                    $new_result = $conn->query($new_sql);

                    if ($new_result->num_rows > 0) {
                       
                        while ($new_row = mysqli_fetch_array($new_result)) {
                            echo " <div class='w3-half'> ";
                            echo "<div class='article-container'>";
        
                            
                            $article = $new_row["article_title"];
                            $url = $new_row["article_url"]; 
                           
                            echo "<ul>
                                    <li><a class='tiptext' href='.$url.'>".$article."
                                        <iframe class='description' width='560' height='315' src='.$url.' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    </a></li>
                                </ul>
                                <hr>";

                        }
                    } else {
                        $_SESSION["message"] =  "No results were found in the family category.";
                    }

                    echo "
                                                        </div>
                                                        </div>
                                                        ";

                ?>

                </div>
            </div>

            <div id="Religious" class="tabcontent">
                <h3>Religious</h3>
                <div class="vl"></div>

                <div class="w3-row scrollable ">

                    <?php 
                    $new_sql = "SELECT * FROM mental_help WHERE category_id=2";
                    $new_result = $conn->query($new_sql);

                    if ($new_result->num_rows > 0) {
                       
                        while ($new_row = mysqli_fetch_array($new_result)) {
                            echo " <div class='w3-half'> ";
                            echo "<div class='article-container'>";
        
                            
                            $article = $new_row["article_title"];
                            $url = $new_row["article_url"]; 
                           
                            echo "<ul>
                                    <li><a class='tiptext' href='.$url.'>".$article."
                                        <iframe class='description' width='560' height='315' src='.$url.' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    </a></li>
                                </ul>
                                <hr>";

                        }
                    } else {
                        $_SESSION["message"] =  "No results were found in the family category.";
                    }

                    echo "
                                                        </div>
                                                        </div>
                                                        ";

                ?>

                </div>
            </div>

            <div id="Family" class="tabcontent">
                <h3>Family</h3>

                <div class="vl"></div>

                <div class="w3-row scrollable ">

                    <?php 
                    $new_sql = "SELECT * FROM mental_help WHERE category_id=1";
                    $new_result = $conn->query($new_sql);

                    if ($new_result->num_rows > 0) {
                       
                        while ($new_row = mysqli_fetch_array($new_result)) {
                            echo " <div class='w3-half'> ";
                            echo "<div class='article-container'>";
        
                            
                            $article = $new_row["article_title"];
                            $url = $new_row["article_url"]; 
                           
                            echo "<ul>
                                    <li><a class='tiptext' href='.$url.'>".$article."
                                        <iframe class='description' width='560' height='315' src='.$url.' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    </a></li>
                                </ul>
                                <hr>";

                        }
                    } else {
                        $_SESSION["message"] =  "No results were found in the family category.";
                    }

                    echo "
                                                        </div>
                                                        </div>
                                                        ";

                ?>

                </div>
            </div>



        </div>
    </div>






    <!-- footer design -->
    <hr class="cat-divider">
    <footer>
        <div class="w3-row">

            <div class="w3-third w3-center">
                <p>
                    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">wandika</a>
                </p>
            </div>

            <div class="w3-third w3-center">
                <p class="w3-center"> Copy right 2020</p>
            </div>

            <div class="w3-third w3-center">
                <p>Contact Us</p>
                <a href="https://icons8.com/icon/pmiijGGgOR0N/butterfly">Butterfly icon by Icons8</a>
            </div>

        </div>
    </footer>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>
    $(".tiptext").mouseover(function() {
        $(this).children(".description").show();
    }).mouseout(function() {
        $(this).children(".description").hide();
    });
    </script>

</body>

</html>