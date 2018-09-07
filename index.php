<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/scss/theme.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    </head>
    <body>

            <div class="container-fluid">
                   <div class="inspectingcodeisfun">
                    <a class="welcome">
                        <h1>
                        Hello, my name is Daniel
                        </h1>
                    </a>
                </div>
    
                <div class="nameisasyouwant">
                    Site coming soon...
                </div>
            </div>

        <?php
        include "config/_counter.php";
        ?>

            <div class="counter">
                <h1>
                    Website has been viewed<?php echo " $count"; ?> times
                </h1>
            </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>