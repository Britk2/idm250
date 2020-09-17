<?php get_header();?>

<main class="main-content">
    <h1 class="post_title"><?php the_title(); ?></h1>
    <div class="port_content">
        <p class="port_para">
            <?php if(get_field('portfolio_paragraph')):?>
                <?php echo get_field('portfolio_paragraph')?>
            <?php endif;?>
        </p>
        <div class="links_p">
            <?php $link1 = get_field('link_1');?>
            <?php $image1 = get_field('section_1'); ?>
            <a href="<?php echo $link1['url']?>" target="<?php echo $link1['target']?>" class="port_button link1" style="background-image: url(<?php echo $image1['url']; ?>);">
                <?php echo ( $link1['title'] ); ?>
            </a>
            
            <?php $link2 = get_field('link_2');?>
            <?php $image2 = get_field('section_2'); ?>
            <a href="<?php echo $link2['url']?>" target="<?php echo $link2['target']?>" class="port_button link2" style="background-image: url(<?php echo $image2['url']; ?>);">
                <?php echo ( $link2['title'] ); ?>
            </a>

            <?php if(get_field('link_3')):?>
                <?php $link3 = get_field('link_3');?>
                <?php $image3 = get_field('section_3'); ?>
                <a href="<?php echo $link3['url']?>" target="<?php echo $link3['target']?>" class="port_button link3" style="background-image: url(<?php echo $image3['url']; ?>);">
                    <?php echo ( $link3['title'] ); ?>
                </a>
            <?php endif;?>

            <?php if(get_field('link_4')):?>
                <?php $link4 = get_field('link_4');?>
                <?php $image4 = get_field('section_4'); ?>
                <a href="<?php echo $link4['url']?>" target="<?php echo $link4['target']?>" class="port_button link4" style="background-image: url(<?php echo $image4['url']; ?>);">
                    <?php echo ( $link4['title'] ); ?>
                </a>
            <?php endif;?>
        </div>
    </div>

    <?php while (have_posts()) : the_post(); ?>
        <div class="container split-sidebar">
            <!-- Main Content -->
            <div class="column column-main">
                <div class="page-builder">
                    <?php the_content(); ?>
                    <?php get_template_part('components/featured');?>
                    <?php get_template_part('components/recent');?>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>
    <?php endwhile; ?>
</main>


<?php get_footer(); ?>