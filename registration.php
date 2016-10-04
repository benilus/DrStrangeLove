<!DOCTYPE html>
<html lang="nb">
  <head>
    <meta charset="utf-8">
    <title>minArbeidsgiver.no</title>
    <link rel="stylesheet" href="css/master.css">
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
      <h1>Form for registrering av nye jobber</h1>
      <section class="registration">
        <h2>Skriv inn informasjonen under:</h2>
        <form action="evaluation.php" method="post">
          <input type="text" name="workplace" autofocus required placeholder="Navn på arbeidssted">
          <input type="text" name="employeer" required placeholder="Navn på arbeidsgiver">
          <input type="number" name="salary" step="5000" min="0" required placeholder="Gjennomsnittlønn">
          <textarea name="textArea" rows="8" cols="40" required placeholder="Mer informasjon."></textarea>
          <input name="registrationButton" type="reset" value="Tilbakestill">
          <input name="registrationButton" class="register" type="submit" value="Sende Inn">
        </form>
      </section>
    </main>
    <footer>
      <p>Siden er laget av Kristian Os.
      <a href="mailto:kos003@student.uib.no?subject=feedback"> Send en mail her for å gi feedback.</a></p>
    </footer>
  </body>
</html>
