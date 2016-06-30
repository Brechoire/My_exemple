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
                    <button id="E3" class="btn btn-info btn-block">E3 : Valeur de la taille par défaut de l'image</button>
                    <button id="E4" class="btn btn-info btn-block">E4 : Change la taille de l'image en 100px</button>
                    <button id="E5" class="btn btn-info btn-block">E5 : Valeur par défaut de la taille de la première cellule du tableau et de la couleur</button>
                    <button id="E6" class="btn btn-info btn-block">E6 : Change la taille de la cellule en 90px et la couleur en rouge</button>

                    <button id="reset1" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-1" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex1">
                    <p class="p1">Mon paragraphe avec une class "p1"</p>
                    <img class="i1" src="img/1.png" alt="Test image">
                    <span class="t-i1"></span>

                    <form>
                        <table border=1 class="table">
                            <tr><td></td><td>Salle 1</td><td>Salle 2</td></tr>
                            <tr><td>Lundi</td><td>X</td><td>X</td></tr>
                            <tr><td>Mardi</td><td></td><td></td></tr>
                            <tr><td>Mercredi</td><td>X</td><td></td></tr>
                            <tr><td>Jeudi</td><td></td><td>X</td></tr>
                            <tr><td>Vendredi</td><td>X</td><td>X</td></tr>
                        </table>
                    </form>
                    <span class="t-t1"></span>
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-1">
                <pre class="line-numbers">
                    <code class="language-js">
                        var texteDefaut = $('.p1').text();
                        var texteDefautTable = $('.t-t1').text();
                        var premierParagraphe = $('.p1').css('color');
                        var tailleImgDefaut = $('.i1').css('width');
                        var couleurRouge = 'red';
                        var tailleImg = '100px';
                        var tdWidthDefaut = $('#ex1').find('td:first').css('width');
                        var tdBackgroundefaut = $('#ex1').find('td:first').css('background');
                        var tdTaille = '90px';

                        $('#E1').click(function () {
                            $('.p1').css('color', premierParagraphe);
                            $('.p1').text('La couleur par défaut du paragraphe est : ' + premierParagraphe);
                        });

                        $('#E2').click(function () {
                            $('.p1').css('color', couleurRouge);
                            var couleurR = $('.p1').css('color');
                            $('.p1').text('Mon paragraphe a une couleur : ' + couleurR + ' "Rouge"  ');
                        });

                        $('#E3').click(function () {
                            $('.i1').css('width', tailleImgDefaut);
                            $('.t-i1').text('La taille par défaut de l\'image est : ' + tailleImgDefaut);
                        });

                        $('#E4').click(function () {
                            $('.i1').css('width', tailleImg);
                            $('.t-i1').text('L\'image passe à : ' + tailleImg);
                        });

                        $('#E5').click(function () {
                            $('.t-t1').text('La taille par défaut de la première cellule : ' + tdWidthDefaut + " et la couleur " + tdBackgroundefaut);
                        });

                        $('#E6').click(function () {
                            //$('#ex1').find('td:first').css('width', tdTaille).css('background', couleurRouge);
                            $('#ex1').find('td:first').css({width: tdTaille, background: couleurRouge});
                            $('.t-t1').text('La taille par défaut de la première cellule : ' + tdTaille + " et la couleur " + couleurRouge);
                        });
                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 1-->



    </div>

<?php include 'footerHeader.php'; ?>
    <script>
        $(function () {
            $('#code-spoil-1').hide();
            $('#spoil-1').click(function () {
                $('#code-spoil-1').toggle(1550);
            });

            var texteDefaut = $('.p1').text();
            var texteDefautTable = $('.t-t1').text();
            var premierParagraphe = $('.p1').css('color');
            var tailleImgDefaut = $('.i1').css('width');
            var couleurRouge = 'red';
            var tailleImg = '100px';
            var tdWidthDefaut = $('#ex1').find('td:first').css('width');
            var tdBackgroundefaut = $('#ex1').find('td:first').css('background');
            var tdTaille = '90px';

            $('#E1').click(function () {
                $('.p1').css('color', premierParagraphe);
                $('.p1').text('La couleur par défaut du paragraphe est : ' + premierParagraphe);
            });

            $('#E2').click(function () {
                $('.p1').css('color', couleurRouge);
                var couleurR = $('.p1').css('color');
                $('.p1').text('Mon paragraphe a une couleur : ' + couleurR + ' "Rouge"  ');
            });

            $('#E3').click(function () {
                $('.i1').css('width', tailleImgDefaut);
                $('.t-i1').text('La taille par défaut de l\'image est : ' + tailleImgDefaut);
            });

            $('#E4').click(function () {
                $('.i1').css('width', tailleImg);
                $('.t-i1').text('L\'image passe à : ' + tailleImg);
            });

            $('#E5').click(function () {
                $('.t-t1').text('La taille par défaut de la première cellule : ' + tdWidthDefaut + " et la couleur " + tdBackgroundefaut);
            });

            $('#E6').click(function () {
                //$('#ex1').find('td:first').css('width', tdTaille).css('background', couleurRouge);
                $('#ex1').find('td:first').css({width: tdTaille, background: couleurRouge});
                $('.t-t1').text('La taille par défaut de la première cellule : ' + tdTaille + " et la couleur " + couleurRouge);
            });

            $('#reset1').click(function () {
                $('.p1').text(texteDefaut);
                $('.t-t1').text(texteDefautTable);
                $('.p1').css('color', premierParagraphe);
                $('#ex1').find('td:first').css('width', tdWidthDefaut).css('background', tdBackgroundefaut);
            });

        });
    </script>
<?php include 'footer.php'; ?>