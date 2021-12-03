<div>
    <?php foreach ($recette as $element){?>
        <article>
            <header>
                <div class="billet">
                    <a href="index.php?controller=recette&action=recette&id= <?= $element['id'] ?>" >
                    <img src="img/<?= $element['photo'] ?>" alt="Tartiflette"/>
                    <h1 class="title"> <?= $element['titre'] ?> </h1>
                    <time class="date"> <?= $element['dateCreation'] ?></time>
                    <p class="description"> <?= $element['description'] ?></p>
                    </a>
                </div>
            </header>
        </article>
        <hr>
    <?php } ?>
</div>
