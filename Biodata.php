<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>BIODATA</h1>
    <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <br>
            <label>Tanggal Lahir: </label>
            <input type="text" name="tgl_lahir">
            <br>
            <label>Pekerjaan: 
            <select name='pekerjaan'>
                <option value="Software Engineer">Software Engineer</option>
                <option value='Back End Developer'>Back End Developer</option>
                <option value='Mobile Developer'>Mobile Developer</option>
                <option value='Full Stack Website Developer'>Full Stack Website Developer</option>
                <option value='Front End'>Front End</option>
            </select>
            </label>
            <br>
            <input type="submit" value="Kirim">
    </form>
    <?php
        echo 'Nama: ' . $_POST['nama'];
        $tgl_lahir = @$_POST['tgl_lahir'];
        $umur = new DateTime($tgl_lahir);
        $skrg = new DateTime();
        $diff = $skrg->diff($umur);
        echo "<br> Umur: ". $diff->y ." Tahun";

        echo "<br> Pekerjaan: ". $_POST['pekerjaan'];
        $pekerjaan = @$_POST['pekerjaan'];
        if($pekerjaan == "Software Engineer"){
            echo '<br> Gaji: Rp. 15.000.000,-';
        }elseif($pekerjaan == "Back End Developer"){
            echo '<br> Gaji: Rp. 20.000.000,-';
        }elseif($pekerjaan == "Mobile Developer"){
            echo '<br> Gaji: Rp. 10.000.000,-';
        }elseif($pekerjaan == "Full Stack Website Developer"){
            echo '<br> Gaji: Rp. 7.000.000,-';
        }elseif($pekerjaan == "Front End"){
            echo '<br> Gaji: Rp. 6.000.000,-';
        }
    ?>
</body>
</html>