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

                <h1 class="bottom-word">a collection of articles shedding a light on the unspoken</h1>
            </div>


            <div class="arrow bounce">
                <a class="fa fa-arrow-down fa-1x" href="#feature-icons"></a>
            </div>

        </div>
        <!-- end of th header section -->


        <!-- circle nav icons -->
        <div id="feature-icons" class="browse-icons w3-padding-32">
            <h3>Choose where to go</h3>
            <p class="nav-description"> Click <strong> Did you know</strong> and <strong> How can you Help </strong> to navigate to the collection of articles. Click <strong> Suggest an article </strong> to recommend an article that we do not have but you feel would enrich our collection. 
                </p>

            <div class="desktop-browse-icons w3-padding-64 w3-center w3-theme-l5">
                <div class="w3-row"><br>

                    <div class="w3-third">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>

                        <p> <a href="#defaultOpen">Did you know?</a> </p>


                    </div>

                    <div class="w3-third">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>

                        <p> <a href="#howtoHelp">How can you Help?</a> </p>

                    </div>

                    <div class="w3-third">
                        <div class="w3-center w3-circle w3-hover-opacity icon-circle"></div>
                        <p><a href="recommend.php">Suggest a category / article</a></p>
                    </div>

                </div>
            </div>

        </div>




        <hr class="cat-divider">

        <div class="categories">
            <h3>Browse Categories</h3>
            <p class="nav-description"> <strong> Did you know </strong> tab has a collection of articles about different forms of abuse that people experience. <strong> How you can help </strong> tab has a collection of articles shedding light on ways we can help each other when dealing with mental abuse.
                </p>

            <br><br><br>

            <div class="category-links">
                <button class="tablink" onclick="openPage('Validate', this, '#D8BFD8')" id="defaultOpen">Did you
                    Know?</button>
                <button class="tablink" onclick="openPage('Help', this, '#D8BFD8')" id="howtoHelp">How can you Help?</button>

                <div id="Validate" class="tabcontent">
                    
                    <p class="nav-description">Choose a categroy from the links on the left. Then click on the title of the group of articles to be routed to the collection:</p>

                    <div class="tab">
                        <button class="tablinks" onclick="openSubCategory(event, 'Family')"
                            id="mainOpen">Family</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'Friends')">Friends</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'Personal')">Personal</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'workandschool')">Work & School</button>
                    </div>

                    <div id="Family" class="subtabcontent">
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

                    </div>


                    </div>

                    <div id="Friends" class="subtabcontent">
                        <h3>Friends</h3>
                        <p>Friends is the capital of France.</p>
                    </div>

                    <div id="Personal" class="subtabcontent">
                        <h3>Personal</h3>
                        <p>Personal is the capital of Japan.</p>
                    </div>

                    <div id="workandschool" class="subtabcontent">
                        <h3>Work & School</h3>
                        <p>Work is going to be crazy</p>
                    </div>

                </div>

                <div id="Help" class="tabcontent">
                    <p class="nav-description">Click on the text in the article to be routed to the articles of a chosen group:</p>

                    <div class="tab">
                        <button class="tablinks" onclick="openSubCategory(event, 'helpfamily')"
                            id="helpmainOpen">Family</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'helpfriends')">Friends</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'helppersonal')">Personal</button>
                        <button class="tablinks" onclick="openSubCategory(event, 'workschool')">Work & School</button>
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