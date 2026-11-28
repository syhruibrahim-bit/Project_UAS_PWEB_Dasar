<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomor_laporan   = "LPK-" . rand(1000, 9999);
    $nama_pelapor    = $_POST['nama_pelapor'];
    $nim             = $_POST['nim'];
    $mahasiswa_aktif = isset($_POST['mahasiswa_aktif']) ? 'Ya' : 'Tidak';
    $lokasi          = $_POST['lokasi'];
    $nama_fasilitas  = $_POST['nama_fasilitas'];
    $kategori        = $_POST['kategori'];
    $urgensi         = $_POST['urgensi'];
    $tanggal         = $_POST['tanggal'];
    $deskripsi       = $_POST['deskripsi'];

    $nama_foto = null;
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === 0) {
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }
        $nama_foto = time() . "_" . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/" . $nama_foto);
    }

    $stmt = mysqli_prepare($conn, "INSERT INTO laporan (nomor_laporan, nama_pelapor, nim, mahasiswa_aktif, lokasi, nama_fasilitas, kategori, urgensi, tanggal, deskripsi, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssssssssss", $nomor_laporan, $nama_pelapor, $nim, $mahasiswa_aktif, $lokasi, $nama_fasilitas, $kategori, $urgensi, $tanggal, $deskripsi, $nama_foto);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Laporan berhasil dikirim!'); window.location='data.php';</script>";
    } else {
        echo "Gagal nyimpen laporan: " . mysqli_error($conn);
    }
}
?>