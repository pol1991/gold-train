<?php
/**
 * Widget 
 * 
 * @package Gold Train
 */

 namespace GOLD_TRAIN_THEME\Inc;

 use GOLD_TRAIN_THEME\Inc\Traits\Singleton;

class Widget{
    use Singleton;

    protected function __construct() {

        // load class;

        $this->setup_hooks();

    }

    protected function setup_hooks() {
        //actions and filters
        add_action( 'widgets_init', [$this,'header_widgets_init'] );
        add_action( 'widgets_init', [$this,'footer_widgets_init'] );
		add_action( 'widgets_init', [$this,'footer_content_widgets_init'] );
		add_action( 'widgets_init', [$this,'post_widgets_init'] );
		add_action( 'widgets_init', [$this,'front_widgets_init'] );
    }


public function header_widgets_init() {

	register_sidebar( array(
		'name'          => 'Header Widgets',
		'id'            => 'header_widgets_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

public function footer_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widgets',
		'id'            => 'footer_widgets_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

public function footer_content_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Content Widgets',
		'id'            => 'footer_content_widgets_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

public function post_widgets_init() {

	register_sidebar( array(
		'name'          => 'Post Sidebar',
		'id'            => 'post_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}

public function front_widgets_init() {

	register_sidebar( array(
		'name'          => 'Front page widgets',
		'id'            => 'front_page',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}


}


