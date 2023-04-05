<html>

<body>
    <form action="<?= base_url('index.php/mahasiswa/insertData'); ?>" method="post">
        <table border="1%">
            <tr>
                <th colspan="3">
                    Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM" id="NIM"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="jurusan">
                        <option value="teknik informatika">teknik informatika</option>
                        <option value="sastra inggris">sastra inggris</option>
                        <option value="managemen">managemen</option>
                        <option value="ilmu komputer">ilmu komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" id="submit" value="submit"></td>
            </tr>
        </table>
        <?php echo validation_errors(); ?>
    </form>
</body>

</html>