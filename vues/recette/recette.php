<div id="global">
  <article>
          <header>
          <img src="img/<?=$selectedRecette['photo']?>" alt="Tartiflette"/>
          <h1 class="title"><?=$selectedRecette['titre']?></h1>
          <time class="date"><?=$selectedRecette['dateCreation']?></time>
          </header>
          <p class="description"><?=$selectedRecette['description']?></p>
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
        foreach ($commentaires as $commentaire){?>
            <div class="divCommentaires">
            <p><?=$commentaire['auteur']?></p>
            <p><?=$commentaire['contenu']?></p>
            <p>Note : <?=$commentaire['note']?>/5</p>
            <p><?=$commentaire['dateCreation'] ?></p>
            <hr>
            </div>
       <?php } ?>

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
