<?php
$angka1=$_POST;
$angka2=$_POST;
$hasil1=$angka1+$angka2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>NILAI</th>
        </tr>
        <tr>
            <td><?= $hasil1 ?></td>
        </tr>
        <tr>
            <td><?= $hasil2 ?></td>
        </tr>
    </table>
    <form action="text" method="post">
        <input type="button" value="$angka1">
        angka1
        <input type="button" value="$angka2">
    </form>
</body>
</html>