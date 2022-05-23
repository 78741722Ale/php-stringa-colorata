<?php 

/* 
Stampare una stringa verde se la variabile password 
passata in GET è uguale a “Boolean”, altrimenti stampare 
una stringa rossa.
*/
$password = $_GET['password'];
var_dump("Questa è la password inserita : $password")



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Stringa colorat</title>
</head>
<body>
    
    <?php if ($password == 'Boolean') : ?>
    <h2 style="color: green"><?php echo "La password corretta è " . "$password" ?></h2>
    <?php elseif ($password != 'Boolean') : ?>
    <h2 style="color: red"><?php echo "La password non è corretta, dovrebbe essere " . "$password" ?></h2>
    <?php endif; ?>

</body>
</html>
