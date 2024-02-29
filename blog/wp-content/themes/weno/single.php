<?php get_header(); ?>
    <div class="weno-blog-page">
        <div class="xxxwide clearfix">
            <section class="blog">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                	<h2><?php the_title(); ?></h2>
                    <h3>by <?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name'); ?> on <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F j, Y') ?></time></h3>
                    <?php the_content(); ?>
                    <p>Posted in: <?php $category = get_the_category(); if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'.</a>'; } ?></p>
                </article>
                <?php comments_template(); ?>
                <?php endwhile; endif; ?>
            </section>
            <?php get_sidebar(); ?>
        </div>
        <button type="button" class="go-top">Go Back to Top</button>
    </div>
<?php get_footer(); ?>