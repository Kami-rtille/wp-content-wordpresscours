<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mon super site</title>
<link href="/fonts/SolarVestaSerif.ttf" format="ttf"/>
<link href="/fonts/Montserrat-Regular.ttf" format="ttf"/>



<?php wp_head();?>
</head>

<body>
<div class='header'>
<h1><a href="<?php bloginfo('url'); ?>" class="big_title">Logo</a></h1>
<div class="menu">
<?php   // affichage des titres des pages
$args = array(
    'post_type' => 'page');
   $wpdf_query = new WP_Query( $args );
  if ( $wpdf_query->have_posts() ) :
    while ( $wpdf_query->have_posts() ) : $wpdf_query->the_post();
    $title=the_title('','',false);
    // $id=the_ID();
    echo '<a href='.get_permalink().' class="small_title">'.$title.'</a><br/>';
    // echo $id;
    endwhile;
  endif;
  ?>
<?php wp_reset_postdata();    ?>
</div>
</div>
<div class='container'>
