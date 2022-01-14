<?php require 'header.php';

$score = 0;
if (isset($_POST["lettre"]) == "Sirius Black") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 1 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 1 était Sirius Black" . "</p>" . "<br>";
}
if (isset($_POST["accuser"]) == "Rogue") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 2 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la questio 2 était Rogue" . "</p>" . "<br>";
}
if (isset($_POST["ecrire"]) == "Dumbledore") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 3 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 3 était Dumbledore" . "</p>" . "<br>";
}
if (isset($_POST["attaque"]) == "Mr Weasley") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 4 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 4 était Mr Weasley" . "</p>" . "<br>";
}
if (isset($_POST["expulsion"]) == "Mafalda Hopkrik") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 5 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 5 était Mafalda Hopkrik" . "</p>" . "<br>";
}
if (isset($_POST["armee"]) == "Dans la Salle sur Demande") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 6 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 6 était Dans la Salle sur Demande" . "</p>" . "<br>";
}
echo "<p>" . "Votre score est de" . "<strong>" . " $score" . "</strong>" . "</p>" . "<br>";

if ($score < 3) {
    echo "<p>" . "Vous devez aller reviser, votre culture sur Harry Potter et l'Ordre du Phénix n'est pas top !" . "</p>" . "<br>";
} elseif ($score < 6) {
    echo "<p>" . "Vous en connaissez un rayon sur Harry Potter et l'Ordre du Phénix !" . "</p>" . "<br>";   
} else {
    echo "<p>" . "Mais dites moi ? Vous êtes allé à Poudlard ? :o" . "</p>";
}

require 'footer.php' ?>