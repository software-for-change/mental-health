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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700&display=swap"
        rel="stylesheet">
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=5f0db3dbb745880012eaaa1d&product=inline-share-buttons"
        async="async"></script>
</head>

<body>

    <div class="content category-content">

        <!-- header section -->
        <div class="header-sec category-header-sec">
            <!-- nav bar -->
            <?php include 'header.php';?>

            <div class="w3-row w3-padding-64">

                <div class="w3-third">
                    <a href="recommend.php">Suggest an article or Category</a>
                </div>

                <div class="w3-third">
                    <div class="w3-center category-heading">
                        <h1>validating our feelings through reading people's expreiences changes the way we see our
                            selves. we become more human.</h1>
                    </div>
                </div>

                <div class="w3-third">

                    <div class="sharethis-sticky-share-buttons"></div>

                    <div class="sharethis-inline-follow-buttons"></div>

                    <form class="email-form" action="">
                        <input class="email-input" type="text" placeholder="Enter your email">
                        <input class="email-submit" type="submit" value="Never miss an article">
                    </form>
                </div>

            </div>
        </div>


        <!-- end of header -->

        <h3 class="w3-center">Cateogry: Signs of mental abuse</h3>
        <p class="category-desc w3-center w3-padding-16">These articles describe different ways in which people can cope
            and are meant to give you ideas on how to deal but don't subsitute therapy.</p>

        <div class="category-links">
            
            <div id="Relationships" class="tabcontent">
                <h3>Relationships</h3>


                <div class="w3-row scrollable ">

                    <?php 
                    $new_sql = "SELECT * FROM mental_validate WHERE category_id=3";
                    $new_result = $conn->query($new_sql);

                    if ($new_result->num_rows > 0) {
                       
                        while ($new_row = mysqli_fetch_array($new_result)) {
                            
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
                                                        ";

                ?>

                </div>
            </div>

           

           


        </div>
    </div>


    <!-- footer design -->
    <hr class="cat-divider">
    <?php include 'footer.php';?>

    



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