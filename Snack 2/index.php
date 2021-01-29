<!-- ISTRUZIONI:
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$people = [];
$name = $_GET["name"];
$email = $_GET["mail"];
$age = $_GET["age"];
$num_at = count(explode('@', $email)) - 1;
$validation = "";
if (strlen($name) > 3 && (strpos($email, '.') !== false) && $num_at = 1 && is_numeric($age)) {
  $validation = "Accesso riuscito";
} else {
  $validation = "Accesso negato";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>

<body>
  <h3>Insersci i tuoi dati:</h3>
  <form action="index.php" method="get">
    <input type="text" name="name" placeholder="Inserisci nome">
    <input type="mail" name="mail" placeholder="Inserisci email">
    <input type="text" name="age" placeholder="Inserisci età">
    <!--in teoria si potrebbe usare input type number, in quanto ha già delle validazioni integrate -->
    <input type="submit" value="Cliccami forte">
  </form>
  <?php echo $validation ?>
</body>

</html>