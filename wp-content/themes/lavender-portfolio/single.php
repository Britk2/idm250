<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <?php if(has_post_thumbnail()):?>
        <div class="port_grp_feature" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"> </div>
    <?php endif; ?>
    <div class="container">
        <!-- Main Content -->
        <h1 class="post_title"><?php the_title(); ?></h1>
        <p class="post_meta"><?php the_date('M j, Y')?><?php the_category();?></p>
        <div class="intro">
            <?php the_excerpt();?>
        </div>
        <div class="page-builder">
            <?php the_content(); ?>
        </div>
        <?php the_tags();?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer();?>


