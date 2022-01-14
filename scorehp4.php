<?php require 'header.php';

$score = 0;
if (isset($_POST["quidditch"]) == "Des Mangemorts") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 1 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 1 était Des Mangemorts" . "</p>" . "<br>";
}
if (isset($_POST["tournoi"]) == "3") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 2 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la questio 2 était 3" . "</p>" . "<br>";
}
if (isset($_POST["krum"]) == "La Bulgarie") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 3 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 3 était La Bulgarie" . "</p>" . "<br>";
}
if (isset($_POST["animal"]) == "Un serpent") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 4 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 4 était Un serpent" . "</p>" . "<br>";
}
if (isset($_POST["victime"]) == "Viktor Krum") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 5 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 5 était Viktor Krum" . "</p>" . "<br>";
}
if (isset($_POST["tue"]) == "Peter Pettigrow") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 6 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 6 était Peter Pettigrow" . "</p>" . "<br>";
}
echo "<p>" . "Votre score est de" . "<strong>" . " $score" . "</strong>" . "</p>" . "<br>";

if ($score < 3) {
    echo "<p>" . "Vous devez aller reviser, votre culture sur Harry Potter et la Coupe de Feu n'est pas top !" . "</p>" . "<br>";
} elseif ($score < 6) {
    echo "<p>" . "Vous en connaissez un rayon sur Harry Potter et la Coupe de Feu !" . "</p>" . "<br>";   
} else {
    echo "<p>" . "Mais dites moi ? Vous êtes allé à Poudlard ? :o" . "</p>";
}

require 'footer.php' ?>