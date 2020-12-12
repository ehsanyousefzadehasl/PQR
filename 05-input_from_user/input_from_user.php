<html>

<head>
    <title>Inputting data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>    
    <form action="input_from_user.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit" value="submit">
    </form>
    
        Your name is: <?php
        echo $_GET["name"];
        ?><br>
        Your age is: <?php
        echo $_GET["age"]
        ?>
    
    <form action="input_from_user.php" method="post">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="number" name="age">
        <input type="submit" value="submit">
    </form>
    
        Your name is: <?php
        echo $_POST["name"];
        ?><br>
        Your age is: <?php
        echo $_POST["age"]
        ?>
</body>

</html>
