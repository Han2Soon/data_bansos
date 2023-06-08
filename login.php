<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">

    <style>
            body {
        background-size:100% 100%;
        background-image: url('jokowi.jpeg');
        background-attachment:fixed;
      }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .form-container {
            width: 400%;
            max-width: 900px;
            background-color: #fff;
            border: 5px solid rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-left: -140px; /* Menambahkan margin kiri */
        }

        .form-container .form-icon {
            text-align: center;
            margin-bottom: 2px;
        }

        .form-container .title {
            text-align: center;
            margin-bottom: 2px;
        }

        .form-container .form-group {
            margin-bottom: 50px;
        }

        .form-container .input-icon {
            display: inline-block;
            width: 50px;
            text-align: center;
            position: absolute;
            pointer-events: none;
            color: #aaa;
            font-size: 16px;
            margin-left: 50px;
        }

        .form-container .form-control {
            padding-left: 2px;
        }

        .form-container .btn.signin {
            width: 100%;
        }

        .form-container .forgot-pass {
            text-align: center;
            display: block;
            margin-top: 1px;
        }
    </style>
</head>

<body>
<form class="form-signin" action="cek_login.php" method="POST">
    <div class="form-bg">
                    <div class="form-container">
                        <form class="form-horizontal">
                            <h3 class="title">Login</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="usernama" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <button class="btn btn-primary signin">Login</button>
                            <span class="forgot-pass"><a href="#">Forgot Username/Password?</a></span>
                        </form>
                        <div class="form-icon">
                            <i class="fa fa-user-circle"></i>
                            <span class="signup"><a href="">Belum Punya Akun? <a href="daftar.php"> Daftar Sekarang</a></span>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
