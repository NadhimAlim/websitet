<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengiriman</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Data Pengiriman</h1>
        <div class="data">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jarak Pengiriman</th>
                        <th>Biaya Pengiriman</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $filename = 'data_pengiriman.txt';
                    $lineNumber = 1;

                    if (file_exists($filename)) {
                        $file = fopen($filename, "r");
                        if ($file) {
                            while (($line = fgets($file)) !== false) {
                                $parts = explode(',', $line);
                                if (count($parts) == 2) {
                                    list($jarak, $biaya) = $parts;
                                    $jarak = trim(str_replace('Jarak:', '', $jarak));
                                    $biaya = trim(str_replace('Biaya:', '', $biaya));
                                    ?>
                                    <tr>
                                        <td><?php echo $lineNumber++; ?></td>
                                        <td><?php echo htmlspecialchars($jarak); ?></td>
                                        <td><?php echo htmlspecialchars($biaya); ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            fclose($file);
                        } else {
                            echo "<tr><td colspan='3'>Gagal membuka file.</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Tidak ada data pengiriman.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="kembali">
            <a href="./index.php">Kembali</a>
        </div>
    </div>
</body>
</html>



