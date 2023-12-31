<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="image/png" href="asset/images/logo_dinus.png">
    <!-- Tambahan CSS -->
    <style>
        body {
            padding-top: 100px;
            background-color: #f8f9fa;
            background-image: url('asset/images/background-login.png'); /* A background image for a pleasant look */
            background-size: 120%;
            background-position: center;
        }
        .login-box {
            margin: 5% auto;
            width: 400px;
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
        .card {
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4 logo-image">
                        <img src="asset/images/logo.png" alt="Logo" style="width : 150px;"> <!-- Logo or any image -->
                    </div>
                    <form id="loginForm">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="nama" id="nama" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="No Handphone" name="no_hp" id="no_hp" required>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" onclick="loginUser()">Login</button>
                        </div>
                    </form>

                    <p class="text-center mt-3 mb-0">Belum punya akun? <a href="register.php">Registrasi di sini</a></p>
                </div>
            </div>
        </div>
    </div>
    

    <script>
        function loginUser() {
            var nama = document.getElementById('nama').value;
            var no_hp = document.getElementById('no_hp').value;

            // Kirim data ke PHP untuk proses login
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_login.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                        // Handle login berhasil
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Berhasil!',
                            text: response.welcome_message,
                            timer: 3000,
                            showConfirmButton: false
                        }).then(function () {
                            window.location.href = response.redirect_url;
                        });
                    } else {
                        // Handle login gagal
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            text: response.message
                        });
                    }
                }
            };
            var params = 'nama=' + nama + '&no_hp=' + no_hp;
            xhr.send(params);
        }
    </script>
</body>
</html>
