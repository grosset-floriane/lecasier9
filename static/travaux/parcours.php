<div class="col_droite">
    <img class="image" src="" alt="Parcours visuel"/>

    <aside class="infos">
        <h4 class="strong"><a class="lien_col"href="index.php?r=camille_ragnaud">Camille Ragnaud</a>, Parcours visuel</h4>
        <p>
            Photographies argentique, 12 photographies de 16.5x11.5 cm, 2014
        </p>
    </aside>


    <aside class="bloc_icones">
            <?php
                if (!empty($_routes[$_r]['archives'])) {
                    include_once ROOT_DIR . '/vues/menu_organique.php' ;
                }
            ?>
    </aside>
</div>
