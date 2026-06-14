<?php
include "header.php";
?>

<table>
    <thead>
        <tr>
            <th>Power rangers</th>
            <th>Nb.d'épisodes</th>
            <th>saisons</th>
            <th>phrase iconic</th>
        </tr>
    </thead>

    <tbody>
       <?php 
        foreach($rangers as $ranger):
                    
          if (isset($_GET["Power rangers"]) && $ranger["Power rangers"]===$_GET["Power rangers"]) :
                   
        ?>

        <tr>
            <td> <img src="<?= $ranger["image"] ?>" alt=""> <?= $ranger["Power rangers"]  ?></td>
            <td><a href=""><?= $ranger["Nb.d'épisodes"] ?></a></td>
            <td><?= $ranger["saisons"] ?></td>
            <td><?= $ranger["citations"] ?></td>
        </tr>
     
        <?php endif; 
        if($_GET == []):
            
        ?>
        
        <tr>
            <td><img src="<?= $ranger["image"] ?>" width="125px" alt=""> <?= $ranger["Power rangers"]  ?></td>
            <td><?= $ranger["Nb.d'épisodes"] ?></td>
            <td><?= $ranger["saisons"] ?></td>
            <td><?= $ranger["citations"] ?></td>
        </tr>
        
        <?php endif; endforeach
        ?>
    </tbody>
</table>