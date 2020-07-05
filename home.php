<?php
session_start();
include_once "access-db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Mental Health</title>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- <div class="w3-center sidebar">
        <a class="active" href="#home">Home</a>
        <a href="volunteer.html">Volunteer</a>
        <a href="recommend.php">recommend</a>
        <a href="about.html">About</a> -->
    </div>

    <div class="content">

        <!-- top header section -->
        <div id="home" class="header-sec">
            <!-- nav bar -->
            <ul class="topnav">
                <li><a class="logo" href="#home">Journey to Mental Wealth</a></li>

                <li class="right"><a href="recommend.php">Recommend a Resource</a></li>
                <li class="right"><a href="about.html">About</a></li>
            </ul>

            <div class="header-img">
                <img src="images/head.png" alt="">
            </div>



            <!-- heading -->
            <div class="heading">
                <h1 class="top-word">.Live With Care.</h1>

                <h1 class="bottom-word">a collection of resources about mental health</h1>
            </div>


            <div class="arrow bounce">
                <a class="fa fa-arrow-down fa-1x" href="#feature-icons"></a>
            </div>

        </div>
        <!-- end of th header section -->


        <!-- circle nav icons -->
        <div id="feature-icons" class="browse-icons">
            <h3>Browse Options</h3>
            <p class="nav-description">Choose one of the features to navigate to their respective pages. The 2 center
                buttons will change the content for the categories displayed.</p>

            <div class="w3-container w3-padding-64 w3-center w3-theme-l5" id="team">
                <div class="w3-row"><br>


                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        
                            <p> <a href="category-validate.php">Signs of mental abuse</a> </p>
                       

                    </div>

                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        
                            <p> <a href="category-help.php">How to get Help</a> </p>
                
                    </div>

                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        <p><a href="recommend.php">Recommend a Resource </a></p>
                    </div>

                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        <p><a href="volunteer.html">Volunteer </a></p>
                    </div>

                </div>
            </div>

        </div>

        <hr class="cat-divider">

        <div class="categories">
            <h3>Content Category</h3>
            <p class="nav-description">Each category has articles organised based on different groups. Select a category and click the title of the group to be routed to the respective page</p>
            
<br><br><br>

            <div class="category-links">
                <button class="tablink" onclick="openPage('Validate', this, '#D8BFD8')" id="defaultOpen">Signs of mental abuse</button>
                <button class="tablink" onclick="openPage('Help', this, '#D8BFD8')">How to get Help</button>

                <div id="Validate" class="tabcontent">
                    

                    <div class="category-cards">
                        <div class="row">

                            <?php
                            $sql = "SELECT category_name, valid_count FROM mental_categories";
                            $result = $conn->query($sql);
                        // access the resources in each category

                        if ($result->num_rows > 0) {

                            while ($row = mysqli_fetch_array($result)) {
                                echo " <div class='column'> ";
                                echo "<div class='card'>";

                                $category = $row["category_name"];
                                
                                $resources = $row["valid_count"];
                                

                                echo "<h3><a href='category-validate.php'>" . $category . "</a></h3>";
                                echo "<p>" . $resources . " resources </p>";
                                echo "<p> <a class='recommend-link' href=''> Recommend a resource </a> </p>";

                                echo "
                                                            </div>
                                                            </div>
                                                            ";
                            }
                        }
                    ?>

                        </div>

                    </div>



                </div>

                <div id="Help" class="tabcontent">
                   
                    <div class="category-cards">
                        <div class="row">
                            <?php
                        // access the resources in each category
                        $new_sql = "SELECT category_name, help_count FROM mental_categories";
                        $new_result = $conn->query($new_sql);

                        if ($new_result->num_rows > 0) {

                            while ($new_row = mysqli_fetch_array($new_result)) {
                                echo " <div class='column'> ";
                                echo "<div class='card'>";

                                $category = $new_row["category_name"];
                                
                                $resources = $new_row["help_count"];
                                

                                echo "<h3><a href='category-help.php'>" . $category . "</a></h3>";
                                echo "<p>" . $resources . " resources </p>";
                                echo "<p> <a class='recommend-link' href=''> Recommend a resource </a> </p>";

                                echo "
                                                            </div>
                                                            </div>
                                                            ";
                            }
                        }

            ?>

                        </div>

                    </div>


                </div>

            </div>

            <!-- first row of cards for the categories -->

        </div>


        <hr class="cat-divider">
        <!-- footer design -->
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
                </div>

            </div>


        </footer>


    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>
    $(document).ready(function() {


    });
    </script>

</body>

</html>