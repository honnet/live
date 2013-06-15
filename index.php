<?php get_header(); ?>
<?php get_sidebar(); ?>

<section>
  <h3>past episodes</h3>

  <ul class="open-list first">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li>
      <div class="post-thumbnail">
        <?php the_post_thumbnail( array(100,100) ); ?>
      </div>
      <div class="post-content">
        <p><?php the_title(); ?><span>on <?php the_time('j M y, D') ?></span> </p>
        <div class="post"><?php the_content(); ?></div>
      </div>
    </li>
    <?php endwhile; else: ?>
    <li>
      <div class="post">Coming your way really soon ;)</div>
    </li>
    <?php endif; ?>
  </ul>
</section>

<?php get_footer(); ?>