<?php require 'header.php' ?>

<main class="mainHp">
    <form method="POST" action="scorehp5.php">
        <div class="colLeft">
            <div class="question1">
                <h3>A qui Harry écrit-il qu'il se sent seul malgré son retour à Poudlard ?</h3>
                    <input type="radio" name="lettre" value="Sirius Black">Sirius Black <br>
                    <input type="radio" name="lettre" value="Remus Lupin">Remus Lupin <br>
                    <input type="radio" name="lettre" value="Hagrid">Hagrid
            </div>
            <div class="question2">
                <h3>Qui accuse Harry d'être arrogant, comme son père ?</h3>
                <input type="radio" name="accuser" value="Lucius Malefoy">Lucius Malefoy <br>
                <input type="radio" name="accuser" value="Sirius Black">Sirius Black <br>
                <input type="radio" name="accuser" value="Rogue">Rogue
            </div>
            <div class="question3">
                <h3>Qui a interdit à Ron et Hermione d'écrire à Harry pendant l'été ?</h3>
                <input type="radio" name="ecrire" value="Dumbledore">Dumbledore <br>
                <input type="radio" name="ecrire" value="Fudge">Fudge <br>
                <input type="radio" name="ecrire" value="Mrs Weasley">Mrs Weasley
            </div>
        </div>
        <div class="colRight">
            <div class="question4">
                <h3>Dans le rêve de Harry qui est attaqué par un serpent ?</h3>
                <input type="radio" name="attaque" value="Hagrid">Hagrid <br>
                <input type="radio" name="attaque" value="Dumbledore">Dumbledore <br>
                <input type="radio" name="attaque" value="Mr Weasley">Mr Weasley
            </div>
            <div class="question5">
                <h3>Harry reçoit une lettre d'expulsion de Poudlard. Elle est signée de...</h3>
                <input type="radio" name="expulsion" value="Dolores Ombrage">Dolores Ombrage <br>
                <input type="radio" name="expulsion" value="Mafalda Hopkrik">Mafalda Hopkrik <br>
                <input type="radio" name="expulsion" value="Barty Croupton">Barty Croupton
            </div>
            <div class="question6">
                <h3>Où l'armée de Dumbledore s'entraîne-t-elle ?</h3>
                <input type="radio" name="armee" value="Dans la Salle sur Demande">Dans la Salle sur Demande <br>
                <input type="radio" name="armee" value="Dans la Chambre des Secrets">Dans la Chambre des Secrets <br>
                <input type="radio" name="armee" value="Dans la Forêt interdite">Dans la Forêt interdite
            </div>
        </div>
        <div class="submit">
            <button type="submit">Découvre ton score !</button>
        </div>
    </form>
</main>

<?php require 'footer.php' ?>