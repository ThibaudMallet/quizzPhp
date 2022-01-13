<?php require 'header.php' ?>

<main class="mainHp">
    <form method="POST" action="scorehp3.php">
        <div class="colLeft">
            <div class="question1">
                <h3>Quelle est la forme du Patronus que Harry aperçoit au bord du lac ?</h3>
                    <input type="radio" name="patronus" value="Un aigle">Un aigle <br>
                    <input type="radio" name="patronus" value="Un cheval">Un cheval <br>
                    <input type="radio" name="patronus" value="Un cerf">Un cerf
            </div>
            <div class="question2">
                <h3>Quel cadeau Harry reçoit-il à Noël ?</h3>
                <input type="radio" name="noel" value="Un éclair de feu">Un éclair de feu <br>
                <input type="radio" name="noel" value="La cape d'invisibilité">La cape d'invisibilité <br>
                <input type="radio" name="noel" value="La carte du Maraudeur">La carte du Maraudeur
            </div>
            <div class="question3">
                <h3>Pendant le dîner chez les Dursley, tante Marge donne à son chien...</h3>
                <input type="radio" name="diner" value="Du vinaigre">Du vinaigre <br>
                <input type="radio" name="diner" value="Du cognac">Du cognac <br>
                <input type="radio" name="diner" value="De la limonade">De la limonade
            </div>
        </div>
        <div class="colRight">
            <div class="question4">
                <h3>Lequel de ces anciens élèves de Poudlard n'est pas un Animagus ?</h3>
                <input type="radio" name="animagus" value="Rogue">Rogue <br>
                <input type="radio" name="animagus" value="Sirius Black">Sirius Black <br>
                <input type="radio" name="animagus" value="Peter Pettigrow">Peter Pettigrow
            </div>
            <div class="question5">
                <h3>Ce qui gêne le plus Sirius quand il est un chien, c'est...</h3>
                <input type="radio" name="sirius" value="Les puces">Les puces <br>
                <input type="radio" name="sirius" value="La nourriture">La nourriture <br>
                <input type="radio" name="sirius" value="La queue">La queue
            </div>
            <div class="question6">
                <h3>Qui aurait aimé capturer Sirius Black ?</h3>
                <input type="radio" name="capture" value="Lupin">Lupin <br>
                <input type="radio" name="capture" value="Hagrid">Hagrid <br>
                <input type="radio" name="capture" value="Rogue">Rogue
            </div>
        </div>
        <div class="submit">
            <button type="submit">Découvre ton score !</button>
        </div>
    </form>
</main>

<?php require 'footer.php' ?>