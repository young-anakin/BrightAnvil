<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Framework bootcamp</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(68, 67, 67);
        }

        .row {
            background-color: rgb(58, 136, 120);
            border-radius: 30px;
        }

        img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background: rgb(17, 112, 112);
            border: 1px solid;
            color: black;
        }
    </style>
</head>

<body>


    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BRIGHT ANVIL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </div>
    </nav>
    <section class="Form my-4 mx-5">
        <div class="container">

            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="images\signup.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">

                    <h1 style="color:antiquewhite;">BRIGHT ANVIL</h1>
                    <h3 style="color:antiquewhite;">Sign up</h3>

                    <form>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="name" placeholder="First Name" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="name" placeholder="Last Name" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email Adrress" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="*********" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Confirm Password" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="button" class="btn1 mt-3 mb-5">Register</button>
                            </div>
                        </div>
                        
                        <p style="color:antiquewhite;">You already have an account <a href="#">Login here</a></p>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>