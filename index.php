<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8">
    <title>minArbeidsgiver.no</title>
    <link rel="stylesheet" href="css/master">
    <script type="text/javascript" src="scripts/main.js"></script>
  </head>
  <body>
    <header>
      <img src="images/banner.png" alt="Bilde av sidebanner." />
      <nav>
        <a href="index.php">Hjem</a>
        <a href="registration.php">Registrering</a>
        <a href="evaluation.php">Evaluering</a>
        <a href="result.php">Resultat</a>
      </nav>
    </header>

    <main>
      <section class="index">
      <?php $title="Dette er hovedsiden for Minarbeidsgiver.no"; ?>
      <title><?php echo $title; ?></title>
        <h1><?php echo $title; ?></h1>
      </section>

      <section class="index">
        <?php $title2="Her kan du registrere, evaluere og se resultatene av jobber som finnest i denne databasen"; ?>
      <title><?php echo $title2; ?></title>
        <h2><?php echo $title2; ?></h2>
      </section>

      <section class="index">
        <?php $title3="Her kan du søke på jobber som er registrert."; ?>
      <title><?php echo $title3; ?></title>
        <h2><?php echo $title3; ?></h2>
        <form action="resultat.php" method="post">
          <input type="text" name="search" placeholder="Søk på jobber">
          <input type="submit" name="name" value="Søk">
        </form>
      </section>
      <section class="index">
        <button type="button" name="newJobButton" onclick="openFastRegPage('addNewJob.php')">Registrer en ny jobb</button>
      </section>
    </main>
   
    <footer id="footer">
       <?php
    $founders = array("Benjamin Franklin", "Kai Kaiesen", "Jakob Creutzfeldt","Amin Zharif");
    $arrlength = count ($founders);

      for($x=0; $x <  $arrlength; $x
        echo $founders[$x];
        echo ", ";
      }++) { 
      ?>
      <p><a href="mailto:bso050@student.uib.no?subject=feedback"> Send en mail her for å gi feedback.</a>
      <a a href="#" onclick="changeText()">Solution 1-->Click here for english information.</a></p>
    </footer>
  </body>
</html>
