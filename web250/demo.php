<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Charles Jones' WEB250 Home Page">
  <meta name="keywords" content="WEB250, Charles Jones, CPCC, Web Development">
  <meta name="author" content="Charles L. Jones">
  <link href="styles/default.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>Charles Jones' Cool Jaguar | Home</title>
  <script src="https://lint.page/kit/880bd5.js" crossorigin="anonymous"></script>
</head>

<body>
  <div data-include="components/header.html" data-replace="%courseTitle%:| WEB250 |, %pageTitle%: Home"></div>

  <main>
    <h2>PHP Demo</h2>

    <p>Welcome to my PHP demo page for WEB250!</p>

    <p>My name is <?php echo "Charles Jones" ?> and the current date is <?php echo date('l, F jS, Y'); ?>.</p>

    <?php
      $sOutputString = "<hr>";

      for($iCounter = 1; $iCounter <= 1000; $iCounter++)
      {
        $sOutputString .= $iCounter . ") Charles got PHP running on my computer!! ";
      }

       echo ("<h5>" . $sOutputString . "</h5><hr>");
      ?>
  </main>

  <div data-include="components/footer.html"></div>

  <script src="scripts/include.min.js"></script>
</body>

</html>