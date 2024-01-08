<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        div {
            width: 200px;
            height: 280px;
            overflow: scroll; /* เพิ่ม overflow scroll ที่นี่ */
            max-height: 600px; /* เพิ่มส่วนนี้เพื่อกำหนดความสูงสูงสุดของตาราง */
        }
    </style>
</head>

<body>
    <h1>ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
    <div>
        <table>
            <tbody>
                <?php
                for ($i = 1; $i <= 24; $i++) {
                    $result = $myinput * $i;
                    echo "<tr>
                            <td>$myinput</td>
                            <td>x</td>
                            <td>$i</td>
                            <td>=</td>
                            <td>$result</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
