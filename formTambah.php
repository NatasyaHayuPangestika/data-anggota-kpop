<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Tambah Anggota Grup Kpop</title>
    </head>
    <body>
        <h1>Form Tambah Anggota Grup Kpop</h1>
        <form action="prosesTambah.php" method="get">
            <p>
                <input type ="text" name="id_kpop" placeholder='Id Kpop' required/>
            </p>
            <p>
                <input type ="text" name="nama_kpop" placeholder='Nama Kpop' required/>
            </p>
            <p>
                <select name = "jk_kpop">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </p>
            <p>
                <input type ="date" name="dob_kpop" placeholder='Tanggal lahir Anggota' required/>
            </p>
            <p>
            <input type ="text" name="asalgrup_kpop" placeholder="Asal Grup Kpop" required>
            </p>
            <p>
                <button type ="submit">Simpan</button>
            </p>
            </form>
    </body>
</html>