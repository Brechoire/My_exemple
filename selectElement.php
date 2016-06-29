<?php include 'header.php'; ?>
<div class="row starter-template">
    <div class="col-md-12">
        <h1 class="text-center">La selection des éléments</h1>
    </div>
    <div class="col-md-12 border-sep" id="exemple1">
        <h2>Exemple de selection n°1</h2>
        <small>Selection via un ID (même principe pour les class)</small>
        <p>Je souhaite selectionner attribut <code>p</code> qui possède un <code>id</code> ou une <code>class</code></p>
        <p>
            Exemple 1 : Ajoute une couleur vert au paragraphe avec l'id p1<br>
            Exemple 2 : Ajoute une couleur rouge sur le p1 et rose sur le p2<br>
            Exemple 3 : Ajoute une couleur bleu sur le p2 et orange sur le p4
        </p>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <button id="exemple1BTN" class="btn btn-info btn-block">Ajoute une couleur vert au paragraphe avec l'id p1</button>
                <button id="exemple2BTN" class="btn btn-info btn-block">Exemple 2</button>
                <button id="exemple3BTN" class="btn btn-info btn-block">Exemple 3</button>
                <button id="reset" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-1" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>

        <hr>
        <p id="p1">Le paragraphe numéro 1</p>
        <p id="p2" class="p-1">Le paragraphe numéro 2</p>
        <p id="p3">Le paragraphe numéro 3</p>
        <p id="p4" class="p-1">Le paragraphe numéro 4</p>
        <p id="p5">Le paragraphe numéro 5</p>

        <div class="col-md-12" id="code-spoil-1">
        <pre class="line-numbers">
            <code class="language-js">
                $('#exemple1BTN').click(function () {
                    $('#p1').css('background', 'green').css('color', 'white');
                    $('#p1').text('Le paragraphe 1 est vert');
                });

                $('#exemple2BTN').click(function () {
                    $('#p1').css('background', 'red').css('color', 'white');
                    $('#p1').text('Le paragraphe 1 est rouge');
                    $('#p2').css('background', 'pink').css('color', 'white');
                    $('#p2').text('Le paragraphe 2 est rose');
                });

                $('#exemple3BTN').click(function () {
                    $('#p2').css('background', 'blue').css('color', 'white');
                    $('#p2').text('Le paragraphe 2 est bleu');
                    $('#p4').css('background', 'orange').css('color', 'white');
                    $('#p4').text('Le paragraphe 4 est orange');
                });

                $('#reset').click(function () {
                    $('[id^="p"]').css('background', 'white').css('color', 'black');
                    $('#p1').text('Le paragraphe numéro 1');
                    $('#p2').text('Le paragraphe numéro 2');
                    $('#p3').text('Le paragraphe numéro 3');
                    $('#p4').text('Le paragraphe numéro 4');
                });

            </code>
        </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 1-->


    <div class="col-md-12 border-sep" id="exemple2">
        <h2>Exemple de selection n°2</h2>
        <p>
            E1 : Sélectionne tout les <code>ul</code> en rouge<br>
            E2 : Sélectionne tout les <code>ol</code> en bleu<br>
            E3 : Sélectionne tout les <code>ul</code> de <code>class bleu</code> en orange<br>
            E4 : Sélectionne tout les <code>ul</code> contenue dans les <code>div</code> en vert<br>
            E5 : Sélectionne tout les <code>li</code> qui possèdent un attribut <code>class</code>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E1" class="btn btn-info btn-block">$('ul')</button>
                <button id="E2" class="btn btn-info btn-block">$('ol')</button>
                <button id="E3" class="btn btn-info btn-block">$('ul.bleu')</button>
                <button id="E4" class="btn btn-info btn-block">$('div ul')</button>
                <button id="E5" class="btn btn-info btn-block">$('li[class]')</button>
                <button id="spoil-2" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group rouge">
                    <li class="list-group-item impair">premier élément de la liste à puces</li>
                    <li class="list-group-item pair">deuxième élément de la liste à puces</li>
                    <li class="list-group-item impair">troisième élément de la liste à puces</li>
                </ul>
                <div>
                    <ul class="list-group bleu">
                        <li class="list-group-item impair">premier élément de la liste à puces</li>
                        <li class="list-group-item pair">deuxième élément de la liste à puces</li>
                        <li class="list-group-item impair">troisième élément de la liste à puces</li>
                    </ul>
                </div>
                <ol class="list-group rouge">
                    <li class="list-group-item">premier élément de la liste numérotée</li>
                    <li class="list-group-item">deuxième élément de la liste numérotée</li>
                    <li class="list-group-item">troisième élément de la liste numérotée</li>
                </ol>
            </div>
        </div>


        <div class="col-md-12" id="code-spoil-2">
            <pre class="line-numbers">
                <code class="language-js">
                    $('#E1').click(function () {
                        $('ul').css('color', 'red');
                    });

                    $('#E2').click(function () {
                        $('ol').css('color', 'blue');
                    });

                    $('#E3').click(function () {
                        $('ul.bleu').css('color', 'orange');
                    });

                    $('#E4').click(function () {
                        $('div ul').css('color', 'green');
                    });

                    $('#E5').click(function () {
                        $('li[class]').css('color', 'grey');
                    });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 2-->


    <div class="col-md-12 border-sep" id="exemple3">
        <h2>Exemple de selection n°3</h2>
        <p>
            E6: Sélectionne l'image dont l'attribut <code>border</code> contient partiellement ou totalement la valeur <code>1</code><br>
            E7: Sélectionne l'image dont l'attribut <code>title</code> contient le mot « site » délimité par une espace.<br>
            E8: Sélectionne l'image dont l'attribut <code>src</code> se termine par <code>1.png</code><br>
            E9: Sélectionne l'image qui ne possède par un attribut <code>border</code> égal à <code>15</code><br>
            E10: Sélectionne l'image dont l'attribut <code>src</code> commence par <code>img/s</code>.<br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E6" class="btn btn-info btn-block">$('[border*="1"]') en rouge</button>
                <button id="E7" class="btn btn-info btn-block">$('[title~="site"]') en bleu</button>
                <button id="E8" class="btn btn-info btn-block">$('[src$="1.png"]')en jaune</button>
                <button id="E9" class="btn btn-info btn-block">$('img[border!="15"]') en orange</button>
                <button id="E10" class="btn btn-info btn-block">$('[src^="img/s"]') en vert</button>
                <button id="reset3" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-3" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2 col-md-offset-1">
                    <img src="img/1.png" class="img-responsive" alt="Responsive image" title="flux rss" border="11">
                </div>
                <div class="col-md-2">
                    <img src="img/site2.png" class="img-responsive" alt="Responsive image" title="site linked" border="4">
                </div>
                <div class="col-md-2">
                    <img src="img/3.png" class="img-responsive" alt="Responsive image" title="magasin cora" border="2">
                </div>
                <div class="col-md-2">
                    <img src="img/site4.png" class="img-responsive" alt="Responsive image" title="site blog" border="8">
                </div>
                <div class="col-md-2">
                    <img src="img/5.png" class="img-responsive" alt="Responsive image" title="bmw" border="4">
                </div>
            </div>
        </div>
        <div class="col-md-12" id="code-spoil-3">
            <pre class="line-numbers">
                <code class="language-js">
                    $('#E6').click(function () {
                    $('[border*="1"]').css('border', '3px solid red');
                    });

                    $('#E7').click(function () {
                    $('[title~="site"]').css('border', '3px solid blue');
                    });

                    $('#E8').click(function () {
                    $('[src$="1.png"]').css('border', '3px solid yellow');
                    });

                    $('#E9').click(function () {
                    $('img[border!="15"]').css('border', '3px solid orange');
                    });

                    $('#E10').click(function () {
                    $('[src^="img/s"]').css('border', '3px solid green');
                    });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 3-->

    <div class="col-md-12 border-sep" id="exemple4">
        <h2>Exemple de selection n°4</h2>
        <p>
            E11 : Sélectionne l'élément <code>ul</code> directement descendants d'éléments <code>li</code> en rouge<br>
            E12 : Sélectionne l'élément <code>li</code> directement précédés d'un élément <code>li</code> en vert<br>
            E13 : Sélectionne le premier élément <code>li</code> enfant en orange<br>
            E14 : Sélectionne le dernier élément <code>li</code> en rose<br>
            E15 : Sélectionne le dernier élément <code>li</code> enfant en marron<br>
            E16 : Sélectionne l'élément <code>li</code> enfants uniques de leur parent en Vert Golf<br>
            E17 : Sélectionne le deuxième enfant <code>li</code> en abricot<br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E11" class="btn btn-info btn-block">$('li > ul')</button>
                <button id="E12" class="btn btn-info btn-block">$('li + li')</button>
                <button id="E13" class="btn btn-info btn-block">$('li:first-child')</button>
                <button id="E14" class="btn btn-info btn-block">$('li:last')</button>
                <button id="E15" class="btn btn-info btn-block">$('li:last-child')</button>
                <button id="E16" class="btn btn-info btn-block">$('li:only-child')</button>
                <button id="E17" class="btn btn-info btn-block">$('li:nth-child(2)')</button>
                <button id="reset4" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-4" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <ul class="list-group" id="ul1">
                    <li class="list-group-item"> Elément de liste 1
                        <ul class="list-group" id="ul2">
                            <li class="list-group-item"> Enfant 1</li>
                            <li class="list-group-item"> Enfant 2</li>
                        </ul>
                    </li>
                    <li class="list-group-item"> Elément de liste 2</li>
                    <li class="list-group-item"> Elément de liste 3</li>
                    <li class="list-group-item"> Elément de liste 4</li>
                </ul>
                <ul class="list-group" id="ul3">
                    <li class="list-group-item">Elément ul 3 </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="col-md-12" id="code-spoil-4">
            <pre class="line-numbers">
                <code class="language-js">
                    $('#E11').click(function () {
                        $('li > ul').css('color', 'red');
                    });

                    $('#E12').click(function () {
                        $('li + li').css('color', 'green');
                    });

                    $('#E13').click(function () {
                        $('li:first-child').css('color', 'orange');
                    });

                    $('#E14').click(function () {
                        $('li:last').css('color', 'pink');
                    });

                    $('#E15').click(function () {
                        $('li:last-child').css('color', 'brown');
                    });

                    $('#E16').click(function () {
                        $('li:only-child').css('color', '#008356');
                    });

                    $('#E17').click(function () {
                        $('li:nth-child(2)').css('color', '#E67E30');
                    });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 4-->



    <div class="col-md-12 border-sep" id="exemple5">
        <h2>Exemple de selection n°5</h2>
        <small>Pour éviter la propagation dans la page, j'utilise une class à la place de l'attribut <code>p</code></small>
        <p>
            E18 : Sélectionne l'élément <code>p</code> pair en rouge<br>
            E19 : Sélectionne l'élément <code>p</code> impair en orange<br>
            E20 : Sélectionne l'élément <code>p</code> après le deuxième en bleu<br>
            E21 : Sélectionne l'élément <code>p</code> d'index 4 en rose<br>
            E22 : Sélectionne l'élément <code>p</code> avant le quatrième en vert<br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E18" class="btn btn-info btn-block">$('[class="exemple5"]:even')</button>
                <button id="E19" class="btn btn-info btn-block">$('[class="exemple5"]:odd')</button>
                <button id="E20" class="btn btn-info btn-block">$('[class="exemple5"]:gt(1)')</button>
                <button id="E21" class="btn btn-info btn-block">$('[class="exemple5"]:eq(3)')</button>
                <button id="E22" class="btn btn-info btn-block">$('[class="exemple5"]:lt(3)')</button>
                <button id="reset5" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-5" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12">
                <p class="exemple5">Mon paragraphe numéro 1</p>
                <p class="exemple5">Mon paragraphe numéro 2</p>
                <p class="exemple5">Mon paragraphe numéro 3</p>
                <p class="exemple5">Mon paragraphe numéro 4</p>
                <p class="exemple5">Mon paragraphe numéro 5</p>
            </div>
        </div>
        <br>
        <div class="col-md-12" id="code-spoil-5">
            <pre class="line-numbers">
                <code class="language-js">
                    $('#E18').click(function () {
                        $('[class="exemple5"]:even').css('color', 'red');
                    });

                    $('#E19').click(function () {
                        $('[class="exemple5"]:odd').css('color', 'orange');
                    });

                    $('#E20').click(function () {
                        $('[class="exemple5"]:gt(1)').css('color', 'blue');
                    });

                    $('#E21').click(function () {
                        $('[class="exemple5"]:eq(3)').css('color', 'pink');
                    });

                    $('#E22').click(function () {
                        $('[class="exemple5"]:lt(3)').css('color', 'green');
                    });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 5-->

    <div class="col-md-12 border-sep" id="exemple6">
        <h2>Exemple de selection n°6</h2>

        <p>
            E23 : Sélectionne tous les titres <code>h1, h2, h3...</code> en rouge<br>
            E24 : Affiche l'élément caché avec l'<code>id</code> divShow<br>
            E25 : Dissimulation de tous les titres sauf le titre <code>h1</code><br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E23" class="btn btn-info btn-block">$('.title-titre').find(':header').css('color','red');</button>
                <button id="E24" class="btn btn-info btn-block">$('#divShow:hidden').show();</button>
                <button id="E25" class="btn btn-info btn-block">$('.titleExemple:header:not(h1)').hide();</button>
                <button id="reset6" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-6" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12 title-titre">
                <h1 class="titleExemple">Titre de niveau 1</h1>
                <h2 class="titleExemple">Titre de niveau 2</h2>
                <h3 class="titleExemple">Titre de niveau 3</h3>
                <p>Un paragraphe de texte</p>
                <div id="divShow">Texte dans une balise div</div>
            </div>
        </div>

        <hr>
        <div class="col-md-12" id="code-spoil-6">
            <pre class="line-numbers">
                <code class="language-js">
                    $('#E23').click(function () {
                        $('.titleExemple:header').css('color','red');
                    });

                    $('#divShow').hide();
                    $('#E24').click(function () {
                        $('#divShow:hidden').show();
                    });

                    $('#E25').click(function () {
                        $('.titleExemple:header:not(h1)').hide();
                    });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 6-->

    <div class="col-md-12 border-sep" id="exemple7">
        <h2>Exemple de selection n°7</h2>

        <p>
            E26 : Coloration de tous les champs de saisie en jaune<br>
            E27 : Coloration du champ type <code>password</code> en rouge <br>
            E28 : Redimensionnement d'un champ de type <code>image</code>  <br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E26" class="btn btn-info btn-block">$('.formulaireExemple').find(':input').css('background','yellow');</button>
                <button id="E27" class="btn btn-info btn-block">$('.formulaireExemple').find(':password').css('background','red');</button>
                <button id="E28" class="btn btn-info btn-block">$('.formulaireExemple').find(':image').css('width','100px');</button>
                <button id="reset7" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-7" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12 formulaireExemple">
                <form>
                    <div class="form-group">
                        <label>Nom d'utilisateur</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Sexe</label>
                        Homme <input type="radio" name="sexe" value="H">
                        Femme <input type="radio" name="sexe" value="F">
                    </div>
                    <div class="form-group">
                        <label>Commentaires</label>
                        <textarea rows="3" name="commentaires" class="form-control">Tapez vos commentaires ici</textarea>
                    </div>
                    <div class="form-group">
                        <input type="image" src="img/checkbox.png">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer"  class="btn btn-default">
                        <input type="reset" value="Annuler"  class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="col-md-12" id="code-spoil-7">
            <pre class="line-numbers">
                <code class="language-js">
                    $('#E26').click(function () {
                        $('.formulaireExemple').find(':input').css('background','yellow');
                    });

                    $('#E27').click(function () {
                        $('.formulaireExemple').find(':password').css('background','red');
                    });

                    $('#E28').click(function () {
                        $('.formulaireExemple').find(':image').css('width','100px');
                    });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 7-->

    <div class="col-md-12 border-sep" id="exemple8">
        <h2>Exemple de selection n°8</h2>
        <small>Pour éviter la propagation dans la page, j'utilise une class pour englober mon script</small>
        <p>
            E29 : Coloration de la première cellule <code>td</code> en rose <br>
            E30 : Coloration de la dernière ligne en vert<br>
            E31 : Coloration des cellules vides en gris<br>
            E32 : Coloration des lignes paires en bleu<br>
            E33 : Coloration des cellules paires en pourpre<br>
            E34 : Coloration des lignes d'index supérieur à 2 en marron<br>
            E35 : Coloration des lignes d'index supérieur à 1, et, dans le sous-ensemble correspondant, des lignes d'index inférieur à 5 en jaune<br>
            E36 : Coloration des cellules d'index supérieur à 5, et, dans le sous-ensemble correspondant, des cellules d'index inférieur à 11 en orange<br>
            E37 : Coloration de toutes les lignes à l'exception de la dernière en rouge<br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E29" class="btn btn-info btn-block">$('.formulaireExempleTable').find('td:first').css('background', 'pink');</button>
                <button id="E30" class="btn btn-info btn-block">$('.formulaireExempleTable').find('tr:last').css('background', 'green');</button>
                <button id="E31" class="btn btn-info btn-block">$('.formulaireExempleTable').find(':empty').css('background', 'grey');</button>
                <button id="E32" class="btn btn-info btn-block">$('.formulaireExempleTable').find('tr:even').css('background', 'blue');</button>
                <button id="E33" class="btn btn-info btn-block">$('.formulaireExempleTable').find('td:even').css('background', 'purple');</button>
                <button id="E34" class="btn btn-info btn-block">$('.formulaireExempleTable').find('td:gt(1)').css('background', 'brown');</button>
                <button id="E35" class="btn btn-info btn-block">$('.formulaireExempleTable').find('tr:gt(0):lt(4)').css('background', 'yellow');</button>
                <button id="E36" class="btn btn-info btn-block">$('.formulaireExempleTable').find('td:gt(4):lt(10)').css('background', 'orange');</button>
                <button id="E37" class="btn btn-info btn-block">$('.formulaireExempleTable').find('tr:not(tr:last)').css('background', 'red');</button>
                <button id="reset8" class="btn btn-info btn-block">Reset</button>
                <button id="spoil-8" class="btn btn-info btn-block">Affiche code source</button>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12 formulaireExempleTable">
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
            </div>
        </div>
        <br>
        <div class="col-md-12" id="code-spoil-8">
            <pre class="line-numbers">
                <code class="language-js">
                 $('#E29').click(function () {
                    $('.formulaireExempleTable').find('td:first').css('background', 'pink');
                });

                $('#E30').click(function () {
                    $('.formulaireExempleTable').find('tr:last').css('background', 'green');
                });

                $('#E31').click(function () {
                    $('.formulaireExempleTable').find(':empty').css('background', 'grey');
                });

                $('#E32').click(function () {
                    $('.formulaireExempleTable').find('tr:even').css('background', 'blue');
                });

                $('#E33').click(function () {
                    $('.formulaireExempleTable').find('td:even').css('background', 'purple');
                });

                $('#E34').click(function () {
                    $('.formulaireExempleTable').find('td:gt(1)').css('background', 'brown');
                });

                $('#E35').click(function () {
                    $('.formulaireExempleTable').find('tr:gt(0):lt(4)').css('background', 'yellow');
                });

                $('#E36').click(function () {
                    $('.formulaireExempleTable').find('td:gt(4):lt(10)').css('background', 'orange');
                });

                $('#E37').click(function () {
                    $('.formulaireExempleTable').find('tr:not(tr:last)').css('background', 'red');
                });
                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 8-->

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

        $('#code-spoil-7').hide();
        $('#spoil-7').click(function () {
            $('#code-spoil-7').toggle(1550);
        });

        $('#code-spoil-8').hide();
        $('#spoil-8').click(function () {
            $('#code-spoil-8').toggle(1550);
        });



        // Si je clique sur Exemple 1
        $('#exemple1BTN').click(function () {
            $('#p1').css('background', 'green').css('color', 'white');
            $('#p1').text('Le paragraphe 1 est vert');
        });
        // Si je clique sur Exemple 2
        $('#exemple2BTN').click(function () {
            $('#p1').css('background', 'red').css('color', 'white');
            $('#p1').text('Le paragraphe 1 est rouge');
            $('#p2').css('background', 'pink').css('color', 'white');
            $('#p2').text('Le paragraphe 2 est rose');
        });
        // Si je clique sur Exemple 3
        $('#exemple3BTN').click(function () {
            $('#p2').css('background', 'blue').css('color', 'white');
            $('#p2').text('Le paragraphe 2 est bleu');
            $('#p4').css('background', 'orange').css('color', 'white');
            $('#p4').text('Le paragraphe 4 est orange');
        });
        // Si je clique sur Reset
        $('#reset').click(function () {
            $('[id^="p"]').css('background', 'white').css('color', 'black');
            $('#p1').text('Le paragraphe numéro 1');
            $('#p2').text('Le paragraphe numéro 2');
            $('#p3').text('Le paragraphe numéro 3');
            $('#p4').text('Le paragraphe numéro 4');
        });


//        Exemple numéro 2

        $('#E1').click(function () {
            $('ul').css('color', 'red');
        });

        $('#E2').click(function () {
            $('ol').css('color', 'blue');
        });

        $('#E3').click(function () {
            $('ul.bleu').css('color', 'orange');
        });

        $('#E4').click(function () {
            $('div ul').css('color', 'green');
        });

        $('#E5').click(function () {
            $('li[class]').css('color', 'grey');
        });

//        Exemple numéro 3

        $('#E6').click(function () {
            $('[border*="1"]').css('border', '2px solid red');
        });

        $('#E7').click(function () {
            $('[title~="site"]').css('border', '2px solid blue');
        });

        $('#E8').click(function () {
            $('[src$="1.png"]').css('border', '3px solid yellow');
        });

        $('#E9').click(function () {
            $('img[border!="15"]').css('border', '3px solid orange');
        });

        $('#E10').click(function () {
            $('[src^="img/s"]').css('border', '3px solid green');
        });
        var defautImg = $('img').css('border');
        $('#reset3').click(function () {
            $('img').css('border', defautImg);
        });

//        Exemple numéro 4

        $('#E11').click(function () {
            $('li > ul').css('color', 'rgb(255,0,0)');
        });

        $('#E12').click(function () {
            $('li + li').css('color', 'green');
        });

        $('#E13').click(function () {
            $('li:first-child').css('color', 'orange');
        });

        $('#E14').click(function () {
            $('li:last').css('color', 'pink');
        });

        $('#E15').click(function () {
            $('li:last-child').css('color', 'brown');
        });

        $('#E16').click(function () {
            $('li:only-child').css('color', '#008356');
        });

        $('#E17').click(function () {
            $('li:nth-child(2)').css('color', '#E67E30');
        });

        var defautLi = $('li').css('color');
        var defautUl = $('ul').css('color');
        var defautLiUl = $('li > ul').css('color');
        $('#reset4').click(function () {
            $('li').css('color', defautLi);
            $('ul').css('color', defautUl);
            $('li > ul').css('color', defautLiUl);
        });

//        Exemple numéro 5

        $('#E18').click(function () {
            $('[class="exemple5"]:even').css('color', 'red');
        });

        $('#E19').click(function () {
            $('[class="exemple5"]:odd').css('color', 'orange');
        });

        $('#E20').click(function () {
            $('[class="exemple5"]:gt(1)').css('color', 'blue');
        });

        $('#E21').click(function () {
            $('[class="exemple5"]:eq(3)').css('color', 'pink');
        });

        $('#E22').click(function () {
            $('[class="exemple5"]:lt(3)').css('color', 'green');
        });

        var defautColor = $('[class="exemple5"]').css('color');
        $('#reset5').click(function () {
            $('[class="exemple5"]').css('color', defautColor);
        });
    });

    //        Exemple numéro 6

    $('#E23').click(function () {
        $('.title-titre').find(':header').css('color','red');
    });

    $('#divShow').hide();
    $('#E24').click(function () {
        $('#divShow:hidden').show();
    });

    $('#E25').click(function () {
        $('.titleExemple:header:not(h1)').hide();
    });
    var defautColorHeader =  $('.titleExemple:header').css('color');
    $('#reset6').click(function () {
        $('#divShow').hide();
        $('.titleExemple:header:not(h1)').show();
        $('.titleExemple:header').css('color', defautColorHeader);
    });

//    Exemple numéro 7

    $('#E26').click(function () {
        $('.formulaireExemple').find(':input').css('background','yellow');
    });

    $('#E27').click(function () {
        $('.formulaireExemple').find(':password').css('background','red');
    });

    $('#E28').click(function () {
        $('.formulaireExemple').find(':image').css('width','100px');
    });


    var defautColorForm =  $('.formulaireExemple').find(':input').css('background');
    var defautTailleImage =  $('.formulaireExemple').find(':image').css('width');
    $('#reset7').click(function () {
        $('.formulaireExemple').find(':input').css('background', defautColorForm);
        $('.formulaireExemple').find(':image').css('width', defautTailleImage);
    });

//    Exemple numéro 8

    $('#E29').click(function () {
        $('.formulaireExempleTable').find('td:first').css('background', 'pink');
    });

    $('#E30').click(function () {
        $('.formulaireExempleTable').find('tr:last').css('background', 'green');
    });

    $('#E31').click(function () {
        $('.formulaireExempleTable').find(':empty').css('background', 'grey');
    });

    $('#E32').click(function () {
        $('.formulaireExempleTable').find('tr:even').css('background', 'blue');
    });

    $('#E33').click(function () {
        $('.formulaireExempleTable').find('td:even').css('background', 'purple');
    });

    $('#E34').click(function () {
        $('.formulaireExempleTable').find('td:gt(1)').css('background', 'brown');
    });

    $('#E35').click(function () {
        $('.formulaireExempleTable').find('tr:gt(0):lt(4)').css('background', 'yellow');
    });

    $('#E36').click(function () {
        $('.formulaireExempleTable').find('td:gt(4):lt(10)').css('background', 'orange');
    });

    $('#E37').click(function () {
        $('.formulaireExempleTable').find('tr:not(tr:last)').css('background', 'red');
    });


    var defautTableTr =  $('tr').css('background');
    var defautTableTd =  $('td').css('background');
    console.log(defautTableTr);
    $('#reset8').click(function () {
        $('tr').css('background', defautTableTr);
        $('td').css('background', defautTableTd);
        console.log('Ok');
    });

</script>
<?php include 'footer.php'; ?>

