<?php

$penduduk = [
    ["kecamatan" => "Moyudan", "luas" => 27.62, "jumlah_penduduk" => 31497],
    ["kecamatan" => "Minggir", "luas" => 27.27, "jumlah_penduduk" => 29886],
    ["kecamatan" => "Seyegan", "luas" => 26.63, "jumlah_penduduk" => 47129],
    ["kecamatan" => "Godean", "luas" => 26.84, "jumlah_penduduk" => 72028],
    ["kecamatan" => "Gamping", "luas" => 29.25, "jumlah_penduduk" => 108675]
];
?>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table style="width:100%">
    <thead>
        <tr>
            <th>kecamatan</th>
            <th>luas</th>
            <th>jumlah_penduduk</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($penduduk as $data) { ?>
            <tr>
                <td><?= $data["kecamatan"]; ?></td>
                <td><?= number_format($data["luas"], 2, ".", ""); ?></td>
                <td><?= $data["jumlah_penduduk"]; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>