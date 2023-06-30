<html>
    <head>
        <title>Practical-2</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <form action="" method="get">
        <div class="container mt-4">
            <input type="number" placeholder="Enter the number" name="first"><br>
            <input type="number" placeholder="Enter the second number" name="second" style="margin-top: 10px;"><br>
            
            
            <input id="submit" type="submit" name="submit" style="padding: 5px; margin-top: 5px;">
            <!-- <input type="button" value="submit" name="submit" style="margin-top: 10px;"> -->
        </div>
        </form>
        <?php
            if(isset($_GET["submit"])){
                if(isset($_GET["first"]) && isset($_GET["second"])){
                    $first = $_GET["first"];
                    $second = $_GET["second"];

                    $string = $first+$second;
                }
            }
        ?>
    <p><?php echo " first name is :",$first," and second number is: ",$second, "<br>"; echo $string;?></p>
    </body>
</html>