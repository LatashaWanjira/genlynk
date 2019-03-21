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

        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="styles/sign-up.css">

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- TITLE AND FAVICON -->
        <link rel="icon" href="assets/genlynk-logo.png" sizes="any">
        <title>GenLynk</title>
    </head>
    <style>
        a:hover{color:white;}
    </style>
    <body>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center pb-3">Genlynk</h1>
            <div class="form-sections">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up" aria-selected="true">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
                        <form class="py-5" action="index.html" method="post">
                            <div class="form-group">
                                <label for="inp" class="inp">
                                  <input type="text" id="inp" placeholder="&nbsp;">
                                  <span class="label">Name</span>
                                  <span class="border"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="inp" class="inp">
                                  <input type="text" id="inp" placeholder="&nbsp;">
                                  <span class="label">Email</span>
                                  <span class="border"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="inp" class="inp">
                                  <input type="password" id="inp" placeholder="&nbsp;">
                                  <span class="label">Password</span>
                                  <span class="border"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="inp" class="inp">
                                  <input type="password" id="inp" placeholder="&nbsp;">
                                  <span class="label">Confirm Password</span>
                                  <span class="border"></span>
                                </label>
                            </div>
                            <button type="submit" name="button" class="btn">Sign Up</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form class="py-5" action="index.html" method="post">
                            <div class="form-group">
                                <label for="inp" class="inp">
                                  <input type="text" id="inp" placeholder="&nbsp;">
                                  <span class="label">Name</span>
                                  <span class="border"></span>
                              </label>
                            </div>
                            <div class="form-group">
                                <label for="inp" class="inp">
                                <input type="password" id="inp" placeholder="&nbsp;">
                                <span class="label">Password</span>
                                <span class="border"></span>
                              </label>
                            </div>
                            <button type="submit" name="button" class="btn">Login</button>
                        </form>
                    </div>
                </div>
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
