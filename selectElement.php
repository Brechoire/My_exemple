<?php include 'header.php'; ?>
<div class="row starter-template">
    <div class="col-md-12">
        <h1 class="text-center">La selection des éléments</h1>
    </div>
    <div class="col-md-12 border-sep" id="exemple1">
        <h2>Exemple de selection n°1</h2>
        <small>Selection via un ID (même principe pour les class)</small>
        <p>Je souhaite selectionner attribut <code>p</code> qui possède un <code>id</code> ou une <code>class</code></p>
        <p>Exemple 1 : Ajoute une couleur vert au paragraphe avec l'id p1<br>
            Exemple 2 : Ajoute une couleur rouge sur le p1 et rose sur le p2<br>
            Exemple 3 : Ajoute une couleur bleu sur le p2 et orange sur le p4
        </p>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <button id="exemple1BTN" class="btn btn-info btn-block">Exemple 1</button>
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
                $(function () {
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
            E11 : Sélectionne l'éléments <code>ul</code> directement descendants d'éléments <code>li</code> en rouge<br>
            E12 : Sélectionne l'éléments <code>li</code> directement précédés d'un élément <code>li</code> en vert<br>
            E13 : Sélectionne le premier élément <code>li</code> enfant en orange<br>
            E14 : Sélectionne le dernier élément <code>li</code> en rose<br>
            E15 : Sélectionne le dernier élément <code>li</code> enfant en marron<br>
        </p>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <button id="E11" class="btn btn-info btn-block">$('li > ul')</button>
                <button id="E12" class="btn btn-info btn-block">$('li + li')</button>
                <button id="E13" class="btn btn-info btn-block">$('li:first-child')</button>
                <button id="E14" class="btn btn-info btn-block">$('li:last')</button>
                <button id="E15" class="btn btn-info btn-block">$('li:last-child')</button>
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
        </div>
        </div>
        <br>
        <div class="col-md-12" id="code-spoil-4">
            <pre class="line-numbers">
                <code class="language-js">

                </code>
            </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 4-->

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

        var defautLi = $('li').css('color');
        var defautUl = $('ul').css('color');
        var defautLiUl = $('li > ul').css('color');
        $('#reset4').click(function () {
            $('li').css('color', defautLi);
            $('ul').css('color', defautUl);
            $('li > ul').css('color', defautLiUl);
        });

    });

</script>
<?php include 'footer.php'; ?>

