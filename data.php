
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Riwayat Laporan - LaporKampus</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- NAVBAR -->

    <div class="navbar">

        <div class="logo">
            <h2>LaporKampus</h2>
        </div>

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

            <li class="dropdown">

                <details>

                    <summary>Kategori</summary>

                    <ul class="dropdown-content">

                        <li>
                            <a href="kategori.php?kategori=elektronik">Elektronik</a>
                        </li>

                        <li>
                            <a href="kategori.php?kategori=perabot">Perabot</a>
                        </li>

                        <li>
                            <a href="kategori.php?kategori=kelistrikan">Kelistrikan</a>
                        </li>

                        <li>
                            <a href="kategori.php?kategori=bangunan">Bangunan</a>
                        </li>

                        <li>
                            <a href="kategori.php?kategori=sanitasi">Sanitasi</a>
                        </li>

                        <li>
                            <a href="kategori.php?kategori=komputer-jaringan">Komputer dan Jaringan</a>
                        </li>

                    </ul>

                </details>

            </li>

        </ul>

    </div>


    <!-- KONTEN RIWAYAT LAPORAN -->

    <div class="riwayat-container">

        <!-- JUDUL HALAMAN -->

        <div class="riwayat-header">

            <h1>Riwayat Laporan</h1>

            <p>
                Lihat dan pantau riwayat laporan kerusakan
                fasilitas di lingkungan kampus.
            </p>

        </div>


        <!-- PENCARIAN DAN FILTER -->

        <div class="filter-container">

            <div class="pencarian">

                <input
                    type="text"
                    placeholder="Cari berdasarkan judul atau nomor laporan..."
                >

                <button type="button">Cari</button>

            </div>

            <div class="filter-status">

                <select>

                    <option value="">Semua Status</option>

                    <option value="menunggu">Menunggu</option>

                    <option value="diproses">Diproses</option>

                    <option value="selesai">Selesai</option>

                    <option value="ditolak">Ditolak</option>

                </select>

            </div>

        </div>


        <!-- TABEL RIWAYAT LAPORAN -->

        <div class="tabel-container">

            <div class="tabel-header">

                <h3>Daftar Riwayat Laporan</h3>

            </div>

            <table class="tabel-riwayat">

                <thead>

                    <tr>

                        <th>No</th>

                        <th>Nomor Laporan</th>

                        <th>Judul Laporan</th>

                        <th>Tanggal</th>

                        <th>Lokasi</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <!-- DATA LAPORAN DARI DATABASE AKAN DITAMPILKAN DI SINI -->

                    <tr>

                        <td colspan="7" class="data-kosong">

                            <div class="kosong-icon">
                                &#128196;
                            </div>

                            <p>Belum ada laporan</p>

                            <span>
                                Data laporan akan ditampilkan di sini.
                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>


    <!-- FOOTER -->

    <div class="footer">

        <p>
            &copy; 2026 LaporKampus.
            Sistem Pelaporan Kerusakan Fasilitas Kampus.
        </p>

    </div>

</body>

</html>
