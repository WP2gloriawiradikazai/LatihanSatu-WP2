<!DOCTYPE html>
<html>
<head>
    <title>REKAP TRANSAKSI</title>

    <style>
        body{ 
            background: rgb(240, 160, 166);
            font-family: 'Comic Sans MS';
        }  
    </style>

</head>

<body>
    <center>
        <table  width="1250px">
            <tr>
                <th colspan="5">
                    <h2>TOKO SEPATU GLOIS</h2>
                </th>
            </tr>
            <tr>
                <td>NAMA PEMBELI</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>NO. HANDPHONE</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>MERK SEPATU</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . 'index.php/tokosepatu' ?>">KEMBALI</a></button></p>
    </center>
</body>
</html>