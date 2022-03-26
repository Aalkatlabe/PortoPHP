<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title><?= getTitle() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/css/about.css" />

</head>

<body>

  <!-- <div class="section">
    <h1>About My Page</h1>
    <p>Just an experimental site to learn the language Html/Css/Bootstrap</p>
  </div> -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="lead"></p>
      
    </div>
  </div>
  <?php include "defaults/navbar.php" ?>
  <section class="mb-4">

<h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<!--Hier statrt php code-->

<!--Hier end php code-->
<div class="row contact">

    <div class="col-md-9 mb-md-0 mb-5">

        <form action="contact.php" method="POST" autocomplete="off">

            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="email" name="email" class="form-control" placeholder="Your e-mail">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea name="message" placeholder="Message" cols="30" rows="2" class="form-control md-textarea"></textarea>
                    </div>
                </div>
            </div>

            <div class="text-center text-md-left">
                <input class="form-control button btn-primary" type="submit" name="send" value="Send">
            </div>

        </form>

    </div>
    <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i><br>
                    <br> <p>Tinwerf 16, 2544ED Den Haag, NL</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i><br>
                    <br><p>contact@Alkatlabe.com</p>
                    </li>
                </ul>
            </div>

</div>

</section>
  <?php include "defaults/footer.php" ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="/js/contact.js"></script>

  <body>
    <html>