<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jarak = $_POST['jarak'];
    $biaya = $_POST['biaya'];

    $data = "Jarak: $jarak km, Biaya: Rp $biaya\n";

    // Simpan ke dalam file data_pengiriman.txt
    if (file_put_contents('data_pengiriman.txt', $data, FILE_APPEND)) {
        header("Location: cek_data.php");
        exit();
    } else {
        echo "Gagal menyimpan data.";
    }
}

