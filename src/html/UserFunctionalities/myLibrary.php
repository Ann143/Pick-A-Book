<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Library</title>
    <link href="../../img/logoicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


</head>
<style>
#modalImage {
    padding-top: 15px;
    max-width: 100%;
}

h4 {
    font-family: 'Open Sans';
    margin: 0;
}

#myLib {
    box-shadow: 0 12px 12px 0 rgb(17, 17, 17);
    margin-bottom: 30px;
    padding: 10px;
    border-radius: 10px;
    margin-top: 10px;
    background-color: #e20057;
}

#imageDiv {
    box-shadow: 0 12px 12px 0 rgb(178, 64, 206);
    padding: 10px;
    margin-left: 30px;
    margin-bottom: 40px;
    transition: transform .75s;
    height: 430px;
}

#imageDiv:hover {
    background-color: rgb(0, 0, 0, .8);
    color: white;
    transform: scale(1.1);
    padding-right: 10px;
    padding-left: 10px;
    border-radius: 20px;
    cursor: pointer;
}

.card-title {
    text-align: center;
}
</style>

<body>
    <?php
    require_once("header.php");
    require("../config.php");
    ?>

    <!-- BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB -->



    <div id="main" style="margin-top: 7%;">


        <div class="container">
            <center>
                <h1 id="myLib">My Library</h1>
            </center>
            <div class="row">
                    <?php
                    $id=$_SESSION['id'];
                    $query ="select * FROM orders where status='Completed' AND userId='".$id."'" ;
                    $query_run = mysqli_query($conn,$query);
                    $library = mysqli_num_rows($query_run) > 0;

                    if($library)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>

                <div id="imageDiv" class="col-sm-3 border border-secondary mb-5 mt-2 h-75">
                    <div class="ba-0">
                        <img id="modalImage" alt="Card image cap" style="width:100%;height:100%" class="card-img-top" src="../Products/<?php echo $row['pic']?>">
                        <div class="card-body">
                            <h5 class="card-title">Title:&nbsp;&nbsp;<?php echo $row['title']?></h5>    
                            <h5 class="card-title">Genre:&nbsp;&nbsp;<?php echo $row['category']?></h5>
                            <div class="contianer d-flex justify-content-around">
                            
                                <button type="button" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-book" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z">
                                        </path>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                } }
                ?>

            </div>


           

            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog"
                tabindex="-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body mb-0 p-0">
                            <img src="https://i3.ytimg.com/vi/vr0qNXmkUJ8/maxresdefault.jpg" alt="" style="width:100%">
                        </div>
                        <div class="modal-footer">
                            <div><a href="https://i3.ytimg.com/vi/vr0qNXmkUJ8/maxresdefault.jpg"
                                    target="_blank">Download</a>
                            </div>
                            <button class="btn btn-outline-primary btn-rounded btn-md ml-4 text-center"
                                data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
</body>

</html>