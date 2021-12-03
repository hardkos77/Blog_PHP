<div id="global">
  <article>
      <?php
          echo '<header>';
          echo '<img src="img/'.$selectedRecette['photo'].'" alt="Tartiflette"/>';
          echo '<h1 class="title">'.$selectedRecette['titre'].'</h1>';
          echo '<time class="date">'.$selectedRecette['dateCreation'].'</time>';
          echo '</header>';
          echo '<p class="description">'.$selectedRecette['description'].'</p>';
      ?>
  </article>
    <hr />
    <header>
        <h2 id="titreIngredient">Ingrédients</h2>
        <?php
        echo '<ul>';
        foreach ($ingredients as $ingredient){
            echo '<li>'.$ingredient['quantite'].' '.$ingredient['unit'].' '.$ingredient['nom'].'</li>';
        }
        echo '</ul>';
        ?>
    </header>
    <h2 id="titreCommentaire">Commentaires</h2>

    <?php
        foreach ($commentaires as $commentaire){
            echo '<div class="divCommentaires">';
            echo '<p>' .$commentaire['auteur'] . '</p>';
            echo '<p> '.$commentaire['contenu'] . '</p>';
            echo '<p>Note : '. $commentaire['note'] . '/5</p>';
            echo '<p> '.$commentaire['dateCreation'] . '</p>';
            echo '<hr>';
            echo '</div>';
        }
    ?>

    <form method="POST" action="index.php?controller=recette&action=commenter&id=<?php echo $_GET['id'] ?>" >
        <input id="auteur" name="auteur" type="text" placeholder="Votre Nom"/> </br>
        <textarea id="txtCommentaire" name="contenu" rows="4" placeholder="Votre commentaire"></textarea></br>
        <label for="note">Note</label><br />
        <select name="note" id="note">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br />
        <input type="submit" value="Commenter" />
    </form>
</div>
