
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_POST['nom'])){
                $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            }
            
            include_once './Personne.php';
            
            $instancePersonne = new Personne($post['nom'], $post['prenom'], 
                $post['age'], $post['region']);
            
            echo '<pre>';
            var_dump($instancePersonne);
            echo '</pre>';
        ?>
        <form action="#" method="POST">
            <label for="nom"> Nom : </label>
            <input id="nom" type="text" name="nom">
            <label for="prenom"> Prenom : </label>
            <input id="prenom" type="text" name="prenom">
            <label for="age"> Age : </label>
            <input id="age" type="text" name="age">
            <label for="region"> Region : </label>
            <input id="region" type="text" name="region">
            <input type="submit" value="entrez">
        </form>
    </body>
</html>