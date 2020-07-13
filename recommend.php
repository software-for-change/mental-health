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

    <div class="content about-content">

        <!-- header section -->
        <div class="header-sec about-header">
            <!-- nav bar -->
            <?php include 'header.php';?>


        </div>
        <!-- end of header -->


        <div class="recommend-card">

            <div class="form">
                <h1>Send us a message</h1>

                <form class="contact-input" action="">
                    <p>
                        <label for="">Tile</label>
                        <input type="text" required>
                    </p>
                    <p>
                        <label for="">URL</label>
                        <input type="text" required>
                    </p>
                    <p>
                        <label for="">Email Address</label>
                        <input type="text">
                    </p>
                    <p>
                        <label for="">Category</label>
                        <input type="text">
                    </p>

                    <p>
                        <label for="">Why you chose this article</label>
                        <input type="text">
                    </p>
                    <br>
                    <p>
                        <input type="submit" value="Send">
                    </p>
                </form>
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