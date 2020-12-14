<html>

<head>
    <title>Woking with checkboxes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="working_with_checkboxes.php" method="post">
        Input1: <input type="checkbox" name="inputs[]" value="input1"> <br>
        Input2: <input type="checkbox" name="inputs[]" value="input2"> <br>
        Input3: <input type="checkbox" name="inputs[]" value="input3">
        
        <input type="submit">
    </form>


    Checked Boxes are: <br><?php
            $input_array = $_POST["inputs"];
            print_r($input_array);
        ?>
</body>

</html>
