<html>

<head>
    <title>URL Parameters</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="URL_parameters.php" method="get">
        Input: <input type="text" name="sampleInput">
        <br>
        <input type="submit" value="submit">
    </form>


    Entered value is: <?php
            echo $_GET["sampleInput"];
        ?>
</body>

</html>
