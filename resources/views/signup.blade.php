<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    <title>Sign up</title>
</head>
<body>
    <style>
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }
      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-8">
                <h3 class="text-center text-dark fw-bold">Fance</h3>
                <form class="bg-light border border-secondary rounded-2 p-4">
                    <!-- Username input -->
                    <div class="mb-3">
                        <label class="form-label text-dark fs-6 fw-bold">Your name</label>
                        <input type="email" class="form-control" placeholder="First and last name"/>
                    </div>

                    <!-- Email input -->
                    <div class="mb-3">
                        <label class="form-label text-dark fs-6 fw-bold">Email address</label>
                        <input type="email" class="form-control" placeholder="Your email" />
                    </div>

                    <!-- Password input -->
                    <div class="mb-3">
                        <label class="form-label text-dark fs-6 fw-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Your password" />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                    <div class="text-center">
                        <p>Already have an account? <a href="/signin">Sign in here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>
</html>