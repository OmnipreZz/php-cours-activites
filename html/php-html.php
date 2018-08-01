<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php foreach ($students as $value) {
         echo "<li>".$value."</li>";
       } ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->

       <label for="day">Day</label>
       <select  name="day"><?php for ($i = 1; $i < 31; $i++) {echo "<option>".$i."</option>";} ?></select>
       <label for="month">Month</label>
       <select  name="month"><?php for ($i = 1; $i < 12; $i++) {echo "<option>".$i."</option>";} ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php for ($i = 1950; $i <= 2018; $i++) {echo "<option>".$i."</option>";} ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
      <?php
      if (isset($_GET['sex'])) {
        if ($_GET['sex'] = "fille") {
        echo "<p>Je suis une fille</p>";
        }
      }
      ?>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
      <?php
      if (isset($_GET['sex'])) {
        if ($_GET['sex'] = "garçon") {
        echo "<p>Je suis un garçon</p>";
        }
      }
      ?>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
      <?php
      if (isset($_GET['sex'])) {
        if ($_GET['sex'] != "fille" && $_GET['sex'] != "garçon") {
        echo "<p>Je suis indéfini</p>";
        }
      }
      ?>
  </body>
</html>
