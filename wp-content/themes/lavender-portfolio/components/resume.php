<?php
/*
 * Template Name: Resume
 * 
 */
get_header();
?>
<main class="main-content">
    <h1 class="post_title"><?php the_title(); ?></h1>

    <div class="resume_intro">
        <h4>
            <?php if(get_field('resume_contact')):?>
                <?php echo get_field('resume_contact');?>
            <?php endif; ?>
        </h4>

        <?php
            $file = get_field('resume_file');
            if( $file ): ?>
            <a href="<?php echo $file['url']; ?>" target="_blank"><?php echo $file['title']; ?></a>
        <?php endif; ?>
    </div>

    <div class="resume_content">
        <div class="resume_education">
            <h2>
                <?php if(get_field('education_title')):?>
                    <?php echo get_field('education_title');?>
                <?php endif; ?>
            </h2>
            <div class="education_content">
                <?php if(get_field('education')):?>
                    <?php echo get_field('education');?>
                <?php endif; ?>
            </div>
        </div>
        <div class="resume_experience">
            <h2>
                <?php echo get_field('experience_title');?>
            </h2>
            <div class="experience_content">
                <?php echo get_field('experience');?>
            </div>
        </div>
        <div class="resume_skills">
            <h2>
                <?php echo get_field('skills_title');?>
            </h2>
            <div class="skills_content">
                <?php echo get_field('skills');?>
            </div>
        </div>
        <div class="resume_course">
            <h2>
                <?php if(get_field('course_title')):?>
                    <?php echo get_field('course_title');?>
                <?php endif; ?>
            </h2>
            <div class="course_content">
                <?php if(get_field('course_work')):?>
                    <?php echo get_field('course_work');?>
                <?php endif; ?>
            </div>
        </div>
        <div class="resume_honors">
            <h2>
                <?php if(get_field('honors_title')):?>
                    <?php echo get_field('honors_title');?>
                <?php endif; ?>
            </h2>
            <div class="honors_content">
                <?php if(get_field('honors_n_activities')):?>
                    <?php echo get_field('honors_n_activities');?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>