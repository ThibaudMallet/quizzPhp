<?php require 'header.php';

$score = 0;
if (isset($_POST["ginny"]) == "Dean Thomas") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 1 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 1 était Dean Thomas" . "</p>" . "<br>";
}
if (isset($_POST["ollivander"]) == "Fenrir Greyback") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 2 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la questio 2 était Fenrir Greyback" . "</p>" . "<br>";
}
if (isset($_POST["enseigner"]) == "Sirius Black") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 3 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 3 était Sirius Black" . "</p>" . "<br>";
}
if (isset($_POST["ron"]) == "Slughorn") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 4 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 4 était Slughorn" . "</p>" . "<br>";
}
if (isset($_POST["fioles"]) == "Des souvenirs") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 5 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 5 était Des souvenirs" . "</p>" . "<br>";
}
if (isset($_POST["orphelinat"]) == "Wool") {
    echo "<p>" . "Vous avez trouvé la bonne réponse à la question 6 !" . "</p>" . "<br>";
    $score = $score + 1;
} else { 
    echo "<p>" . "La bonne réponse à la question 6 était Wool" . "</p>" . "<br>";
}
echo "<p>" . "Votre score est de" . "<strong>" . " $score" . "</strong>" . "</p>" . "<br>";

if ($score < 3) {
    echo "<p>" . "Vous devez aller reviser, votre culture sur Harry Potter et le Prince de Sang-Mêlé n'est pas top !" . "</p>" . "<br>";
} elseif ($score < 6) {
    echo "<p>" . "Vous en connaissez un rayon sur Harry Potter et le Prince de Sang-Mêlé !" . "</p>" . "<br>";   
} else {
    echo "<p>" . "Mais dites moi ? Vous êtes allé à Poudlard ? :o" . "</p>";
}

require 'footer.php' ?>