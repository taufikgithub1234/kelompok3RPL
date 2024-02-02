<h2>Update Data pegawai</h2>

<?php
include "koneksi.php";
$sql=mysqli-query($koneksi, "select * from karyawan,jabatan where
karyawan.id-jab=jabatan.id_jab and id_kar=$_GET[update]'");
$data=mysqli-fetch_array($sql);

?>

<from action="" method="post">
    <table>
        <tr>
            <td width="100">NIK</td>
            <td><input type="text" name="no_induk" value="<?php echo $data['n0_induk']; ?>"></tr>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>"></tr>
</tr>
<tr>
    <td>jabatan</td>
    <td><select name= "id_jab">
        <?php
        echo "coption value=$data[id_jab]$data[nama_jab]</option>";
        $query = mysqli_query($koneksi, "SELECT * FROM jabatan") or die (mysqli_error($koneksi)):
        while($data = mysqli_fetch_array($query)){
            echo "coption value=$data[id_jab]> $data[nama_jab] </option>";
        }
        ?>
        </select>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="simpan" name="proses"></td>
    </tr>
    </table>
    </from>

    <?php

    if(isset($koneksi, "update karyawan set
    no_induk = '$_POST[no_induk]',
    nama = '$_POST[nama]',
    id_jab = '$POST[id_jab]' where id_kar=$_GET[update]") or die(mysqli_error(koneksi)))
