$(document).ready(function() {
    $("#generateTable").on("click", function() {
        // รับค่าตัวเลขจาก input
        var number = $("#numberInput").val();

        // ตรวจสอบว่าตัวเลขที่รับมาถูกต้องหรือไม่
        if (number >= 1 && number <= 20) {
            // เรียกใช้ฟังก์ชั่นสร้างตารางคูณ
            generateMultiplicationTable(number);
        } else {
            alert("Please enter a number between 1 and 20.");
        }
    });

    function generateMultiplicationTable(number) {
        // สร้างตารางคูณ
        var tableHTML = "<table><thead><tr><th>Multiplicand</th><th>Multiplier</th><th>Result</th></tr></thead><tbody>";

        for (var i = 1; i <= 10; i++) {
            var result = number * i;
            tableHTML += "<tr><td>" + number + "</td><td>" + i + "</td><td>" + result + "</td></tr>";
        }

        tableHTML += "</tbody></table>";

        // แสดงตารางใน div ที่กำหนด
        $("#tableContainer").html(tableHTML);
    }
});
