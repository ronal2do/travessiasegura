<?php

// =============================================================================
// VIEWS/RENEW/CONTENT-PORTFOLIO.PHP
// -----------------------------------------------------------------------------
// Portfolio post output for Renew.
// =============================================================================

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( ! x_is_portfolio_item() ) : ?>

    <div class="entry-featured">
      <?php x_portfolio_item_featured_content(); ?>
      <div class="entry-cover">
        <div class="entry-cover-content">
          
          <h2 class="entry-title entry-title-portfolio">
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Veja: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php x_the_alternate_title(); ?></a>
          </h2>
          <span><?php echo get_the_date( 'd.m.y' ); ?></span>
        </div>
      </div>
    </div>

  <?php endif; ?>

  <div class="entry-wrap cf">

    <?php if ( is_singular() ) : ?>

      <div class="entry-info">
        <div class="entry-featured">
          <?php x_featured_portfolio( 'cropped' ); ?>
        </div>
        <header class="entry-header">
          <h1 class="entry-title entry-title-portfolio"><?php the_title(); ?></h1>
          <?php x_renew_entry_meta(); ?>
        </header>
        <?php x_get_view( 'global', '_content', 'the-content' ); ?>
      </div>
     

    <?php endif; ?>

  </div>
</article>