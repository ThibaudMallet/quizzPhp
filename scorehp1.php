<?php require 'header.php';

$score = 0;
if ($_POST["prenom"] == "lily") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 1 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 1 était Lily" . "</p>" . "<br>";
}
if ($_POST["gobelin"] == "gripsec") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 2 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la questio 2 était Gripsec" . "</p>" . "<br>";
}
if ($_POST["rencontre"] == "quirrell") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 3 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 3 était Quirrell" . "</p>" . "<br>";
}
if ($_POST["cicatrice"] == "eclair") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 4 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 4 était D'éclair" . "</p>" . "<br>";
}
if ($_POST["ecole"] == "sorcellerie") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 5 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 5 était L'école de sorcellerie de Poudlard" . "</p>" . "<br>";
}
if ($_POST["animal"] == "serpent") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 6 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 6 était Le serpent" . "</p>" . "<br>";
}
echo "<p>" . "Votre score est de" . "<strong>" . " $score" . "</strong>" . "</p>" . "<br>";

if ($score < 3) {
    echo "<p>" . "Vous devez aller reviser, votre culture sur Harry Potter à l'école des Sorciers n'est pas top !" . "</p>" . "<br>";
} elseif ($score < 6) {
    echo "<p>" . "Vous en connaissez un rayon sur Harry Potter à l'école des Sorciers !" . "</p>" . "<br>";   
} else {
    echo "<p>" . "Mais dites moi ? Vous êtes allé à Poudlard ? :o" . "</p>";
}

require 'footer.php' ?>