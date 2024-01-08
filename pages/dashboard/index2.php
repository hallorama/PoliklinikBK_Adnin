<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli,$query_poli);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        $nama_poli = $row['nama_poli'];
    } else {
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" type="image/png" href="assets/images/logo1.png">
    <title>Dokter Dashboard</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f4f7fc;
        }

        .card-custom {
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
        }

        .card-custom:hover {
            transform: translateY(-7px);
        }

        .bg-primary {
            background: linear-gradient(130deg, #6c5ce7, #74b9ff);
        }

        .bg-info {
            background: linear-gradient(130deg, #0984e3, #00cec9);
        }

        .bg-warning {
            background: linear-gradient(130deg, #f0932b, #ffbe76);
        }

        .bg-danger {
            background: linear-gradient(130deg, #eb4d4b, #ff7979);
        }

        .bg-success {
            background: linear-gradient(130deg, #6ab04c, #badc58);
        }

        .bg-secondary {
            background: linear-gradient(130deg, #636e72, #b2bec3);
        }

        .info-box-text,
        .info-box-number {
            font-weight: 600;
        }

        .text-white {
            font-weight: 500;
        }

        h1.text-white {
            font-size: 2.2rem;
            font-family: 'Arial', sans-serif;
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        h5.text-white {
            font-size: 1.3rem;
            font-family: 'Arial', sans-serif;
        }

        .info-box-text {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .info-box-number {
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="content-header py-5 bg-primary text-white text-center">
        <div class="container-fluid">
            <h1>Selamat Datang <b>Dokter!</b></h1>
            <h4>Saat Ini Anda Sedang Berada Di Poliklinik Adn.</h4>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-check-square fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Jumlah Pasien saat ini :</span>
                                    <span class="info-box-number text-white">150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-calendar-check fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Status Kerja saat ini :</span>
                                    <span class="info-box-number text-white active">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-check-square fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Pasien Telah Diperiksa :</span>
                                    <span class="info-box-number text-white">50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-calendar-check fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Pasien Hari ini :</span>
                                    <span class="info-box-number text-white">20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- Custom Content Here -->
            <div class="row">
                <!-- Jadwal Harian Dokter -->
                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-warning">
                        <div class="card-body">
                            <h5 class="text-white">Jadwal Harian</h5>
                            <ul class="list-unstyled">
                                <li class="text-white">09:00 - Pasien: Rama</li>
                                <li class="text-white">13:00 - Pasien: Dhani</li>
                                <!-- Lainnya... -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-danger">
                        <div class="card-body">
                            <h5 class="text-white">Notifikasi Penting</h5>
                            <p class="text-white">Pasien Dengan Kasus Kritis: Ani (Ruangan 305)</p>
                            <!-- Lainnya... -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-success">
                        <div class="card-body">
                            <h5 class="text-white">Statistik Mingguan</h5>
                            <p class="text-white">Pasien Diperiksa Minggu Lalu: 75</p>
                            <!-- Grafik atau detail lainnya... -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card card-custom bg-secondary">
                        <div class="card-body">
                            <h5 class="text-white">Pesan dan Konsultasi</h5>
                            <p class="text-white">Anda memiliki 5 pesan baru.</p>
                            <!-- Tautan atau formulir untuk konsultasi... -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>