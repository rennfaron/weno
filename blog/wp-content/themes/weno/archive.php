<?php get_header(); ?>
    <div class="weno-blog-page">
        <div class="xxxwide clearfix">
            <section class="blog">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <?php if(!is_category()){ ?>
                    <h1><?php $category = get_the_category(); if($category[0]){ echo $category[0]->cat_name; } ?></h1>
                    <?php } ?>
                    <h2><?php the_title(); ?></h2>
                    <h3>by <?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name'); if(!is_date()){ ?> on <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('F j, Y') ?></time><?php } ?></h3>
                    <?php the_content(); ?>
                    <p><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); if(!is_category()){ ?> | Posted in: <?php $category = get_the_category(); if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'.</a>'; } } ?></p>
                </article>
                <?php endwhile;
                if(get_previous_posts_link() || get_next_posts_link()) {
                ?>
                <nav class="blog-pages">
                    <span class="page-number">
                        <?php
                        // page number
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        echo 'Page '.$paged.' of '.$wp_query->max_num_pages;
                        ?>
                    </span>
                    <?php
                    // first page button
                    global $paged;
                    if(empty($paged)) $paged = 1;
                    if($paged > 1) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
                    ?>
                    <?php
                    // pagination + previous & next buttons
                    global $wp_query;
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'prev_text'    => __('&lsaquo; Previous'),
                        'next_text'    => __('Next &rsaquo;')
                    ) );
                    ?>
                    <?php
                    // last page button
                    global $paged;
                    if(empty($paged)) $paged = 1;
                    $pages = $wp_query->max_num_pages;
                    if ($paged != $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
                    ?>
                </nav>
                <?php
                }
                endif; ?>
            </section>
            <?php get_sidebar(); ?>
        </div>
        <button type="button" class="go-top">Go Back to Top</button>
    </div>
<?php get_footer(); ?>