
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/chronometre.css">
    <title>Chronomètre</title>
</head>

<body>

    <div class="container">

        <div class="stopwatch">

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

