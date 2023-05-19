<?php
$bdd = new PDO('mysql:host=localhost;dbname=Jour09',"root", "");
$requete = $bdd->prepare('SELECT COUNT(*) FROM etudiants');
$requete->execute();
$etudiants = $requete->fetchall();
?>
<table>
    <thead>
        <tr>
            <th>Nombre d'étudiants</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($etudiants as $etudiant){?>
        <tr>
            <td> <?php echo $etudiant[];}?> </td>
        </tr>
    </tbody>
</table>