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
        <div class="landing-screen text-center py-5">
            <h1>Installation</h1>
            <h3>How our generators are installed.</h3>
        </div>
        <div class="py-5">
            <div class="container">
              <img src="assets/image2.png" alt="Our Process" width="60%" class="mb-5 center">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Fuel Sensor
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Fuel level sensor is used to sense the level of fuel contained in the generator fuel tank. We provide capacitive level sensors for tanks up 1 meter in depth and ultrasonic level transmitter for tanks depth greater than 1 meter.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Battery
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    12/24VDC battery or battery bank is used to start the generators. Battery voltage monitoring helps you identify if battery needs charging or replacement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Geneartor ON/OFF Status
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    This provides generator ON and OFF status. The ON/OFF status is detected by PFC (potential free contact), relay switch and power adapter on electrical panel. A time counter monitors the on and off status and provides the run hours of the generator up to the accuracy of 1 second.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Energy Meter
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Class 1 accurate energy meter provides electrical parameters. These parameters along with fuel consumed is used to calculate generator efficiency. Parameters being monitored from Energy Meter are: <strong>active power, reactive power, frequency, power factor, average current and voltages and total units generated.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Flow Totalizer
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Flow sensors will be installed on the main line and return line which utilizes the principle of positive displacement for monitoring the fuel consumption. The flow sensors are connected to a flow totalizer which calculates instantaneous flow, cumulative flow and total time, etc. The flow meter should be used if you want to monitor generator fuel consumption more accurately.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-5">
                        <div class="card">
                            <div class="card-header">
                                Generator Controller
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    If your generator had a controller, that we support, it can also be integrated with the system.
                                    We support the following generator controllers: DEIF, ComAP
                                </p>
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
