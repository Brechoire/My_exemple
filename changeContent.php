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
            <h2>Exemple Getters et setters n°1</h2>
            <div class="alert alert-info">
                <i class="icon icon-info-circle icon-lg"></i>
                <strong>Info !</strong> J'utilise des <code>class</code> pour éviter la propagation dans la page.
            </div>
                <small></small>
            <p>
                E1: Pour connaitre la valeur par défaut du paragraphe (getters)  on utilise <code>$('.p1').css('color');</code><br>
            <p>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="E1" class="btn btn-info btn-block">Valeur de la couleur par défaut paragraphe</button>
                    <button id="E2" class="btn btn-info btn-block">E2</button>

                    <button id="reset" class="btn btn-info btn-block">Reset</button>
                    <button id="spoil-1" class="btn btn-info btn-block">Affiche code source</button>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12" id="ex1">
                    <p class="p1">Mon paragraphe avec une class "p1"</p>
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