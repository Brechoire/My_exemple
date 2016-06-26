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

        <button id="exemple1BTN" class="btn btn-info">Exemple 1</button>
        <button id="exemple2BTN" class="btn btn-info">Exemple 2</button>
        <button id="exemple3BTN" class="btn btn-info">Exemple 3</button>
        <button id="reset" class="btn btn-info">Reset</button>
        <button id="spoil-1" class="btn btn-info">Affiche code source</button>
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
        <p>E1 : Selectionne tout les <code>ul</code> en rouge<br>
            E2 : Selectionne tout les <code>ol</code> en bleu<br>
            E3 : Selectionne tout les <code>ul</code> de <code>class bleu</code> en orange</p>
            E4 : Selectionne tout les <code>ul</code> contenue dans les <code>div</code> en vert</p>

        <button id="E1" class="btn btn-info">$('ul')</button>
        <button id="E2" class="btn btn-info">$('ol')</button>
        <button id="E3" class="btn btn-info">$('ul.bleu')</button>
        <button id="E4" class="btn btn-info">$('div ul')</button>

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

        <div class="col-md-12" id="code-spoil-2">
        <pre class="line-numbers">
            <code class="language-js">

            </code>
        </pre>
        </div>
        <br>
    </div>  <!--    Fin exemple 2-->

</div>

<?php include 'footerHeader.php'; ?>
<script>

    $(function () {

        var defaut = $('p').css('background');
        console.log($('p').css('background'));

        $('#code-spoil-1').hide();
        $('#spoil-1').click(function () {
            $('#code-spoil-1').toggle(1550);
        });

        $('#code-spoil-2').hide();
        $('#spoil-2').click(function () {
            $('#code-spoil-2').toggle(1550);
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



    });

</script>
<?php include 'footer.php'; ?>

