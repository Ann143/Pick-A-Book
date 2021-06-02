<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    <title></title>
</head>
<body>
    <div class="conatiner" style="margin-left:100px;margin-top:100px">
            <?php
            require_once("../config.php");
            require_once("header.php");

            $button =$_GET['submit'];
            $search =$_GET['search'];
            $sql = "SELECtT * FROM sellbooks WHERE MATCH(booktitle,bookprice,bookgenre,bookcategory,bookpicture) AGAINST ('%".$search."')";

            $run = mysqli_query($conn,$query);
            $foundnum = mysqli_num_rows($run);

            if($foundnum==0)
            {
                echo "We are unable to find a product.";

            }else{
                echo "<h3><strong>$foundnum Results Found  for \"".$search."\"</strong></h3>";

                $sql = "SELECtT * FROM sellbooks WHERE MATCH(booktitle,bookprice,bookgenre,bookcategory,bookpicture) AGAINST ('%".$search."')";

                $getquery = mysqli_query($conn,$query);

                while($runrows=mysqli_fetch_array($getquery))
                {
                    $title = $runrows['booktitle'];
                    $picture = $runrows['bookpicture'];

                    echo '<h5 class="card-title">".$runrows["bookpicture"]."</h5>';
                    echo '<h5 class="card-title">".$runrows["booktitle"]."</h5>';
                    echo '<h5 class="card-title">".$runrows["bookprice"]."</h5>';

                }}
                mysqli_close($conn);

            ?>
            </div>
</body>
</html>