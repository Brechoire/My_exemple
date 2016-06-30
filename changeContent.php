<?php include 'header.php'; ?>
    <div class="row starter-template">
        <div class="col-md-12">
            <h1 class="text-center">Modifier le contenu d'un élément</h1>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Getters et setters</h3>
                </div>
                <div class="panel-body">
                    <a href="#exemple1" class="btn btn-default">Exemple 1</a>
                </div>
            </div>


        </div>
        <div class="col-md-12 border-sep" id="exemple1">
            <h2>Exemple Getters et setters n°1 </span>
                <button type="button" class="btn btn-lg btn-warning" data-toggle="popover" title="Getters et setters" data-content="Plutôt que de différencier les méthodes chargées de lire (ces méthodes sont dites getters, de l'anglais to get qui signifie « obtenir ») et de modifier (ces méthodes sont dites setters, de l'anglais to set qui signifie « définir ») les valeurs HTML ou CSS, les concepteurs de jQuery ont choisi de leur donner le même nom.">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
                </button>
            </h2>
            <div class="alert alert-info">
                <i class="icon icon-info-circle icon-lg"></i>
                <strong>Info !</strong> J'utilise des <code>class</code> pour éviter la propagation dans la page.
            </div>
                <small></small>
            <p>
                E1: Pour connaitre la valeur de la couleur par défaut du paragraphe (getters) on utilise <code>$('.p1').css('color');</code><br>
                E2: Pour changer la valeur de la couleur par défaut du paragraphe (setters) on utilise <code>$('.p1').css('color', 'MaCouleur');</code><br>
            <p>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="E1" class="btn btn-info btn-block">E1 : Valeur de la couleur par défaut paragraphe</button>
                    <button id="E2" class="btn btn-info btn-block">E2 : Change la couleur du paragraphe en rouge</button>

                    <button id="reset" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-1" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex1">
                    <p class="p1">Mon paragraphe avec une class "p1"</p>
                    <img class="i1" src="img/1.png" alt="Test image">
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-1">
                <pre class="line-numbers">
                    <code class="language-js">

                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 1-->



    </div>

<?php include 'footerHeader.php'; ?>
    <script>
        $(function () {
            var premierParagraphe = $('.p1').css('color');
            $('#E1').click(function () {
                $('.p1').css('color', premierParagraphe);
                $('.p1').text('La couleur par défaut du paragraphe est : ' + premierParagraphe);
            });

            var couleurRouge = 'red';
            $('#E2').click(function () {
                $('.p1').css('color', couleurRouge);
               var defautRouge = $('.p1').css('color');
                $('.p1').text('Mon paragraphe a une couleur : ' + defautRouge + ' "Rouge"  ');
            });

        });
    </script>
<?php include 'footer.php'; ?>