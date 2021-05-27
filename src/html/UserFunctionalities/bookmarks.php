<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>My Bookmark</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/watchlist.css">

    
</head>

<body>
<?php
    require_once("header.php");
    ?>

    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->
    <br><br>
    <div id="main">
        <div style="margin-top: 6%; width: 80%; margin-left: 14%; background-color: aliceblue;">
            <span style="font-size:25px;">My Bookmarks</span>
            <div id="most-recent" class="d-flex flex-row">
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>Added Today</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>Yesterday</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>May 05, 2021</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
                <div class="product text-center">
                    <img src="../../img/1.jpg" alt="" class="product-img">
                    <br>
                    <span class="product-name ">| SandMan | </span>
                    <br>
                    <span class="product-genre">Adventure</span>
                    <br>
                    <center>
                        <span>Chapters: <span>01/80</span></span>
                        <br>
                        <span style="font-size: 13px;"><i>May 04, 2021</i></span>
                        <br>
                    </center>

                    <div class=" d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary">Read</button>&nbsp;
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                    </div>

                </div>
            </div>
            <hr>
        </div>


</body>

</html>