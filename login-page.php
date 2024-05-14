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

    <!-- External CSS -->
    <link rel="stylesheet" href="Assets/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <form action="" class="text-start login-form">
                    <div class="mb-3">
                        <label class="form-label login-text">Username</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background-color: transparent; padding-left: 15px; border-right: none" id="basic-addon1"><i class="fa-solid fa-user" style="color: #595c5f"></i></span>
                            <input type="text" class="form-control" style="border-left: none; padding-left: 0px" placeholder="Masukkan nama pengguna anda" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div style="margin-bottom: 68px">
                        <label class="form-label login-text">Password</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background-color: transparent; padding-left: 15px; border-right: none" id="basic-addon2"><i class="fa-solid fa-lock" style="color: #595c5f"></i></span>
                            <input type="password" class="form-control" style="border-left: none; padding-left: 0px" placeholder="Masukkan kata sandi anda" aria-label="Password" aria-describedby="basic-addon2">
                        </div>
                    </div>

                    <button type="submit" class="btn login-btn">MASUK</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>