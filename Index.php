<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Normal Distribution Calculator</title>
</head>
<body>
    <h2>Normal Distribution Calculator</h2>
    <form method="post" action="">
        <label for="mean">Enter mean (μ):</label>
        <input type="number" step="any" name="mean" id="mean" required><br><br>
        <label for="std_dev">Enter standard deviation (σ):</label>
        <input type="number" step="any" name="std_dev" id="std_dev" required><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mean = floatval($_POST['mean']);
        $std_dev = floatval($_POST['std_dev']);

        if ($std_dev <= 0) {
            echo "<p style='color:red;'>Error: The standard deviation (σ) must be greater than zero.</p>";
        } else {
            function calculateExpectation($mean) {
                return $mean;
            }

            function calculateVariance($std_dev) {
                return pow($std_dev, 2);
            }

            $expectation = calculateExpectation($mean);
            $variance = calculateVariance($std_dev);

            echo "<h3>Results:</h3>";
            echo "Expectation (Mean): " . $expectation . "<br>";
            echo "Variance: " . $variance . "<br>";
            echo "First Moment (Mean): " . $expectation . "<br>";
            echo "Second Moment (Variance): " . $variance . "<br>";
        }
    }
    ?>
</body>
</html>
