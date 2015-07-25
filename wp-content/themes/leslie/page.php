<?php
/*
 * page.php
 * The page template. shows any page that is not a post
 * @theme leslie
 */ 
get_header(); ?>
<div class="c2">
    <div id="main-nav" role="navigation">
        <nav>
            <?php wp_nav_menu( array( 'container_id' => 'access', 'theme_location' => 'primary' ) ); ?>
        </nav><!-- ends access# -->
    </div>
</div><!-- ends row left -->

    <?php if ( ! is_active_sidebar( 'sidebar-1' ) ) : // only show one content section without sidebar ?>

    <section class="c10">
        <div id="content" role="main">
            <?php get_template_part( 'content' ); ?>
        </div><!-- ends content -->
    </section><!-- ends c10 without sidebar -->

        <?php else : // show two sections with sidebar active ?>

    <section class="c7">
        <div id="content" role="main">
            <?php get_template_part( 'content' ); ?>
        </div><!-- ends content -->
    </section><!-- ends c7 with sidebar -->

        <div class="c3 end" id="right-sidebar">
            <div id="sidebar-1">
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
        </div><!-- end sidebar -->

    <?php endif; ?>
    <?php get_footer(); ?>