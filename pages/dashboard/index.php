<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="assets/images/logo1.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Increased height for the overlay */
        .overlay {
            background: rgba(0, 0, 0, 0.5) url('assets/images/background-login.png') no-repeat center center / cover;
            color: black;
            padding: 50px;
            text-align: center;
            min-height: 300px;
            margin: 50px;

        }

        blockquote {
            font-style: italic;
            color: black;
            margin: 0 auto;
            display: inline-block;
            max-width: 600px;
            padding: 20px;
        }

        blockquote footer {
            text-align: right;
            display: block;
            margin-top: 10px;
            color: black;
        }

        .icon-container {
            display: flex;
            justify-content: space-around;
            margin-top: 100px;
            padding-top: 50px;
            background-color: #fff;
            padding-bottom: 20px;
        }

        .icon-container {
            display: flex;
            justify-content: space-around;
            margin-top: -50px;
            background-color: #fff;
            padding-bottom: 20px;
        }

        .icon-card {
            background: #fff;
            padding: 15px;
            width: 250px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            margin: 0 10px;
        }

        .icon-card img {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <!-- Section : Main content -->
    <section class="Header">
        <div class="overlay">
            <blockquote>
                "Selamat datang di Poliklinik ADN! Tempat perawatan kesehatan yang mengutamakan kepuasan dan kenyamanan
                Anda. Kami berkomitmen untuk memberikan pelayanan medis terbaik dengan tenaga ahli profesional.
                Kesehatan Anda adalah prioritas kami. Terima kasih telah mempercayai Poliklinik ADN sebagai partner
                kesehatan Anda."
                <footer>
                    — Poliklinik Adn.
                </footer>
            </blockquote>
        </div>

        <div class="icon-container">
            <br><br><br>
            <div class="icon-card">
                <img src="assets/images/icon1.png" alt="Empowering children and families">
                <h3>Kualitas Pelayanan Terbaik.</h3>
                <p>Kami berkomitmen membuat kualitas pelayanan yang baik.</p>
            </div>
            <div class="icon-card">
                <img src="assets/images/icon2.png" alt="Creating a sanctuary">
                <h3>Dokter Professional.</h3>
                <p>Kami akan memberikan dokter professional yang ahli dibidangnya.</p>
            </div>
            <div class="icon-card">
                <img src="assets/images/icon3.png" alt="Championing our community">
                <h3>Kebersihan dan Kenyamanan.</h3>
                <p>Kami berkomitmen menjaga kebersihan dan kenyamanan rumah sakit.</p>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>