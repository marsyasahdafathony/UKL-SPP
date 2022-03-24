

<!DOCTYPE html>
<?php require_once("index_siswa.php"); ?>

<br>
    <div class="container mt-3">
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:19px; ">
    <h5>Biodata Kamu</h5>
    <hr/>
    </div>
    <br>
    <div class="col-md-12 offset-md-0 rounded bg-light" style="box-shadow: 4px 4px 5px-4px;padding:24px">
    
            <hr />
    <table cellpadding="5" id="biodata">
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><?= $result['nisn']; ?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><?= $result['nis']; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $result['nama']; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $result['nama_kelas'] . " | " . $result['kompetensi_keahlian']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $result['alamat']; ?></td>
        </tr>
    </table>
            <hr />
    
            
    <?php require_once("footer.php"); ?>
</div>
</body>
</html>