<div class="boutonsbas">
                    </div>
    </div>

            </div>
            
            <div class="push"></div>
        </div>

        <div class="publicite baspage">
            <div class="pubhebergement">
                <p>Site fièrement hébergé chez <a href="http://www.a2hosting.com?aid=5ca65a17be949" target="_top">A2 Hosting</a>.</p>
                <p><a href="https://www.a2hosting.com?aid=5ca65a17be949&amp;bid=ed1c4a67" target="_top"><img src="//affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" width="728" height="90" /></a><img style="border:0" src="https://affiliates.a2hosting.com/scripts/imp.php?aid=5ca65a17be949&amp;bid=ed1c4a67" width="1" height="1" alt="" /></p>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">© 2023 Tous droits réservés.</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">Conception et développement de la plateforme : <span class="auteur"><a href="https://christianelagace.com" target="_blank">Christiane Lagacé</a></span></div>
                    <div class="col text-center">Conception et développement de la plateforme : <span class="auteur"><a href="https://maximelaurin.com" target="_blank">Maxime Laurin</a></span></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center mt-3">
                    <a class="btn btn-primary" href="">Écrivez-moi&nbsp;!</a>
                </div>
            </div>
        </div>




    </footer>

    
    
    
    <div class="popupchristiane" id="popuprecherche">
        <form method="get" action="https://apical.xyz/rechercherFormationsPagesAjax">
            
            <input name="rechercher" type="text" id="rechercher" placeholder="Rechercher" required />
            <a id="soumettrerecherche" href="#"><img src="https://apical.xyz/medias/commun/BoutonRechercher.svg" class="boutonrechercher" title="Rechercher dans tout le site" alt="Soumettre"/></a>
        </form>
        <span class="boutonrefermer"></span>
    </div>
    <div class="popupchristiane" id="popupauthentification">
        <div id="menuusager" class="cache">
    
            <p><label id="prenomnomfamille"></label></p>
        <a class="btn btn-secondary" href="https://apical.xyz/usagers/-1/modification">Profil</a>
        <a class="btn btn-secondary" id="deconnecter" href="#">Déconnecter</a>
    </div>

<div id="formulaireauthentification" >
    <span id="messageauthentification"></span>
    <form method="post" action="https://apical.xyz/usagers/authentifier" class='form-horizontal'>
        <input type="hidden" name="_token" value="uhCzn9VMi0BVLMrOGTzBRvuehivuv7aeNVbOT8OP">

        <div class="form-group row">
            
            <label for="login" class="control-label col-sm-5 requis">Usager: </label>
            <div class=col-sm-6>
                <input type="text" class="form-control" name="login" id="login" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="motdepasse" class="control-label col-sm-5 requis">Mot de passe: </label>
            <div class=col-sm-6>
                <input type="password" class="form-control" name="motdepasse" id="motdepasse">
            </div>
        </div>
        <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
                <div class="form-check">
                    <label for="resterconnecte" class="form-check-label" checked>
                        <input class="form-check-input" type="checkbox" id="resterconnecte" name="resterconnecte">
                        Rester connecté
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
                <a id="soumettreauthentification" class="btn btn-secondary" href="#">Soumettre</a>
            </div>
        </div>
        <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
                <a href="https://apical.xyz/usagers/creation">Nouvel usager</a>
            </div>
        </div>
    </form>

</div>


    <span class="boutonrefermer"></span>
    </div>
    <div class="popupchristiane" id="popupbienvenue"></div>
    

    
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    
    <script src="https://apical.xyz/js/jquery.js?id=6a07da9fae934baf3f749e876bbfdd96"></script>
    <script src="https://apical.xyz/js/bootstrap.js?id=01dce07671c51d0027f56de26689e9b0"></script>
    <script src="https://apical.xyz/js/app.js?id=f287b5ddc55a704da9893905227c6dae"></script>
    <script src="https://apical.xyz/js/all.js?id=26fedb11c6e507a092e1b090a994d303"></script>

    <script>
        $(function () {
            $('.reinitialiserCookiesMenuFormations').click(function (event) {
                event.preventDefault();
                var jqxhr = $.get("https://apical.xyz/reinitialiserCookiesMenuFormations")
                    .done(function (response, textStatus, jqXHR) {
                        $('.consulterecemment').remove();
                        afficherPopupInformation('La liste des dernières formations consultées a été réinitialisée avec succès !');
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {
                        afficherPopupErreur('Un problème empêche la réinitialisation de la liste des dernières formations consultées.');
                    });
            });
        });
    </script>

    
    <div id="cookie-consent-banner" class="cookie-consent-banner">
    <h3>Nous utilisons des cookies, qu'en pensez-vous?</h3>
    <button id="btn-accept-all" class="cookie-consent-button btn-success">J'accepte tout</button>
    <button id="btn-accept-some" class="cookie-consent-button btn-outline">Seulement ceux cochés</button>
    <button id="btn-reject-all" class="cookie-consent-button btn-grayscale">Je refuse tout</button>
    <div class="cookie-consent-options">
        <label><input id="consent-necessary" type="checkbox" value="Necessary" checked disabled>Nécessaires</label>
        <label><input id="consent-analytics" type="checkbox" value="Analytics" checked>Analytics</label>
        <label><input id="consent-preferences" type="checkbox" value="Preferences" checked>Préférences</label>
        <label><input id="consent-marketing" type="checkbox" value="Marketing">Marketing</label>
    </div>
</div>

<script>
    //localStorage.removeItem('consentMode');   // pour faire réapparaître la bannière pendant mes tests

    function hideBanner() {
        document.getElementById('cookie-consent-banner').style.display = 'none';
    }

    if(localStorage.getItem('consentMode') === null) {

        document.getElementById('btn-accept-all').addEventListener('click', function() {
            setConsent({
                necessary: true,
                analytics: true,
                preferences: true,
                marketing: true
            });
            hideBanner();
        });
        document.getElementById('btn-accept-some').addEventListener('click', function() {
            setConsent({
                necessary: true,
                analytics: document.getElementById('consent-analytics').checked,
                preferences: document.getElementById('consent-preferences').checked,
                marketing: document.getElementById('consent-marketing').checked
            });
            hideBanner();
        });
        document.getElementById('btn-reject-all').addEventListener('click', function() {
            setConsent({
                necessary: false,
                analytics: false,
                preferences: false,
                marketing: false
            });
            hideBanner();
        });
        document.getElementById('cookie-consent-banner').style.display = 'block';
    }

    function setConsent(consent) {
        const consentMode = {
            'functionality_storage': consent.necessary ? 'granted' : 'denied',
            'security_storage': consent.necessary ? 'granted' : 'denied',
            'ad_storage': consent.marketing ? 'granted' : 'denied',
            'analytics_storage': consent.analytics ? 'granted' : 'denied',
            'personalization': consent.preferences ? 'granted' : 'denied',
        };
        gtag('consent', 'update', consent);
        localStorage.setItem('consentMode', JSON.stringify(consentMode));
    }

</script>
    <script>
    $(function() {

        // *********************************************************************************************
        // *** Drag'n drop *****************************************************************************
        // *********************************************************************************************
        // todo : faire le drag'n drop pour les fiches.

        $('#dragchapitres').sortable({
            handle: $('.glisser'),
            cursor: 'move',
            update: function(event, ui) {
                var chapitresNouvelOrdre = $(this).sortable('serialize');    // chaîne au format "dragchapitre[]=10&dragchapitre[]=8&dragchapitre[]=9"

                $.ajax({
                    data: chapitresNouvelOrdre,
                    type: 'POST',
                    url: '/chapitres/reordonnerChapitres'
                });
            }
        });

        // **************************************************************************************************
        // *** Génération de la liste des fiches de tous les chapitres lorsqu'on clique sur Tout développer *
        // **************************************************************************************************
        $("#chapitresformation #developperreduire").click(function() {
            // s'il y a une balise avec la classe encoursdegeneration dans un panel-body, c'est que la liste complète n'a pas été générée
            // if ($('#chapitresformation .panel-group .encoursdegeneration').length) {   // la classe panel-group n'a pas d'équivalent en Bootstrap 4...
            if ($('#chapitresformation .encoursdegeneration').length) {
                // retrouve le formation_id
                var formation_id = $('#chapitresformation').attr('data-formation-id');
                // génère la liste
                listeFichesFormationDansPanel(formation_id);
            }
        });

        // *********************************************************************************************
        // *** Génération de la liste des fiches d'un chapitre lorsqu'on clique sur son titre  *********
        // *********************************************************************************************
        // les balises ont été générées par ajax donc pas existantes sur le document.ready
        $(document).on('click', '#chapitresformation .card-header a[data-toggle="collapse"]', function(event) {
            // retrouve le card-body (anciennement panel-body) qui contient le chapitre_id et où la liste sera affichée
            // en remontant au panel puis en redescendant sur le panel-body qui est au même niveau que le panel-heading qui contient le lien
            var $panelbody = $(this).parents('.card:first').find('.card-body:first');

            // s'il y a une balise avec la classe encoursdegeneration dans un panel-body, c'est que la liste n'a pas été générée
            if ($panelbody.find('.encoursdegeneration').length) {
                // génère la liste
                listeFichesChapitreDansPanel($panelbody);
            }
        });

    });

</script>

</body>

</html>