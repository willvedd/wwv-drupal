<?php
	$bean_content = bean_load_delta($block->delta);
	$bean_body = field_get_items('bean',$bean_content,'field_block_body');
	
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<?php
	print render($title_prefix);
	echo $bean_body[0]['safe_value'];
	print render($title_suffix);
?>
</div>