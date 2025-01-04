<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database = "identitas_diri";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data pengguna
$userQuery = "SELECT id, nama, jenis_kelamin, alamat, deskripsi, foto FROM users LIMIT 1";
$userData = $conn->query($userQuery);
$user = $userData->fetch_assoc();

// Query untuk mengambil data pendidikan
$eduQuery = "SELECT * FROM riwayat_pendidikan ORDER BY tahun ASC";
$eduData = $conn->query($eduQuery);

// Query untuk mengambil data project
$projectQuery = "SELECT * FROM project";
$projectData = $conn->query($projectQuery);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Muhammad Irfan Fauzi Rahman</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
        
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">2203010049 | Muhammad Irfan Fauzi Rahman | TI-B</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home"><b>HOME</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="#education"><b>EDUCATION</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="#project"><b>PROJECT</b></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><b>CONTACT</b></a></li>
                    <li class="nav-item">
                        <button class="btn hire-btn"><b>Hire me</b></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Hero Text -->
                <div class="col-md-6 hero-content">
                    <h1><span>I'm</span><br><?php echo $user['nama']; ?></h1>
                    <p class="my-3">
                        <?php echo $user['deskripsi']; ?>
                    </p>
                    <a href="#" class="btn btn-custom">Download CV</a>
                </div>
                
                <!-- Hero Image -->
                <div class="col-md-6 text-center hero-image">
                    <img src="Editor/assets/images/<?php echo $user['foto']; ?>" alt="Foto Profil" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Ganti bagian Education Section dengan kode berikut -->
<section id="education" class="section">
    <div class="container">
        <h2 class="section-title mb-4">Riwayat Pendidikan</h2>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Pendidikan</th>
                        <th>Tahun</th>
                        <th>Nama Sekolah / Kampus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    while ($education = $eduData->fetch_assoc()): 
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $education['pendidikan']; ?></td>
                        <td><?php echo $education['tahun']; ?></td>
                        <td><?php echo $education['sekolah_kampus']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
    <!-- Project Section -->
    <section id="project" class="section">
        <div class="container">
            <h2 class="section-title">Project</h2>
            <div class="row">
                <?php while ($project = $projectData->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card bg-dark text-white">
                        <img src="Editor/assets/images/<?php echo $project['foto']; ?>" class="card-img-top" alt="Project Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $project['project']; ?></h5>
                            <p class="card-text"><?php echo $project['keterangan']; ?></p>
                            <a href="<?php echo $project['link_project']; ?>" class="btn btn-custom" target="_blank">
                                Lihat Project
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
            <h2>Kontak Saya</h2>
            <div class="contact-info">
                <p>G-Mail : 2203010049@unper.ac.id</p>
                <p>No. Telepon : 082320186564 </p>
                <br>
                <p><h3>Alamat Saya : </h3></p>
                <p>Dusun Sukajaya No.28 RT 02 / RW 04, Cihaurbeuti</p>
                <p>Kabupaten Ciamis, Jawa Barat, Indonesia</p>
            </div>
            <p style="text-align: center;"><b>Other site links :</b></p>
                <br>
                <div class="linkss" >
                    <a href="https://wa.me/082320186564" 
                    target="_blank" class="linkSS"> 
                    <img class="linksimage" src="./logoimage/wa.png"></a>
                    <a href="https://www.instagram.com/mr.i.everyday?igsh=MWh0N3AzeT" 
                    target="_blank" class="linkSS">  
                    <img class="linksimage" src="./logoimage/ig.png"></a>
                    <a href="https://www.tiktok.com/@mr.xeveryday?_t=8rKl2c2SevZ&_r=1" 
                    target="_blank" class="linkSS"> 
                    <img class="linksimage" src="./logoimage/tiktok.png"></a>
                </div>
                <br>
                <br>
            <p style="text-align: center;">Copyright by - @2203010049</p>
        </section>

    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>