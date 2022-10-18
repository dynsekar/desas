<html>
    <head> tampil data form </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan = "3"> tampil data form </th>
                </tr>
                <tr>
                    <td colspan = "3"><hr></td>
                </tr>
             <tr>
                <td>Nama siswa</td>
                <td>:</td>
                <td>
                     <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>nis</td>
                <td>:</td>
                <td>
                     <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>:</td>
                <td>
                     <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td>
                     <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
                <td>tempat lahir</td>
                <td>:</td>
                <td>
                     <?= $tempat_lahir; ?>
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td>
                     <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>jenis kelamin</td>
                <td>:</td>
                <td>
                     <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td>
                     <?= $agama; ?>
                </td>
            </tr>
            </table>
        </center>
    </body>
</html>