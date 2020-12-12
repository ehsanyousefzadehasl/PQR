<html>

<head>
    <title>calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form action="calculator.php" method="post">
        Number 1: <input type="text" name="number1" value="<?php if(isset($_POST["number1"])){echo htmlentities($_POST["number1"]);}?>">
        <br>
        Number 2: <input type="text" name="number2" value="<?php if(isset($_POST["number2"])){echo htmlentities($_POST["number2"]);}?>">
        <br>
        Operator: <select id="operators" name="operators">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="remainder">remainder</option>
        </select>
        <input type="submit" value="submit">
    </form>


    Result is: <?php
            $n1 = floatval($_POST["number1"]);
            $n2 = floatval($_POST["number2"]);

            $op = $_POST["operators"];
    
            if($op == '+') {
                echo $n1 + $n2;
            } else if ($op == '-') {
                echo $n1 - $n2;
            } else if ($op == '/') {
                echo $n1 / $n2;
            } else if ($op == '*') {
                echo $n1 * $n2;
            } else {
                echo $n1 % $n2;
            }
        ?>
</body>

</html>
