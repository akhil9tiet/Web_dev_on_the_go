<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UMD Incentive Awards</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <!-- Temporary navbar container fix -->
  <style>
  /*...................................................................*/
  body{background-color: #eeeeee;}
  .mid{
    background-color: #265286;
    color: #fff;
  }
  .textbox{
    background-color: #265286;
    color: #fff;
    padding: 50px;
  }
  .textbox h2{
    font-size: 80px;
  }
  .textbox p{
    padding-left: 30%;
    padding-right:30%;
    font-size: 25px;
  }
  footer{
    background-color: #dcddde;
  }
  .crumbs{
    width: 1900px;
    background-color: #eee;
    color: #000;
  }
  #copyright{
    background-color: #fff;
    color: #000;
  }
  /*...................................................................*/
  .navbar-toggler {
    z-index: 1;
  }

  @media (max-width: 576px) {
    nav > .container {
      width: 100%;
    }
  }
  /* Temporary fix for img-fluid sizing within the carousel */

  .carousel-item.active,
  .carousel-item-next,
  .carousel-item-prev {
    display: block;
  }
  </style>

  <!---Akhil-->
  <!-- <script src="jquery.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>
  $(function(){
    $("#header").load("./assets/includes/header.html");
  });
  </script>
  <script>
  $(function(){
    $("#footer").load("./assets/includes/footer.html");
  });
  </script>
  <!--.............-->
</head>

<?php include('contact_process.php'); ?>
<body>
  <div class="container">
    <div class="row"><!--UMD header-->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <script src="//s3.amazonaws.com/umdheader.umd.edu/app/js/main.min.js"></script>
        <script> umdHeader.init({ news: false }); </script>
      </div>
      <div class="col-md-12">
        <div id="header"></div>
      </div>
    </div>
  </div><!--/UMD header-->

  <header>
    <div class="row" style="padding:0px;">
      <div class="col-md-12">
        <img src="./assets/images/iaplounge0162014_2519.jpg" width="100%">
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row" style="margin-top:-30px;">
      <div class="col-md-8" style="background-color:#fff;">
        <div class="col-md-12">
        <br/>
        <h1>CONTACT</h1>
        <br/>
        <h3>For more information about the Incentive Awards Program and to join our mailing list, please take a moment to complete the following:</h3>
        <br>
        <form name="sentMessage" id="contactForm" method="post" action="<?= $_SERVER['PHP_SELF'];?>" role="form">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" required data-validation-required-message="Please enter your name." placeholder="Enter Name">
                    <p class="help-block"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email" placeholder=" Enter Email" name="email" value="<?= $email ?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Phone:</label>
                    <input type="tel" class="form-control" id="phone"required data-validation-required-message="Please enter your phone number." placeholder="XXX-XXX-XXXX" name="phone" value="<?= $phone ?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Work Phone:</label>
                    <input type="tel" class="form-control" id="phone" placeholder=" Enter Phone" name="work_phone" value="<?= $work_phone ?>">
                  </div>
                </div>
              </div>
            </div>
            <br/>
            <hr>
            <br/>
            <div class="row">
              <div class="col-md-6">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Home Address:</label>
                    <input type="text" class="form-control" id="homeaddress" placeholder=" Enter Address" name="address" value="<?= $address ?>">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>City:</label>
                    <input type="text" class="form-control" id="city" placeholder=" Enter City" name="city" value="<?= $city ?>">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>State:</label>
                    <input type="text" class="form-control" id="state" placeholder=" Enter State"  name="state" value="<?= $state ?>">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Zipcode:</label>
                    <input type="text" class="form-control" id="zipcode" placeholder=" Enter Zipcode" name="zipcode" value="<?= $zipcode ?>">
                    <p class="help-block"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Message:</label>
                    <textarea rows="14" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder=" Enter Message" name="message" value="<?= $message ?>"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Send Message</button>
            <div class="success" style="text-color:#f7b600; font-size:14px;"><?= $success ?></div>
          </div>
          <br/>
        </form>
      </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-3" style="background-color:#fff;">
        <div class="col-md-12">
          <br>
          <h4>Staff</h4>
        <div class="d-flex flex-column">
          <div class="p-2 row">
            <div class="col-md-4">
              <img class="img-circle" width="70" height="70" src="./assets/images/jackie.jpg">
            </div>
            <div class="col-md-8">
              <ul style="list-style:none; font-size:12px;">
                <li>Jacqueline W. Lee</li>
                <li>Director</li>
                <li>301.405.9024</li>
                <li><a href="mailto:jwl@umd.edu">jwl@umd.edu</a></li>
              </ul>
            </div>
          </div>
          <div class="p-2">
            <div class="p-2 row">
              <div class="col-md-4">
                <img class="img-circle" width="70" height="70" src="./assets/images/derrick.jpg">
              </div>
              <div class="col-md-8">
                <ul style="list-style:none; font-size:12px;">
                  <li>Derrick L. Gunter</li>
                  <li>Associate Director</li>
                  <li>301.314.6580</li>
                  <li><a href="mailto:dgunter@umd.edu">dgunter@umd.edu</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="p-2">
            <div class="p-2 row">
              <div class="col-md-4">
                <img class="img-circle" width="70" height="70" src="./assets/images/shelvia.jpg">
              </div>
              <div class="col-md-8">
                <ul style="list-style:none; font-size:12px;">
                  <li>Shelvia English</li>
                  <li>Coordinator of Student Services</li>
                  <li>301.405.3059</li>
                  <li><a href="mailto:senglish1@umd.edu">senglish1@umd.edu</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="p-2">
            <div class="p-2 row">
              <div class="col-md-12" style="text-align:left;">
                <ul style="list-style:none; font-size:12px; ">
                  <li>University of Maryland</li>
                  <li>Incentive Awards Program</li>
                  <li>301.405.9024</li>
                  <li>301.314.4630</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>

  <br><br>
  <!--Footer-->
  <div class="col-md-12" style="padding:0px;">
    <div id="footer"></div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/tether/tether.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!--  -->
<script>
$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#contact-form').validator();


    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    // data = JSON object that contact.php returns

                    // we recieve the type of the message: success x danger and apply it to the
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    // let's compose Bootstrap alert box HTML
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                    // If we have messageAlert and messageText
                    if (messageAlert && messageText) {
                        // inject the alert to .messages div in our form
                        $('#contact-form').find('.messages').html(alertBox);
                        // empty the form
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});
</script>
<!--  -->

</body>
</html>
