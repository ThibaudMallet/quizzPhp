<?php require 'header.php' ?>

<main class="mainHp">
    <form method="POST" action="scorehp4.php">
        <div class="colLeft">
            <div class="question1">
                <h3>Qui sème la terreur à la Coupe du Monde de Quidditch ?</h3>
                    <input type="radio" name="quidditch" value="Des Mangemorts">Des Mangemorts <br>
                    <input type="radio" name="quidditch" value="Des Aurors">Des Aurors <br>
                    <input type="radio" name="quidditch" value="Des Détraqueurs">Des Détraqueurs
            </div>
            <div class="question2">
                <h3>De combien d'épreuves se compose le Tournoi des Trois Sorciers ?</h3>
                <input type="radio" name="tournoi" value="3">3 <br>
                <input type="radio" name="tournoi" value="4">4 <br>
                <input type="radio" name="tournoi" value="5">5
            </div>
            <div class="question3">
                <h3>Dans quelle équipe nationale de Quidditch Viktor Krum joue-t-il ?</h3>
                <input type="radio" name="krum" value="La Bulgarie">La Bulgarie <br>
                <input type="radio" name="krum" value="La Russie">La Russie <br>
                <input type="radio" name="krum" value="L'Irlande">L'Irlande
            </div>
        </div>
        <div class="colRight">
            <div class="question4">
                <h3>Quel animal passe devant le jardinier chez les Jedusor ?</h3>
                <input type="radio" name="animal" value="Un rat">Un rat <br>
                <input type="radio" name="animal" value="Un serpent">Un serpent <br>
                <input type="radio" name="animal" value="Une araignée">Une araignée
            </div>
            <div class="question5">
                <h3>Quel champion est victime d'un sortilège pendant la troisième tâche ?</h3>
                <input type="radio" name="victime" value="Cedric Diggory">Cedric Diggory <br>
                <input type="radio" name="victime" value="Viktor Krum">Viktor Krum <br>
                <input type="radio" name="victime" value="Harry Potter">Harry Potter
            </div>
            <div class="question6">
                <h3>Qui tue Cedric Diggory sur les ordres de Voldemort ?</h3>
                <input type="radio" name="tue" value="Peter Pettigrow">Peter Pettigrow <br>
                <input type="radio" name="tue" value="Lucius Malefoy">Lucius Malefoy <br>
                <input type="radio" name="tue" value="Fenrir Greyback">Fenrir Greyback
            </div>
        </div>
        <div class="submit">
            <button type="submit">Découvre ton score !</button>
        </div>
    </form>
</main>

<?php require 'footer.php' ?>