<?php require 'header.php' ?>

<main class="mainHp">
    <form method="POST" action="scorehp7.php">
        <div class="colLeft">
            <div class="question1">
                <h3>Quel élève de Serpentard veut vendre Harry à Voldemort ?</h3>
                    <input type="radio" name="vendre" value="Drago Malefoy">Drago Malefoy <br>
                    <input type="radio" name="vendre" value="Blaise Zabini">Blaise Zabini <br>
                    <input type="radio" name="vendre" value="Cormac McLaggen">Pansy Parkinson
            </div>
            <div class="question2">
                <h3>A Gringotts, quelle créature menace Harry, Ron et Hermione ?</h3>
                <input type="radio" name="gringotts" value="Un géant">Un géant <br>
                <input type="radio" name="gringotts" value="Un troll">Un troll <br>
                <input type="radio" name="gringotts" value="Un dragon">Un dragon
            </div>
            <div class="question3">
                <h3>Lequel des Weasley meurt pendant la bataille de Poudlard ?</h3>
                <input type="radio" name="bataille" value="Fred">Fred <br>
                <input type="radio" name="bataille" value="Bill">Bill <br>
                <input type="radio" name="bataille" value="Percy">Percy
            </div>
        </div>
        <div class="colRight">
            <div class="question4">
                <h3>Quel est le prénom de la soeur de Dumbledore ?</h3>
                <input type="radio" name="soeur" value="Nymphadora">Nymphadora <br>
                <input type="radio" name="soeur" value="Arabella">Arabella <br>
                <input type="radio" name="soeur" value="Ariana">Ariana
            </div>
            <div class="question5">
                <h3>Quel objet Abelforth Dumbledore a-t-il utilisé pour veiller sur Harry et ses amis ?</h3>
                <input type="radio" name="objet" value="Un livre">Un livre <br>
                <input type="radio" name="objet" value="Une lampe">Une lampe <br>
                <input type="radio" name="objet" value="Un miroir">Un miroir
            </div>
            <div class="question6">
                <h3>Le patronus de Lily Potter et Rogue est...</h3>
                <input type="radio" name="patronus" value="Un chat">Un chat <br>
                <input type="radio" name="patronus" value="Une biche">Une biche <br>
                <input type="radio" name="patronus" value="Un Cerf">Un Cerf
            </div>
        </div>
        <div class="submit">
            <button type="submit">Découvre ton score !</button>
        </div>
    </form>
</main>

<?php require 'footer.php' ?>