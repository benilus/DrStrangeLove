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
      <h1>Resultatsiden for jobber som er evaluert.</h1>
      <section class="result">
        <h2>Ingeniør på Mongstad Base <button type="button" onclick="showHide('job1Info')">Vis mer info</button></h2>
        <span id="job1Info">
          <p>Mer informasjon om denne jobben</p>
          <p>Denne jobben har i gjennomsnitt 550000kr i lønn.</p>
          <p>Denne jobben har fått 5,2 i gjennomsnittskarakter.</p>
        </span>
      </section>
      <section class="result">
        <h2>Baker ved Baker brun <button type="button" onclick="showHide('job2Info')">Vis mer info</button></h2>
        <span id="job2Info">
          <p>Mer informasjon om denne jobben</pid>
          <p>Denne jobben har i gjennomsnitt 350000kr i lønn.</p>
          <p>Denne jobben har fått 4,8 i gjennomsnittskarakter.</p>
        </span>
      </section>
      <section class="result">
        <h2>Maler på kunstmuseum <button type="button" onclick="showHide('job3Info')">Vis mer info</button></h2>
        <span id="job3Info">
          <p>Mer informasjon om denne jobben</p>
          <p>Denne jobben har i gjennomsnitt 200000kr i lønn.</p>
          <p>Denne jobben har fått 4,3 i gjennomsnittskarakter.</p>
        </span>
      </section>
    </main>
    <footer>
      <p>Siden er laget av Kristian Os.
      <a href="mailto:kos003@student.uib.no?subject=feedback"> Send en mail her for å gi feedback.</a></p>
    </footer>
  </body>
</html>
