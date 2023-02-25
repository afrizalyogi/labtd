<html>

<body>
    <center>
        <h2 style="margin-top:50px;">
            Data Peserta Prak Eldig
        </h2>
        <p style="margin-top:-10px;">
            Laboratorium Teknik Digital - Universitas Lampung
        </p>
    </center>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama Lengkap</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($prak_eldig as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style="text-align: left;"><?= $dt->npm; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>