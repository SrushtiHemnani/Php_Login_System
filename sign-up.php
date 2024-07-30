<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
          integrity="sha384-He3RckdFB2wffiHOcESa3sf4Ida+ni/fw9SSzAcfY2EPnU1zkK/sLUzw2C5Tyuhj" crossorigin="anonymous">

    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
    <title>Sign-Up</title>
</head>
<body>
<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="assets/img4.webp"
                                 alt="Sample photo" class="img-fluid"
                                 style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                                <form method="POST" action="sign-up-submit.php">
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1m" name="first_name" class="form-control form-control-lg" required />
                                                <label class="form-label" for="form3Example1m">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1n" name="last_name" class="form-control form-control-lg" required />
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1m1" name="mother_name" class="form-control form-control-lg" required />
                                                <label class="form-label" for="form3Example1m1">Mother's name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" id="form3Example1n1" name="father_name" class="form-control form-control-lg" required />
                                                <label class="form-label" for="form3Example1n1">Father's name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example8" name="address" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form3Example8">Address</label>
                                    </div>

                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                        <h6 class="mb-0 me-4">Gender: </h6>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" required />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" required />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" required />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <select name="state" class="form-select" required>
                                                <option value="" disabled selected>State</option>
                                                <option value="Option 1">Maharashtra</option>
                                                <option value="Option 2">Uttar Pradesh</option>
                                                <option value="Option 3">Punjab</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <select name="city" class="form-select" required>
                                                <option value="" disabled selected>City</option>
                                                <option value="Option 1">Nagpur</option>
                                                <option value="Option 2">Amritsar</option>
                                                <option value="Option 3">Delhi</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="date" id="form3Example9" name="dob" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form3Example9">DOB</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example90" name="pincode" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form3Example90">Pincode</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example99" name="course" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form3Example99">Course</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form3Example97" name="email" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form3Example97" name="password" class="form-control form-control-lg" required />
                                        <label class="form-label" for="form3Example97">Password</label>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
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