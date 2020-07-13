<?php


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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <div class="content about-content">

        <!-- header section -->
        <div class="header-sec about-header">
            <!-- nav bar -->
            <?php include 'header.php';?>


        </div>
        <!-- end of header -->


        <div class="about-card w3-center">

            <!-- head image -->
            <div class="about-img header-img">
                <img src="images/head.png" alt="">
            </div>

            <!-- page title -->
            <div class="w3-center about-heading">
                <h1>.about.</h1>
            </div>


            <!-- about story  -->
            <div class="story">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                    more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>





        </div>



        <!-- footer design -->
        <hr class="cat-divider">
        <?php include 'footer.php';?>


    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="index.js"></script>
    <script>
    </script>

</body>

</html>