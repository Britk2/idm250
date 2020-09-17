<?php get_header();?>

<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
        <?php if(has_post_thumbnail()):?>
            <div class="port_grp_feature" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"> </div>
        <?php endif; ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
            <h1 class="post_title"><?php the_title(); ?></h1>
            <div class="page-builder">
            <?php the_content(); ?>
            </div>
        </div>

        <!-- Side info -->
        <div class="column column-sidebar project_side">
            <?php if (get_field('project_title')): ?>
                <p>Title: <?php the_field('project_title') ?></p>
            <?php endif; ?>

            <p>Year: <?php the_date('M, Y') ?></p>

            <?php
                
                $taxo = wp_get_post_terms( get_the_ID(), 'technologies' );
                
            ?>
            
            <p>Tech/Materials: 
                <?php foreach($taxo as $cat):?>
                    <span> 
                        <a href="<?php echo get_term_link($cat->term_id);?>" target="_blank">[<?php echo $cat -> name;?>]</a>
                    </span>
                <?php endforeach;?>
            </p>

            <?php
                $link = get_field('project_link');
                if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <p>Project Link: <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
            <?php endif; ?>
            
            <?php
                $link = get_field('case_study');
                if ($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <p>Case Study: <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
            <?php endif; ?>
            
        </div>

    </div>
  <?php endwhile; ?>
</main>


<?php get_footer(); ?>