<?php
$message_sent = false;
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tlf = $_POST['phone'];
        $message = $_POST['message'];
    
        $mailTo = "info@boxmors.dk";
        $headers = "Fra: ".$email;
        $txt = "NAVN: " .$name."\n"."TLF: ".$tlf."\n"."MAIL: ".$email."\n\n"."BESKED:"."\n".$message;
    
        mail($mailTo, "Ny besked fra kontaktformularen", $txt, $headers);
        $message_sent = true;
    }
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <title>BOX MORS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<?php
    if($message_sent):
?>

<p> </p>

<script>
    swal({
        title: "Beskeden er sendt!",
        text: "Vi vender tilbage til dig hurtigst muligt!",
        icon: "success",
        button: "Okay",
    }).then((value) => {
        window.location.href = "http://boxmors.dk";
    });
</script>


<?php 
    else:
    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.html">
        <img src="images/NavbarLogoSmall.png" width="242" height="73" class="d-inline-block align-top" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container-fluid justify-content-end">
        <div class="navigation">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar nav">
                    <li class="nav-item">
                        <a class="p-2 text-dark" href="index.html#INFOMATIONER">INFOMATIONER</a>
                    </li>
                    <li class="nav-item">
                        <a class="p-2 text-dark" href="index.html#priser">PRISER</a>
                    </li>
                    <li class="nav-item">
                        <a class="p-2 text-dark" href="Kontakt.php">KONTAKT</a>
                    </li>
                </ul>
                <div class="social-part">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</nav>

<body class="Container d-flex justify-content-center">
    <div class="col-11">
        <div class="container">
            <div class="row" style="margin-top: 300px;">
                <div class="col-lg-12" style="text-align: center;">
                    <h2>Kontakt os for reservation af depotrum</h2>
                    <p class="lead">Har du spørgsmål, eller ønsker en fremvisning er du velkommen til at kontakte os</p>
                </div>
            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-lg-12">
                    <h2>Udfyld kontaktformularen</h2>
                    <form id="contact-form" method="post" action="Kontakt.php" role="form">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_name">Navn *</label>
                                        <input id="form_name" type="text" name="name" class="form-control"
                                            placeholder="Indtast venligst dit navn her *" required="required"
                                            data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">E-mail *</label>
                                        <input id="form_email" type="email" name="email" class="form-control"
                                            placeholder="Indtast venligst din E-mail her *" required="required"
                                            data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telefonnummer*</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control"
                                            placeholder="Indtast venligst dit telefonnummer">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Besked *</label>
                                        <textarea id="form_message" name="message" class="form-control"
                                            placeholder="Indtast venligst din besked her *" rows="4" required="required"
                                            data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="submit" class="btn btn-success btn-send"
                                        value="Send besked">
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /.8 -->
            </div> <!-- /.row-->

            <div class="row" style="text-align: center; margin-top: 50px;">
                <div class="col-lg-6">
                    <h2>Kontakt os på:</h2>
                    <h4>TLF: +45 28 25 77 22</h4>
                    <h4>EMAIL: Info@boxmors.dk</h4>
                </div>
                <div class="col-lg-6">
                    <h2>Find os her!</h2>
                    <h4>Islandsvej 4 & Rolstrupbakken 1</h4>
                    <h4>Nykøbing Mors 7900</h4>
                </div>
            </div>

        </div> <!-- /.container-->
</body>
<div class="row" style="margin-top: 7px;">
      <div class="col-12">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1d1MWmrr4e8K92iCGfdes6Va1yC2eOR9T" width="100%" height="450"></iframe>    
      </div>
    </div>
<div
    style="background-color: rgb(61, 61, 61); text-decoration:none; color:white; text-align: center; padding-top: 25px;">
    <div class="row col-12 justify-content-center">
        <div class="col-12 col-lg-2">
            <p>&copy;2019- <strong><br><a href="http://Boxmors.dk" style="color: white; ">BOXMORS.DK</a></strong>
            </p>
        </div>
        <div class="col-12 col-lg-2">
            <div>ADRESSE- <strong><br>Islandsvej 4, 7900</strong></div>
        </div>
        <div class="col-12 col-lg-2">
            <div>TELEFON- <strong><br>+45 28 25 77 22</strong></div>
        </div>
        <div class="col-12 col-lg-2">
            <div>E-MAIL- <strong><br><a href="mailto:info@boxmors.dk" style="color: white;">Info@boxmors.dk</a></strong>
            </div>
        </div>
        <div class="col-12 col-lg-2">
          <div>CVR- <strong><br><a style="color: white;">41105771</a></strong></div>
        </div>
        <div class="col-12 col-lg-2">
            <div>WEBDESIGN- <strong><br><a href="http://www.Javel.dk" style="color: white;">JAVEL.DK</a></strong>
            </div>
        </div>
    </div>
</div>
<?php
endif;
?>

</html>