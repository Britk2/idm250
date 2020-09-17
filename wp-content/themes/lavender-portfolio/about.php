<?php
/*
 * Template Name: About 
 * 
 */
get_header();
?>

<main class="main-content about_page">
    <h1 class="post_title"><?php the_title(); ?></h1>

    <div class="about_content">
      <?php $img = get_field('author_image'); 
      if (!empty($img)):?>
        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="author_img">
      <?php endif; ?>

      <?php if(get_field('author_about')):?>
        <div class="author_p">
          <?php echo get_field('author_about')?>
        </div>
      <?php endif; ?>
    </div>
    <?php while (have_posts()) : the_post(); ?>
        <div class="container split-sidebar">
            <!-- Main Content -->
            <div class="column column-main contact-page">
                <div class="page-builder">
                  <div class="contact_sec">
                    <h2 class="contact_title">
                      <?php echo get_field('contact_title')?>
                    </h2>
                    <?php if(get_field('contact_info')):?>
                        <p class="contact_p">
                          <?php echo get_field('contact_info')?>
                        </p>
                    <?php endif; ?>
                    <?php if(get_field('linkedin_link')):?>
                        <a href="<?php echo get_field('linkedin_link')['url']?>" target="<?php echo get_field('linkedin_link')['target']?>" class="wp-block-button__link">
                          <?php echo get_field('linkedin_link')['title']?>
                        </a>
                    <?php endif; ?>
                  </div>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    <?php endwhile; ?>

</main>

<?php
get_footer();
?>