<html>  
    <head>  
        <title>Form Input dilemas</title>  
    </head>  
    <body>  
        <center>  
            <form action="<?= base_url('formdilemas'); ?>" method="post">  
            <table>  
                <tr>  
                    <th colspan="3"> Form Input dilemas </th>  
                </tr> 
                <tr>  
                    <td colspan="3">  
                        <hr>  
                    </td>  
                </tr>  
                <tr>  
                    <th>nama siswa</th>  
                    <th>:</th>  
                    <td>  
                        <input type="text" name="nama siswa" id="nama">  
                    </td>  
                </tr>  
                <tr>  
                    <th>nis</th> 
                    <td>:</td>  
                    <td> <input type="text" name="nis" id="nis"> </td>  
                </tr>
                <tr>  
                    <th>kelas</th>  
                    <th>:</th>  
                    <td>  
                        <input type="text" name="kelas" id="kelas">  
                    </td>  
                </tr>
                <tr>  
                    <th>tanggal lahir</th>  
                    <td>:</td>  
                    <td>  
                        <select name="tanggal lahir" id="tanggal lahir">  
                            <option value="">tanggal lahir</option>  
                            <option value="2">2</option> <option value="3">3</option>  
                            <option value="4">4</option>  
                        </select>  
                    </td>  
                </tr>  
                <th>tempat lahir</th>  
                    <th>:</th>  
                    <td>  
                        <input type="text" name="tempat lahir" id="tempat lahir">  
                    </td>  
                <tr>  
                </tr>  
                <th>alamat</th>  
                    <th>:</th>  
                    <td>  
                        <input type="text" name="alamat" id="alamat">  
                    </td>  
                <tr>  
                </tr>  
                <th>jenis kelamin</th>  
                    <th>:</th>  
                    <td>  
                        <select name="jenis kelamin" id="jenis kelamin">
                        <input type="text">  
                        <option value="">Pilih jenis kelamin</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki=laki">Laki-laki</option>
</select>
                    </td>  
                    <th>agama</th>  
                    <th>:</th>  
                    <td>  
                        <select name="agama" id="agama">
                        <input type="text">  
                        <option value="">agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
</select>
                    </td> 
                <tr>  
                    <td colspan="3" align="center"> <input type="submit" value="Submit">  
                </td>  
            </tr>  
        </table>  
    </form>  
</center>  
</body>  
</html>