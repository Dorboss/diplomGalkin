<?php

add_theme_support( 'post-thumbnails' );

add_action( 'wp_head', 'fontsgoogle');
function fontsgoogle(){
	?>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
<?php
}

add_action('wp_footer', 'aosloader');
function aosloader(){
    ?>
    <script src="https://kit.fontawesome.com/02bf2f0c30.js" crossorigin="anonymous"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    

    <?php
}

function style_assets() {
    
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css' );
	wp_enqueue_style( 'templatemo-sixteen', get_template_directory_uri() . '/assets/css/templatemo-sixteen.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
	
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery' ), '20151215', true);
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js', array('jquery' ), '20151215', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery' ), '20151215', true);
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery' ), '20151215', true);
	wp_enqueue_script( 'accordions', get_template_directory_uri() . '/assets/js/accordions.js', array('jquery' ), '20151215', true);
	wp_enqueue_script( 'jqmin', get_template_directory_uri() . 'vendor/jquery/jquery.min.js', array('jquery' ), '20151215', true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery' ), '20151215', true);
	


	
}
add_action( 'wp_enqueue_scripts', 'style_assets' );



function get_active($array){
    if(is_page('main'))
        $array[0] = 'active';
    else
        $array[0] = '';

    if(is_page('products'))
        $array[1] = 'active';
    else
        $array[1] = '';

    if(is_page('about'))
        $array[2] = 'active';
    else
        $array[2] = '';
    
    if(is_page('contacts'))
        $array[3] = 'active';
    else
        $array[3] = '';


    return $array;
}
add_filter( 'get_active', 'get_active', 10);