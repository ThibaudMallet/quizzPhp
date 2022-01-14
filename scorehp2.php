<?php require 'header.php';

$score = 0;
if (isset($_POST["objet"]) == "Son appareil photo") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 1 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 1 était Son appareil photo" . "</p>" . "<br>";
}
if (isset($_POST["mort"]) == "Son cri") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 2 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la questio 2 était Son cri" . "</p>" . "<br>";
}
if (isset($_POST["amis"]) == "Hermione Granger") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 3 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 3 était Hermione Granger" . "</p>" . "<br>";
}
if (isset($_POST["dobby"]) == "Un gâteau") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 4 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 4 était Un gâteau" . "</p>" . "<br>";
}
if (isset($_POST["hibou"]) == "Errol") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 5 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 5 était Errol" . "</p>" . "<br>";
}
if (isset($_POST["couleur"]) == "Verte") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 6 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 6 était Verte" . "</p>" . "<br>";
}
echo "<p>" . "Votre score est de" . "<strong>" . " $score" . "</strong>" . "</p>" . "<br>";

if ($score < 3) {
    echo "<p>" . "Vous devez aller reviser, votre culture sur Harry Potter et la Chambre des Secrets n'est pas top !" . "</p>" . "<br>";
} elseif ($score < 6) {
    echo "<p>" . "Vous en connaissez un rayon sur Harry Potter et les Chambres des Secrets !" . "</p>" . "<br>";   
} else {
    echo "<p>" . "Mais dites moi ? Vous êtes allé à Poudlard ? :o" . "</p>";
}

require 'footer.php' ?>