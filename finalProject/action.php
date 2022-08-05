<?php
 $path = "data.csv";
 if (isset($_POST['field1']) && isset($_POST['field2'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'].','.$_POST['field2'].','.$_POST['field3'].','.$_POST['field4']."\n";
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
    echo "Successful!";
    header("Location:http://127.0.0.1");
 }
?>
