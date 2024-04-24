<!DOCTYPE html>
<html>
    <head>
        <title> Connexion DB</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'Yohan';
            $password = 'jesuisla';
            
            try {
                $bdd = new PDO("mysql:host=$servername;dbname=todo;", $username, $password);
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch(PDOException $e){
                    echo "Erreur : " . $e->getMessage();
                }

                $task = $_POST['todo'];
                $reponse = $bdd->query("INSERT INTO todo_list VALUES ('$task')");
                $date= $reponse->fetchAll(PDO::FETCH_ASSOC);
                echo '<h3>'. "Sauvegarde terminé !". '</h3>';
                    
                ?>
    </body>
</html>