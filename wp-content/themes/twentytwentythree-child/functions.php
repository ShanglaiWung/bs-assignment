<?php
add_action( 'wp_enqueue_scripts', 'bs_child_enqueue_parent_styles' );
function bs_child_enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action('init', 'bs_post_type');
function bs_post_type() {
	register_post_type('recipes', [
		'label' => __('Recipes', 'txtdomain'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-food',
		'supports' => ['thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'recipes'],
		'labels' => [
			'singular_name' => __('Recipe', 'txtdomain'),
			'add_new_item' => __('Add new recipe', 'txtdomain'),
			'new_item' => __('New recipe', 'txtdomain'),
			'view_item' => __('View recipe', 'txtdomain'),
			'not_found' => __('No recipes found', 'txtdomain'),
			'not_found_in_trash' => __('No recipes found in trash', 'txtdomain'),
			'all_items' => __('All recipes', 'txtdomain'),
			'insert_into_item' => __('Insert into recipe', 'txtdomain')
		],		
	]);
}

function bs_add_meta_box() {
    add_meta_box( 'bs_title_ui', __( 'Title', 'bs' ), 'bs_title_ui_meta_box', 'recipes', 'normal', 'high' );
    add_meta_box( 'bs_instructions_ui', __( 'Instruction', 'bs' ), 'bs_instructions_ui_meta_box', 'recipes', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'bs_add_meta_box' );

function bs_title_ui_meta_box() {
	?>
	<div class="recipes-title">
		<input type="text" name="recipe_title">
	</div>
	<?php
}

function bs_instructions_ui_meta_box() {
	?>
	<div class="recipes-instructions">
		<textarea name="recipe_instructions"></textarea>
	</div>
	<?php
}