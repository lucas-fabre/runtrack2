<?php
$bdd = new PDO('mysql:host=localhost;dbname=Jour09',"root", "");
$requete = $bdd->prepare('SELECT * FROM salles');
$requete->execute();
$etudiants = $requete->fetchall();
?>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Capacité</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($etudiants as $etudiant){?>
        <tr>
            <td> <?php echo $etudiant['nom'];?> </td>
            <td> <?php echo $etudiant['capacite'];}?> </td>
        </tr>
    </tbody>
</table>