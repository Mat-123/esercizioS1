<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <h1>Data di oggi:</h1>
    <p><?php
    setlocale(LC_ALL, 'it_IT');
    date_default_timezone_set("Italy/Rome");
    echo "La data di oggi e': " . date("l, d/m/Y")?>
     </p>
</body>
</html>