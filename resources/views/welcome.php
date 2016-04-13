<!DOCTYPE html>
<html>
    <head>
        <title>Larymer</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

        <!-- 1. Load webcomponents-lite.min.js for polyfill support. -->
        <script src="<?= url('bower_components/webcomponentsjs/webcomponents-lite.min.js'); ?>">
        </script>

        <!-- 2. Use an HTML Import to bring in some elements. -->
        <link rel="import" href="<?= url('bower_components/paper-button/paper-button.html'); ?>">
        <link rel="import" href="<?= url('bower_components/paper-input/paper-input.html'); ?>">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div>Laravel 5 + Polymer 1</div>
                <div class="title">Larymer</div>

                <!-- 3. Declare the element. Configure using its attributes. -->
                <paper-input label="Your name here"></paper-input>
                <paper-button raised>Say Hello</paper-button>
                <div id="greeting"></div>

                <script>
                  // To ensure that elements are ready on polyfilled browsers,
                  // wait for WebComponentsReady.
                  document.addEventListener('WebComponentsReady', function() {
                    var input = document.querySelector('paper-input');
                    var button = document.querySelector('paper-button');
                    var greeting = document.getElementById("greeting");
                    button.addEventListener('click', function() {
                      greeting.textContent = 'Hello, ' + input.value;
                    });
                  });
                </script>
            </div>
        </div>
    </body>
</html>
