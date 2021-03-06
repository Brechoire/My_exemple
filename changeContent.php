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

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Accéder aux attributs HTML et aux propriétés CSS</h3>
                </div>
                <div class="panel-body">
                    <a href="#exemple2" class="btn btn-default">Accéder aux attributs HTML</a>
                    <a href="#exemple3" class="btn btn-default">Accéder aux attributs CSS</a>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Travailler avec l'attribut class</h3>
                </div>
                <div class="panel-body">
                    <a href="#exemple4" class="btn btn-default">Ajouter et supprimer des classes</a>
                    <a href="#exemple5" class="btn btn-default">Tester l'existence de classes</a>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Travailler avec les formulaires</h3>
                </div>
                <div class="panel-body">
                    <a href="#exemple6" class="btn btn-default">Exemple 1</a>
                </div>
            </div>

        </div>

        <div class="col-md-12 border-sep" id="exemple1">
            <h2>Exemple Getters et setters
                <button type="button" class="btn btn-warning" data-toggle="popover" title="Getters et setters" data-content="Plutôt que de différencier les méthodes chargées de lire (ces méthodes sont dites getters, de l'anglais to get qui signifie « obtenir ») et de modifier (ces méthodes sont dites setters, de l'anglais to set qui signifie « définir ») les valeurs HTML ou CSS, les concepteurs de jQuery ont choisi de leur donner le même nom.">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
                </button>
            </h2>
            <div class="alert alert-info">
                <i class="icon icon-info-circle icon-lg"></i>
                <strong>Info !</strong> J'utilise des <code>class</code> pour éviter la propagation dans la page.
            </div>
            <p>
                E1 : Pour connaitre la valeur de la couleur par défaut du paragraphe (getters) on utilise <code>$('.p1').css('color');</code><br>
                E2 : Pour changer la valeur de la couleur par défaut du paragraphe (setters) on utilise <code>$('.p1').css('color', 'MaCouleur');</code><br>
                E3 : Affiche la valeur par défaut de la taille de l'image<br>
                E4 : Modifie la valeur de la taille de l'image à <code>100px</code><br>
                E5 : Affiche la valeur par défaut de la taille de la première cellule du tableau et de la couleur<br>
                E6 : Modifie la taille de la cellule en 90px et la couleur en rouge
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
                    ('.i1').css('width', tailleImgDefaut);
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

        <div class="col-md-12 border-sep" id="exemple2">
            <h2>Accéder aux attributs des balises HTML</h2>
            <div class="alert alert-info">
                <i class="icon icon-info-circle icon-lg"></i>
                <strong>Info !</strong> J'utilise des <code>class</code> pour éviter la propagation dans la page.
            </div>

            <p>
                E7 : Ajoute une <code>class</code> avec la méthode <code>attr</code><br>
                E8 : Supprime la <code>class</code> et donc la couleur avec la méthode <code>removeAttr</code>
            <p>

            <hr>

            <div class="row">
                <div class="col-md-12">

                    <button id="E7" class="btn btn-info btn-block">E7 : Ajoute une class</button>
                    <button id="E8" class="btn btn-info btn-block">E8 : Supprime la class</button>

                    <button id="reset2" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-2" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex2">
                    <p id="p-id-1">Un paragraphe sans class mais avec un id</p>
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-2">
                <pre class="line-numbers">
                    <code class="language-js">
                $('#E7').click(function () {
                    var test = prompt('Choisir une couleur entre rouge, orange, vert, jaune');
                    $('#p-id-1').attr('class', test);
                });

                $('#E8').click(function () {
                    $('#p-id-1').removeAttr('class');
                });
                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 2-->

        <div class="col-md-12 border-sep" id="exemple3">
            <h2>Accéder aux propriétés CSS</h2>

            <p>
                E9 : Affiche la valeur par défaut de la bordure <code>border</code>, la taille du texte <code>font-size</code>et la couleur de fond du paragraphe <code>background</code> de la <code>class</code> para1 <br>
                E10 : Modifie la valeur de la taille du texte <code>font-size</code>, le style de la bordure <code>border-style</code> et la couleur de fond <code>background-color</code>
            <p>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="E9" class="btn btn-info btn-block">E9 : Valeur par défaut</button>
                    <button id="E10" class="btn btn-info btn-block">E10 : Changer les valeurs</button>
                    <button id="reset3" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-3" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex3">
                    <p class="para1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos doloremque eveniet ex fuga hic ipsum maxime omnis quia totam voluptatem. Doloribus hic itaque iure maxime molestiae nihil perferendis quae sapiente!</p>
                    <span class="span-para1"></span>
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-3">
                <pre class="line-numbers">
                    <code class="language-js">
                var paraBorderDefaut = $('.para1').css('border-style');
                var paraFontSizeDefaut = $('.para1').css('font-size');
                var paraBackgroundDefaut = $('.para1').css('background-color');
                $('#E9').click(function () {
                    $('.span-para1').text('Valeur par défaut de la bordure est : "' + paraBorderDefaut + '" la taille du texte est : "' + paraFontSizeDefaut + '" et d\'un fond de "' + paraBackgroundDefaut + '"');
                });

                var borderPara ='dashed';
                var fontSizePara = '18px';
                var backgroundPara = 'red';
                $('#E10').click(function () {
                    $('.para1').css({
                        borderStyle: borderPara,
                        fontSize: fontSizePara,
                        backgroundColor: backgroundPara
                    });
                    $('.span-para1').text('La valeur de la couleur est passé à : "' + borderPara + '" la taille et passé à : "' + fontSizePara + '" et la couleur du fond est : "' + backgroundPara + '"');
                })
                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 3-->

        <div class="col-md-12 border-sep" id="exemple4">
            <h2>Travailler avec l'attribut class
            <button type="button" class="btn  btn-warning" data-toggle="popover" title="Ajouter et supprimer des classes" data-content="addClass() ajoute une classe dans les éléments sélectionnés ;
                    removeClass() supprime (si elle existe) une classe des éléments sélectionnés ;
                    toggleClass() accomplit deux actions : si la classe spécifiée n'existe pas dans les éléments sélectionnés, elle y est ajoutée. Si elle existe, elle est supprimée.">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true">
            </button>
            </h2>
            <p>
                E11 : Ajoute avec la méthode <code>addClass</code> la <code>class</code> rouge à "Julia"<br>
                E12 : Ajoute avec la méthode <code>addClass</code> la <code>class</code> vert et grand à "Julia"<br>
                E13 : Supprime avec la méthode <code>removeClass</code> la <code>class</code> vert et avec la méthode <code>addClass</code> ajoute la <code>class</code> rouge à Eric<br>
                E14 : Supprime avec la méthode <code>removeClass</code> la <code>class</code> vert et grand et avec la méthode <code>addClass</code> ajoute la <code>class</code> rouge et petit à Paul<br>
                E15 : Supprime avec la méthode <code>toggleClass</code> la <code>class</code> vert et grand et avec la même méthode <code>toggleClass</code> ajoute la <code>class</code> rouge et petit à Paul<br>
            <p>
            <div class="alert alert-info">
                <i class="icon icon-info-circle icon-lg"></i>
                Il est possible de rassembler les class pour alléger le code
                <code>$('#paul').removeClass('vert').addClass('rouge').removeClass('grand').addClass('petit');</code>
                <br>
                <code>$('#paul').removeClass('vert grand').addClass('rouge petit');</code>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="E11" class="btn btn-info btn-block">E11 : Ajoute la class "rouge"</button>
                    <button id="E12" class="btn btn-info btn-block">E12 : Ajoute la class "vert" et "grand" </button>
                    <button id="E13" class="btn btn-info btn-block">E13 : Supprime la class vert et ajoute la class rouge </button>
                    <button id="E14" class="btn btn-info btn-block">E14 : Modifie la couleur et taille de Paul avec methode addClass et removeClass </button>
                    <button id="E15" class="btn btn-info btn-block">E15 : Modifie la couleur et taille de Paul avec methode toggleClass </button>
                    <button id="reset4" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-4" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex4">
                    <span id="jean" class="rouge grand">Jean</span><br>
                    <span id="pierre">Pierre</span><br>
                    <span id="paul" class="vert grand">Paul</span><br>
                    <span id="julia">Julia</span><br>
                    <span id="eric" class="vert">Eric</span><br>
                    <span id="kevin" >Kévin</span><br>
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-4">
                <pre class="line-numbers">
                    <code class="language-js">
                $('#E11').click(function () {
                    $('#julia').addClass('rouge');
                });

                $('#E12').click(function () {
                    $('#julia').addClass('vert grand');
                });

                $('#E13').click(function () {
                    $('#eric').removeClass('vert').addClass('rouge');
                });

                $('#E14').click(function () {
                    $('#paul').removeClass('vert').addClass('rouge').removeClass('grand').addClass('petit');
                });

                $('#E15').click(function () {
                    $('#paul').toggleClass('vert').toggleClass('rouge').toggleClass('grand').toggleClass('petit');
                });
                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 4-->

        <div class="col-md-12 border-sep" id="exemple5">
            <h2>Tester l'existence de classes</h2>
            <p>
                E16 : Vérifie la présence d'une <code>class</code> rouge avec la méthode <code>hasClass</code> sur l'<code>id</code> jerome<br>
                E17 : Vérifie la présence des <code>class</code> rouge et grand avec la méthode <code>is</code> sur l'<code>id</code> jerome
            <p>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="E16" class="btn btn-info btn-block">E16 : Vérifie avec hasClass</button>
                    <button id="E17" class="btn btn-info btn-block">E17 : Vérifie avec is</button>
                    <button id="reset5" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-5" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex5">
                    <span id="jerome" class="rouge grand">Jérôme</span><br>
                    <span id="info5"></span>
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-5">
                <pre class="line-numbers">
                    <code class="language-js">
                $('#E16').click(function () {
                   if($('#jerome').hasClass('rouge')){
                        $('#info5').text('Le span #jerome possède la class rouge');
                   }else {
                       $('#info5').text('Le span #jerome ne possède pas la class rouge');
                   }
                });

                $('#E17').click(function () {
                    if($('#jerome').is('.rouge.grand')){
                        $('#info5').text('Le span #jerome possède la class rouge et grand');
                    }else {
                        $('#info5').text('Le span #jerome ne possède pas la class rouge ou grand');
                    }
                });
                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 5-->

        <div class="col-md-12 border-sep" id="exemple6">
            <h2>Travailler avec les formulaires</h2>
            <div class="alert alert-info">
                <i class="icon icon-info-circle icon-lg"></i>
                La méthode <code>val()</code> permet de tester/modifier la valeur des zones de texte, boutons radio, cases à cocher, listes déroulantes et zones de liste contenues dans un document HTML.
            </div>
            <p>
                E18 : Lit le nom de l'utilisateur avec la méthode <code>val</code><br>
                E19 : Lit le password avec la méthode <code>val</code><br>
                E20 : Lit l'état du bouton <code>radio</code> H. Renvoie <code>true</code> si le bouton est sélectionné, sinon <code>false</code>.
                E21 : Lit l'élément sélectionné dans la liste déroulante.<br>
                E22 : Écrit "Moltes" dans la zone texte Nom de l'utilisateur <code>$('#nom').val('LaValeur')</code><br>
                E22 : Écrit "abcd" dans la zone texte password <code>$('#pass').val('LaValeur')</code><br>
                E23 : Sélectionne le bouton <code>radio</code> H.<br>
                E24 : Sélectionne Retraité dans la liste déroulante.
            <p>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="E18" class="btn btn-info btn-block">E18 : Lit le nom de l'utilisateur</button>
                    <button id="E19" class="btn btn-info btn-block">E19 : Lit le password</button>
                    <button id="E20" class="btn btn-info btn-block">E20 : Lit l'état du bouton sur H</button>
                    <button id="E21" class="btn btn-info btn-block">E21 : Lit l'élément sélectionné dans la liste déroulante.</button>
                    <button id="E22" class="btn btn-info btn-block">E22 : Écrit "Moltes" dans la zone texte Nom de l'utilisateur</button>
                    <button id="E23" class="btn btn-info btn-block">E23 : Écrit "abcd" dans la zone texte <code>password</code></button>
                    <button id="E24" class="btn btn-info btn-block">E24 : Sélectionne le bouton <code>radio</code> H.</button>
                    <button id="E25" class="btn btn-info btn-block">E25 : Sélectionne Retraité dans la liste déroulante.</button>
                    <button id="reset6" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-6" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex6">

                    <form id="form">
                        <div class="form-group">
                            <label for="nom">Nom d'utilisateur</label>
                            <input type="text" id="nom" class="form-control">
                            <span id="resultatNom"></span>
                        </div>

                        <div class="form-group">
                            <label for="pass">Mot de passe</label>
                            <input type="password" id="pass" class="form-control">
                            <span id="resultatPass"></span>
                        </div>

                        <div class="form-group">
                            <label for="sexe">Sexe</label>
                            H <input type="radio" id="H" name="sexe" value="H">
                            F <input type="radio" id="F" name="sexe" value="F"><br>
                            <span id="resultatBouton"></span>
                        </div>

                        <div class="form-group">
                            <label for="fonction">Fonction</label>
                            <select id="fonction" class="form-control">
                                <option value="etudiant">Etudiant</option>
                                <option value="ingenieur">Ingénieur</option>
                                <option value="enseignant">Enseignant</option>
                                <option value="retraite">Retraité</option>
                                <option value="autre">Autre</option>
                            </select>
                            <span id="resultatSelect"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="envoyer" value="Envoyer" class="btn btn-default">
                            <input type="reset" id="annuler" value="Annuler" class="btn btn-default">
                        </div>
                    </form>

                </div>
            </div>

            <div class="col-md-12" id="code-spoil-6">
                <pre class="line-numbers">
                    <code class="language-js">
                $('#E18').click(function () {
                    var resultatNom = $('#nom').val();
                    $('#resultatNom').text(resultatNom);
                });

                $('#E19').click(function () {
                    var resultatPass = $('#pass').val();
                    $('#resultatPass').text(resultatPass);
                });

                $('#E20').click(function () {
                    var resultatBouton = $(':radio#H:checked').val();
                    $('#resultatBouton').text(resultatBouton);
                });

                $('#E21').click(function () {
                    var resultatSelect = $('#fonction').val();
                    $('#resultatSelect').text(resultatSelect);
                });

                $('#E22').click(function () {
                $('#nom').val('Moltes');
                });

                $('#E23').click(function () {
                    $('#pass').val('abcd');
                });

                $('#E24').click(function () {
                    $(':radio').val(['H']);
                });

                $('#E25').click(function () {
                    $('#fonction').val('retraite');
                });
                    </code>
                </pre>
            </div>
            <br>
        </div>  <!--    Fin exemple 6-->

    </div>

<?php include 'footerHeader.php'; ?>
    <script>
        $(function () {
            $('#code-spoil-1').hide();
            $('#spoil-1').click(function () {
                $('#code-spoil-1').toggle(1550);
            });

            $('#code-spoil-2').hide();
            $('#spoil-2').click(function () {
                $('#code-spoil-2').toggle(1550);
            });

            $('#code-spoil-3').hide();
            $('#spoil-3').click(function () {
                $('#code-spoil-3').toggle(1550);
            });

            $('#code-spoil-4').hide();
            $('#spoil-4').click(function () {
                $('#code-spoil-4').toggle(1550);
            });

            $('#code-spoil-5').hide();
            $('#spoil-5').click(function () {
                $('#code-spoil-5').toggle(1550);
            });

            $('#code-spoil-6').hide();
            $('#spoil-6').click(function () {
                $('#code-spoil-6').toggle(1550);
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

            $('#E7').click(function () {
                var test = prompt('Choisir une couleur entre rouge, orange, vert, jaune');
                $('#p-id-1').attr('class', test);
            });

            $('#E8').click(function () {
                $('#p-id-1').removeAttr('class');
            });

            var paraBorderDefaut = $('.para1').css('border-style');
            var paraFontSizeDefaut = $('.para1').css('font-size');
            var paraBackgroundDefaut = $('.para1').css('background-color');
            $('#E9').click(function () {
                $('.span-para1').text('Valeur par défaut de la bordure est : "' + paraBorderDefaut + '" la taille du texte est : "' + paraFontSizeDefaut + '" et d\'un fond de "' + paraBackgroundDefaut + '"');
            });

            var borderPara ='dashed';
            var fontSizePara = '18px';
            var backgroundPara = 'red';
            $('#E10').click(function () {
                $('.para1').css({
                    borderStyle: borderPara,
                    fontSize: fontSizePara,
                    backgroundColor: backgroundPara
                });
                $('.span-para1').text('La valeur de la couleur est passé à : "' + borderPara + '" la taille et passé à : "' + fontSizePara + '" et la couleur du fond est : "' + backgroundPara + '"');
            });

            $('#E11').click(function () {
                $('#julia').addClass('rouge');
            });

            $('#E12').click(function () {
                $('#julia').addClass('vert grand');
            });

            $('#E13').click(function () {
                $('#eric').removeClass('vert').addClass('rouge');
            });

            $('#E14').click(function () {
                $('#paul').removeClass('vert').addClass('rouge').removeClass('grand').addClass('petit');
            });

            $('#E15').click(function () {
                $('#paul').toggleClass('vert').toggleClass('rouge').toggleClass('grand').toggleClass('petit');
            });

            $('#E16').click(function () {
               if($('#jerome').hasClass('rouge')){
                    $('#info5').text('Le span #jerome possède la class rouge');
               }else {
                   $('#info5').text('Le span #jerome ne possède pas la class rouge');
               }
            });

            $('#E17').click(function () {
                if($('#jerome').is('.rouge.grand')){
                    $('#info5').text('Le span #jerome possède la class rouge et grand');
                }else {
                    $('#info5').text('Le span #jerome ne possède pas la class rouge ou grand');
                }
            });

            $('#E18').click(function () {
                var resultatNom = $('#nom').val();
                $('#resultatNom').text(resultatNom);
            });

            $('#E19').click(function () {
                var resultatPass = $('#pass').val();
                $('#resultatPass').text(resultatPass);
            });

            $('#E20').click(function () {
                var resultatBouton = $(':radio#H:checked').val();
                $('#resultatBouton').text(resultatBouton);
            });

            $('#E21').click(function () {
                var resultatSelect = $('#fonction').val();
                $('#resultatSelect').text(resultatSelect);
            });

            $('#E22').click(function () {
                $('#nom').val('Moltes');
            });

            $('#E23').click(function () {
                $('#pass').val('abcd');
            });

            $('#E24').click(function () {
                $(':radio').val(['H']);
            });

            $('#E25').click(function () {
                $('#fonction').val('retraite');
            });

            $('#reset1').click(function () {
                $('.i1').css('width', tailleImgDefaut);
                $('.p1').text(texteDefaut);
                $('.t-t1').text(texteDefautTable);
                $('.p1').css('color', premierParagraphe);
                $('#ex1').find('td:first').css('width', tdWidthDefaut).css('background', tdBackgroundefaut);
            });

            $('#reset2').click(function () {
                $('#p-id-1').removeAttr('class');
            });

            $('#reset3').click(function () {
                $('.para1').css({
                    borderStyle: paraBorderDefaut,
                    fontSize: paraFontSizeDefaut,
                    backgroundColor: paraBackgroundDefaut
                });
                $('.span-para1').text('');

            });

            $('#reset4').click(function () {
                $('#julia').removeAttr('class');
                $('#eric').removeClass('rouge').addClass('vert');
                $('#paul').removeClass('rouge petit').addClass('vert grand');
            });

            $('#reset5').click(function () {
                $('#info5').text('');
            });

            $("#reset6").click(function() {
                $("#form")[0].reset();
                $('[id*="resultat"]').text('');
            });
        });
    </script>
<?php include 'footer.php'; ?>