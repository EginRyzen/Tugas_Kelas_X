<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Bio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="get.php" method="get">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input type="text" name="alamat">
                </td>
            </tr>
        </table>
        <tr>
            <td colspan="3">
                <button class="btn" type="submit">Simpan</button>
                <button class="rst" type="reset">Reset</button>
             </td>
        </tr>
    </form>
</body>
</html>