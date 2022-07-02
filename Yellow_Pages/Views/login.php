<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../assests/css/all_css_files.php'; ?>

    <title>Login</title>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Login</h3>
                            <form method=POST action="../Models/login.php">
                                <div class="d-flex align-items-center mb-4">
                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <input type="email" name=email id="email" class="form-control" placeholder="Enter Your Email" required />
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required />
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                <hr class="my-4">
                                <div><a href="../index.php">You don't have an account? Create one!</a></div> <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>