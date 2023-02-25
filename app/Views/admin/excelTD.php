<?php

header("Content-type: application/vnc-ms-excel");
header("Content-Disposition: attachment; filename=Data Peserta Prak TD.xls");

?>

<html>

<body>
    <table width="100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama Lengkap</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($prak_td as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style="text-align: left;"><?= $dt->npm; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>