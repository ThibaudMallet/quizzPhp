<?php require 'header.php' ?>

    <main class="mainHp">
        <form method="POST" action="score.php">
            <div class="colLeft">
                <div class="question1">
                    <h3>Quel est le prénom de la mère de Harry ?</h3>
                        <input type="radio" name="prenom" value="lily">Lily <br>
                        <input type="radio" name="prenom" value="rose">Rose <br>
                        <input type="radio" name="prenom" value="marge">Marge
                </div>
                <div class="question2">
                    <h3>Quel Gobelin escorte Harry jusqu'à son coffre à Gringotts ?</h3>
                    <input type="radio" name="gobelin" value="graup">Graup <br>
                    <input type="radio" name="gobelin" value="gripsec">Gripsec <br>
                    <input type="radio" name="gobelin" value="firenze">Firenze
                </div>
                <div class="question3">
                    <h3>Lors de sa première visite au Chaudron Baveur, Harry rencontre...</h3>
                    <input type="radio" name="rencontre" value="rogue">Rogue <br>
                    <input type="radio" name="rencontre" value="quirrell">Quirrell <br>
                    <input type="radio" name="rencontre" value="flitwick">Flitwick
                </div>
            </div>
            <div class="colRight">
                <div class="question4">
                    <h3>La cicatrice sur le front d'Harry est en forme de...</h3>
                    <input type="radio" name="cicatrice" value="soleil">De soleil <br>
                    <input type="radio" name="cicatrice" value="eclair">D'éclair <br>
                    <input type="radio" name="cicatrice" value="etoile">D'étoile
                </div>
                <div class="question5">
                    <h3>Quel est le nom complet de Poudlard ?</h3>
                    <input type="radio" name="ecole" value="sorcellerie">L'école de sorcellerie de Poudlard <br>
                    <input type="radio" name="ecole" value="institut">L'institut pour sorciers et sorcières de Poudlard <br>
                    <input type="radio" name="ecole" value="academie">L'académie de sorcellerie Poudlard
                </div>
                <div class="question6">
                    <h3>A quel animal Harry parle-t-il au zoo ?</h3>
                    <input type="radio" name="animal" value="singe">Un Singe <br>
                    <input type="radio" name="animal" value="serpent">Un Serpent <br>
                    <input type="radio" name="animal" value="tigre">Un tigre
                </div>
            </div>
            <div class="submit">
                <button type="submit">Découvre ton score !</button>
            </div>
        </form>
    </main>

<?php require 'footer.php' ?>
