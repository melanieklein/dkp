<?php get_header();?>
    <section class="page">
      <div id="apropos" class="content">
        <h3>À propos</h3>
        <div class="cf">
          <div class="apropos cf">
          <img src="<?php bloginfo('template_url') ?>/img/denis-klein.png" alt="A propos de Denis Klein Production" width="385" height="343">
            
            <div class="categories">
            <ul>
              <li class="cat-music">Aftermovies, concerts, clips</li>
              <li class="cat-wedding">Mariages</li>
              <li class="cat-society">Films d'entreprise</li>
              
            </ul>
            <ul>
              <li class="cat-auto">Auto moto</li>
              <li class="cat-interview">Interviews, reportages</li>
              <li class="cat-sport">Compétitions sportives</li>
            </ul>
          </div>
          </div>
          <div class="apropos-infos cf">
          <p><strong>Caméraman, monteur et réalisateur freelance</strong>, je suis spécialisé dans l'<strong>événementiel</strong> et dispose de mon propre matériel professionnel. Au fil du temps, mon activité s'est diversifiée et je suis capable de réaliser des vidéos de toute sorte.</p>
            <p>Je suis également ouvert à la nouveauté, n'hésitez pas à <a href="#contact">me contacter</a> pour me proposer votre projet. 
Si vous voulez voir ce dont je suis capable, jetez un coup d'oeil à <a href="#videos">mes vidéos</a> déjà réalisées.
            </div>
        </div>
      </div>
      <div id="videos" class="content cf">
        <h3>Mes vidéos</h3>
        <div class="conteneur-slider cf">
          <div id="sliderPrev"></div>
          <ul id="foo" class="slider">
          <?php wp_reset_postdata(); ?>
            <?php query_posts('posts_per_page=-1&post_type=video'); ?>
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="cf">
              <div class="video-titre cf"><h4><?php the_title();?></h4></div>
              <div class="video-player"><?php the_content(); ?></div>
              <strong><?php the_date();?></strong>
              <?php the_excerpt();?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
          </ul>
          <div id="sliderNext"></div>
        </div>
        <div class="bouton-videos">
        <a href="videos" title="Voir toutes mes vidéos"></a>
      </div>
      </div>
      <div id="contact" class="content cf">
        <h3>Me contacter</h3>
        <div class="conteneur-form">
          <div class="contact-form">
            <?php if (have_posts()) : ?>
          <?php query_posts('posts_per_page=1&post_type=post'); ?>
          <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
          </div>
        </div>
        <ul class="coordonnees" itemscope itemtype="http://schema.org/Person">

          <li><a href="mailto:denzproduction@gmail.com" title="Me contacter par email" itemprop="email">denzproduction@gmail.com</a></li>
          <li itemprop="telephone">0474/49.12.54</li>
          <li itemprop="addressLocality">Province de Liège, Belgique</li>
        </ul>
      </div>
    </section>
    <?php get_footer(); ?>
