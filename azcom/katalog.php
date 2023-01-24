<htmL>
    <head>
        <title>AZCom</title>
        <!-- memanggil css -->
        <link rel="stylesheet" href="style.css">
    </head>


    <body>

    <div class="container">
        <?php include("Header.php") ?>

    
    

     <div class="menu">
    <a href="index.php">Beranda</a> | <a href="katalog.php">Katalog</a></a></div>


        <div class="content">
        <form action="" method="post">
            Silahkan Pilih :
            <select name="katalog" id="">
                <option value="hardware">Hardware</option>
                <option value="software">Software</option>
            </select>
            <input type="submit">
            <table border="1" cellpadding="3" cellspacing="0" width="300px">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jenis</th>
                </tr>

                <?php
                if (isset($_POST['katalog'])) {

                    $hardware = ['Monitor', 'CPU', 'Keyboard', 'Mouse',];
                    $software = ['Windows OS', 'Linux OS', 'Mac OS',];

                    $catalog = ($_POST['katalog']);

                    if ($catalog == 'hardware') {
                        $no = 1;
                        foreach ($hardware as $h) {
                            echo

                            "<tr>
                    <td>$no</td>
                    <td>$h</td>
                    <td>Hardware</td>
                    </tr>";
                            $no++;
                        }
                    }
                    if ($catalog == 'software') {
                        $no = 1;
                        foreach ($software as $s) {
                            echo

                            "<tr>
                    <td>$no</td>
                    <td>$s</td>
                    <td>Software</td>
                    </tr>";
                            $no++;
                        }
                    }
                }
                    
                    ?>
            </table>
        </form>
</div>

        <?php include("footer.php") ?>

</body>
</htmL>