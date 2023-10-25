<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-calculator.css">
    <title>Calculadora</title>
    <link rel="stylesheet" href="assets/css/notify.css">

</head>

<body>

    <div class="calculator">
        <div>
            <input type="text" id="display" readonly>
        </div>
        <div>
            <button class="btn" onclick="clearDisplay()">C</button>
        </div>
        <div>

            <button class="btn" onclick="numberClick('7')">7</button>
            <button class="btn" onclick="numberClick('8')">8</button>
            <button class="btn" onclick="numberClick('9')">9</button>
            <button class="btn opr" onclick="numberClick('+')">+</button>
        </div>
        <div>
            <button class="btn" onclick="numberClick('4')">4</button>
            <button class="btn" onclick="numberClick('5')">5</button>
            <button class="btn" onclick="numberClick('6')">6</button>
            <button class="btn opr" onclick="numberClick('-')">-</button>
        </div>
        <div>
            <button class="btn" onclick="numberClick('1')">1</button>
            <button class="btn" onclick="numberClick('2')">2</button>
            <button class="btn" onclick="numberClick('3')">3</button>
            <button class="btn opr" onclick="numberClick('*')">*</button>
        </div>
        <div>
            <button class="btn" onclick="numberClick('0')">0</button>
            <button class="btn opr" onclick="numberClick('.')">.</button>
            <button class="btn opr" onclick="calculateResult()">=</button>
            <button class="btn opr" onclick="numberClick('/')">/</button>
        </div>

    </div>

    <script src="assets/js/calculator.js"></script>
</body>

</html>