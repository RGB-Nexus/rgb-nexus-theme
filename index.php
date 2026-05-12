<?php get_header(); ?>

<main id="main" class="site-main">

  <section class="l-section">
    <div class="l-container">

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2>
              <a href="<?php echo esc_url( get_permalink() ); ?>">
                <?php echo esc_html( get_the_title() ); ?>
              </a>
            </h2>
            <div><?php the_excerpt(); ?></div>
          </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

      <?php else : ?>

        <p>お探しのページは見つかりませんでした。</p>

      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
