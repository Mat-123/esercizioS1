<?php
    $Serie_A = [
        'AS ROMA' => [
            'Francesco Totti', 'Duracell', 'Aeroplanino'
        ],
        'SS Lazio' => ['Bobo Vieri', 'Angelo Peruzzi', 'Alessandro Nesta'],
        'Inter' => ['Giocatore 1 Inter', 'Giocatore 2 Inter'],
        'Milan' => ['Giocatore 1 Milan', 'Giovcatore 2 Milan', 'Giocatore 3 Milan'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <h1>Squadre della Serie A con formazioni</h1>
    <ul><?php
        foreach($Serie_A as $nome_squadra => $lista_giocatori) { ?>
            <li>
                <?= $nome_squadra ?>
                <ul><?php
                    foreach($lista_giocatori as $nome_giocatore) { ?>
                        <li><?= $nome_giocatore ?></li><?php
                    } ?>
                </ul>
            </li><?php
        } ?>
    </ul>
    
</body>
</html>