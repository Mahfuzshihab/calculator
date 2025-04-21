<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="get" action="">
            <input type="number" name="num1" required placeholder="First number" value="<?= isset($_GET['num1']) ? $_GET['num1'] : '' ?>">
            
            <select name="operation">
                <option value="add" <?= isset($_GET['operation']) && $_GET['operation'] == 'add' ? 'selected' : '' ?>>+</option>
                <option value="subtract" <?= isset($_GET['operation']) && $_GET['operation'] == 'subtract' ? 'selected' : '' ?>>-</option>
                <option value="multiply" <?= isset($_GET['operation']) && $_GET['operation'] == 'multiply' ? 'selected' : '' ?>>*</option>
                <option value="divide" <?= isset($_GET['operation']) && $_GET['operation'] == 'divide' ? 'selected' : '' ?>>/</option>
            </select>
            
            <input type="number" name="num2" required placeholder="Second number" value="<?= isset($_GET['num2']) ? $_GET['num2'] : '' ?>">
            
            <button type="submit">Calculate</button>
        </form>

        <?php
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $op = $_GET['operation'];
            $result = "";

            switch ($op) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    $result = $num2 != 0 ? $num1 / $num2 : "Error: Divide by zero";
                    break;
            }

            echo "<div class='result'><strong>Result:</strong> $result</div>";
        }
        ?>
    </div>
</body>
</html>