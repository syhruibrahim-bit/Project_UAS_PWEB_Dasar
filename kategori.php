
<?php

// ======================================
// DATA INFORMASI KATEGORI
// ======================================

$categories = [

    "elektronik" => [
        "title" => "Elektronik",
        "description" => "Kategori elektronik mencakup berbagai peralatan elektronik yang digunakan untuk menunjang kegiatan belajar mengajar dan aktivitas di lingkungan kampus.",
        "examples" => [
            "Proyektor",
            "Speaker",
            "Mikrofon",
            "Pendingin ruangan (AC)"
        ]
    ],

    "perabot" => [
        "title" => "Perabot",
        "description" => "Kategori perabot mencakup berbagai perlengkapan yang digunakan untuk menunjang kenyamanan dan aktivitas mahasiswa maupun staf di lingkungan kampus.",
        "examples" => [
            "Meja",
            "Kursi",
            "Lemari",
            "Papan tulis"
        ]
    ],

    "kelistrikan" => [
        "title" => "Kelistrikan",
        "description" => "Kategori kelistrikan mencakup fasilitas yang berhubungan dengan instalasi dan penggunaan listrik di lingkungan kampus.",
        "examples" => [
            "Lampu",
            "Stop kontak",
            "Sakelar",
            "Instalasi kabel listrik"
        ]
    ],

    "bangunan" => [
        "title" => "Bangunan",
        "description" => "Kategori bangunan mencakup bagian fisik gedung dan ruangan kampus yang digunakan untuk menunjang berbagai kegiatan.",
        "examples" => [
            "Pintu",
            "Jendela",
            "Plafon",
            "Lantai"
        ]
    ],

    "sanitasi" => [
        "title" => "Sanitasi",
        "description" => "Kategori sanitasi mencakup fasilitas kebersihan dan saluran air yang digunakan untuk menjaga kebersihan lingkungan kampus.",
        "examples" => [
            "Toilet",
            "Wastafel",
            "Keran air",
            "Saluran air"
        ]
    ],

    "komputer-jaringan" => [
        "title" => "Komputer dan Jaringan",
        "description" => "Kategori komputer dan jaringan mencakup perangkat komputer serta fasilitas jaringan yang mendukung kegiatan akademik dan administrasi kampus.",
        "examples" => [
            "Komputer",
            "Laptop",
            "Router",
            "Access point",
            "Kabel LAN"
        ]
    ]

];


// ======================================
// MENGAMBIL KATEGORI DARI URL
// ======================================

$selected = $_GET['kategori'] ?? 'elektronik';

// Memeriksa apakah kategori tersedia
if (!isset($categories[$selected])) {
    $selected = 'elektronik';
}

// Mengambil informasi kategori
$currentCategory = $categories[$selected];


// ======================================
// NAVIGASI SEBELUMNYA DAN SELANJUTNYA
// ======================================

// Mengambil seluruh kunci kategori
$categoryKeys = array_keys($categories);

// Mencari posisi kategori saat ini
$currentIndex = array_search($selected, $categoryKeys);

// Menentukan kategori sebelumnya
$previous = $categoryKeys[$currentIndex - 1] ?? null;

// Menentukan kategori selanjutnya
$next = $categoryKeys[$currentIndex + 1] ?? null;

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo htmlspecialchars($currentCategory['title']); ?> - LaporKampus
    </title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <!-- ================================== -->
    <!-- NAVBAR -->
    <!-- ================================== -->

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


    <!-- ================================== -->
    <!-- KONTEN INFORMASI KATEGORI -->
    <!-- ================================== -->

    <div class="kategori-container">

        <!-- JUDUL DAN DESKRIPSI -->

        <div class="kategori-header">

            <p class="kategori-label">
                KATEGORI FASILITAS
            </p>

            <h1>
                <?php echo htmlspecialchars($currentCategory['title']); ?>
            </h1>

            <p>
                <?php echo htmlspecialchars($currentCategory['description']); ?>
            </p>

        </div>


        <!-- CONTOH FASILITAS -->

        <div class="kategori-content">

            <h3>Contoh Fasilitas</h3>

            <p>
                Berikut beberapa contoh fasilitas yang termasuk
                dalam kategori
                <?php echo htmlspecialchars($currentCategory['title']); ?>:
            </p>

            <ul class="contoh-fasilitas">

                <?php foreach ($currentCategory['examples'] as $example) : ?>

                    <li>
                        <?php echo htmlspecialchars($example); ?>
                    </li>

                <?php endforeach; ?>

            </ul>

        </div>


        <!-- ================================== -->
        <!-- NAVIGASI LINEAR KATEGORI -->
        <!-- ================================== -->

        <div class="kategori-navigation">

            <!-- SEBELUMNYA DI SEBELAH KIRI -->

            <div class="nav-sebelumnya">

                <?php if ($previous !== null) : ?>

                    <a href="kategori.php?kategori=<?php echo urlencode($previous); ?>">

                        &larr; Sebelumnya

                    </a>

                <?php endif; ?>

            </div>


            <!-- SELANJUTNYA DI SEBELAH KANAN -->

            <div class="nav-selanjutnya">

                <?php if ($next !== null) : ?>

                    <a href="kategori.php?kategori=<?php echo urlencode($next); ?>">

                        Selanjutnya &rarr;

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>


    <!-- ================================== -->
    <!-- FOOTER -->
    <!-- ================================== -->

    <div class="footer">

        <p>
            &copy; 2026 LaporKampus.
            Sistem Pelaporan Kerusakan Fasilitas Kampus.
        </p>

    </div>


</body>

</html>
