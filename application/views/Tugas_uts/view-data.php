<html>

<head>

    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    D-Lemas : Tampilan Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
				<th align="left">Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th align="left">NIS</th>
                <th>:</th>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Kelas</th>
                <th>:</th>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Tempat Lahir</th>
                <th>:</th>
                <td>
                    <?= $tempat_lahir; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Alamat</th>
                <th>:</th>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <th align="left">Agama</th>
                <th>:</th>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Tugas_uts');
                                ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>