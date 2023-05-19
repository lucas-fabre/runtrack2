<?php
$bdd = new PDO('mysql:host=localhost;dbname=Jour09',"root", "");
$requete = $bdd->prepare('SELECT * FROM etudiants WHERE sexe = "Femme"');
$requete->execute();
$etudiants = $requete->fetchall();
?>
<table>
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($etudiants as $etudiant){?>
        <tr>
            <td> <?php echo $etudiant['prenom'];?> </td>
            <td> <?php echo $etudiant['nom'];?> </td>
            <td> <?php echo $etudiant['naissance'];}?> </td>
        </tr>
    </tbody>
</table>