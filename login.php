<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 - Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        :root {
            --main-bg: grey;
        }

        .main-bg {
            background: var(--main-bg) !important;
        }

        input:focus,
        button:focus {
            border: 1px solid var(--main-bg) !important;
            box-shadow: none !important;
        }

        .form-check-input:checked {
            background-color: var(--main-bg) !important;
            border-color: var(--main-bg) !important;
        }

        .card,
        .btn,
        input {
            border-radius: 0 !important;
        }
    </style>
</head>

<body class="main-bg">
    <!-- Login Form -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom">
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['error']; ?>
                            </div>
                        <?php }; session_destroy();?>
                        <h2 class="p-3">Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="mb-4">
                                <label for="username" class="form-label">Username/Email</label>
                                <input type="email" class="form-control" id="username" name="email" />
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn text-light main-bg" name="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>