<?php
$file_db = "database_desa.json";
if (!file_exists($file_db)) {
    $data_awal = [
        "statistik" => [
            ["angka" => 5420, "satuan" => "Jiwa", "label" => "Total Penduduk"],
            ["angka" => 1685, "satuan" => "KK", "label" => "Kepala Keluarga"],
            ["angka" => 11, "satuan" => "RW", "label" => "Rukun Warga"],
            ["angka" => 240, "satuan" => "Unit", "label" => "UMKM & Pokdakan"]
        ],
        "total_apbdes" => "Rp 1.485.000.000",
        "apbdes" => [
            ["bidang" => "Bidang Penyelenggaraan Pemerintahan Desa", "anggaran" => "Rp 415.000.000", "persen" => 91],
            ["bidang" => "Bidang Pelaksanaan Pembangunan Desa", "anggaran" => "Rp 560.000.000", "persen" => 86],
            ["bidang" => "Bidang Pembinaan Kemasyarakatan", "anggaran" => "Rp 210.000.000", "persen" => 82],
            ["bidang" => "Bidang Pemberdayaan Masyarakat & Kampung Mina", "anggaran" => "Rp 300.000.000", "persen" => 89]
        ],
        "berita" => [
            [
                "id" => "brt1",
                "kategori" => "Pengumuman",
                "tanggal" => "15 November 2026",
                "gambar" => "https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=800&q=80",
                "judul" => "Jadwal Pelayanan Administrasi Balai Desa Beji",
                "ringkasan" => "Pelayanan surat-menyurat dan administrasi kependudukan dibuka setiap hari kerja pukul 08.00 – 15.30 WIB.",
                "isi" => "Diberitahukan kepada seluruh warga Desa Beji, Kecamatan Kedungbanteng bahwa pelayanan administrasi kependudukan di Balai Desa Beji beroperasi setiap hari Senin hingga Jumat pukul 08.00 – 15.30 WIB. Warga juga dapat mengajukan permohonan awal secara online melalui menu Layanan pada portal ini."
            ],
            [
                "id" => "brt2",
                "kategori" => "Ekonomi Desa",
                "tanggal" => "11 November 2026",
                "gambar" => "https://images.unsplash.com/photo-1534043464124-3be32fe000c9?auto=format&fit=crop&w=800&q=80",
                "judul" => "Aktivitas Pasar Ikan & Sentra Budidaya Kampung Mina",
                "ringkasan" => "Informasi operasional Pasar Ikan Desa Beji sebagai pusat distribusi hasil perikanan air tawar masyarakat.",
                "isi" => "Pasar Ikan Desa Beji terus beroperasi melayani transaksi hasil panen budidaya ikan air tawar milik warga dan kelompok pembudidaya ikan (Pokdakan) di wilayah Kecamatan Kedungbanteng dan sekitarnya."
            ],
            [
                "id" => "brt3",
                "kategori" => "Layanan",
                "tanggal" => "05 November 2026",
                "gambar" => "https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=800&q=80",
                "judul" => "Pemutakhiran Data Kependudukan Warga Desa Beji",
                "ringkasan" => "Warga yang mengalami perubahan data keluarga diimbau segera melapor ke perangkat desa atau RT/RW setempat.",
                "isi" => "Dalam rangka tertib administrasi kependudukan, warga Desa Beji yang memiliki perubahan anggota keluarga, status pendidikan, maupun pekerjaan dimohon segera memperbarui data Kartu Keluarga di Balai Desa Beji dengan membawa dokumen pendukung."
            ]
        ],
        "surat" => [],
        "aspirasi" => []
    ];
    file_put_contents($file_db, json_encode($data_awal, JSON_PRETTY_PRINT));
}

$db = json_decode(file_get_contents($file_db), true);
if (!isset($db['statistik'])) {
    $db['statistik'] = [
        ["angka" => 5420, "satuan" => "Jiwa", "label" => "Total Penduduk"],
        ["angka" => 1685, "satuan" => "KK", "label" => "Kepala Keluarga"],
        ["angka" => 11, "satuan" => "RW", "label" => "Rukun Warga"],
        ["angka" => 240, "satuan" => "Unit", "label" => "UMKM & Pokdakan"]
    ];
}
if (!isset($db['total_apbdes'])) {
    $db['total_apbdes'] = "Rp 1.485.000.000";
}
if (!isset($db['apbdes'])) {
    $db['apbdes'] = [
        ["bidang" => "Bidang Penyelenggaraan Pemerintahan Desa", "anggaran" => "Rp 415.000.000", "persen" => 91],
        ["bidang" => "Bidang Pelaksanaan Pembangunan Desa", "anggaran" => "Rp 560.000.000", "persen" => 86],
        ["bidang" => "Bidang Pembinaan Kemasyarakatan", "anggaran" => "Rp 210.000.000", "persen" => 82],
        ["bidang" => "Bidang Pemberdayaan Masyarakat & Kampung Mina", "anggaran" => "Rp 300.000.000", "persen" => 89]
    ];
}
if (!isset($db['berita'])) {
    $db['berita'] = [];
}

$nama_web = "Pemerintah Desa Beji";
$wilayah = "Kecamatan Kedungbanteng, Kabupaten Banyumas";
$nama_pemimpin = "Secret Person";
$jabatan = "Kepala Desa Beji";
$periode = "Masa Bakti 2024 – 2030";
$alamat_kantor = "Jl. Raya Beji No. 12, Desa Beji, Kec. Kedungbanteng, Kab. Banyumas, Jawa Tengah 53152";
$wa_desa = "6281228459011";
$sambutan_profil = "Menjabat sebagai Kepala Desa Beji, Kecamatan Kedungbanteng dengan komitmen penuh untuk menghadirkan tata kelola pemerintahan yang terbuka, modern, dan berpihak pada kesejahteraan seluruh warga desa.";

$slides = [
    [
        "gambar" => "images.jpg",
        "judul" => "Membangun Beji yang Inklusif dan Berkelanjutan",
        "deskripsi" => "Pemerintah Desa Beji, Kecamatan Kedungbanteng berdedikasi menciptakan lingkungan yang transparan, aman, dan sejahtera bagi seluruh warga.",
        "posisi" => "center 65%"
    ],
    [
        "gambar" => "1.jpg",
        "judul" => "Sentra Perikanan & Kampung Mina Beji",
        "deskripsi" => "Mengoptimalkan potensi budidaya perikanan air tawar, pasar ikan desa, dan sektor pertanian untuk kemandirian ekonomi masyarakat.",
        "posisi" => "center center"
    ],
    [
        "gambar" => "2.jpg",
        "judul" => "Pelayanan Publik Digital & Transparan",
        "deskripsi" => "Mempermudah akses administrasi kependudukan dan layanan masyarakat Desa Beji secara cepat, mudah, dan akuntabel.",
        "posisi" => "center center"
    ],
    [
        "gambar" => "3.jpg",
        "judul" => "Gotong Royong Membangun Infrastruktur",
        "deskripsi" => "Mewujudkan fasilitas umum, akses jalan desa, dan ruang terbuka yang nyaman bagi seluruh lapisan masyarakat Desa Beji.",
        "posisi" => "center center"
    ]
];

$statistik_desa = $db['statistik'];
$total_apbdes = $db['total_apbdes'];
$transparansi_dana = $db['apbdes'];
$kabar_desa = $db['berita'];

$perangkat_desa = [
    ["nama" => "Ahmad Subagyo, S.Sos", "jabatan" => "Sekretaris Desa", "ikon" => "bi-person-badge"],
    ["nama" => "Sri Wahyuni, S.E", "jabatan" => "Kaur Keuangan", "ikon" => "bi-cash-coin"],
    ["nama" => "Slamet Riyadi", "jabatan" => "Kasi Pemerintahan", "ikon" => "bi-building-check"],
    ["nama" => "Endang Susilowati", "jabatan" => "Kasi Pelayanan & Kesra", "ikon" => "bi-people"]
];

$visi = "Menjadi desa mandiri yang menjunjung tinggi nilai budaya, inovasi digital, dan kesejahteraan sosial ekonomi masyarakat Desa Beji.";

$daftar_misi = [
    "Menyediakan tata kelola pemerintahan Desa Beji yang bersih, transparan, dan mudah diakses.",
    "Mengembangkan potensi Kampung Mina, UMKM lokal, dan pertanian berkelanjutan.",
    "Membangun infrastruktur publik yang ramah anak, lansia, dan penyandang disabilitas.",
    "Meningkatkan kualitas fasilitas kesehatan dan pendidikan dasar warga."
];

$program_unggulan = [
    [
        "ikon" => "bi-heart-pulse",
        "judul" => "Layanan Kesehatan Terpadu",
        "penjelasan" => "Fasilitas kesehatan siaga dan program posyandu rutin untuk balita, ibu hamil, serta lansia."
    ],
    [
        "ikon" => "bi-laptop",
        "judul" => "Desa Terkoneksi",
        "penjelasan" => "Sistem pelayanan administrasi mandiri secara online untuk mempermudah pengurusan dokumen warga."
    ],
    [
        "ikon" => "bi-shop",
        "judul" => "Penguatan Kampung Mina & UMKM",
        "penjelasan" => "Dukungan pemasaran Pasar Ikan Desa Beji, pendampingan kelompok pembudidaya ikan, dan pelaku usaha lokal."
    ]
];

$potensi_produk = [
    [
        "kategori" => "Perikanan",
        "gambar" => "y.jpg",
        "nama" => "Ikan Gurame & Nila Segar Kampung Mina",
        "penjual" => "Pokdakan Desa Beji",
        "harga" => "Mulai Rp 28.000 / kg",
        "deskripsi" => "Hasil panen langsung dari kolam budidaya air mengalir Desa Beji, tersedia dalam kondisi hidup maupun bersih siap masak.",
        "wa" => "6281228459011"
    ],
    [
        "kategori" => "Olahan Pangan",
        "gambar" => "sate.jpg",
        "nama" => "Sate Ikan Gurameh",
        "penjual" => "UMKM Mina Lestari",
        "harga" => "Rp 25.000 / kemasan",
        "deskripsi" => "Produk olahan ikan air tawar khas Desa Beji yang renyah, bergizi tinggi, dan tahan lama untuk oleh-oleh maupun lauk.",
        "wa" => "6281228459011"
    ],
    [
        "kategori" => "Wisata & Kuliner",
        "gambar" => "pasar.jpg",
        "nama" => "Pasar Ikan & Wisata Edukasi Perikanan",
        "penjual" => "BUMDes Beji Mandiri",
        "harga" => "Buka Setiap Hari",
        "deskripsi" => "Pusat transaksi perikanan terbesar di Kecamatan Kedungbanteng sekaligus destinasi wisata edukasi budidaya ikan keluarga.",
        "wa" => "6281228459011"
    ]
];

$layanan_surat = [
    ["kode" => "SKD", "nama" => "Surat Keterangan Domisili", "syarat" => "KTP Asli & Kartu Keluarga"],
    ["kode" => "SKU", "nama" => "Surat Keterangan Usaha", "syarat" => "KTP, KK & Foto Tempat Usaha"],
    ["kode" => "SKTM", "nama" => "Surat Keterangan Tidak Mampu", "syarat" => "KTP, KK & Pengantar RT/RW"],
    ["kode" => "SKCK", "nama" => "Pengantar SKCK Kepolisian", "syarat" => "KTP, KK & Akta Kelahiran"]
];

$kontak_darurat = [
    ["layanan" => "Pelayanan Balai Desa Beji", "nomor" => "6281228459011", "tampil" => "0812-2845-9011", "ikon" => "bi-telephone"],
    ["layanan" => "Bhabinkamtibmas Desa Beji", "nomor" => "6281327904412", "tampil" => "0813-2790-4412", "ikon" => "bi-shield-check"],
    ["layanan" => "Bidan Desa / PKD Beji", "nomor" => "6285743118820", "tampil" => "0857-4311-8820", "ikon" => "bi-hospital"]
];

$notifikasi_sukses = "";
$hasil_cek_surat = null;
$nik_dicari = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['kirim_aspirasi'])) {
        $nama = htmlspecialchars(trim($_POST['nama']));
        $telepon = htmlspecialchars(trim($_POST['telepon']));
        $pesan = htmlspecialchars(trim($_POST['pesan']));
        $waktu = date("d-m-Y H:i:s");

        $db['aspirasi'][] = [
            "id" => uniqid(),
            "waktu" => $waktu,
            "nama" => $nama,
            "telepon" => $telepon,
            "pesan" => $pesan,
            "status" => "Diterima"
        ];
        file_put_contents($file_db, json_encode($db, JSON_PRETTY_PRINT));
        $notifikasi_sukses = "Terima kasih $nama, aspirasi Anda telah berhasil dikirim dan tercatat di sistem desa.";
    }

    if (isset($_POST['ajukan_surat'])) {
        $nama_pemohon = htmlspecialchars(trim($_POST['nama_pemohon']));
        $nik = htmlspecialchars(trim($_POST['nik']));
        $tempat_lahir = htmlspecialchars(trim($_POST['tempat_lahir']));
        $tanggal_lahir = htmlspecialchars(trim($_POST['tanggal_lahir']));
        $alamat_pemohon = htmlspecialchars(trim($_POST['alamat_pemohon']));
        $keperluan = htmlspecialchars(trim($_POST['keperluan']));
        $jenis_surat = htmlspecialchars(trim($_POST['jenis_surat']));
        $wa_pemohon = htmlspecialchars(trim($_POST['wa_pemohon']));
        $waktu = date("d-m-Y H:i:s");

        $db['surat'][] = [
            "id" => uniqid(),
            "waktu" => $waktu,
            "jenis_surat" => $jenis_surat,
            "nama" => $nama_pemohon,
            "nik" => $nik,
            "tempat_lahir" => $tempat_lahir,
            "tanggal_lahir" => $tanggal_lahir,
            "alamat" => $alamat_pemohon,
            "keperluan" => $keperluan,
            "wa" => $wa_pemohon,
            "status" => "Menunggu Verifikasi"
        ];
        file_put_contents($file_db, json_encode($db, JSON_PRETTY_PRINT));
        $notifikasi_sukses = "Pengajuan $jenis_surat atas nama $nama_pemohon berhasil dicatat. Silakan lacak status menggunakan NIK Anda pada menu Layanan.";
    }

    if (isset($_POST['cek_nik'])) {
        $nik_dicari = htmlspecialchars(trim($_POST['nik_cek']));
        $hasil_cek_surat = [];
        foreach ($db['surat'] as $item) {
            if ($item['nik'] === $nik_dicari) {
                $hasil_cek_surat[] = $item;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nama_web ?> – <?= $wilayah ?></title>
    
    <script>
        (function() {
            const savedTheme = localStorage.getItem('desaBejiTheme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        :root {
            --bg-main: #ffffff;
            --bg-alt: #f8fafc;
            --bg-card: #ffffff;
            --bg-card-hover: #ffffff;
            --bg-badge: #e2e8f0;
            --text-heading: #0f172a;
            --text-body: #475569;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --border-hover: #cbd5e1;
            --accent-primary: #0f172a;
            --accent-primary-hover: #1e293b;
            --accent-primary-text: #ffffff;
            --nav-scrolled-bg: rgba(255, 255, 255, 0.92);
            --nav-scrolled-border: #e2e8f0;
            --nav-scrolled-text: #0f172a;
            --nav-scrolled-link: #475569;
            --shadow-card: 0 18px 36px rgba(15, 23, 42, 0.06);
            --input-bg: #ffffff;
            --input-border: #cbd5e1;
            --modal-bg: #ffffff;

            /* Variabel Sidebar Transparan Mode Terang */
            --sidebar-bg: rgba(255, 255, 255, 0.78);
            --sidebar-border: rgba(15, 23, 42, 0.1);
            --sidebar-text: #0f172a;
            --sidebar-subtext: #64748b;
            --sidebar-link-color: #334155;
            --sidebar-link-hover-bg: rgba(15, 23, 42, 0.08);
            --sidebar-link-hover-text: #0f172a;
            --sidebar-card-bg: rgba(248, 250, 252, 0.75);
        }

        [data-theme="dark"] {
            --bg-main: #090d16;
            --bg-alt: #0f172a;
            --bg-card: #131c31;
            --bg-card-hover: #18233c;
            --bg-badge: #1e293b;
            --text-heading: #f8fafc;
            --text-body: #cbd5e1;
            --text-muted: #94a3b8;
            --border-color: #1e293b;
            --border-hover: #334155;
            --accent-primary: #3b82f6;
            --accent-primary-hover: #2563eb;
            --accent-primary-text: #ffffff;
            --nav-scrolled-bg: rgba(9, 13, 22, 0.9);
            --nav-scrolled-border: #1e293b;
            --nav-scrolled-text: #f8fafc;
            --nav-scrolled-link: #94a3b8;
            --shadow-card: 0 20px 40px rgba(0, 0, 0, 0.35);
            --input-bg: #0f172a;
            --input-border: #334155;
            --modal-bg: #131c31;

            /* Variabel Sidebar Transparan Mode Gelap */
            --sidebar-bg: rgba(15, 23, 42, 0.80);
            --sidebar-border: rgba(255, 255, 255, 0.12);
            --sidebar-text: #f8fafc;
            --sidebar-subtext: #94a3b8;
            --sidebar-link-color: rgba(255, 255, 255, 0.85);
            --sidebar-link-hover-bg: rgba(255, 255, 255, 0.14);
            --sidebar-link-hover-text: #ffffff;
            --sidebar-card-bg: rgba(255, 255, 255, 0.06);
        }

        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-body);
            background-color: var(--bg-main);
            line-height: 1.65;
            overflow-x: hidden;
            transition: background-color 0.35s ease, color 0.35s ease;
        }
        h1, h2, h3, h4, h5, h6, .navbar-brand, .stat-number {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .section-bg-alt {
            background-color: var(--bg-alt);
            transition: background-color 0.35s ease;
        }
        .text-theme-heading {
            color: var(--text-heading) !important;
        }
        .text-theme-muted {
            color: var(--text-muted) !important;
        }

        .navbar {
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, 0.14);
            padding: 18px 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1030;
        }
        .navbar.scrolled {
            padding: 12px 0;
            background-color: var(--nav-scrolled-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--nav-scrolled-border);
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        }
        .brand-emblem {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.28);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            transition: all 0.3s ease;
        }
        .navbar.scrolled .brand-emblem {
            background: var(--accent-primary);
            border-color: var(--accent-primary);
            color: #ffffff;
        }
        .navbar-brand {
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -0.5px;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        .navbar-brand:hover {
            color: rgba(255, 255, 255, 0.85);
        }
        .navbar.scrolled .navbar-brand {
            color: var(--nav-scrolled-text);
        }
        .btn-nav-icon {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #ffffff;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .btn-nav-icon:hover {
            background: rgba(255, 255, 255, 0.28);
            color: #ffffff;
            transform: translateY(-1px);
        }
        .navbar.scrolled .btn-nav-icon {
            background: var(--bg-badge);
            border-color: var(--border-color);
            color: var(--nav-scrolled-text);
        }
        .navbar.scrolled .btn-nav-icon:hover {
            border-color: var(--border-hover);
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.88);
            font-weight: 500;
            font-size: 0.9rem;
            margin: 0 5px;
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 2px;
            left: 50%;
            background-color: #ffffff;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateX(-50%);
        }
        .nav-link:hover, .nav-link.active-nav {
            color: #ffffff;
        }
        .nav-link:hover::after, .nav-link.active-nav::after {
            width: 60%;
        }
        .navbar.scrolled .nav-link {
            color: var(--nav-scrolled-link);
        }
        .navbar.scrolled .nav-link::after {
            background-color: var(--accent-primary);
        }
        .navbar.scrolled .nav-link:hover,
        .navbar.scrolled .nav-link.active-nav {
            color: var(--nav-scrolled-text);
        }
        .btn-nav-cta {
            background-color: #ffffff;
            color: #0f172a;
            border: none;
            padding: 9px 20px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-nav-cta:hover {
            background-color: #f8fafc;
            color: #0f172a;
            transform: translateY(-2px);
        }
        .navbar.scrolled .btn-nav-cta {
            background-color: var(--accent-primary);
            color: var(--accent-primary-text);
        }
        .navbar.scrolled .btn-nav-cta:hover {
            background-color: var(--accent-primary-hover);
            color: var(--accent-primary-text);
        }

        /* Sidebar Transparan Adaptif Tema Terang & Gelap */
        .sidebar-custom {
            width: 325px !important;
            background-color: var(--sidebar-bg) !important;
            backdrop-filter: blur(22px);
            -webkit-backdrop-filter: blur(22px);
            border-right: 1px solid var(--sidebar-border) !important;
            color: var(--sidebar-text);
            transition: background-color 0.35s ease, color 0.35s ease, border-color 0.35s ease;
        }
        .sidebar-header-transparent {
            border-bottom: 1px solid var(--sidebar-border);
        }
        .sidebar-title-text {
            color: var(--sidebar-text);
        }
        .sidebar-sub-text {
            color: var(--sidebar-subtext);
        }
        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 11px 16px;
            border-radius: 10px;
            color: var(--sidebar-link-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.94rem;
            transition: all 0.25s ease;
            margin-bottom: 3px;
        }
        .sidebar-link:hover, .sidebar-link.active-nav {
            background-color: var(--sidebar-link-hover-bg);
            color: var(--sidebar-link-hover-text);
            transform: translateX(4px);
        }
        .sidebar-link i {
            font-size: 1.15rem;
            color: var(--sidebar-subtext);
            transition: color 0.25s ease;
        }
        .sidebar-link:hover i, .sidebar-link.active-nav i {
            color: var(--sidebar-link-hover-text);
        }
        .sidebar-glass-card {
            background-color: var(--sidebar-card-bg);
            border: 1px solid var(--sidebar-border);
            border-radius: 16px;
        }
        .btn-sidebar-primary {
            background-color: var(--accent-primary);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.25s ease;
        }
        .btn-sidebar-primary:hover {
            background-color: var(--accent-primary-hover);
            color: #ffffff;
        }
        .btn-sidebar-secondary {
            background-color: transparent;
            color: var(--sidebar-text);
            border: 1px solid var(--sidebar-border);
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.25s ease;
        }
        .btn-sidebar-secondary:hover {
            background-color: var(--sidebar-link-hover-bg);
            color: var(--sidebar-text);
        }
        .btn-sidebar-theme {
            border: 1px solid var(--sidebar-border);
            color: var(--sidebar-text);
            background-color: var(--sidebar-card-bg);
        }
        .btn-sidebar-theme:hover {
            background-color: var(--sidebar-link-hover-bg);
            color: var(--sidebar-text);
        }

        .secret-avatar-box {
            width: 280px;
            height: 280px;
            margin: 0 auto;
            border-radius: 24px;
            background: linear-gradient(145deg, #1e293b 0%, #090d16 100%);
            border: 1px solid #334155;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 18px 38px rgba(0, 0, 0, 0.25);
        }
        .secret-avatar-box svg {
            width: 100%;
            height: 100%;
        }
        .card-thumb-wrap {
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 20px;
            background-color: var(--bg-badge);
        }
        .card-thumb-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-clean:hover .card-thumb-img {
            transform: scale(1.06);
        }
        .scroll-indicator {
            position: absolute;
            bottom: 32px;
            right: 40px;
            z-index: 5;
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }
        .scroll-indicator:hover {
            color: #ffffff;
        }
        .scroll-mouse {
            width: 22px;
            height: 34px;
            border: 1.5px solid rgba(255, 255, 255, 0.7);
            border-radius: 12px;
            position: relative;
        }
        .scroll-wheel {
            width: 3px;
            height: 6px;
            background-color: #ffffff;
            border-radius: 2px;
            position: absolute;
            top: 6px;
            left: 50%;
            transform: translateX(-50%);
            animation: scrollBounce 1.8s infinite;
        }
        @keyframes scrollBounce {
            0% { opacity: 1; top: 6px; }
            100% { opacity: 0; top: 18px; }
        }

        .btn-dark-custom {
            background-color: var(--accent-primary);
            color: var(--accent-primary-text);
            border: none;
            padding: 11px 24px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.94rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-dark-custom:hover {
            background-color: var(--accent-primary-hover);
            color: var(--accent-primary-text);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
        }
        .btn-outline-custom {
            background-color: transparent;
            color: var(--text-heading);
            border: 1px solid var(--border-hover);
            padding: 10px 22px;
            border-radius: 10px;
            font-weight: 500;
            font-size: 0.94rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-outline-custom:hover {
            background-color: var(--bg-badge);
            border-color: var(--text-heading);
            color: var(--text-heading);
            transform: translateY(-2px);
        }
        .btn-light-custom {
            background-color: #ffffff;
            color: #0f172a;
            border: none;
            padding: 13px 28px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-light-custom:hover {
            background-color: #f8fafc;
            color: #0f172a;
            transform: translateY(-3px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.22);
        }

        .hero-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        #cursorParticleCanvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            pointer-events: none;
        }
        .hero-slide {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 640px;
            overflow: hidden;
            display: flex;
            align-items: center;
            color: #ffffff;
            padding-top: 60px;
        }
        .hero-bg-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: transform 1.4s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1;
            will-change: transform;
        }
        .hero-wrapper:hover .carousel-item.active .hero-bg-img {
            transform: scale(1.06);
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(9, 13, 22, 0.78) 0%, rgba(9, 13, 22, 0.48) 45%, rgba(9, 13, 22, 0.88) 100%);
            z-index: 2;
        }
        .hero-content {
            position: relative;
            z-index: 4;
        }
        .carousel-item .hero-title,
        .carousel-item .hero-text,
        .carousel-item .hero-btn-wrap {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .carousel-item.active .hero-title {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.15s;
        }
        .carousel-item.active .hero-text {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.3s;
        }
        .carousel-item.active .hero-btn-wrap {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.45s;
        }
        .hero-title {
            font-weight: 800;
            letter-spacing: -1.5px;
            color: #ffffff;
            line-height: 1.12;
            margin-bottom: 24px;
            font-size: 3.5rem;
        }
        .hero-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.15rem;
            margin-bottom: 34px;
            max-width: 640px;
        }
        .carousel-control-prev, .carousel-control-next {
            z-index: 5;
            width: 5%;
            opacity: 0.6;
            transition: opacity 0.3s ease;
        }
        .carousel-control-prev:hover, .carousel-control-next:hover {
            opacity: 1;
        }
        .carousel-indicators {
            z-index: 5;
            margin-bottom: 2rem;
        }
        .carousel-indicators [data-bs-target] {
            width: 28px;
            height: 4px;
            border-radius: 4px;
            transition: all 0.4s ease;
        }
        .carousel-indicators .active {
            width: 44px;
        }

        .stats-bar {
            background-color: #0b1120;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
            padding: 52px 0;
        }
        .stat-number {
            font-size: 2.6rem;
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.1;
        }
        .stat-unit {
            font-size: 1rem;
            font-weight: 500;
            color: #94a3b8;
            margin-left: 4px;
        }
        .stat-label {
            color: #cbd5e1;
            font-size: 0.95rem;
            margin-top: 6px;
        }

        .section-padding {
            padding: 100px 0;
        }
        .section-eyebrow {
            display: inline-block;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: var(--accent-primary);
            background-color: var(--bg-badge);
            padding: 6px 14px;
            border-radius: 99px;
            margin-bottom: 14px;
        }
        [data-theme="dark"] .section-eyebrow {
            color: #60a5fa;
        }
        .section-title {
            font-weight: 800;
            letter-spacing: -1px;
            color: var(--text-heading);
            margin-bottom: 16px;
        }
        .section-subtitle {
            color: var(--text-muted);
            font-size: 1.08rem;
            margin-bottom: 48px;
        }
        .profil-box {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 48px;
            box-shadow: var(--shadow-card);
            transition: all 0.35s ease;
        }
        .profil-badge {
            display: inline-block;
            background-color: var(--bg-badge);
            color: var(--text-heading);
            font-size: 0.82rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 8px;
            margin-bottom: 16px;
        }
        .card-clean {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 18px;
            padding: 28px;
            height: 100%;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-clean:hover {
            background: var(--bg-card-hover);
            border-color: var(--border-hover);
            transform: translateY(-6px);
            box-shadow: var(--shadow-card);
        }
        .card-staf {
            border-top: 3px solid var(--accent-primary);
        }
        .icon-wrapper {
            background-color: var(--bg-badge);
            color: var(--text-heading);
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            font-size: 1.5rem;
            margin-bottom: 24px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-clean:hover .icon-wrapper {
            background-color: var(--accent-primary);
            color: #ffffff;
            transform: scale(1.05);
        }
        .card-title {
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 12px;
            letter-spacing: -0.4px;
        }
        .card-text {
            color: var(--text-body);
            margin-bottom: 0;
        }
        .list-misi {
            list-style: none;
            padding: 0;
        }
        .list-misi li {
            position: relative;
            padding-left: 32px;
            margin-bottom: 16px;
            color: var(--text-body);
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .list-misi li:hover {
            transform: translateX(4px);
            color: var(--text-heading);
        }
        .list-misi li::before {
            content: "→";
            position: absolute;
            left: 0;
            color: var(--accent-primary);
            font-weight: bold;
        }
        [data-theme="dark"] .list-misi li::before {
            color: #60a5fa;
        }
        .progress-custom {
            height: 10px;
            border-radius: 8px;
            background-color: var(--bg-badge);
            overflow: hidden;
        }
        .progress-bar-dark {
            background-color: var(--accent-primary);
            border-radius: 8px;
            transition: width 1.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .emergency-card {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 16px 20px;
            transition: all 0.3s ease;
        }
        .emergency-card:hover {
            border-color: var(--accent-primary);
            background-color: var(--bg-card-hover);
        }
        .map-frame {
            border: 1px solid var(--border-color);
            border-radius: 18px;
            overflow: hidden;
            height: 240px;
        }
        .form-control-clean, .form-select-clean {
            background-color: var(--input-bg);
            color: var(--text-heading);
            border: 1px solid var(--input-border);
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 0.94rem;
            transition: all 0.3s ease;
        }
        .form-control-clean::placeholder {
            color: var(--text-muted);
        }
        .form-control-clean:focus, .form-select-clean:focus {
            background-color: var(--input-bg);
            color: var(--text-heading);
            border-color: var(--accent-primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.16);
        }
        .form-label {
            color: var(--text-heading);
        }
        .table-theme {
            color: var(--text-body);
        }
        .table-theme thead {
            border-bottom: 1px solid var(--border-color);
            color: var(--text-muted);
        }
        .modal-content-theme {
            background-color: var(--modal-bg);
            color: var(--text-body);
            border: 1px solid var(--border-color) !important;
        }
        [data-theme="dark"] .btn-close-adaptive {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        .floating-actions {
            position: fixed;
            bottom: 28px;
            right: 28px;
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 999;
        }
        .btn-float-wa {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background-color: #16a34a;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.45rem;
            box-shadow: 0 8px 20px rgba(22, 163, 74, 0.28);
            text-decoration: none;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .btn-float-wa:hover {
            background-color: #15803d;
            color: #ffffff;
            transform: translateY(-3px);
        }
        #backToTop {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background-color: var(--accent-primary);
            color: #ffffff;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.22);
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }
        #backToTop.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        #backToTop:hover {
            background-color: var(--accent-primary-hover);
            transform: translateY(-3px);
        }
        footer {
            background-color: var(--bg-main);
            border-top: 1px solid var(--border-color);
            padding: 48px 0;
            color: var(--text-muted);
            transition: all 0.35s ease;
        }
        @media (max-width: 768px) {
            .hero-title { font-size: 2.3rem; }
            .hero-slide { height: 85vh; }
            .profil-box { padding: 32px 24px; }
            .scroll-indicator { display: none; }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
        <div class="container">
            <div class="d-flex align-items-center gap-3">
                <button class="btn-nav-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" title="Buka Menu Samping">
                    <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand m-0 d-flex align-items-center gap-2" href="#beranda">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M9 12l2 2 4-4"/>
                        </svg>
                    </span>
                    <span><?= $nama_web ?></span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#program">Program</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#potensi">Potensi</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#transparansi">APBDes</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#kabar">Kabar</a></li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="#layanan">Layanan</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <button type="button" class="btn-nav-icon theme-toggle-btn" title="Ganti Mode Terang / Malam">
                        <i class="bi bi-moon-stars theme-icon"></i>
                    </button>
                    <a href="#kontak" class="btn-nav-cta text-decoration-none smooth-scroll">Hubungi Kami</a>
                </div>
            </div>
            <div class="d-flex d-lg-none align-items-center gap-2">
                <button type="button" class="btn-nav-icon theme-toggle-btn" title="Ganti Mode Terang / Malam">
                    <i class="bi bi-moon-stars theme-icon"></i>
                </button>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start sidebar-custom" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header sidebar-header-transparent px-4 py-3">
            <div class="d-flex align-items-center gap-2">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                </span>
                <div>
                    <h5 class="offcanvas-title fw-bold sidebar-title-text mb-0" id="sidebarMenuLabel" style="font-size: 1.05rem;"><?= $nama_web ?></h5>
                    <small class="sidebar-sub-text" style="font-size: 0.78rem;">Kec. Kedungbanteng, Banyumas</small>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-adaptive" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between p-4">
            <div>
                <div class="d-flex justify-content-between align-items-center mb-3 px-2">
                    <span class="text-uppercase fw-semibold sidebar-sub-text" style="font-size: 0.75rem; letter-spacing: 0.5px;">Tampilan</span>
                    <button type="button" class="btn btn-sm btn-sidebar-theme rounded-3 theme-toggle-btn d-flex align-items-center gap-2">
                        <i class="bi bi-moon-stars theme-icon"></i>
                        <span class="theme-label-text">Mode Malam</span>
                    </button>
                </div>

                <div class="text-uppercase fw-semibold mb-2 px-2 sidebar-sub-text" style="font-size: 0.75rem; letter-spacing: 0.5px;">Menu Utama</div>
                <nav class="nav flex-column mb-4">
                    <a class="sidebar-link smooth-scroll" href="#beranda" data-bs-dismiss="offcanvas"><i class="bi bi-house-door"></i> Beranda</a>
                    <a class="sidebar-link smooth-scroll" href="#profil" data-bs-dismiss="offcanvas"><i class="bi bi-person-vcard"></i> Profil Pemerintahan</a>
                    <a class="sidebar-link smooth-scroll" href="#visimisi" data-bs-dismiss="offcanvas"><i class="bi bi-bullseye"></i> Visi & Misi</a>
                    <a class="sidebar-link smooth-scroll" href="#program" data-bs-dismiss="offcanvas"><i class="bi bi-grid"></i> Program Kerja</a>
                    <a class="sidebar-link smooth-scroll" href="#potensi" data-bs-dismiss="offcanvas"><i class="bi bi-basket"></i> Potensi & UMKM Desa</a>
                    <a class="sidebar-link smooth-scroll" href="#transparansi" data-bs-dismiss="offcanvas"><i class="bi bi-pie-chart"></i> Transparansi APBDes</a>
                    <a class="sidebar-link smooth-scroll" href="#kabar" data-bs-dismiss="offcanvas"><i class="bi bi-newspaper"></i> Kabar & Pengumuman</a>
                    <a class="sidebar-link smooth-scroll" href="#layanan" data-bs-dismiss="offcanvas"><i class="bi bi-file-earmark-text"></i> Layanan & Cetak Surat</a>
                    <a class="sidebar-link smooth-scroll" href="#kontak" data-bs-dismiss="offcanvas"><i class="bi bi-chat-dots"></i> Aspirasi & Lokasi</a>
                </nav>

                <div class="p-3 sidebar-glass-card mb-3">
                    <div class="fw-bold sidebar-title-text small mb-1">Layanan Administrasi</div>
                    <p class="small mb-3 sidebar-sub-text">Ajukan surat keterangan online atau cetak surat yang telah disetujui.</p>
                    <button type="button" class="btn-sidebar-primary w-100 btn-sm py-2 mb-2" data-bs-dismiss="offcanvas" data-bs-toggle="modal" data-bs-target="#modalSurat">Ajukan Surat Baru</button>
                </div>
            </div>

            <div class="pt-3" style="border-top: 1px solid var(--sidebar-border);">
                <div class="small mb-1 sidebar-sub-text"><i class="bi bi-clock me-1"></i> Senin – Jumat: 08.00 – 15.30 WIB</div>
                <div class="small sidebar-sub-text"><i class="bi bi-geo-alt me-1"></i> Balai Desa Beji, Banyumas</div>
            </div>
        </div>
    </div>

    <?php if ($notifikasi_sukses !== "") { ?>
        <div class="position-fixed top-0 start-50 translate-middle-x mt-5 pt-4" style="z-index: 1050; width: 90%; max-width: 600px;">
            <div class="alert alert-success alert-dismissible fade show rounded-3 shadow mb-0" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= $notifikasi_sukses ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php } ?>

    <div id="beranda" class="hero-wrapper">
        <canvas id="cursorParticleCanvas"></canvas>
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5500" data-bs-pause="false">
            <div class="carousel-indicators">
                <?php foreach ($slides as $index => $slide) { ?>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></button>
                <?php } ?>
            </div>

            <div class="carousel-inner">
                <?php foreach ($slides as $index => $slide) { ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="hero-slide">
                            <img src="<?= $slide['gambar'] ?>" alt="<?= $slide['judul'] ?>" class="hero-bg-img" style="object-position: <?= $slide['posisi'] ?>;">
                            <div class="hero-overlay"></div>
                            <div class="container hero-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h1 class="hero-title"><?= $slide['judul'] ?></h1>
                                        <p class="hero-text"><?= $slide['deskripsi'] ?></p>
                                        <div class="d-flex flex-wrap gap-3 hero-btn-wrap">
                                            <a href="#program" class="btn-light-custom text-decoration-none smooth-scroll">Jelajahi Program</a>
                                            <button type="button" class="btn btn-outline-light px-4 py-2 rounded-3 fw-medium" data-bs-toggle="modal" data-bs-target="#modalSurat">Ajukan Surat Online</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>

        <a href="#profil" class="scroll-indicator smooth-scroll">
            <div class="scroll-mouse"><div class="scroll-wheel"></div></div>
            <span>Gulir ke Bawah</span>
        </a>
    </div>

    <div class="stats-bar">
        <div class="container">
            <div class="row g-4 text-center">
                <?php foreach ($statistik_desa as $stat) { ?>
                    <div class="col-6 col-md-3">
                        <div>
                            <span class="stat-number counter" data-target="<?= $stat['angka'] ?>">0</span>
                            <span class="stat-unit"><?= $stat['satuan'] ?></span>
                        </div>
                        <div class="stat-label"><?= $stat['label'] ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <section id="profil" class="section-padding">
        <div class="container">
            <div class="profil-box reveal mb-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-4 text-center">
                        <div class="secret-avatar-box">
                            <svg viewBox="0 0 280 280" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="140" cy="140" r="110" fill="rgba(255,255,255,0.03)" />
                                <circle cx="140" cy="108" r="46" fill="#334155" />
                                <path d="M58 258C58 208 94 176 140 176C186 176 222 208 222 258" fill="#334155" />
                                <text x="140" y="125" text-anchor="middle" fill="#ffffff" font-family="Plus Jakarta Sans, sans-serif" font-size="52" font-weight="800">?</text>
                            </svg>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <span class="profil-badge"><?= $periode ?></span>
                        <h2 class="section-title mb-2"><?= $nama_pemimpin ?></h2>
                        <p class="text-theme-muted fw-medium mb-4"><?= $jabatan ?> – <?= $wilayah ?></p>
                        <p class="card-text fs-5 mb-4">"<?= $sambutan_profil ?>"</p>
                        <a href="#kontak" class="btn-dark-custom text-decoration-none smooth-scroll">Sampaikan Aspirasi</a>
                    </div>
                </div>
            </div>

            <div class="row g-4 reveal">
                <div class="col-12 mb-2">
                    <span class="section-eyebrow">Struktur Organisasi</span>
                    <h4 class="fw-bold text-theme-heading">Perangkat Pemerintahan Desa Beji</h4>
                </div>
                <?php foreach ($perangkat_desa as $staf) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-clean card-staf p-4">
                            <div class="icon-wrapper mb-3" style="width: 46px; height: 46px; font-size: 1.25rem;">
                                <i class="<?= $staf['ikon'] ?>"></i>
                            </div>
                            <h6 class="fw-bold text-theme-heading mb-1"><?= $staf['nama'] ?></h6>
                            <p class="text-theme-muted small mb-0"><?= $staf['jabatan'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="visimisi" class="section-padding pt-0">
        <div class="container">
            <div class="row g-5 reveal">
                <div class="col-lg-5">
                    <span class="section-eyebrow">Arah Kebijakan</span>
                    <h2 class="section-title">Visi & Misi</h2>
                    <p class="section-subtitle">Arah dan tujuan pembangunan <?= $nama_web ?> di bawah pimpinan <?= $nama_pemimpin ?>.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-12">
                            <h4 class="card-title">Visi</h4>
                            <p class="card-text fs-5">"<?= $visi ?>"</p>
                        </div>
                        <div class="col-12 mt-5">
                            <h4 class="card-title mb-4">Misi</h4>
                            <ul class="list-misi">
                                <?php foreach ($daftar_misi as $misi) { ?>
                                    <li><?= $misi ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="program" class="section-padding section-bg-alt">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto mb-5 reveal">
                <span class="section-eyebrow">Fokus Pembangunan</span>
                <h2 class="section-title">Program Kerja</h2>
                <p class="section-subtitle">Inisiatif strategis untuk meningkatkan kualitas hidup warga Desa Beji.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($program_unggulan as $index => $program) { ?>
                    <div class="col-lg-4 col-md-6 reveal" style="transition-delay: <?= $index * 0.12 ?>s;">
                        <div class="card-clean">
                            <div class="icon-wrapper">
                                <i class="<?= $program['ikon'] ?>"></i>
                            </div>
                            <h4 class="card-title"><?= $program['judul'] ?></h4>
                            <p class="card-text"><?= $program['penjelasan'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="potensi" class="section-padding">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto mb-5 reveal">
                <span class="section-eyebrow">Ekonomi Kreatif & Perikanan</span>
                <h2 class="section-title">Potensi & Produk Lokal Desa</h2>
                <p class="section-subtitle">Mengenal keunggulan Kampung Mina, Pasar Ikan, dan produk UMKM unggulan warga Desa Beji.</p>
            </div>
            <div class="row g-4 reveal">
                <?php foreach ($potensi_produk as $produk) { ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-clean d-flex flex-column justify-content-between">
                            <div>
                                <div class="card-thumb-wrap">
                                    <img src="<?= $produk['gambar'] ?>" alt="<?= $produk['nama'] ?>" class="card-thumb-img">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="profil-badge mb-0"><?= $produk['kategori'] ?></span>
                                    <span class="fw-semibold text-theme-heading small"><?= $produk['harga'] ?></span>
                                </div>
                                <h5 class="card-title"><?= $produk['nama'] ?></h5>
                                <p class="text-theme-muted small mb-2">Oleh: <?= $produk['penjual'] ?></p>
                                <p class="card-text mb-4"><?= $produk['deskripsi'] ?></p>
                            </div>
                            <a href="https://wa.me/<?= $produk['wa'] ?>?text=Halo%20<?= urlencode($produk['penjual']) ?>,%20saya%20tertarik%20dengan%20<?= urlencode($produk['nama']) ?>%20dari%20Portal%20Desa%20Beji." target="_blank" class="btn-outline-custom w-100 text-center text-decoration-none">
                                <i class="bi bi-whatsapp me-2 text-success"></i>Hubungi Penjual
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="transparansi" class="section-padding section-bg-alt">
        <div class="container">
            <div class="row align-items-center g-5 reveal">
                <div class="col-lg-5">
                    <span class="section-eyebrow">Tahun Anggaran 2026</span>
                    <h2 class="section-title">Transparansi APBDes</h2>
                    <p class="section-subtitle mb-4">Wujud akuntabilitas pengelolaan anggaran desa untuk pembangunan dan pemberdayaan masyarakat Desa Beji.</p>
                    <div class="card-clean p-4">
                        <div class="text-theme-muted small mb-1">Total Alokasi Dana Desa</div>
                        <h3 class="fw-bold text-theme-heading mb-0"><?= $total_apbdes ?></h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-clean">
                        <h5 class="card-title mb-4">Realisasi Penyerapan Anggaran</h5>
                        <?php foreach ($transparansi_dana as $dana) { ?>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span class="fw-medium text-theme-heading"><?= $dana['bidang'] ?></span>
                                    <span class="text-theme-muted small fw-semibold"><?= $dana['anggaran'] ?> (<?= $dana['persen'] ?>%)</span>
                                </div>
                                <div class="progress progress-custom">
                                    <div class="progress-bar progress-bar-dark" role="progressbar" style="width: <?= $dana['persen'] ?>%;" aria-valuenow="<?= $dana['persen'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kabar" class="section-padding">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto mb-5 reveal">
                <span class="section-eyebrow">Informasi Publik</span>
                <h2 class="section-title">Kabar & Pengumuman Desa</h2>
                <p class="section-subtitle">Informasi terkini seputar kegiatan, pembangunan, dan pengumuman resmi untuk warga.</p>
            </div>
            <div class="row g-4 reveal">
                <?php foreach (array_reverse($kabar_desa) as $berita) { 
                    $gambar_berita = !empty($berita['gambar']) ? $berita['gambar'] : "https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&w=800&q=80";
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-clean d-flex flex-column justify-content-between">
                            <div>
                                <div class="card-thumb-wrap">
                                    <img src="<?= $gambar_berita ?>" alt="<?= $berita['judul'] ?>" class="card-thumb-img">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="profil-badge mb-0"><?= $berita['kategori'] ?></span>
                                    <span class="text-theme-muted small"><?= $berita['tanggal'] ?></span>
                                </div>
                                <h5 class="card-title"><?= $berita['judul'] ?></h5>
                                <p class="card-text mb-4"><?= $berita['ringkasan'] ?></p>
                            </div>
                            <button type="button" class="btn-outline-custom w-100 btn-baca-berita" data-judul="<?= htmlspecialchars($berita['judul']) ?>" data-tanggal="<?= $berita['tanggal'] ?>" data-kategori="<?= $berita['kategori'] ?>" data-isi="<?= htmlspecialchars($berita['isi']) ?>" data-bs-toggle="modal" data-bs-target="#modalBerita">Baca Selengkapnya</button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="layanan" class="section-padding section-bg-alt">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5 reveal">
                <div>
                    <span class="section-eyebrow">Pelayanan Digital</span>
                    <h2 class="section-title">Layanan Administrasi Mandiri</h2>
                    <p class="section-subtitle mb-0">Ajukan permohonan surat keterangan desa secara online dan cetak surat yang sudah selesai.</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <button type="button" class="btn-dark-custom" data-bs-toggle="modal" data-bs-target="#modalSurat">Buat Permohonan Surat</button>
                </div>
            </div>

            <div class="row g-4 mb-5 reveal">
                <?php foreach ($layanan_surat as $surat) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card-clean d-flex flex-column justify-content-between">
                            <div>
                                <span class="profil-badge"><?= $surat['kode'] ?></span>
                                <h5 class="card-title"><?= $surat['nama'] ?></h5>
                                <p class="text-theme-muted small mb-4">Syarat: <?= $surat['syarat'] ?></p>
                            </div>
                            <button type="button" class="btn-outline-custom w-100 btn-pilih-surat" data-surat="<?= $surat['nama'] ?>" data-bs-toggle="modal" data-bs-target="#modalSurat">Ajukan</button>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="card-clean reveal">
                <div class="row align-items-center g-4">
                    <div class="col-lg-5">
                        <h5 class="card-title mb-1">Lacak & Cetak Status Surat</h5>
                        <p class="text-theme-muted small mb-0">Masukkan 16 digit NIK untuk memantau proses atau mencetak surat yang berstatus <strong>Selesai</strong>.</p>
                    </div>
                    <div class="col-lg-7">
                        <form method="POST" action="#layanan" class="d-flex flex-column flex-sm-row gap-2">
                            <input type="text" name="nik_cek" maxlength="16" value="<?= $nik_dicari ?>" class="form-control form-control-clean" placeholder="Masukkan NIK Anda (contoh: 3302xxxxxxxxxxxx)" required>
                            <button type="submit" name="cek_nik" class="btn-dark-custom text-nowrap">Lacak Status</button>
                        </form>
                    </div>
                    <?php if ($hasil_cek_surat !== null) { ?>
                        <div class="col-12 mt-3">
                            <div class="border-top pt-3" style="border-color: var(--border-color) !important;">
                                <?php if (count($hasil_cek_surat) === 0) { ?>
                                    <div class="text-theme-muted small">Belum ditemukan riwayat pengajuan surat untuk NIK <strong><?= $nik_dicari ?></strong>.</div>
                                <?php } else { ?>
                                    <div class="table-responsive">
                                        <table class="table table-borderless table-theme align-middle mb-0 small">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Jenis Surat</th>
                                                    <th>Nama Pemohon</th>
                                                    <th>Status</th>
                                                    <th>Dokumen</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($hasil_cek_surat as $row) { ?>
                                                    <tr>
                                                        <td><?= $row['waktu'] ?></td>
                                                        <td class="fw-semibold text-theme-heading"><?= $row['jenis_surat'] ?></td>
                                                        <td><?= $row['nama'] ?></td>
                                                        <td>
                                                            <?php
                                                            $badge_class = "bg-warning text-dark";
                                                            if ($row['status'] === "Diproses") $badge_class = "bg-info text-dark";
                                                            if ($row['status'] === "Selesai") $badge_class = "bg-success text-white";
                                                            ?>
                                                            <span class="badge <?= $badge_class ?> rounded-pill px-3 py-2"><?= $row['status'] ?></span>
                                                        </td>
                                                        <td>
                                                            <?php if ($row['status'] === "Selesai") { ?>
                                                                <a href="cetak_surat.php?id=<?= $row['id'] ?>" target="_blank" class="btn btn-sm btn-primary rounded-3"><i class="bi bi-printer me-1"></i>Cetak Surat</a>
                                                            <?php } else { ?>
                                                                <span class="text-theme-muted">Menunggu persetujuan</span>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="section-padding">
        <div class="container">
            <div class="row g-5 reveal">
                <div class="col-lg-5">
                    <span class="section-eyebrow">Lokasi & Kontak</span>
                    <h2 class="section-title">Hubungi Kami</h2>
                    <p class="section-subtitle mb-4">Sampaikan saran, laporan, atau pengajuan layanan administrasi secara langsung kepada pemerintah desa.</p>
                    
                    <div class="mb-4">
                        <h6 class="fw-bold text-theme-heading mb-1">Kantor Balai Desa Beji</h6>
                        <p class="text-theme-muted mb-2"><?= $alamat_kantor ?></p>
                        <p class="text-theme-muted small mb-3">Jam Operasional: Senin – Jumat, 08.00 – 15.30 WIB</p>
                        <div class="map-frame mb-4">
                            <iframe src="https://www.google.com/maps?q=Balai+Desa+Beji+Kedungbanteng+Banyumas&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h6 class="fw-bold text-theme-heading mb-3">Nomor Layanan Cepat (WhatsApp)</h6>
                        <div class="d-flex flex-column gap-2">
                            <?php foreach ($kontak_darurat as $darurat) { ?>
                                <div class="emergency-card d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="<?= $darurat['ikon'] ?> fs-5 text-theme-heading"></i>
                                        <div>
                                            <div class="fw-semibold text-theme-heading small"><?= $darurat['layanan'] ?></div>
                                            <div class="text-theme-muted small"><?= $darurat['tampil'] ?></div>
                                        </div>
                                    </div>
                                    <a href="https://wa.me/<?= $darurat['nomor'] ?>" target="_blank" class="btn btn-sm btn-success rounded-3"><i class="bi bi-whatsapp me-1"></i>Chat</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card-clean">
                        <h5 class="card-title mb-4">Formulir Aspirasi & Pengaduan Warga</h5>
                        <form method="POST" action="#beranda">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-medium">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control form-control-clean" placeholder="Masukkan nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium">Nomor Telepon / WA</label>
                                    <input type="text" name="telepon" class="form-control form-control-clean" placeholder="0812xxxxxxxx" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-medium">Pesan atau Aspirasi</label>
                                    <textarea name="pesan" rows="5" class="form-control form-control-clean" placeholder="Tuliskan laporan, keluhan fasilitas, atau saran Anda di sini..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" name="kirim_aspirasi" class="btn-dark-custom">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalSurat" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content modal-content-theme rounded-4 shadow">
                <div class="modal-header border-bottom-0 pb-0 pt-4 px-4">
                    <h5 class="modal-title fw-bold text-theme-heading">Formulir Pengajuan Surat Online</h5>
                    <button type="button" class="btn-close btn-close-adaptive" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="#beranda">
                    <div class="modal-body p-4">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Jenis Surat</label>
                                <select name="jenis_surat" id="selectJenisSurat" class="form-select form-select-clean" required>
                                    <?php foreach ($layanan_surat as $surat) { ?>
                                        <option value="<?= $surat['nama'] ?>"><?= $surat['nama'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">NIK (16 Digit)</label>
                                <input type="text" name="nik" maxlength="16" class="form-control form-control-clean" placeholder="3302xxxxxxxxxxxx" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Nama Lengkap Sesuai KTP</label>
                                <input type="text" name="nama_pemohon" class="form-control form-control-clean" placeholder="Masukkan nama lengkap" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Nomor WhatsApp Aktif</label>
                                <input type="text" name="wa_pemohon" class="form-control form-control-clean" placeholder="0812xxxxxxxx" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control form-control-clean" placeholder="Contoh: Banyumas" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control form-control-clean" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium">Alamat Lengkap (RT/RW)</label>
                                <input type="text" name="alamat_pemohon" class="form-control form-control-clean" placeholder="Contoh: Desa Beji RT 02 / RW 04, Kec. Kedungbanteng" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-medium">Keperluan Pengajuan</label>
                                <input type="text" name="keperluan" class="form-control form-control-clean" placeholder="Contoh: Persyaratan administrasi bank / pendaftaran kerja" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top-0 pt-0 pb-4 px-4">
                        <button type="button" class="btn-outline-custom" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="ajukan_surat" class="btn-dark-custom">Kirim Pengajuan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBerita" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-theme rounded-4 shadow">
                <div class="modal-header border-bottom-0 pb-0 pt-4 px-4">
                    <div>
                        <span class="profil-badge mb-2" id="modalBeritaKategori">Kategori</span>
                        <h5 class="modal-title fw-bold text-theme-heading" id="modalBeritaJudul">Judul Berita</h5>
                        <small class="text-theme-muted" id="modalBeritaTanggal">Tanggal</small>
                    </div>
                    <button type="button" class="btn-close btn-close-adaptive" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <p class="card-text" id="modalBeritaIsi" style="line-height: 1.75;"></p>
                </div>
                <div class="modal-footer border-top-0 pt-0 pb-4 px-4">
                    <button type="button" class="btn-dark-custom" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="floating-actions">
        <a href="https://wa.me/<?= $wa_desa ?>?text=Halo%20Admin%20Desa%20Beji,%20saya%20ingin%20bertanya%20mengenai%20layanan%20desa." target="_blank" class="btn-float-wa" title="Chat WhatsApp Desa">
            <i class="bi bi-whatsapp"></i>
        </a>
        <button id="backToTop" title="Kembali ke atas"><i class="bi bi-arrow-up"></i></button>
    </div>

    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <h5 class="text-theme-heading fw-bold mb-1"><?= $nama_web ?></h5>
                    <p class="mb-0"><?= $jabatan ?>: <?= $nama_pemimpin ?> &bull; <?= $wilayah ?></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">&copy; 2026 Hak Cipta Dilindungi</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const themeToggleBtns = document.querySelectorAll(".theme-toggle-btn");
            const themeIcons = document.querySelectorAll(".theme-icon");
            const themeLabelTexts = document.querySelectorAll(".theme-label-text");

            function updateThemeUI(theme) {
                document.documentElement.setAttribute("data-theme", theme);
                localStorage.setItem("desaBejiTheme", theme);
                themeIcons.forEach(function (icon) {
                    if (theme === "dark") {
                        icon.classList.remove("bi-moon-stars");
                        icon.classList.add("bi-sun-fill");
                    } else {
                        icon.classList.remove("bi-sun-fill");
                        icon.classList.add("bi-moon-stars");
                    }
                });
                themeLabelTexts.forEach(function (lbl) {
                    lbl.innerText = theme === "dark" ? "Mode Terang" : "Mode Malam";
                });
            }

            const currentSavedTheme = localStorage.getItem("desaBejiTheme") || "light";
            updateThemeUI(currentSavedTheme);

            themeToggleBtns.forEach(function (btn) {
                btn.addEventListener("click", function () {
                    const currentTheme = document.documentElement.getAttribute("data-theme");
                    const newTheme = currentTheme === "dark" ? "light" : "dark";
                    updateThemeUI(newTheme);
                });
            });

            const navbar = document.getElementById("mainNavbar");
            const backToTop = document.getElementById("backToTop");
            const sections = document.querySelectorAll("section[id], div[id='beranda']");
            const navLinks = document.querySelectorAll(".navbar-nav .nav-link, .sidebar-link");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 40) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }

                if (window.scrollY > 450) {
                    backToTop.classList.add("show");
                } else {
                    backToTop.classList.remove("show");
                }

                let current = "";
                sections.forEach(function (section) {
                    const sectionTop = section.offsetTop - 140;
                    if (window.pageYOffset >= sectionTop) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach(function (link) {
                    link.classList.remove("active-nav");
                    if (link.getAttribute("href") === "#" + current) {
                        link.classList.add("active-nav");
                    }
                });
            });

            backToTop.addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });

            const revealElements = document.querySelectorAll(".reveal");
            const revealObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            });

            revealElements.forEach(function (el) {
                revealObserver.observe(el);
            });

            const counters = document.querySelectorAll(".counter");
            const counterObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        const target = +entry.target.getAttribute("data-target");
                        const duration = 1600;
                        const stepTime = 20;
                        const steps = duration / stepTime;
                        const increment = target / steps;
                        let current = 0;

                        const timer = setInterval(function () {
                            current += increment;
                            if (current >= target) {
                                entry.target.innerText = target.toLocaleString("id-ID");
                                clearInterval(timer);
                            } else {
                                entry.target.innerText = Math.floor(current).toLocaleString("id-ID");
                            }
                        }, stepTime);

                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.4 });

            counters.forEach(function (counter) {
                counterObserver.observe(counter);
            });

            const btnPilihSurat = document.querySelectorAll(".btn-pilih-surat");
            const selectJenisSurat = document.getElementById("selectJenisSurat");
            btnPilihSurat.forEach(function (btn) {
                btn.addEventListener("click", function () {
                    const namaSurat = this.getAttribute("data-surat");
                    if (selectJenisSurat && namaSurat) {
                        selectJenisSurat.value = namaSurat;
                    }
                });
            });

            const btnBacaBerita = document.querySelectorAll(".btn-baca-berita");
            btnBacaBerita.forEach(function (btn) {
                btn.addEventListener("click", function () {
                    document.getElementById("modalBeritaJudul").innerText = this.getAttribute("data-judul");
                    document.getElementById("modalBeritaTanggal").innerText = this.getAttribute("data-tanggal");
                    document.getElementById("modalBeritaKategori").innerText = this.getAttribute("data-kategori");
                    document.getElementById("modalBeritaIsi").innerText = this.getAttribute("data-isi");
                });
            });

            const smoothLinks = document.querySelectorAll(".smooth-scroll");
            smoothLinks.forEach(function (link) {
                link.addEventListener("click", function (e) {
                    const targetId = this.getAttribute("href");
                    if (targetId.startsWith("#") && targetId.length > 1) {
                        const targetEl = document.querySelector(targetId);
                        if (targetEl) {
                            e.preventDefault();
                            const navHeight = navbar.offsetHeight;
                            const targetPosition = targetEl.getBoundingClientRect().top + window.pageYOffset - navHeight;
                            window.scrollTo({
                                top: targetPosition,
                                behavior: "smooth"
                            });
                        }
                    }
                });
            });

            const heroWrapper = document.getElementById("beranda");
            const canvas = document.getElementById("cursorParticleCanvas");
            const ctx = canvas.getContext("2d");
            let particles = [];
            let mouse = { x: null, y: null };

            function resizeCanvas() {
                canvas.width = heroWrapper.offsetWidth;
                canvas.height = heroWrapper.offsetHeight;
            }
            resizeCanvas();
            window.addEventListener("resize", resizeCanvas);

            heroWrapper.addEventListener("mousemove", function (e) {
                const rect = heroWrapper.getBoundingClientRect();
                mouse.x = e.clientX - rect.left;
                mouse.y = e.clientY - rect.top;

                for (let i = 0; i < 3; i++) {
                    particles.push({
                        x: mouse.x,
                        y: mouse.y,
                        vx: (Math.random() - 0.5) * 2.5,
                        vy: (Math.random() - 0.5) * 2.5,
                        size: Math.random() * 3 + 1.5,
                        color: "#ffffff",
                        alpha: 1
                    });
                }
            });

            heroWrapper.addEventListener("mouseleave", function () {
                mouse.x = null;
                mouse.y = null;
            });

            function animateParticles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                for (let i = 0; i < particles.length; i++) {
                    const p = particles[i];
                    p.x += p.vx;
                    p.y += p.vy;
                    p.alpha -= 0.018;

                    if (p.alpha <= 0) {
                        particles.splice(i, 1);
                        i--;
                        continue;
                    }

                    ctx.save();
                    ctx.globalAlpha = p.alpha;
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                    ctx.fillStyle = p.color;
                    ctx.fill();

                    for (let j = i + 1; j < particles.length; j++) {
                        const p2 = particles[j];
                        const dx = p.x - p2.x;
                        const dy = p.y - p2.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);

                        if (dist < 95) {
                            ctx.beginPath();
                            ctx.strokeStyle = p.color;
                            ctx.globalAlpha = p.alpha * (1 - dist / 95) * 0.7;
                            ctx.lineWidth = 1.1;
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(p2.x, p2.y);
                            ctx.stroke();
                        }
                    }

                    if (mouse.x !== null && mouse.y !== null) {
                        const mdx = p.x - mouse.x;
                        const mdist = Math.sqrt(mdx * mdx + (p.y - mouse.y) * (p.y - mouse.y));
                        if (mdist < 120) {
                            ctx.beginPath();
                            ctx.strokeStyle = p.color;
                            ctx.globalAlpha = p.alpha * 0.5;
                            ctx.lineWidth = 0.9;
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(mouse.x, mouse.y);
                            ctx.stroke();
                        }
                    }
                    ctx.restore();
                }

                requestAnimationFrame(animateParticles);
            }
            animateParticles();
        });
    </script>
</body>
</html>