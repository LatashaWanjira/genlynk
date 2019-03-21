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
        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/install.css">

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!-- TITLE AND FAVICON -->
        <link rel="icon" href="assets/genlynk-logo.png" sizes="any">
        <title>GenLynk</title>
    </head>

    <body>
      <!-- navbar -->
      <?php include('navbar.php');?>
      <!-- navbar -->
        <div class="landing-screen text-center px-5">
            <h1>FAQs</h1>
            <h3>Common Questions our customers ask.</h3>
        </div>
        <div class="faq py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="question my-4">
                            <h4>Q. Will GenLynk work on my generator?</h4>
                            <p>Yes, GenLynk can be used on any brand of generator.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. Does GenLynk stay connected 24/7 or does it just scan every so often?</h4>
                            <p>It stays connected 24/7.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. I have my generator serviced quarterly, why would I need GenLynk?</h4>
                            <p>Having a maintenance schedule does not prevent the generator from malfunctioning. It also does not inform you incase of fuel theft. Genlynk enables you to be empowered and proactive. It insures maximum reliability for you, your company and your customers.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. How will I know if there is an alarm or fault with my generator?</h4>
                            <p>You will be notified immediately either by email or text messaging. It delivers info to specific designated recipients via email, text message, and/or web display, which can include your service company.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. Can I monitor the fuel level?</h4>
                            <p>Yes.</p>
                        </div>
                        <div class="question my-4">
                          <h4>Q. Can I bill my tenants for actual fuel consumed?</h4>
                          <p>Yes. See <a href="our-products.php">products</a> page for more details.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="question my-4">
                            <h4>Q. Can I remote start/stop on all makes of generators?</h4>
                            <p>Yes.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. We have sites in multiple states. Can I observe all of them from one web page?</h4>
                            <p>Yes.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. We have sites in multiple states. Can I observe all of them from one web page?</h4>
                            <p>Yes.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. Is there GPS on the monitor?</h4>
                            <p>GPS is standard on Genlynk.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. I have more than one generator at the site. Can I monitor workfor multiple generators?</h4>
                            <p>Yes.</p>
                        </div>
                        <div class="question my-4">
                            <h4>Q. Will this operate internationally?</h4>
                            <p>Yes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact+footer -->
        <?php include('contact-footer.php');?>
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
