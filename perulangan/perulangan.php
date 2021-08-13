<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        table,
        tr,
        td {
            border: 1px solid green;
        }

        th {
            background-color: green;
            color: white;
        }
    </style>
    <table border="1">

        <tr>
            <th>Datanya</th>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i <= 10; $i++) {
            ?>
                <td>
                    <?php
                    echo "Data ke " . "$i<br>";
                    ?>
                </td>
        </tr>
    <?php } ?>
    </table>
</body>

</html>