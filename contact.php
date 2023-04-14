<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <title>CVM</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta property="og:title" content="">
      <meta property="og:type" content="">
      <meta property="og:url" content="">
      <meta property="og:image" content="">

      <link rel="manifest" href="site.webmanifest">
      <link rel="apple-touch-icon" href="icon.png">
      <!-- Place favicon.ico in the root directory -->

      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">

      <meta name="theme-color" content="#fafafa">
  </head>
  <body>
      <header>
        <div class="logo"><img src="logo.png" alt="CVM-Logo"></div>
        <div class="corners">
          <nav>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>

      </header>


      <!-- Add your site or application content here -->

      <script src="js/vendor/modernizr-3.11.2.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>

      <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
      <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
      </script>
      <script src="https://www.google-analytics.com/analytics.js" async></script>

    <div class="register">
      <h2>Registrieren Sie sich</h2>
      <form action="register.php" method="POST">
        <label>Benutzername:</label>
        <input type="text" name="username"><br><br>
        <label>E-Mail:</label>
        <input type="email" name="email"><br><br>
        <label>Nummer:</label>
        <input type="tel" name="number"><br><br>
        <label>Passwort:</label>
        <input type="password" name="password"><br><br>
        <label>Bundesland:</label>
        <select name="land" id="land">
          <option value="sbg">Salzburg</option>
          <option value="ooe">Oberösterreich</option>
          <option value="noe">Niederösterreich</option>
          <option value="wien">Wien</option>
          <option value="stmk">Steiermark</option>
          <option value="kaet">Kärnten</option>
          <option value="vrlb">Vorarlberg</option>
          <option value="tirl">Tirol</option>
          <option value="brgl">Burgenland</option>
        </select><br><br>
        <label>Haben Sie unsere AGB's gegessen?</label>
        <input type="checkbox" id="AGB" name="AGB"><br><br>
        <label>Bitte um ein schönes Bild :) :</label><br><br>
        <input type="file" name="datei"><br><br>
        <div><input type="submit" value="Registrieren"></div><br><br>
      </form>
    </div>

    <?php if(isset($_SESSION['loggedin'])){
      ?>
       <div>Logout</div>
      <?php
    }
    ?>
  </body>
</html>
