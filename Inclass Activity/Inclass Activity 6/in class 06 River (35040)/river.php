<!DOCTYPE html>
<html>
<head>
    <title>River Flow Calculator</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f0f8ff;
        }

        .container{
            width: 400px;
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
        }

        input{
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
        }

        button{
            padding: 10px 15px;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>River Flow Calculator</h2>

    <form method="POST">

        <label>Width (m)</label>
        <input type="number" name="width" step="any" required>

        <label>Depth (m)</label>
        <input type="number" name="depth" step="any" required>

        <label>Flow Speed (m/s)</label>
        <input type="number" name="speed" step="any" required>

        <button type="submit">Calculate Flow Rate</button>

    </form>

    <br>

    <?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $width = $_POST["width"];
        $depth = $_POST["depth"];
        $speed = $_POST["speed"];

        if($width <= 0 || $depth <= 0 || $speed <= 0){

            echo "<p style='color:red;'>Please enter valid positive values.</p>";

        }else{

            $flowRate = $width * $depth * $speed;

            echo "<h3>Flow Rate = ".$flowRate." m³/s</h3>";
        }
    }

    ?>

</div>

</body>
</html>