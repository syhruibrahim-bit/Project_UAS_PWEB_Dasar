
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat Laporan - LaporKampus</title>

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



    <!-- JUDUL HALAMAN -->
    <div class="judul-halaman">
        <h1>Formulir Laporan Kerusakan</h1>

        <p>
            Silakan isi informasi kerusakan fasilitas
            kampus dengan lengkap.
        </p>
    </div>


    <!-- FORM LAPORAN -->
    <div class="form-container">

        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Nama Pelapor</label>
                <input type="text" name="nama_pelapor"
                    placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim"
                    placeholder="Masukkan NIM" required>
            </div>
            
            <div class="form-group">
                <label>Status Mahasiswa</label>

                <div class="pilihan">
                    <input type="checkbox" name="mahasiswa_aktif"
                        value="Ya">
                    <span>Saya merupakan mahasiswa aktif</span>
                </div>
            </div>

            <div class="form-group">
                <label>Lokasi Kerusakan</label>
                <input type="text" name="lokasi"
                    placeholder="Contoh: Gedung, lantai, atau ruang" required>
            </div>

            <div class="form-group">
                <label>Nama Fasilitas</label>
                <input type="text" name="nama_fasilitas"
                    placeholder="Masukkan nama fasilitas" required>
            </div>

            <div class="form-group">
                <label>Kategori Fasilitas</label>

                <select name="kategori" required>
                    <option value="">Pilih kategori</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Komputer dan Jaringan">Komputer dan Jaringan</option>
                    <option value="Perabot">Perabot</option>
                    <option value="Sanitasi">Sanitasi</option>
                    <option value="Kelistrikan">Kelistrikan</option>
                    <option value="Bangunan">Bangunan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tingkat Urgensi</label>

                <div class="pilihan">
                    <input type="radio" name="urgensi"
                        value="Rendah" required>
                    <span>Rendah</span>

                    <input type="radio" name="urgensi"
                        value="Sedang">
                    <span>Sedang</span>

                    <input type="radio" name="urgensi"
                        value="Tinggi">
                    <span>Tinggi</span>
                </div>
            </div>

            <div class="form-group">
                <label>Tanggal Kejadian</label>
                <input type="date" name="tanggal" required>
            </div>

            <div class="form-group">
                <label>Deskripsi Kerusakan</label>
                <textarea name="deskripsi" rows="5"
                    placeholder="Jelaskan kerusakan yang ditemukan..."
                    required></textarea>
            </div>

            <div class="form-group">
                <label>Foto Kerusakan (Opsional)</label>
                <input type="file" name="foto">
            </div>

            <div class="form-button">
                <button type="submit" class="btn-submit">
                    Kirim Laporan
                </button>
            </div>

        </form>

    </div>


    <!-- FOOTER -->
    <div class="footer">
        <p>
            &copy; 2026 LaporKampus - Universitas Negeri Gorontalo
        </p>
    </div>


</body>
</html>
