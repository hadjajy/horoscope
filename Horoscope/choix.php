<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>     </title>
    </head>
<body>

<form action="index.php?action=reponse" method="POST">
<select name="horoscope" size="1">
<?php foreach($signe as $cle => $valeur):?>
<option value="<?= $cle ?>"> <?= $cle ?></option>

<?php endforeach ?>
</select>
<input type="submit" value="valider">
</form>
</body>
</html>