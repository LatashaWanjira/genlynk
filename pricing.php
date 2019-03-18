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
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/pricing.css">

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- TITLE AND FAVICON -->
        <link rel="icon" href="assets/genlynk-logo.jpg" sizes="any">
        <title>GenLynk</title>
    </head>

    <body>
        <!-- navbar -->
        <?php include('navbar.php');?>
        <!-- navbar -->
        <div class="landing-screen">
            <h1>Pricing</h1>
            <h3>Outline of our packages</h3>
        </div>
        <div class="faq py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h5 class="card-title">$12</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <a href="#" class="btn mt-4">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h5 class="card-title">$11</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <a href="#" class="btn mt-4">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h5 class="card-title">$10</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <a href="#" class="btn mt-4">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h5 class="card-title">$9</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Cras justo odio</li>
                                    <li class="list-group-item">Dapibus ac facilisis in</li>
                                    <li class="list-group-item">Vestibulum at eros</li>
                                </ul>
                                <a href="#" class="btn mt-4">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact+footer -->
        <?php include('contact-footer.php')?>
        <!-- contact+footer -->
        <script type="text/javascript">
            $(document).ready(function() {
                $(function() {
                    $(document).scroll(function() {
                        var $nav = $(".navbar");
                        $nav.toggleClass('scrolled', $(this).scrollTop() > 70);
                    })
                })
            });
        </script>
    </body>

</html>
