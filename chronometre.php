
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/chronometre.css">
    <title>Chronomètre</title>
</head>

<body>


<h1>CHRONOMETRE</h1>



    <div class="container">

        <div class="stopwatch">

            <span id="heure">00</span>
            <span id="minute">00</span>:
            <span id="second">00</span>:
            <span id="milli-second">00</span>

        </div>

    </div>

        <ul class="laps"></ul>

        <div class="controls">

            <button onclick="reset()" id="reset">Reset</button>
            <button onclick="start()" id="start">Start</button>
            <button onclick="stopTimer()" id="stop">Stop</button>
            <button onclick="lap()" id="lap">Lap</button>

        </div>

    <script src="chrono.js"></script>

    
<a href="index.php"><img src="https://img.icons8.com/plasticine/70/000000/home-page.png"/></a>


</body>

