<?php 
    $rand_numbers = [];
    while (count($rand_numbers) < 15) {
        $aux_number = random_int(0, 100);
        if (!in_array($aux_number, $rand_numbers)) {
            $rand_numbers[] = $aux_number;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ecco i numeri generati:</h1>
    <?php 
        foreach($rand_numbers as $number) {
            echo $number . '<br/>';
        }
    ?>
</body>
</html>