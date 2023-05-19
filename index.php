<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcul de la somme des N premiers nombres entiers</title>
</head>
<body>

 <!-- 1/ calcul de la somme des N premiers nombres entiers en php   -->
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="number">Entrez un nombre :</label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Calculer">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    $sum = 0;

    if ($number > 0) {
      for ($i = 1; $i <= $number; $i++) {
        $sum += $i;
      }

      echo "La somme des $number premiers nombres entiers est : $sum";
    } else {
      echo "Veuillez entrer un nombre positif.";
    }
  }
  ?>
<br><br>


<!-- 2/ Recherche du minimum et du maximum dans un ensemble de N nombres. -->

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numbers">Entrez les nombres (séparés par des virgules) :</label>
    <input type="text" name="numbers" id="numbers" required>
    <input type="submit" value="Rechercher">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = $_POST["numbers"];

    // Convertir la chaîne de caractères en un tableau de nombres
    $numberArray = explode(',', $numbers);

    // Supprimer les espaces vides autour de chaque nombre
    $numberArray = array_map('trim', $numberArray);

    // Supprimer les éléments vides du tableau
    $numberArray = array_filter($numberArray);

    if (count($numberArray) > 0) {
      // Trouver le minimum et le maximum dans le tableau
      $min = min($numberArray);
      $max = max($numberArray);

      echo "Le minimum est : $min<br>";
      echo "Le maximum est : $max";
    } else {
      echo "Veuillez entrer au moins un nombre.";
    }
  }
  ?>


<br><br>
<!-- 3/ Calcul du quotient et reste de la division de deux entiers A et B sans utiliser
l’opération de division. -->

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="dividend">Entrez le dividende :</label>
    <input type="number" name="dividend" id="dividend" required>
    <br>
    <label for="divisor">Entrez le diviseur :</label>
    <input type="number" name="divisor" id="divisor" required>
    <br>
    <input type="submit" value="Calculer">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dividend = $_POST["dividend"];
    $divisor = $_POST["divisor"];

    $quotient = 0;

    while ($dividend >= $divisor) {
      $dividend -= $divisor;
      $quotient++;
    }

    $remainder = $dividend;

    echo "Le quotient est : $quotient<br>";
    echo "Le reste est : $remainder";
  }
  ?>
 <br><br>

<!-- 4/  Le calcul du produit de deux entiers en utilisant uniquement l'opération
d'addition '+’ en php -->

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="num1">Entrez le premier entier :</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Entrez le deuxième entier :</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <input type="submit" value="Calculer">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    $product = 0;

    for ($i = 0; $i < $num2; $i++) {
      $product += $num1;
    }

    echo "Le produit est : $product";
  }
  ?>


<br><br>

<!-- 5/ Calcul du binaire d’un entier N. -->

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="number">Entrez un entier :</label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Calculer">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    $binary = decbin($number);

    echo "Le binaire de $number est : $binary";
  }
  ?>


<br><br>
 <!-- 6/ Détermination si A est divisible par B. Avec A et B des entiers positifs. -->

    <form method="POST" action="">
        <label for="numberA">Entier A :</label>
        <input type="number" id="numberA" name="numberA" required>
        <br>
        <label for="numberB">Entier B :</label>
        <input type="number" id="numberB" name="numberB" required>
        <br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberA = $_POST["numberA"];
        $numberB = $_POST["numberB"];

        if ($numberA % $numberB == 0) {
            echo "<p>$numberA est divisible par $numberB.</p>";
        } else {
            echo "<p>$numberA n'est pas divisible par $numberB.</p>";
        }
    }
    ?>

<br><br>
<!-- 7/ Déterminer tous les diviseurs d’un entier X donné. -->
    <form method="post" action="">
        <label for="number">Entier X :</label>
        <input type="text" id="number" name="number">
        <input type="submit" value="Afficher les diviseurs">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (!empty($number) && is_numeric($number)) {
            echo "Diviseurs de $number : ";

            for ($i = 1; $i <= $number; $i++) {
                if ($number % $i == 0) {
                    echo $i . " ";
                }
            }
        } else {
            echo "Veuillez entrer un entier valide.";
        }
    }
    ?>


<br><br>
<!-- 8/ Déterminer si un nombre entier X est premier ou non. -->

    <form method="POST" action="">
        <label for="numberX">Entier X :</label>
        <input type="number" id="numberX" name="numberX" required>
        <br>
        <input type="submit" value="Vérifier">
    </form>

    <?php
    function isPrime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberX = $_POST["numberX"];

        if (isPrime($numberX)) {
            echo "<p>$numberX est un nombre premier.</p>";
        } else {
            echo "<p>$numberX n'est pas un nombre premier.</p>";
        }
    }
    ?>



<br><br>
<!-- 9/ Calcule la somme des chiffres qui composent un entier naturel N. -->

    <form method="post" action="">
        <label for="number">Entier naturel :</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Calculer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];

        // Vérification que l'entrée est un entier naturel
        if (!is_numeric($number) || $number < 0 || floor($number) != $number) {
            echo "Veuillez entrer un entier naturel valide.";
        } else {
            $sum = 0;
            $digits = str_split($number);
            foreach ($digits as $digit) {
                $sum += $digit;
            }
            echo "La somme des chiffres de $number est : $sum.";
        }
    }
    ?>


</body>

</html>