<?php 
    $students = 
    [
        [
            'name' => 'Cristian',
            'surname' => 'Buoncompagni',
            'grades' => [8, 6, 4.5, 9]
        ], [
            'name' => 'Antonio',
            'surname' => 'Esposito',
            'grades' => [2, 5.5, 4.5, 10]
        ], [
            'name' => 'Anna',
            'surname' => 'Russo',
            'grades' => [9.5, 7.45, 10, 3]
        ], [
            'name' => 'Maria',
            'surname' => 'Anna',
            'grades' => [3.5, 7, 5.5, 10]
        ]
    ];

    function calcMedia ($array) {
        $aux_tot = 0; 
        foreach ($array as $number) {
            $aux_tot += $number;
        }
        return round($aux_tot/count($array), 2);
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
    <h1>Classe 5°B anno 20/21:</h1>
    <ul>
        <?php foreach($students as $student) { ?>
            <li>
                <strong>Nome:</strong> <?=$student['name']?> <br> 
                <strong>Cognome:</strong> <?=$student['surname']?> <br> 
                <strong>Media dei voti:</strong> <?=calcMedia($student['grades'])?> 
            </li>
            <br>
        <?php } ?>
    </ul>
</body>
</html>