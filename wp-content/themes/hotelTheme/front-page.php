<?php get_header() ?>
<div class="container">
    <div class="img-acceuil">
        <img src="<?= get_theme_file_uri() . '/images/salon-rouge.jpg' ?>" alt="">
    </div>
    <div class="reservation--bloc">
        <div class="main-title">
            <i class="fa-solid fa-leaf"></i>
            <h2>
                Reserver en ligne
            </h2>
            <i class="fa-solid fa-leaf"></i>
        </div>
        <hr>

        <form action="" class="reservation--form">
            <div class="bloc">
                <label for="typeChambre">Type de chambre:</label>
                <select name="" id="typeChambre">
                    <option value="simple">Chambre simple</option>
                    <option value="double">Chambre double</option>
                    <option value="triple">Chambre triple</option>
                    <option value="suite">Chambre suite</option>
                </select>
            </div>
            <div class="bloc">
                <label for="arrive">Date d'arrivée :</label>
                <input type="date" name="" id="arrive">
            </div>
            <div class="bloc">
                <label for="depart">Date de depart :</label>
                <input type="date" name="" id="depart">
            </div>
            <div class="bloc">
                <label for="nombrePersonne">Nombre d'invités:</label>
                <select name="" id="nombrePersonne">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="bloc">
                <button type="submit">RÉSERVER</button>
            </div>
        </form>
    </div>
    <div class="decouverte--bloc">
        <div class="main-title">
            <i class="fa-solid fa-leaf"></i>
            <h2 class="decouverte--title">
                Decouvrez Inter Hôtel à Rueil-Malmaison
            </h2>
            <i class="fa-solid fa-leaf"></i>
        </div>
        <hr>
        <div class="decouverte--cards">
            <?php
            decouverteCard(array(
                'icon' => 'fa-utensils',
                'title' => 'Restauration de qualité'
            ));
            decouverteCard(array(
                'icon' => 'fa-square-phone',
                'title' => 'Telephone dans chambre'
            ));
            decouverteCard(array(
                'icon' => 'fa-bell-concierge',
                'title' => 'Room service'
            ));
            decouverteCard(array(
                'icon' => 'fa-person-swimming',
                'title' => 'Exterieur de qualité'
            ));
            ?>
        </div>
    </div>
    <div class="chambre--bloc">
        <div class="main-title">
            <i class="fa-solid fa-leaf"></i>
            <h2 class="decouverte--title">
                Ses chambres, son restaurant...
            </h2>
            <i class="fa-solid fa-leaf"></i>
        </div>
        <hr>
        <div class="chambre--cards">
            <?php 
            $customRooms = new WP_Query(array(
                'post_type' => 'room',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'ASC'
                
            ));
            while($customRooms->have_posts()){
                $customRooms->the_post(); ?>
                <div class="chambre--card">
                    <?php the_post_thumbnail(); ?>
                    <div class="entete">
                        <h3><?php the_title(); ?></h3>
                        <span>dès <?= get_field('prix_chambre') ?>€/nuit</span>
                    </div>
                    <p><?= wp_trim_words(get_the_content(),20) ?>
                    <a href="<?php the_permalink(); ?>">En savoir plus</a>
                </p>
                 
                </div>
            <?php } 
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>