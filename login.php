
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>
<body><section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="assets/draw2.svg"
                     class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form method="POST" action="login-submit.php">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" required />
                        <label class="form-label" for="form1Example13">Email address</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" required />
                        <label class="form-label" for="form1Example23">Password</label>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                        <a href="#!">Forgot password?</a>
                        <a href="sign-up.php"> Don't have an account? </a>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>

                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
                        <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                    </a>
                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
                        <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>

logout bacha hai bae