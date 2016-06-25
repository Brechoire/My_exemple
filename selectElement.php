<?php include 'header.php'; ?>
<div class="row starter-template">
    <div class="col-md-12">
        <h1>La selection des éléments</h1>
    </div>
    <div class="col-md-12 border-sep" id="exemple1">
        <h2>Exemple de selection n°1</h2>
        <p>Je souhaite selectionner attribut <code>p</code> qui possède un <code>id</code> ou une <code>class</code></p>
        <p>Exemple 1 : Ajoute une couleur vert au paragraphe avec l'id p1<br>
            Exemple 2 : Ajoute une couleur rouge sur le p1 et rose sur le p2<br>
            Exemple 3 : Ajoute une couleur bleu sur le p2 et orange sur le p4
        </p>

        <button id="exemple1BTN" class="btn btn-info">Exemple 1</button>
        <button id="exemple2BTN" class="btn btn-info">Exemple 2</button>
        <button id="exemple3BTN" class="btn btn-info">Exemple 3</button>
        <hr>
        <p id="p1">Le paragraphe numéro 1</p>
        <p id="p2" class="p-1">Le paragraphe numéro 2</p>
        <p id="p3">Le paragraphe numéro 3</p>
        <p id="p4" class="p-1">Le paragraphe numéro 4</p>
        <p id="p5">Le paragraphe numéro 5</p>

        <pre class="line-numbers">
            <code class="language-js">
                $(function () {
                    $('#exemple1BTN').click(function () {
                        $('#p1').css('background', 'green').css('color', 'white');
                        $('#p1').text('Le paragraphe 1 est vert');
                    });

                    $('#exemple2BTN').click(function () {
                        $('#p1').css('background', 'red').css('color', 'white');
                        $('#p1').text('Le paragraphe 1 est rouge');
                        $('#p2').css('background', 'pink').css('color', 'white');
                        $('#p2').text('Le paragraphe 1 est rose');
                    });
                });
            </code>
        </pre>
        <br>
    </div>  <!--    Fin exemple 1-->

</div>

<?php include 'footerHeader.php'; ?>
<script>

    $(function () {
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
    });

</script>
<?php include 'footer.php'; ?>

