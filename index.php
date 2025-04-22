<?php
$number_1 = $_POST['number_1'] ?? 0;
$number_2 = $_POST['number_2'] ?? 0;
$calculate = $_POST['calculate'] ?? '';
$output = '';

switch ($calculate) {
    case 'plus':
        $output = $number_1 + $number_2;
        break;
    case 'minus':
        $output = $number_1 - $number_2;
        break;
    case 'multiply':
        $output = $number_1 * $number_2;
        break;
    case 'divide':
        if ($number_2 != 0) {
            $output = $number_1 / $number_2;
        } else {
            $output = "Cannot divide by zero!";
        }
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        
        <div class="calculator">
             <h2 class="heading">Calculator</h2>
            <form method="POST">
                <label for="number_1">Number 1</label>
                <input type="number" name="number_1" required><br>

                <label for="number_2">Number 2</label>
                <input type="number" name="number_2" required><br>

                <label for="calculate">Calculation:</label><br>
                <button type="submit" name="calculate" value="plus">Addition</button>
                <button type="submit" name="calculate" value="minus">Subtraction</button>
                <button type="submit" name="calculate" value="multiply">Multiply</button>
                <button type="submit" name="calculate" value="divide">Divide</button>
            </form>

            <div class="result">
                Output: <span class="output"><?php echo $output; ?></span>
            </div>
        </div>
    </section>
</body>
</html>
