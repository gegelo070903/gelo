<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="website.css">
    <title>SHESH</title>
    <style>
       
    </style>
</head>

<body>
    <header>
        <h1>ha</h1>
        <nav>
            <a href="MainPlatform.html">Home</a>
            <a href="salereport.html">Sales Report</a>
            <a href="gallery.html">Gallery</a>
            <a href="aboutus.html">About Us</a>
            <a href="contactus.html">Conntact</a>
        </nav>
    </header>

    <form method="post" action="">
        <label for="sale"> ENTER SALES: </label>
        <input type="text" name="sale" id="sale" required>
        <input type="submit" value="check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sale = $_POST["sale"];
        if (!is_numeric($sale)) {
            echo "Invalid input. Please enter a valid number.";
        } else {
            if ($sale <= 10000) {
                echo "BAD SALE!";
            } else {
                echo "GOOD SALE!";
            }
        }
    }
    ?>
</body>

</html>
