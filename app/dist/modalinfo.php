
<?php 
include 'connexion_bdd.php';

$var .= '';
function modalDynamique()
{
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
<p>' .
$stockdate.
    '</p>
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
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Numero de telephone</label>
        </div>
    </div>
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">Ville</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Code Postale</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <form action="#">
                <p class="range-field">
                  <input id="start"  type="range" min="0" max="20"/>
                </p>
              </form>
                    <label>Selectionnez le nombre de personne</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4 centerend modal-action modal-close">
                <button class="btn waves-effect waves-light" type="button" name="action">Annuler
                </button>
                </div>
                <div class="input-field col s4">
                </div>
                <div class="input-field col s4 centerstart">
                <button class="btn waves-effect waves-light" type="button" name="action">valider
                </button>
                </div>
            </div>
        </form>
</div>';

$var .= $recupInfoModal['id_event'];
}
echo $contentModal; 


}

function modalDynamiqueInscrit()
{
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
<p>' .
$stockdate.
    '</p>
<div class="row">
<form class="col s12">
    <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
    </div>
            <div class="row">
                <div class="input-field col s12">
                <form action="#">
                <p class="range-field">
                  <input id="start"  type="range" min="0" max="20"/>
                </p>
              </form>
                    <label>Selectionnez le nombre de personne</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4 centerend modal-action modal-close">
                <button class="btn waves-effect waves-light" type="button" name="action">Annuler
                </button>
                </div>
                <div class="input-field col s4">
                </div>
                <div class="input-field col s4 centerstart">
                <button class="btn waves-effect waves-light" type="button" name="action">valider
                </button>
                </div>
            </div>
        </form>
</div>';

$var .= $recupInfoModal['id_event'];
}
echo $contentModal; 


}






// modalDynamique();
// echo $var;

if (isset($_POST['modalCreate'])) {
    $pageEvenement = $_POST['modalCreate'];
    switch ($_POST['modalCreate']) {
        case 'click':
            modalDynamique();
            echo $var;
            break;
        case 'dejareserver':
        modalDynamiqueInscrit();
        break;

    }

}


    ?>


<script src="js/materialize.js"></script>