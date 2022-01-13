<?php require 'header.php' ?>

<main class="mainHp">
    <form method="POST" action="scorehp2.php">
        <div class="colLeft">
            <div class="question1">
                <h3>Colin Crivey a toujours avec lui...</h3>
                    <input type="radio" name="objet" value="Son appareil photo">Son appareil photo <br>
                    <input type="radio" name="objet" value="Son crapaud">Son crapaud <br>
                    <input type="radio" name="objet" value="Une boîte de bonbons">Une boîte de bonbons
            </div>
            <div class="question2">
                <h3>Chez la mandragore, qu'est-ce qui peut être fatal ?</h3>
                <input type="radio" name="mort" value="Son cri">Son cri <br>
                <input type="radio" name="mort" value="Son odeur">Son odeur <br>
                <input type="radio" name="mort" value="Ses fleurs">Ses fleurs
            </div>
            <div class="question3">
                <h3>Lequel des amis de Harry a des parents moldus ?</h3>
                <input type="radio" name="amis" value="Luna Lovegood">Luna Lovegood <br>
                <input type="radio" name="amis" value="Neville Londubat">Neville Londubat <br>
                <input type="radio" name="amis" value="Hermione Granger">Hermione Granger
            </div>
        </div>
        <div class="colRight">
            <div class="question4">
                <h3>Pendant le dîner chez les Dursley, que fait tomber Dobby ?</h3>
                <input type="radio" name="dobby" value="Un livre">Un livre <br>
                <input type="radio" name="dobby" value="Un verre d'eau">Un verre d'eau <br>
                <input type="radio" name="dobby" value="Un gâteau">Un gâteau
            </div>
            <div class="question5">
                <h3>Quel est le nom du vieux hibou des Weasley ?</h3>
                <input type="radio" name="hibou" value="Hedwige">Hedwige <br>
                <input type="radio" name="hibou" value="Errol">Errol <br>
                <input type="radio" name="hibou" value="Hermès">Hermès
            </div>
            <div class="question6">
                <h3>La poudre de cheminette produit des flammes de couleur...</h3>
                <input type="radio" name="couleur" value="Verte">Verte <br>
                <input type="radio" name="couleur" value="Rouge">Rouge <br>
                <input type="radio" name="couleur" value="Noire">Noire
            </div>
        </div>
        <div class="submit">
            <button type="submit">Découvre ton score !</button>
        </div>
    </form>
</main>

<?php require 'footer.php' ?>