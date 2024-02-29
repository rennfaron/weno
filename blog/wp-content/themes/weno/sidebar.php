<ul class="sidebar">
	<li>
		<?php get_search_form(); ?>
    </li>
    <li>
    	<ul>
        	<li class="sidebar-header"><h2>Recent Posts</h2></li>
            <?php wp_get_archives('type=postbypost&limit=6'); ?>
    	</ul>
    </li>
    <li>
    	<ul>
    		<li class="sidebar-header"><h2>Top Categories</h2></li>
            <?php wp_list_categories('title_li=&orderby=count&number=6'); ?>
        </ul>
    </li>
    <li>
    	<ul>
    		<li class="sidebar-header"><h2>Calendar</h2></li>
            <li><?php get_calendar(); ?> </li>
        </ul>
    </li>
</ul>