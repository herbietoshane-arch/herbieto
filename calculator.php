<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculator </title>
    <style> 
        body {
            margin: 0; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background:rgb(249, 249, 250);
        }

        .calculator {
            background: #00B4D8;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
            width: 300px;
            text-align: center;
        }

        h1 {
            margin-bottom: 15px;
            color: #333;
        }

        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin: 15px 0;
        }

        .buttons input {
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #023E8A;
            color: #fff;
            transition: 0.3s;
        }

        .buttons input:hover {
            background: #0056b3;
        }

        h3 {
            margin-top: 15px;
            color: darkblue;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Calculator</h1>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Enter first number" required>
            <input type="number" name="num2" step="any" placeholder="Enter second number" required>

            <div class="buttons">
                <input type="submit" name="operation" value="Add">
                <input type="submit" name="operation" value="Subtract">
                <input type="submit" name="operation" value="Multiply">
                <input type="submit" name="operation" value="Divide">
            </div>
        </form>

        <?php
        function add($num1, $num2) {
        if ($num1 == 2 && $num2 == 2) {
        return "4, minus 1 that's 3 quick maths!";
        }
        return $num1 + $num2;
        }

        function subtract($num1, $num2) {
        return $num1 - $num2;
        }

        function multiply($num1, $num2) {
        return $num1 * $num2;
        }

        function divide($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
        return "Error!";
        }
    }       

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                $result = "";

                switch ($operation) {
                    case "Add":
                        $result = $num1 + $num2;
                        break;
                    case "Subtract":
                        $result = $num1 - $num2;
                        break;
                    case "Multiply":
                        $result = $num1 * $num2;
                        break;
                    case "Divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Error! Division by zero.";
                        }
                        break;
                }

                echo "<h3>Result: $result</h3>";
            }
        ?>
    </div>
</body>
</html>
