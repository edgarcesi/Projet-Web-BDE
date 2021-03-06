
<!DOCTYPE html>
<html>

<head>
    <title>
        accueil
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"> </script>

    <script src="https://kit.fontawesome.com/e4c864528c.js" crossorigin="anonymous"></script>

    <?php  if (empty(session_id())) session_start(); ?>

</head>

<body>

<div id="bandeau" class="container-fluid">
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="welcome.php">evenement <i class="far fa-map"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop <i class="fas fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pannier.php">panier <i class="fas fa-shopping-basket"></i></a>
                </li>

                <?php if (empty($_SESSION['token'])){ ?>
                    <li class="nav-item" >
                        <a class="nav-link" href="login.php">Connexion<i class="fas fa-sign-out-alt"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">S'inscrire<i class="fas fa-sign-in-alt"></i></a>
                    </li>
                <?php } ?>

                <?php if (isset($_SESSION['token'])){ ?>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php">D??connexion<i class="fas fa-sign-in-alt"></i></a></li>
                <?php } ?>

            </ul>
        </div>

        <h3>
            status
        </h3>
    </nav>
</div>
<div id="jumbotron2">
    <h2><br><br>
        Propos?? aux associations d??clar??es par application de la<br>
        loi du 1er juillet 1901 et du d??cret du 16 ao??t 1901.</h2>
</div>
<div  class="jumbotron ">
    <h3>ARTICLE 1- NOM</h3><br>
    <h4>Il est fond?? entre les adh??rents aux pr??sents statuts une association r??gie par la loi du 1er juillet 1901 et le d??cret du 16 ao??t 1901, ayant pour titre : Bureau des Etudiants de l'Arbois</h4>
    <h3>ARTICLE 2 - BUT OBJET</h3><br>
    <h4>Cette association a pour objet l???organisation de la vie ??tudiante au sein du Cesi de Aix</h4>

    <h3>ARTICLE 3 - SI??GE SOCIAL</h3><br>
    <h4>Le si??ge social est fix?? ?? Pavillon Martel, Europ??le de l'Arbois, 13545 Aix-en-Provence Il pourra ??tre transf??r?? par simple d??cision du conseil d'administration ;</h4>

    <h3>Article 4 - DUREE</h3><br>
    <h4>La dur??e de l???association est illimit??e.</h4>

    <h3>ARTICLE 5 - COMPOSITION</h3><br>
    <h4>L'association se compose de :<br>

        Membres fondateurs<br>
        Membres actif<br>
        Membres adh??rents</h4><br>
    <h3>ARTICLE 6 - ADMISSION</h3><br>
    <h4>L???association est ouverte aux ??l??ves de l?????cole se nommant le Cesi et se situant ?? Aix en Provence.

        ?? Pour faire partie de l'association, il faut ??tre agr???? par le conseil d???administration, qui statue, lors de chacune de ses r??unions, sur les demandes d'admission pr??sent??es. ??</h4>

    <h3>ARTICLE 7 - MEMBRES ??? COTISATIONS</h3><br>
    <h4>Sont membres fondateur ceux qui ont particip?? ?? la constitution de l'association; ils sont dispens??s de cotisations; Sont membres actifs et adherents ceux qui ont pris l'engagement de verser annuellement une somme de 1??? ?? titre de cotisation.</h4>

    <h3>ARTICLE 8. - RADIATIONS</h3><br>
    <h4>La qualit?? de membre se perd par :

        La d??mission;
        Le d??c??s;
        La radiation prononc??e par le conseil d'administration pour non-paiement de la cotisation ou pour motif grave, l'int??ress?? ayant ??t?? invit?? ?? fournir des explications devant le bureau et/ou par ??crit.
        le fait de ne plus faire partie des ??l??ves du Cesi d???Aix-en-Provence</h4>

    <h3>ARTICLE 9. - AFFILIATION</h3><br>
    <h4>La pr??sente association peut adh??rer ?? d???autres associations, unions ou regroupements par d??cision du conseil d???administration.</h4>


    <h3>ARTICLE 10. - RESSOURCES</h3><br>
    <h4>Les ressources de l'association comprennent :

        Le montant des droits d'entr??e et des cotisations ;<br>
        Les subventions de l'Etat, des d??partements et des communes.<br>
        Toutes les ressources autoris??es par les lois et r??glements en vigueur. ??<br>
        Des recettes provenant de la vente de produits, de services ou de prestations fournies par l'association.</h4>

    <h3>ARTICLE 11 - ASSEMBLEE GENERALE ORDINAIRE</h3><br>
    <h4>L'assembl??e g??n??rale ordinaire comprend les membres actifs de l'association ?? quelque titre qu'ils soient.

        Elle se r??unit chaque ann??e au mois de Septembre Quinze jours au moins avant la date fix??e, les membres de l'association sont convoqu??s par les soins du secr??taire. L'ordre du jour figure sur les convocations. Le pr??sident, assist?? des membres du conseil, pr??side l'assembl??e et expose la situation morale ou l???activit?? de l'association. Le tr??sorier rend compte de sa gestion et soumet les comptes annuels (bilan, compte de r??sultat et annexe) ?? l'approbation de l'assembl??e. L???assembl??e g??n??rale fixe le montant des cotisations annuelles et du droit d???entr??e ?? verser par les diff??rentes cat??gories de membres.

        Ne peuvent ??tre abord??s que les points inscrits ?? l'ordre du jour.

        Les d??cisions sont prises ?? la majorit?? des voix des membres pr??sents ou repr??sent??s.

        Il est proc??d??, apr??s ??puisement de l'ordre du jour, au renouvellement des membres sortants du conseil.

        Toutes les d??lib??rations sont prises ?? main lev??e, except?? l?????lection des membres du conseil.

        Les d??cisions des assembl??es g??n??rales s???imposent ?? tous les membres, y compris absents ou repr??sent??s.</h4>

    <h3>ARTICLE 12 - ASSEMBLEE GENERALE EXTRAORDINAIRE</h3><br>
    <h4>Si besoin est, ou sur la demande de la moiti?? plus un des membres inscrits, le pr??sident peut convoquer une assembl??e g??n??rale extraordinaire, suivant les modalit??s pr??vues aux pr??sents statuts et uniquement pour modification des statuts ou la dissolution ou pour des actes portant sur des immeubles.

        Les modalit??s de convocation sont les m??mes que pour l???assembl??e g??n??rale ordinaire.

        Les d??lib??rations sont prises ?? la majorit?? des membres pr??sents.</h4>


    <h3>ARTICLE 13 - CONSEIL D'ADMINISTRATION</h3><br>
    <h4>L'association est dirig??e par un conseil au minimum de 3 membres, ??lus pour 1 ann??es par l'assembl??e g??n??rale. Les membres sont r????ligibles. En cas de vacances, le conseil pourvoit provisoirement au remplacement de ses membres. Il est proc??d?? ?? leur remplacement d??finitif par la plus prochaine assembl??e g??n??rale. Les pouvoirs des membres ainsi ??lus prennent fin ?? l'expiration le mandat des membres remplac??s.

</div>

</div>





<footer class="container-fluid" >
    <div class="row col-sm-12 text-center">

        <div class="col-sm-3 ">
            <h2>
                <a href="https://twitter.com/"><i class="fab fa-twitter"> </i></a>
            </h2>
        </div>
        <div class="col-sm-3 ">
            <h2>
                <a href="https://www.youtube.com/"><i class="fab fa-youtube"> </i></a>
            </h2>
        </div>
        <div class="col-sm-3 ">
            <h2>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"> </i></a>
            </h2>
        </div>
        <div class="col-sm-3 ">
            <h2>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"> </i></a>
            </h2>
        </div>

    </div>
    <br>
    <br>
    <div class="row col-sm-12 text-center">
        <div class="col-sm-3 ">
            <h5>
                <a href="status.php" >nos status</a>
            </h5>
        </div>
        <div class="col-sm-3 ">
            <h5>
                <a href="https://discordapp.com/invite/wHcspBT" >discord</a>
            </h5>
        </div>
        <div class="col-sm-3 ">
            <h5>
                <a href="https://github.com/cesi-it-aix/website" >github</a>
            </h5>
        </div>
        <div class="col-sm-3 ">
            <h5>
                <a href="https://www.documentslegaux.fr/commerce/accord-de-confidentialite/?loc=FR&pid=googlefrance-36451502329-255045048235_sl-ggkey_confidentialit%C3%A9&gclid=Cj0KCQiAn8nuBRCzARIsAJcdIfN2H_g-yWIJwu8vPp8tQMQl9BrOcQZlo0qQyG5sDoBwWipTPT4EPgUaAtgCEALw_wcB" >politique de confidentialit??</a>
            </h5>
        </div>
    </div>
</footer>

</body>
</html>
