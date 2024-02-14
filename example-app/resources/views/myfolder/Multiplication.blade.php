<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <label for="numberInput">Enter a number:</label>
    <input type="number" id="numberInput" min="1" max="20">
    <button id="generateTable">Generate Table</button>

    <div id="tableContainer"></div>

    <script src="script.js"></script>

</body>
</html>
