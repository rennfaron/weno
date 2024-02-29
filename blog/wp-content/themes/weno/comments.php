<aside class="comments">
	<h1><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></h1>
	<?php if ( have_comments() ) : ?>
		<ol class="commentlist">
			<?php wp_list_comments('avatar_size=0'); ?>
		</ol>
	<?php endif; ?>
	<?php
	$args = array(
		'fields' => apply_filters( 'comment_form_default_fields',
			array(
				'author' =>
					'<input type="text" name="author" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' placeholder="' . __( 'Name', 'domainreference' ) . '*" />',
				'email' =>
					'<input type="email" name="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' placeholder="' . __( 'Email', 'domainreference' ) . '*" />',
				'url' =>
					'<input type="text" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . __( 'Website', 'domainreference' ) . '" />'
			)
		),
		'comment_field' =>  '<textarea name="comment" aria-required="true" placeholder="' . _x( 'Comment', 'noun' ) . '"></textarea>',
		'comment_notes_after' => '',
		'label_submit'=>'Submit'
	);
	comment_form($args);
	?>	
</aside>