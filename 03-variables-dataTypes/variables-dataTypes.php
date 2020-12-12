<html>
<head>
    <title>variables, data types in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $name = "Ehsan";
        $age = 26;
        
        echo("My name is $name, and I am $age years old!");
    
        $flag = false;
        
        if($flag == false) {
            echo("<br><hr>");
            echo("We entered here because of flag = false.");
        }
    ?>
</body>
</html>