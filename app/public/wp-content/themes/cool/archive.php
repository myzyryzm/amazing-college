<!-- category (eg like name or category or date or some shit) -->
<?php
get_header();?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
            <?php
// gives name of archive
the_archive_title();
?>
        </h1>
        <div class="page-banner__intro">
            <p>
                <?php
the_archive_description()
?>
            </p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <?php
// while u have blog posts
while (have_posts()) {
    the_post();?>
    <div class="post-tem">
        <!-- the title is the title of the post -->
        <!-- the permalink is url location of post -->
        <h2 class="headline headline--medium headline--post-title"><a
                href="<?php site_url(the_permalink())?>"><?php the_title()?>
            </a>
        </h2>
        <div class="metabox">
            <!-- author posts link links to all posts done by author -->
            <!-- when function begins with get u should echo -->
            <p>Post by <?php the_author_posts_link()?> on <?php the_time('n.j.y')?> in
                <?php echo get_the_category_list(', ') ?></p>
        </div>
        <div class="generic-content">
            <!-- the excerpt is the content of the post -->
            <?php the_excerpt()?>
            <p><a class="btn btn--blue" href="#">Continue reading</a></p>
        </div>
    </div>
    <?php }
//  paginate shit
echo paginate_links()
?>
</div>
<?php
get_footer();