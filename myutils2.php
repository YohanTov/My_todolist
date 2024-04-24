<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> My Utils 2</title>
</head>


<body>
	<div class="container">
		<h2> My To-Do List </h2>
		    <p> 
               <input id="new-task" type="text" placeholder="Tâches a faire">
               <button> Ajouter </button> 
            </p>

		<h3> A faire </h3>
		     <ul id="incomplete-tasks">
                
			    <li><input type="checkbox"><label> Faire les courses </label> <input type="text">
                <button class="delete"> Supprimer </button>
                </li>
			    <li><input type="checkbox"><label> Appeler mamie </label> <input type="text">
                <button class="delete"> Supprimer</button>
                </li>
		     </ul>


		<h3> Tâches finies </h3>
		<ul id="completed-tasks">
			<li><input type="checkbox" checked><label>Prendre rdv chez le docteur</label>
            <input type="text">
            <button class="delete">Supprimer</button></li>
		</ul>

        
        

	</div>
    
<script src="utils.js"> </script>

</body>
</html>