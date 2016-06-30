<?php include 'header.php'; ?>

    <div class="row starter-template">
        <div class="col-md-12">

            <h1 class="text-center">Les variables</h1>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Les variables</h3>
                </div>
                <div class="panel-body">
                    <a href="#exemple1" class="btn btn-default">Exemple 1</a>
                </div>
            </div>

        </div>

        <div class="col-md-12 border-sep" id="exemple1">
            <h2>Exemple de variable n°1</h2>

            <p>
                E1 : Déclaration d'une variable de type <code>string</code>
            </p>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <button id="spoil-1" class="btn btn-info btn-block">E1 : Déclare la variable "nom"</button>
                    <button id="E1-resultat" class="btn btn-info btn-block">E1 : Affiche le résultat</button>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-12">
                    <p id="R-1">
                        <?php $nom = "Brechoire"; ?>
                        <?= $nom; ?>
                    </p>
                </div>
            </div>

            <div class="col-md-12" id="code-spoil-1">
                <pre class="line-numbers">
                    <code class="language-php">
                        nom_de_la_variable = valeur_de_la_variable;
                        $nom = "Brechoire"; // chaîne de caractères (string)
                        echo $nom; // Affiche le résultat
                    </code>
                </pre>
            </div>

        </div>  <!--    Fin exemple 1-->

    </div>

<?php include 'footerHeader.php'; ?>
    <script>
        $(function () {
            $('#code-spoil-1').hide();
            $('#spoil-1').click(function () {
                $('#code-spoil-1').toggle(1550);
            });

            $('#R-1').hide();
            $('#E1-resultat').click(function () {
                $('#R-1').toggle(1550);
            });
        });
    </script>
<?php include 'footer.php'; ?>