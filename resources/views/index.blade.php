<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DemoPHP</title>
</head>
<body>
<h1>
    <?php
        /** @var string $greeting */
        /** @var int $a */
        /** @var int $b */
        /** @var array $films */
        /** @var array $UsersData*/

        echo $greeting;
        echo "<br>Resultat: " . ($a + $b);
    ?>
</h1>
<h1>Llista de pelis</h1>
<ul>
    <?php foreach ($films as $film) : ?>
        <li><?=$film["name"]?> (<?=$film["year"]?>) - <?=$film["director"]?></li>
    <?php endforeach; ?>
</ul>
<h1>Usuaris:</h1>
<?php foreach ($UsersData as $userData) : ?>
<ul>
    <h2>User <?=$userData["user"]["name"]?></h2>
    <ul>
        <li>Email: <?=$userData["user"]["email"]?></li>
        <li>Roles: <?=implode(', ', $userData["user"]["roles"])?></li>
        <br>
        <li><strong>Settings</strong></li>
        <ul>
            <li>Theme: <?=$userData["settings"]["theme"]?></li>
            <li>Notifications: <?=$userData["settings"]["notifications"] ? 'Enabled' : 'Disabled'?></li>
            <li>Language: <?=$userData["settings"]["language"]?></li>
        </ul>
    </ul>
</ul>
<?php endforeach; ?>

</body>
</html>
