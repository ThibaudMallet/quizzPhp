<?php require 'header.php';
$score = 0;
function getScore() {
    $score = 0;
    if ($_POST["prenom"] == "lily") {
        $score = $score + 1;
    } return $score;
    if ($_POST["gobelin"] == "gripsec") {
        $score ++;
    } return $score;
    if ($_POST["rencontre"] == "quirrell") {
        $score ++;
    } return $score;
    if ($_POST["cicatrice"] == "eclair") {
        $score ++;
    } return $score;
    if ($_POST["ecole"] == "sorcellerie") {
        $score ++;
    } return $score;
    if ($_POST["animal"] == "serpent") {
        $score ++;
    } return $score;
}
print_r($_POST["prenom"]);
require 'footer.php' ?>