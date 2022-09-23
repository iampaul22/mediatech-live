<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id = 'content'>
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package BuddyBoss_Theme
*/
?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
<meta charset = "<?php bloginfo( 'charset' ); ?>">
<meta http-equiv='cache-control' content='no-cache'>

<script type = 'text/javascript' id = 'hs-script-loader' async defer src = '//js.hs-scripts.com/9129390.js'></script>
<script src = 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js' integrity = 'sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==' crossorigin = 'anonymous' referrerpolicy = 'no-referrer'></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_head();
?>

</head>

<body <?php body_class();
?>>

<?php wp_body_open();
?>

<?php if ( !is_singular( 'llms_my_certificate' ) ):

do_action( THEME_HOOK_PREFIX . 'before_page' );

endif;
?>

<div id = 'page' class = 'site'>

<?php do_action( THEME_HOOK_PREFIX . 'before_header' );
?>

<header id = 'masthead' class = "<?php echo apply_filters( 'buddyboss_site_header_class', 'site-header site-header--bb' );
?>">
<?php do_action( THEME_HOOK_PREFIX . 'header' );
?>
</header>

<?php do_action( THEME_HOOK_PREFIX . 'after_header' );
?>

<?php do_action( THEME_HOOK_PREFIX . 'before_content' );
?>

<div id = 'content' class = 'site-content'>

<?php do_action( THEME_HOOK_PREFIX . 'begin_content' );
?>

<div class = 'container'>
<div class = "<?php echo apply_filters( 'buddyboss_site_content_grid_class', 'bb-grid site-content-grid' );?>">