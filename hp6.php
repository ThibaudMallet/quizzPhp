<?php require 'header.php' ?>

<main class="mainHp">
    <form method="POST" action="scorehp6.php">
        <div class="colLeft">
            <div class="question1">
                <h3>Aux Trois Balais, Ron voit sa soeur Ginny en train d'embrasser...</h3>
                    <input type="radio" name="ginny" value="Neville Londubat">Neville Londubat <br>
                    <input type="radio" name="ginny" value="Dean Thomas">Dean Thomas <br>
                    <input type="radio" name="ginny" value="Cormac McLaggen">Cormac McLaggen
            </div>
            <div class="question2">
                <h3>Quel mangemort kidnappe Ollivander ?</h3>
                <input type="radio" name="ollivander" value="Fenrir Greyback">Fenrir Greyback <br>
                <input type="radio" name="ollivander" value="Bellatrix Lestrange">Bellatrix Lestrange <br>
                <input type="radio" name="ollivander" value="Lucius Malefoy">Lucius Malefoy
            </div>
            <div class="question3">
                <h3>A qui le professeur Slughorn aurait-il aimé enseigner à Poudlard ?</h3>
                <input type="radio" name="enseigner" value="Narcissa Malefoy">Narcissa Malefoy <br>
                <input type="radio" name="enseigner" value="Regulus Black">Regulus Black <br>
                <input type="radio" name="enseigner" value="Sirius Black">Sirius Black
            </div>
        </div>
        <div class="colRight">
            <div class="question4">
                <h3>Chez qui Harry emmène-t-il Ron pour inverser les effets du philtre d'amour ?</h3>
                <input type="radio" name="ron" value="Slughorn">Slughorn <br>
                <input type="radio" name="ron" value="Rogue">Rogue <br>
                <input type="radio" name="ron" value="Pomfresh">Pomfresh
            </div>
            <div class="question5">
                <h3>Que contiennent les fioles que le professeur Dumbledore garde dans une boîte dans son bureau ?</h3>
                <input type="radio" name="fioles" value="de l'hydromel">de l'hydromel <br>
                <input type="radio" name="fioles" value="Des souvenirs">Des souvenirs <br>
                <input type="radio" name="fioles" value="Des potions">Des potions
            </div>
            <div class="question6">
                <h3>Quel est le nom de l'orphelinat où le Dumbledore a trouvé Tom Jedusor ?</h3>
                <input type="radio" name="orphelinat" value="Cole">Cole <br>
                <input type="radio" name="orphelinat" value="Wool">Wool <br>
                <input type="radio" name="orphelinat" value="Gaunt">Gaunt
            </div>
        </div>
        <div class="submit">
            <button type="submit">Découvre ton score !</button>
        </div>
    </form>
</main>

<?php require 'footer.php' ?>