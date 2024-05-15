<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toolventory</title>

    <!-- Custome Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .login-branding {
            padding-top: 5%;
            padding-left: 2.5%;
            height: 95vh;
        }

        .form-session {
            margin-top: auto;
            margin-bottom: auto;
            padding-right: 13vh;
        }

        .login-welcome {
            font-family: "Inter", sans-serif;
            font-style: normal;
            font-weight: 900;
            font-size: 40px;
            line-height: 48px;

            color: #0077B6;
        }

        .login-text {
            font-family: "Urbanist", sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 140%;

            color: #4F4F4F;
        }

        .login-form {
            padding: 0 19%
        }

        .form-control::placeholder {
            color: #7d7d7d;
        }

        .form-control, .input-group-text {
            border-width: 3px;
            border-color: #7d7d7d;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #7d7d7d;
        }

        .wrapper {
            width: 100%;
            height: 140px;
        }

        .login-failed p {
            color: red;
        }

        .login-btn {
            height: 60px;
            width: 100%;

            background-color: #0077B6;

            font-family: "Urbanist", sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 20px;

            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-5">
                <img class="login-branding" src="Assets/img/login-branding.png" alt="">
            </div>

            <div class="col text-center form-session">
                <p class="login-welcome">Selamat Datang di Toolventory</p>
                <p class="login-text" style="margin-bottom: 100px">Senang melihat anda kembali, silahkan masuk di sini</p>
                <form class="text-start login-form" action="Exe-file/login-exe.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label login-text" for="username">Username</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background-color: transparent; padding-left: 15px; border-right: none" id="basic-addon1"><i class="fa-solid fa-user" style="color: #7d7d7d"></i></span>
                            <input type="text" id="username" name="username" class="form-control pt-3 pb-3" style="border-left: none; padding-left: 0px" placeholder="Masukkan nama pengguna anda" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>

                    <div class="wrapper mb-4">
                        <label class="form-label login-text" for="password">Password</label>
                        <div class="input-group">
                            <span class="input-group-text pt-3 pb-3 mb-2" style="background-color: transparent; padding-left: 15px; border-right: none" id="basic-addon2"><i class="fa-solid fa-lock" style="color: #7d7d7d"></i></span>
                            <input type="password" id="password" name="password" class="form-control pt-3 pb-3 mb-2" style="border-left: none; padding-left: 0px;" placeholder="Masukkan kata sandi anda" aria-label="Password" aria-describedby="basic-addon2" required>
                        </div>

                        <?php 
                            if(isset($_SESSION['error'])):
                        ?>
                            <div class="login-failed">
                                <p>Username atau Password Salah!</p>
                                
                            </div>                        
                        <?php 
                            unset($_SESSION['error']);
                            endif; 
                        ?>
                    </div>

                    <button type="submit" class="btn btn-primary login-btn">MASUK</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>