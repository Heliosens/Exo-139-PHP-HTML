
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students, enrobez les dans un div, un span ou un p -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
            // TODO votre code ici
        foreach ($students as $item){
            echo "<div>$item</div>";
       }
       ?>
     </ul>

    <!-- Incluez le fichier index2.php ici bas de manière a obtenir la suite du code HTML. -->
    <hr>
    <h1>Date du jour</h1>

    <form>

        <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
        <label for="day">Day</label>
        <select  id="day">
            <?php
            // TODO list of day
                for($i = 1 ; $i < 32 ; $i++){
                    echo "<option>".$i."</option>";
                }
            ?>
        </select>

        <label for="month">Month</label>
        <select  id="month">
            <?php
            // TODO list of month
                for($i = 1 ; $i < 13 ; $i++){
                    echo "<option>".$i."</option>";
                }
            ?>
        </select>

        <label for="year">Year</label>
        <select  id="year">
            <?php
            // TODO list of year 2018, 2019, 2020 --> Bonus : faites le avec une vraie date en PHP, renseignez vous sur la doc
                for($i = 5 ; $i > 0 ; $i--){
                    echo "<option>".(2023-$i)."</option>";
                }
            ?>
        </select>
    </form>
  </body>
</html>