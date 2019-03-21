<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- STYLESHEETS -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="styles/request.css">

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- TITLE AND FAVICON -->
        <link rel="icon" href="assets/genlynk-logo.png" sizes="any">
        <title>GenLynk</title>
    </head>
    <style>
        a:hover {
            color: white;
        }
    </style>

    <body>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="assets/genlynk-logo.png" alt="Genlynk" width="80px">
            <h3>Request a Product</h3>
            <p class="text-center">I would like to have more information on GenLynk ""</p>
            <div class="form-sections">
                <form class="pt-2 pb-5" action="index.html" method="post">
                    <div class="form-group">
                        <label for="inp" class="inp">
                                  <input type="text" required="required" id="inp" placeholder="&nbsp;">
                                  <span class="label">Name</span>
                                  <span class="border"></span>
                                </label>
                    </div>
                    <div class="form-group">
                        <label for="inp" class="inp">
                                  <input type="email" required="required" id="inp" placeholder="&nbsp;">
                                  <span class="label">Email</span>
                                  <span class="border"></span>
                                </label>
                    </div>
                    <div class="form-group">
                        <label for="inp" class="inp">
                                  <input type="text" required="required" id="inp" placeholder="&nbsp;">
                                  <span class="label">Company Name</span>
                                  <span class="border"></span>
                                </label>
                    </div>
                    <div class="form-group">
                        <label for="inp" class="inp">
                                  <input type="text" required="required" id="inp" placeholder="&nbsp;">
                                  <span class="label">Phone Number</span>
                                  <span class="border"></span>
                                </label>
                    </div>
                    <div class="form-group">
                        <label for="inp" class="inp">
                                  <input type="text" required="required" id="inp" placeholder="&nbsp;">
                                  <span class="label">Address</span>
                                  <span class="border"></span>
                                </label>
                    </div>
                    <div class="form-group">
                        <label for="inp" class="inp">
                                  <input type="text" required="required" id="inp" placeholder="&nbsp;">
                                  <span class="label">City</span>
                                  <span class="border"></span>
                                </label>
                    </div>
                    <button type="submit" name="button" class="btn">Done</button>
                    <a href="our-products.php" class="btn btn-alt">Back</a>
                </form>
            </div>
        </div>
        <div class="footer">
            <p>
                <a href="index.php">&copy; GenLynk
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>
                </a>
            </p>
        </div>
    </body>

</html>
