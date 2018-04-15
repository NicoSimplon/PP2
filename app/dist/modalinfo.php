
<?php 
include 'connexion_bdd.php';

$var = '';

function modalDynamique(){
    $stockdate = $_POST['myDate'];
    global $var;
    $requete = pg_query("SELECT  evenement.id_event, date_event,event,nom_artiste,lib_genre,descriptif
        FROM artiste
        INNER JOIN art_genre ON artiste.id_artiste=art_genre.id_artiste
        INNER JOIN genre ON genre.id_genre=art_genre.id_genre
        INNER JOIN eve_art ON artiste.id_artiste=eve_art.id_artiste
        INNER JOIN evenement ON eve_art.id_event=evenement.id_event
        WHERE date_event = '" . $stockdate . "' ");

    while ($recupInfoModal = pg_fetch_array($requete)) {
        $contentModal .= '
            <div class="modal-content">
                <h4>' . $recupInfoModal['event'] . '</h4>
                <p>' .$stockdate.'</p>
                <input id="cache" value="'.$recupInfoModal['id_event'].'" type="hidden" style="display: none;">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate">
                                    <label for="first_name">Nom</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Prénom</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" maxlength="10"></textarea>
                                <label for="textarea1">Numero de telephone</label>
                            </div>
                        </div>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="ville" type="text" class="validate">
                                        <label for="first_name">Ville</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="cp" type="text" class="validate" maxlength="5">
                                        <label for="last_name">Code Postal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <form action="#">
                                            <p class="range-field">
                                                <input id="start" type="range" min="0" max="20"/>
                                            </p>
                                        </form>
                                        <label>Selectionnez le nombre de personne</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s4 centerend modal-action modal-close">
                                        <button class="btn waves-effect waves-light" type="button" name="action">Annuler</button>
                                    </div>
                                    <div class="input-field col s4"></div>
                                    <div class="input-field col s4 centerstart">
                                        <button class="btn waves-effect waves-light validFirstResa modal-close" type="button" name="action" data-first="btn1">valider</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>';

        $var .= $recupInfoModal['id_event'];
    }
    echo $contentModal; 
}

function modalDynamiqueInscrit(){
    $stockdate = $_POST['myDate'];
    global $var;
    $requete = pg_query("SELECT  evenement.id_event, date_event,event,nom_artiste,lib_genre,descriptif
        FROM artiste
        INNER JOIN art_genre ON artiste.id_artiste=art_genre.id_artiste
        INNER JOIN genre ON genre.id_genre=art_genre.id_genre
        INNER JOIN eve_art ON artiste.id_artiste=eve_art.id_artiste
        INNER JOIN evenement ON eve_art.id_event=evenement.id_event
        WHERE date_event = '" . $stockdate . "' ");

    while ($recupInfoModal = pg_fetch_array($requete)) {
        $contentModal .= '
            <div class="modal-content">
                <h4>' . $recupInfoModal['event'] . '</h4>
                <p>' .$stockdate.'</p>
                <input id="cache2" value="'.$recupInfoModal['id_event'].'" type="hidden" style="display: none;">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email2" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <form action="#">
                                    <p class="range-field"><input id="start2"  type="range" min="0" max="20"/></p>
                                </form>
                                <label>Selectionnez le nombre de personne</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4 centerend modal-action modal-close">
                                <button class="btn waves-effect waves-light" type="button" name="action">Annuler</button>
                            </div>
                            <div class="input-field col s4"></div>
                            <div class="input-field col s4 centerstart">
                                <button class="btn waves-effect waves-light validFirstResa modal-close" type="button" name="action" data-first="btn2">valider</button>
                            </div>
                        </div>
                    </form>
                </div>';

                $var .= $recupInfoModal['id_event'];
    }
    echo $contentModal; 
}

if (isset($_POST['modalCreate'])) {
    $pageEvenement = $_POST['modalCreate'];
    switch ($_POST['modalCreate']) {
        case 'click':
            modalDynamique();
        break;
        case 'dejareserver':
            modalDynamiqueInscrit();
        break;

    }
} 

// récupération des données des formulaires 
    // données formulaire 1:
   
    $nom = $_POST['name'];
    $prenom = $_POST['lname'];
    $email = $_POST['mail'];
    $tel = $_POST['tel'];
    $ville = $_POST['town'];
    $cp = $_POST['code'];
    $resa = $_POST['nbResa'];
    $id = $_POST['id_eve'];
    
    // données formulaire 2
    $email2 = $_POST['mail2'];
    $resa2 = $_POST['nbResa2'];
    $id2 = $_POST['id_eve2'];

    $pattern = "#^[a-z0-9]+$#i";

    function firstResa(){
    if(isset($email)){
        $var = $id;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $verif_mail = pg_query("SELECT courriel FROM personne WHERE courriel = '".$email."';")  or die ('Erreur : '.pg_last_error());
                
            $result = pg_fetch_array($verif_mail);

            if($result[0] == $email){
                echo "<p>Cet email est déjà présent dans notre base de donnée. Veuillez utiliser l'autre formulaire. Merci.</p>";
            }
            else{
                //inscription nouvelle personne
                if (preg_match($pattern , $nom)){
                    if(preg_match($pattern , $prenom)){
                        if(preg_match($pattern , $tel)){
                            if(strlen($tel) == 10){
                                if($ville == ''){
                                    $inscription = pg_query("INSERT INTO personne (nom, prenom, courriel, num_tel) VALUES('".$nom."', '".$prenom."', '".$email."', '".$tel."');")  or die ('Erreur : '.pg_last_error());

                               
                                        $reservation = pg_query("INSERT INTO pers_even (id_pers, id_event, nb_personne) VALUES((SELECT id_pers FROM personne WHERE courriel = '".$email."'), ".$var.", ".$resa.");") or die ('Erreur : '.pg_last_error());

                                        echo "<p>Votre réservation a bien été prise en compte.</p>";
                                }
                                else{
                                    if($cp == ''){
                                        echo "<p>Si vous souhaitez renseigner votre ville, merci de renseigner également votre code postal.</p>";
                                    }
                                    else{
                                        if(strlen($cp) == 5){
                                            if(preg_match($pattern , $cp)){
                                                $inscription = pg_query("INSERT INTO personne (nom, prenom, courriel, num_tel, nom_ville, id_cp) VALUES('".$nom."', '".$prenom."', '".$email."', '".$tel."', '".$ville."', (SELECT id_cp FROM code_postal WHERE cp = '".$cp."'));")  or die ('Erreur : '.pg_last_error());

                               
                                                $reservation = pg_query("INSERT INTO pers_even (id_pers, id_event, nb_personne) VALUES((SELECT id_pers FROM personne WHERE courriel = '".$email."'), ".$var.", ".$resa.");") or die ('Erreur : '.pg_last_error());

                                                echo "<p>Votre réservation a bien été prise en compte.</p>";
                                            }
                                            else{
                                                echo "<p>Le code postal ne doit contenir que des chiffres.</p>";
                                            }
                                        }
                                        else{
                                            echo "<p>Le code postal renseigné n'est pas valide.</p>";
                                        }
                                    }
                                }
                            }
                            else{
                                echo "<p>Merci de renseigner un numéro de téléphone valide (10 caractères maximums).</p>";
                            }
                        }
                        else{
                            echo "<p>Le numéro de téléphone ne doit contenir aucun caractère spécial.</p>";
                        }
                    }
                    else{
                        echo "<p>Le prénom ne doit contenir aucun caractère spécial.</p>";
                    }
                }
                else{
                    echo "<p>Le nom ne doit contenir aucun caractère spécial.</p>";
                }
            }
        }
    }
    }
    
    // réservation par une personne déjà inscrite  
    function dejaResa(){  
    if(isset($email2)){
        $var2 = $id2;
        if(filter_var($email2, FILTER_VALIDATE_EMAIL)){
            $verif_mail2 = pg_query("SELECT courriel FROM personne WHERE courriel = '".$email2."';")  or die ('Erreur : '.pg_last_error());
            $result2 = pg_fetch_array($verif_mail2);
            if($result2[0] == $email2){

                // $verifResa = pg_fetch_array(pg_query("SELECT pers_even.id_pers, pers_even.id_event FROM pers_even WHERE pers_even.id_pers = (SELECT personne.id_pers FROM personne WHERE courriel = '".$email2."');"));


                // $verifResa2 = pg_fetch_array(pg_query("SELECT pers_even.id_event FROM pers_even WHERE pers_even.id_event = ".$var.";"));

                // if($verifResa[1] == $verifResa2[0]){
                   //echo "<p>Vous avez déjà effectué une réservation pour cet événement. Si vous souhaitez la modifier, merci de nous contacter par téléphone.</p>"; 
                //}
                //else{
                    $reservation = pg_query("INSERT INTO pers_even (id_pers, id_event, nb_personne) VALUES((SELECT id_pers FROM personne WHERE courriel = '".$email2."'), ".$var2.", ".$resa2.");") or die ('Erreur : '.pg_last_error());
                    echo "<p>Votre réservation a bien été prise en compte.</p>";
                //}
            }
            else{
                echo "<p>Votre adresse mail n'est pas enregistrée. Merci d'utiliser l'autre formulaire.</p>";
            }
        }
    }
    }

if(isset($_POST['bouton'])){
    $bouton = $_POST['bouton'];
    switch ($bouton)) {
        case 'btn1':
            firstResa();
            break;
    
        case 'btn2':
            dejaResa();
            break;
    }
}
    

?>

<!-- appel de materialize afin que les modales fonctionnent correctement -->
<script src="js/jquery.js"></script>
<script src="js/materialize.js"></script>
<script src="js/resa.js"></script>