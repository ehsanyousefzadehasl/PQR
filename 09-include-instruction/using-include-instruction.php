<html>

<head>
    <title>Using include instruction in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include('header.html');
    ?>

        <div style="background-color: yellow; text-align: center; padding: 5px; border: solid 2px tomato; border-radius: 10px;">
            <h1>This is our this specific page's header!</h1>
            <p>We just added this paragraph to this page easily!</p>
            <div style="font-weight: bolder;">
                <?php
                    $name = "Jack";
                    $numberOfWords = 1024;
                    include 'status-printer.php';
                
                    include 'functions.php';
                    echo sayHello("Ehsan");
                    echo randomGenerator();
                ?>
            </div>
        </div>

        <?php
            include('footer.html');
        ?>
</body>

</html>
