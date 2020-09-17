<?php
get_header();
?>

<main class="main-content">
      <?php if(has_post_thumbnail()):?>
          <div class="port_grp_feature" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"> </div>
      <?php endif; ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <div class="intro_home">
            <?php if(get_field('title')):?>
              <h1 class="home_head"><?php echo get_field('title')?></h1>
            <?php endif;?>
            <p class="home_para">
              <?php if(get_field('intro_paragraph')):?>
                <?php echo get_field('intro_paragraph')?>
              <?php endif;?>
            </p>
          </div>

          <?php get_template_part('components/featured');?>
          <?php get_template_part('components/recent');?>
        </div>

        <?php get_sidebar(); ?>

    </div>
</main>

<?php
get_footer();
?>



