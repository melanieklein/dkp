<?php get_header();?>
<div id="toutes-videos" class="content cf">
        <h3>Toutes mes vidéos</h3>
          <ul id="portfolio-videos">
          <?php wp_reset_postdata(); ?>
            <?php query_posts('posts_per_page=-1&post_type=video'); ?>
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="portfolio-video">
              
              <div ><?php the_content(); ?></div>
              <h4><?php the_title();?></h4>
              <strong><?php the_date();?></strong>
              <span class="voirDetails">Détails</span>
              <div class="videoDetails">
                <span class="moinsDetails">X</span>
                <?php the_excerpt();?>
                
              </div>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        </ul>
</div>
<?php get_footer(); ?>