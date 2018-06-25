<?php namespace Simply_Static; ?>

<div class='activity' >
	<select name="post_permalink_url" id="input_url_post">
		<?php
		foreach ( $this->post_list as $val ) : ?>
			<option value="<?php echo $val ?>" >
				<?php //echo get_permalink($post->ID); ?>
				<?php echo $val ?>
			</option>
		<?php endforeach; ?>
	</select>
</div>