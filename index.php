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
        <link rel="stylesheet" href="styles/index.css">

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
        <div class="landing-screen">
            <h1>GenLynk</h1>
            <h3>Linking you to your investment</h3>
            <div>
                <a href="/partner-with-us.php"><button type="button" name="button" class=btn>Partner With Us</button></a>
            </div>
        </div>
        <div class="about-us py-5">
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-md-7">
                        <h2>Generator Intelligence</h2>
                        <hr>
                        <p>GenLynk helps you improve generator performance and cut operation costs. Monitoring generator condition online can prevent faults that are costly to repair and result in a loss of service or higher fuel consumptions. We help you implement solutions for online monitoring of generators. You can then use information to avoid sudden and costly failures, reduce fuel theft, while optimizing maintenance schedules and extending the life of your generators.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/g1.jpg" alt="Generator Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="features py-5">
            <div class="container">
                <h2>Features</h2>
                <hr>
                <div class="row  justify-content-center my-5">
                    <div class="col-md-6 mb-5">
                        <h3>Generator On/Off Status</h3>
                        <p>
                            Immediately know when your generators are switched on.
                            When fuel is filled in them or when the battery needs charging.
                            Real time information on your smartphone from your smart generators.
                        </p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3>Maintenance Reminders</h3>
                        <p>
                            You might forget when you're generators need maintenance but EnergyLogicIQ will not.
                            It will remember maintenance schedules based on run hours or periodic maintenance due and alert you in time.
                            It will also alert you when it detects condition that may need immediate attention so that downtime can be avoided.
                            Immediately know when your generators are switched on.
                            When fuel is filled in them or when the battery needs charging.
                            Real time information on your smartphone from your smart generators.
                        </p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3>Fuel Level and Volume Monitoring</h3>
                        <p>
                            If your generator is supplied fuel from an external tank we can also monitor its fuel.
                            Alert when fuel level is low or when we detect refill or loss of fuel.
                        </p>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3>Powerful Analysis Tools</h3>
                        <p>
                            If your generator panel has a controller panel that has a modbus port
                            EnergyLogicIQ can connect to it to acquire more information for greater insights and savings.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us py-5">
<<<<<<< HEAD
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-md-5 d-md-block d-none">
                        <img src="assets/g7.jpg" alt="Generator Image">
                    </div>
                    <div class="col-md-7">
                        <h2>About Us</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quibusdam numquam, saepe sapiente dolore nobis dignissimos deserunt libero eligendi officiis at quo accusantium et cupiditate distinctio fugit tenetur esse voluptate,
                            nulla iusto autem similique illum. Aliquid, cupiditate neque, autem voluptas et saepe debitis quisquam maxime distinctio quis obcaecati, fugiat numquam?</p>
                    </div>
                    <div class="col-md-5 d-md-none d-block">
                        <img src="assets/g3.jpg" alt="Generator Image">
                    </div>
                </div>
            </div>
=======
          <div class="container">
              <h2>Benefits</h2>
              <hr>
              <div class="row justify-content-center my-5 text-center">
                  <div class="col-md-4">
                      <h3>Improve Generator Performance</h3>
                      <p>Monitor key generator performance metrics and if performance falls, you can take timely actions to bring performance back to acceptable level.</p>
                  </div>
                  <div class="col-md-4">
                      <h3>Reduce Maintenance Costs</h3>
                      <p>
                          Get information like hours run, battery voltages and temperature trends. You can use this information to schedule maintenance, reduce sudden downtime, reduce overall maintenance cost and fuel consumption.
                      </p>
                  </div>
                  <div class="col-md-4">
                      <h3>Prevent Fuel Theft</h3>
                      <p>
                           Easily identify fuel theft by comparing fuel consumption with actual power generation and fuel receipts.
                      </p>
                  </div>
              </div>
          </div>
>>>>>>> b4ff75b78a8aa4a94a197a064b3b21f833d863ad
        </div>
        <div class="features-2 py-5">
            <div class="container">
                <h2>Features</h2>
                <hr>
                <div class="row  justify-content-center my-5">
                    <div class="col-md-4">
                        <h3>Accountability</h3>
                        <p>
                            GenLynk measure fuel consumed, filled or lost in your generator.
                            It automatically reconciles fuel filled and operating efficiencies.
                            When it detects any anomalies it will alert you.
                            And it can do this without intervention across hundreds of sites.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3>Scalability</h3>
                        <p>
                            If your generator is supplied fuel from an external tank we can also monitor its fuel.
                            Alert when fuel level is low or when we detect refill or loss of fuel.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3>Tenant Billing</h3>
                        <p>
                            Our tenant billing module allows you to manage and bill your tenants equitably for the usage of your generator.
                        </p>
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
