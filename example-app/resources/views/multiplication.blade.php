<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <label for="numberInput">Enter a number:</label>
    <input type="number" id="numberInput" min="1" max="20">
    <button id="generateTable">Generate Table</button>

    <table id="multiplicationTable">
        <!-- Table content will be dynamically generated here -->
    </table>

    <script>
        $(document).ready(function() {
            $("#generateTable").on("click", function() {
                var number = $("#numberInput").val();
                generateMultiplicationTable(number);
            });

            function generateMultiplicationTable(number) {
                $.ajax({
                    url: "{{ route('generate.table') }}",
                    method: "POST",
                    data: { number: number },
                    success: function(response) {
                        $("#multiplicationTable").html(response.tableHTML);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        });
    </script>

</body>
</html>
