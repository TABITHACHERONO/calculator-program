<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .calculator input, .calculator select, .calculator button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="number" step="any" name="num1" placeholder="Enter first number" required>
            <input type="number" step="any" name="num2" placeholder="Enter second number" id="num2">
            <select name="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="exponent">Exponentiation</option>
                <option value="percentage">Percentage</option>
                <option value="sqrt">Square Root</option>
                <option value="log">Logarithm</option>
            </select>
            <button type="submit">Calculate</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
            $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
            $operation = $_POST['operation'];
            $result = '';

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = 'Error: Division by zero';
                    }
                    break;
                case 'exponent':
                    $result = pow($num1, $num2);
                    break;
                case 'percentage':
                    $result = ($num1 / 100) * $num2;
                    break;
                case 'sqrt':
                    if ($num1 >= 0) {
                        $result = sqrt($num1);
                    } else {
                        $result = 'Error: Square root of negative number';
                    }
                    break;
                case 'log':
                    if ($num1 > 0) {
                        $result = log($num1);
                    } else {
                        $result = 'Error: Logarithm of non-positive number';
                    }
                    break;
                default:
                    $result = 'Invalid operation';
            }

            echo "<p>Result: " . htmlspecialchars($result) . "</p>";
        }
        ?>
    </div>
    <script>
        document.querySelector('select[name="operation"]').addEventListener('change', function() {
            if (this.value === 'sqrt' || this.value === 'log') {
                document.getElementById('num2').style.display = 'none';
            } else {
                document.getElementById('num2').style.display = 'block';
            }
        });
    </script>
</body>
</html>
