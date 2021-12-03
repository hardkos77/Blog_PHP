<div>
    <?php
    //On repete sur les recettes
    foreach ($recette as $element){

        echo '<div class="billet">';
        echo '<a href="index.php?controller=recette&action=recette&id='. $element['id'] .'">';
        echo '<header>';
        echo '<img src="img/'.$element['photo'].'" alt="Tartiflette"/>';
        echo '<h1 class="title">'.$element['titre'].'</h1>';
        echo '<time class="date">'.$element['dateCreation'].'</time>';
        echo '<p class="description">'.$element['description'].'</p>';
        echo '</header>';
        echo '<p>La tartiflette savoyarde est un gratin de pommes de terre avec du Reblochon fondu dessus</p>';
        echo '</a>';
        echo '<div>';

    }
    ?>
</div>
