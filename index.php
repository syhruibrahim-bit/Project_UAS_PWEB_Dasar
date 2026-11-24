
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>LaporKampus</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- NAVBAR -->

<div class="navbar">

    <!-- LOGO -->
    <div class="logo">
        <h2>LaporKampus</h2>
    </div>

    <!-- MENU NAVBAR -->
    <ul>

        <li>
            <a href="index.php">Beranda</a>
        </li>

        <li>
            <a href="form.php">Buat Laporan</a>
        </li>

        <li>
            <a href="data.php">Data Laporan</a>
        </li>

        <!-- DROPDOWN KATEGORI -->
        <li class="dropdown">

            <details>
                <summary>Kategori</summary>

                <ul class="dropdown-content">

                    <li>
                        <a href="kategori.php?kategori=elektronik">
                            Elektronik
                        </a>
                    </li>

                    <li>
                        <a href="kategori.php?kategori=perabot">
                            Perabot
                        </a>
                    </li>

                    <li>
                        <a href="kategori.php?kategori=kelistrikan">
                            Kelistrikan
                        </a>
                    </li>

                    <li>
                        <a href="kategori.php?kategori=bangunan">
                            Bangunan
                        </a>
                    </li>

                    <li>
                        <a href="kategori.php?kategori=sanitasi">
                            Sanitasi
                        </a>
                    </li>

                    <li>
                        <a href="kategori.php?kategori=komputer-jaringan">
                            Komputer dan Jaringan
                        </a>
                    </li>

                </ul>

            </details>

        </li>

    </ul>

</div>



    <div class="banner">

        <h1>Laporkan Kerusakan Fasilitas Kampus</h1>

        <p>
            Bantu menjaga fasilitas kampus tetap nyaman
            dengan melaporkan kerusakan yang kamu temukan.
        </p>

        <a href="form.php" class="tombol">Buat Laporan</a>

        <a href="data.php" class="tombol-kedua">Lihat Laporan</a>

    </div>


    <!-- STATISTIK LAPORAN -->
    <div class="statistik">

        <h2>Statistik Laporan</h2>

        <div class="statistik-container">

            <div class="statistik-card">
                <h3>-</h3>
                <p>Total Laporan</p>
            </div>

            <div class="statistik-card">
                <h3>-</h3>
                <p>Menunggu</p>
            </div>

            <div class="statistik-card">
                <h3>-</h3>
                <p>Sedang Diproses</p>
            </div>

            <div class="statistik-card">
                <h3>-</h3>
                <p>Selesai</p>
            </div>

        </div>

    </div>


    <!-- LAPORAN TERBARU -->
    <div class="laporan-terbaru">

        <h2>Laporan Terbaru</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Fasilitas</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>

            <tr>
                <td colspan="5">Belum ada laporan.</td>
            </tr>

        </table>

        <a href="data.php" class="lihat-semua">
            Lihat Semua Laporan
        </a>

    </div>


    <!-- FOOTER -->
    <div class="footer">

        <p>
            &copy; 2026 LaporKampus - Universitas Negeri Gorontalo
        </p>

    </div>

</body>
</html>
