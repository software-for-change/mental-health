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

    <div class="content">

        <!-- top header section -->
        <div id="home" class="header-sec">
            <!-- nav bar -->
            <?php include 'header.php';?>

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

            <div class="desktop-browse-icons w3-padding-64 w3-center w3-theme-l5">
                <div class="w3-row"><br>


                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>

                        <p> <a href="category-validate.php">Did you know?</a> </p>


                    </div>

                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>

                        <p> <a href="category-help.php">How you can Help</a> </p>

                    </div>

                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        <p><a href="recommend.php">Recommend a Resource </a></p>
                    </div>

                    <div class="w3-quarter">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        <p><a href="volunteer.php">Volunteer </a></p>
                    </div>

                </div>
            </div>

        </div>




        <hr class="cat-divider">

        <div class="categories">
            <h3>Content Category</h3>
            <p class="nav-description">Each category has articles organised based on different groups. Select a category
                and click the title of the group to be routed to the respective page</p>

            <br><br><br>

            <div class="category-links">
                <button class="tablink" onclick="openPage('Validate', this, '#D8BFD8')" id="defaultOpen">Did you
                    Know?</button>
                <button class="tablink" onclick="openPage('Help', this, '#D8BFD8')">How you can Help</button>

                <div id="Validate" class="tabcontent">
                    <button class="subtablink" onclick="openSubCategory('family', this, 'red')">family</button>
                    <button class="subtablink" onclick="openSubCategory('friends', this, 'green')"
                        id="mainOpen">friends</button>
                    <button class="subtablink" onclick="openSubCategory('workSchool', this, 'blue')">Work &
                        School</button>
                    <button class="subtablink" onclick="openSubCategory('personal', this, 'orange')">personal</button>

                    <div id="family" class="subcategorycontent">
                        <h3>family</h3>
                        <p>family is where the heart is..</p>
                    </div>

                    <div id="friends" class="subcategorycontent">
                        <h3>friends</h3>
                        <p>Some friends this fine day!</p>
                    </div>

                    <div id="workSchool" class="subcategorycontent">
                        <h3>workSchool</h3>
                        <p>Get in touch, or swing by for a cup of coffee.</p>
                    </div>

                    <div id="personal" class="subcategorycontent">
                        <h3>personal</h3>
                        <p>Who we are and what we do.</p>
                    </div>


                    <!-- the content for the tabs  -->
                    <!-- <div class="category-cards">
                        <div class="row">

                            <?php
                                // $sql = "SELECT category_name, valid_count FROM mental_categories";
                                // $result = $conn->query($sql);
                                
                                // if ($result->num_rows > 0) {

                                //     while ($row = mysqli_fetch_array($result)) {
                                //         echo " <div class=' paper-cols'> ";
                                //         echo "<div class='paper'>";

                                //         $category = $row["category_name"];

                                //         $resources = $row["valid_count"];

                                //         echo "<h4><a href='category-validate.php'>" . $category . "</a></h4>";
                                //         echo "<p>" . $resources . " articles </p>";
                            
                                //         echo "
                                //                                                             </div>
                                //                                                             </div>
                                //                                                             ";
                                //     }
                                // }
                                ?>

                        </div>

                    </div> -->



                </div>

                <div id="Help" class="tabcontent">

                    <button class="subtablink" onclick="openSubCategory('family', this, 'red')">family</button>
                    <button class="subtablink" onclick="openSubCategory('friends', this, 'green')"
                        id="mainOpen">friends</button>
                    <button class="subtablink" onclick="openSubCategory('workSchool', this, 'blue')">Work &
                        School</button>
                    <button class="subtablink" onclick="openSubCategory('personal', this, 'orange')">personal</button>

                    <div id="family" class="subcategorycontent">
                        <h3>family</h3>
                        <p>family is where the heart is..</p>
                    </div>

                    <div id="friends" class="subcategorycontent">
                        <h3>friends</h3>
                        <p>Some friends this fine day!</p>
                    </div>

                    <div id="workSchool" class="subcategorycontent">
                        <h3>workSchool</h3>
                        <p>Get in touch, or swing by for a cup of coffee.</p>
                    </div>

                    <div id="personal" class="subcategorycontent">
                        <h3>personal</h3>
                        <p>Who we are and what we do.</p>
                    </div>

                    <!-- <div class="category-cards">
                        <div class="row">
                            <?php
                                // access the resources in each category
                                // $new_sql = "SELECT category_name, help_count FROM mental_categories";
                                // $new_result = $conn->query($new_sql);

                                // if ($new_result->num_rows > 0) {

                                //     while ($new_row = mysqli_fetch_array($new_result)) {
                                //         echo " <div class=' paper-cols'> ";
                                //         echo "<div class='paper'>";

                                //         $category = $new_row["category_name"];

                                //         $resources = $new_row["help_count"];

                                //         echo "<h4><a href='category-help.php'>" . $category . "</a></h4>";
                                        
                                //         echo "<p>" . $resources . " articles </p>";
                                        
                                //         echo "
                                //                                                             </div>
                                //                                                             </div>
                                //                                                             ";
                                //     }
                                // }

                                ?>

                        </div>

                    </div> -->


                </div>

            </div>
        </div>


        <hr class="cat-divider">
        <!-- footer design -->
        <?php include 'footer.php';?>


    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>

    </script>

</body>

</html>