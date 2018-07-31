<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3/6</title>
  </head>
  <body>
    <!-- exo03-6/?startDate=2/05/2016&endDate=27/11/2016 -->
      <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
          echo $_GET['startDate'] . ' ' . $_GET['endDate'];
      }
      ?>
  </body>
</html>
