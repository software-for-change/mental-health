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
                    
                    <p>Click on the buttons inside the tabbed menu:</p>

                    <div class="tab">
                        <button class="tablinks" onclick="openSubCategory(event, 'London')"
                            id="mainOpen">London</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'Paris')">Paris</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'Tokyo')">Tokyo</button>
                    </div>

                    <div id="London" class="subtabcontent">
                    <div class="category-cards">
                        <div class="row">

                            <?php
                                $sql = "SELECT category_name, valid_count FROM mental_categories";
                                $result = $conn->query($sql);
                                // access the resources in each category

                                if ($result->num_rows > 0) {

                                    while ($row = mysqli_fetch_array($result)) {
                                        echo " <div class=' paper-cols'> ";
                                        echo "<div class='paper'>";

                                        $category = $row["category_name"];

                                        $resources = $row["valid_count"];

                                        echo "<h4><a href='category-validate.php'>" . $category . "</a></h4>";
                                        echo "<p>" . $resources . " articles </p>";
                            
                                        echo "
                                                                                            </div>
                                                                                            </div>
                                                                                            ";
                                    }
                                }
                                ?>
                    </div>

                    <div id="Paris" class="subtabcontent">
                        <h3>Paris</h3>
                        <p>Paris is the capital of France.</p>
                    </div>

                    <div id="Tokyo" class="subtabcontent">
                        <h3>Tokyo</h3>
                        <p>Tokyo is the capital of Japan.</p>
                    </div>

                </div>

                <div id="Help" class="tabcontent">
                    <p>Click on the buttons inside the tabbed menu:</p>

                    <div class="tab">
                        <button class="tablinks" onclick="openSubCategory(event, 'helpfamily')"
                            id="helpmainOpen">helpfamily</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'helpfriends')">helpfriends</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'workschool')">workschool</button>
                    </div>

                    <div id="helpfamily" class="subtabcontent">
                        <h3>helpfamily</h3>
                        <p>helpfamily is the capital city of England.</p>
                    </div>

                    <div id="helpfriends" class="subtabcontent">
                        <h3>helpfriends</h3>
                        <p>helpfriends is the capital of France.</p>
                    </div>

                    <div id="workschool" class="subtabcontent">
                        <h3>workschool</h3>
                        <p>workschool is the capital of Japan.</p>
                    </div>


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