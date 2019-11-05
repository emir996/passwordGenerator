<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Password Generator</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    
        <div class="container">

            <h2>Password Generator</h2>

            <div class="result-container">
                <span id="result"></span>
                <button class="btn" id="clipboard">
                    <i class="fa fa-clipboard"></i>
                </button>
            </div>

            <div class="settings">
                <div class="setting">
                    <label>Password length</label>
                    <input type="number" id="length" min='4' max='20' value='20' />
                </div>

                <div class="setting">
                    <label>Include uppercase letter</label>
                    <input type="checkbox" id="uppercase" checked />
                </div>

                <div class="setting">
                    <label>Include lowercase letter</label>
                    <input type="checkbox" id="lowercase" checked />
                </div>

                <div class="setting">
                    <label>Include number</label>
                    <input type="checkbox" id="numbers" checked />
                </div>

                <div class="setting">
                    <label>Include symbol</label>
                    <input type="checkbox" id="symbols" checked />
                </div>
            </div>

            <button class="btn btn-large" id="generate">
                Generate Password
            </button>

        </div>
    <script src="js/main.js"></script>
    </body>
</html>