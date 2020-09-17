<?php
/*
 * Template Name: Portfolio Group
 * 
 */
get_header();
?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>

    <?php $img = get_field('port_grp_img');?>
    <div class="port_grp_feature" style="background-image: url(<?php echo $img['url']; ?>);">
    </div>
    <div class="container">
        <!-- Main Content -->
        <h1 class="post_title"><?php the_title(); ?></h1>
        <?php if(get_field('portfolio_paragraph')):?>
          <div class="author_p">
            <?php echo get_field('portfolio_paragraph')?>
          </div>
        <?php endif; ?>
        <div class="page-builder">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>

    <div class="post-group-feature-title">
      <?php get_template_part('components/featured');?>
    </div>
</main>

<?php
get_footer();
?>