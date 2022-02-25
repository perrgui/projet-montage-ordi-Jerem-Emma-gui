<?php

include_once '../includes/header.php';

?>
<table>
    <thead>
        <tr>
            <th>Numero</th>
            <th>Nom</th>
            <th>Quantité</th>
            <th>Date d'ajout</th>
            <th>Nombre de modèles crées</th>
            <th>Portable</th>
            <th>Modifier </th>
        </tr>    
        
    </thead>
    <tbody>
        <?php
        /** @var array $modeles */
        foreach ($modeles as $key => $modele) {
        ?>
            <tr>
                <td><?= $key; ?></td>
                <td><?= $modele['nom']; ?></td>
                <td><?= $modele['quantité']; ?></td>
                <td><?= $modele['date ajout']; ?></td>
                <td><?= $modele['nb']; ?></td>
                <td><?= $modele['est portable']; ?></td>
                <?php if ($login == $concepteur) {?>
                    <td>
                        <a href="" class="btn-btn">Modifier</a>
                    </td>
                <?php }?>
            </tr>    
             
        <?php
        } 
        ?>
    </tbody>
    
</table>

 <?php if ($login == $concepteur) {?> 
    <a href="" class="btn-primary"></a>
<?php }

include_once '../includes/footer.php';
?> 
