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