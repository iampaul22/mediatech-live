<?php
/* Template Name: perks-html */
get_header();
?>

<script src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<style>

body {
    margin: 0;
    background: #f5f5f5;
    font-family: 'Poppins', sans-serif;
    line-height: 2em;
}

.content-wrapper .row {
    /*display: flex;
    flex-direction: row;
    */
    flex-wrap: wrap;
}
.content-wrapper .col {
    /*display: flex;
    width: 50%;
    max-width: 50%;
    margin-bottom: 20px;
    */
    flex: 0 0 50%;
}

.wrapper {
    max-width: 100%;
    margin: 0 auto;
    margin-top: 80px;
}
.tab-image img {
    width: 100%;
    max-width: 100%;
    height: 343px;
    object-fit: cover;
    border-radius: 10px!important;
}
.tab-wrapper {
    text-align: center;
    display: block;
    margin: auto;
    max-width: 780px;
}

.tabs {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

.tab-link {
    margin: 0 auto;
    list-style: none;
    padding: 15px;
    color: black;
    cursor: pointer;
    font-weight: 300;
    transition: all ease 0.5s;
    border-bottom: solid 3px rgba( 255, 255, 255, 0 );
    letter-spacing: 1px;
    width: 110px;
}

.tab-link:hover {
    color: black;
    border-color: black;
}

.tab-link.active {
    color: #333;
    border-color: #333;
}

.tab-link:nth-of-type( 1 ).active {
    color: black;
    border-color: black;
    font-weight: bold;
}

.tab-link:nth-of-type( 2 ).active {
    color: black;
    border-color: black;
    font-weight: bold;
}

.tab-link:nth-of-type( 3 ).active {
    color: black;
    border-color: black;
    font-weight: bold;
}
.tab-content {
    display: none;
    text-align: center;
    color: #888;
    font-weight: 300;
    font-size: 15px;
    opacity: 0;
    transform: translateY( 15px );
    animation: fadeIn 0.5s ease 1 forwards;
}
.content-wrapper .col {
    display: flex;
    width: 100%;
    max-width: 100%;
    margin-bottom:20px;
}
li.tab-link.active {
    background-color: #b11d1d;
    color: white !important;
    font-weight: bold !important;
    box-shadow: 0px 3px 6px rgb( 0 0 0 / 25% );
    width: 160px;
}
.tab-content.active {
    display: block;
}
.content-wrapper .row {
    display: flex;
    flex-direction: row;
}
.tab-text h1 {
    font-size: 24px;
    color: black;
    text-align: center;
    position: relative;
    text-transform: uppercase;
    font-family: Montserrat, sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-bottom: 0px;

}
.tab-text {
    width: 100%;
    max-width: 100%;
}

.tab-text p {
    font-size: 16px;
    width: 100%;
    color: #4D5C6D;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    max-width: 100%;
    margin-bottom: 5px;
}

.tab-text a {
    font-size: 14px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}

.tab-text h5 {
    font-size: 14px;
    text-decoration: none;
    color: red;
    font-weight: 300;
    /* margin-bottom: -20px;
    */
}

.tab-text h4 {
    font-size: 12px;
    color: black;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
}
.tab-register a {
    font-size: 14px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}

.tab-register {
    margin-top: 15px;
}

p.tab-connect a {
    color: #000 !important;
    font-size: 12px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
}

p.tab-connect {
    font-size: 12px;
    margin-top:-5px;
}

.tab-text h3 {
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #000000;
    margin-bottom: 0;
}

.tab-text h2 {
    font-size: 14px;
    color: black;
    font-weight: 300;
}

.tab-text button {
    font-weight: 300;
    background: #524949;
    max-width: 100%;
    border-radius: 10px;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    text-transform: uppercase;
    width: 80%;
    color: #fff;
    background-color: #32373c;
    box-shadow: none;
    cursor: pointer;
    display: inline-block;
    font-size: 1.125em;
    text-align: center;
    text-decoration: none;
    word-break: break-word;
    box-sizing: border-box;
}
.tab-register a {
    font-size: 14px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    font-style: normal;
    color: #e21f28 !important;
}
.tab-register {
    margin-top: 20px;
}
.content-wrapper {
    margin-top: 70px;
}

@keyframes fadeIn {
    100% {
        opacity: 1;
        transform: none;
    }
}
img.png_sec {
    height: 45px !important;
    object-fit: contain;
}
.tab-text {
    /* display: flex;
    */
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-content: center;
    align-items: center;
}
.tab-image {
    flex: 0 0 40% !important;
}
.tab-text {
    flex: 0 0 60% !important;
}
.custom-tab-section .content-wrapper .col {
    padding-right: 20px !important;
    padding-left: 20px !important;
}
.custom-tab-section .row .col img.png_sec {
    transform: translateY( 10px ) !important;
}
/* 03-08-2022 */
.logged-in .wrapper {
    margin-top: 50px !important;
}
</style>
<body>
<section class = 'custom-tab-section'>
<div class = 'wrapper'>
<div class = 'tab-wrapper'>
<ul class = 'tabs'>
<?php
$args = array(
    'taxonomy' => 'perks-tag',
    'orderby' => 'name',
    'order'   => 'ASC'
);

$tags = get_tags( $args );
echo '<li class="tab-link" data-tab="0">ALL</li>';
foreach ( $tags as $tag2 ) :
?>
<li class = 'tab-link' data-tab = "<?php echo $tag2->term_id; ?>"><?php echo $tag2->name;
?></li>
<!-- <li class = 'tab-link' data-tab = '2'>Tab 2</li>
<li class = 'tab-link' data-tab = '3'>Tab 3</li>
<li class = 'tab-link' data-tab = '4'>Tab 4</li>
<li class = 'tab-link' data-tab = '5'>Tab 5</li> -->
<?php endforeach;
?>
</ul>
</div>

<div class = 'content-wrapper'>
<div id = 'tab-<?php echo '0' ?>' class = 'tab-content'>
<div class = 'tab-row-content'>
<div class = 'container'>
<div class = 'row'>
<?php
$code = array(
    'post_type' => 'perks-post',
    'post_status' => 'publish',
    'posts_per_page' => -1
);

$loop1 = new WP_Query( $code );
// echo '<pre>';
// print_r( $loop1->post->ID );
// echo '</pre>';
if ( $loop1->have_posts() ):
while ( $loop1->have_posts() ) : $loop1->the_post();
$myimage = get_the_post_thumbnail_url( $loop1->post->ID, 'full' );
$learn_more_url = get_field( 'learn_more', $loop1->post->ID );

$register_url = get_field( 'register_url', $loop1->post->ID );
$Connect_with_specialist_field = get_field( 'connect_with_specilist', $loop1->post->ID );
$png_image_section = get_field( 'perk_image_section', $loop1->post->ID );

$if_need_code = get_field( 'if_needed_code', $loop1->post->ID );
$company_community_field = get_field( 'company_community', $loop1->post->ID );

$connect_with_specialist = get_field( 'connect_with_specilist', $loop1->post->ID );
$button_url_link = get_field( 'button_url_link', $loop1->post->ID );

$content = get_the_content();
?>
<div class = 'col'>

<div class = 'tab-text'>
<h1><?php the_title();
?></h1>
<p><?php echo $trimmed_content = wp_trim_words( $content, 20, NULL );
?></p>
<a href = "<?php echo $learn_more_url; ?>">Learn More</a>
<div class = 'tab-register'><a href = "<?php echo $register_url; ?>">Register</a></div>
<?php if ( !empty( $if_need_code ) ): echo '<h4>['.$if_need_code.']</h4>';
endif;
?>
<?php if ( !empty( $company_community_field ) ):
echo '<a href="'.$company_community_field.'"><h3>Company Community</h3></a>';
endif;
?>
<?php if ( !empty( $connect_with_specialist ) ): ?>
<p class = 'tab-connect'>[ <a href = "<?php echo $connect_with_specialist; ?>">Connect with specialist </a> ]</p>
<?php endif;
?>
<?php if ( !empty( $png_image_section ) ) {
    echo '<a href="'.$button_url_link.'"><img class="png_sec" src="'.$png_image_section.'"/></a>';
}
//    else {
//         echo '<img class="png_sec" src="https://mediatech.ventures/wp-content/uploads/2022/05/image_2022_05_25T13_53_15_536Z.png"/>';
//    }
?>
<!-- <button>Brand Logo/PNG</button> -->
</div>
<div class = 'tab-image 456'>
<?php if ( $myimage == '' ) {
    ?>
    <img src = 'https://mediatech.ventures/wp-content/uploads/2022/04/ef3-placeholder-image.jpg'/>
    <?php } else {
        ?>
        <img src = "<?php echo $myimage;?>"/>
        <?php }
        ?>

        </div>
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

        </div>

        </div>
        </div>
        </div>
        <?php foreach ( $tags as $tag2 ) :
        ?>

        <div id = "tab-<?php echo $tag2->term_id; ?>" class = 'tab-content'>
        <div class = 'tab-row-content'>
        <div class = 'container'>
        <div class = 'row'>
        <?php
        $code = array( 'post_type' => 'perks-post',
        'posts_per_page' =>-1,
        'tax_query' => array(
            array(
                'taxonomy'  => 'perks-tag',
                'field'     => 'term_id',
                'terms'     => $tag2->term_id,
            )
        ),
    );

    $loop1 = new WP_Query( $code );
    // echo '<pre>';
    // print_r( $loop1->post->ID );
    // echo '</pre>';
    if ( $loop1->have_posts() ):
    while ( $loop1->have_posts() ) : $loop1->the_post();
    $myimage = get_the_post_thumbnail_url( $loop1->post->ID, 'full' );
    $learn_more_url = get_field( 'learn_more', $loop1->post->ID );

    $register_url = get_field( 'register_url', $loop1->post->ID );
    // $Connect_with_specialist_field = get_field( 'connect_with_specilist', $loop1->post->ID );
    $png_image_section = get_field( 'perk_image_section', $loop1->post->ID );

    $if_need_code = get_field( 'if_needed_code', $loop1->post->ID );
    $company_community_field = get_field( 'company_community', $loop1->post->ID );

    $connect_with_specialist = get_field( 'connect_with_specilist', $loop1->post->ID );
    $button_url_link = get_field( 'button_url_link', $loop1->post->ID );
    $content = get_the_content();

    ?>
    <div class = 'col'>

    <div class = 'tab-text'>
    <h1><?php the_title();
    ?></h1>
    <p><?php echo $trimmed_content = wp_trim_words( $content, 20, NULL );
    ?></p>
    <a href = "<?php echo $learn_more_url; ?>">Learn More</a>
    <div class = 'tab-register'><a href = "<?php echo $register_url; ?>">Register</a></div>
    <?php if ( !empty( $if_need_code ) ): echo '<h4>['.$if_need_code.']</h4>';
    endif;
    ?>
    <?php if ( !empty( $company_community_field ) ):
    echo '<a href="'.$company_community_field.'"><h3>Company Community</h3></a>';
    endif;
    ?>

    <p class = 'tab-connect'>[ <a href = "<?php echo $connect_with_specialist; ?>">Connect with specialist </a> ]</p>
    <?php if ( !empty( $png_image_section ) ) {
        echo '<a href="'.$button_url_link.'"><img class="png_sec" src="'.$png_image_section.'"/></a>';
    }
    //    else {
    //         echo '<img class="png_sec" src="https://mediatech.ventures/wp-content/uploads/2022/05/image_2022_05_25T13_53_15_536Z.png"/>';
    //    }
    ?>
    <!-- <button>Brand Logo/PNG</button> -->
    </div>
    <div class = 'tab-image 456'>
    <?php if ( $myimage == '' ) {
        ?>
        <img src = 'https://mediatech.ventures/wp-content/uploads/2022/04/ef3-placeholder-image.jpg'/>
        <?php } else {
            ?>
            <img src = "<?php echo $myimage;?>"/>
            <?php }
            ?>

            </div>
            </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>

            </div>

            </div>
            </div>
            </div>
            <?php endforeach;
            ?>
            </div>
            </div>
            </section>
            <!--     </div>
            </section> -->

            <script src = 'jquery-3.6.0.min.js'></script>
            <script>
            jQuery( document ).ready( function() {
                console.log( 'working' );
                jQuery( 'li.tab-link:first-child' ).addClass( 'active' );
                jQuery( '.tab-content:nth-child(1)' ).addClass( 'active' );
            }
        );
        jQuery( '.tab-link' ).click( function() {
            var tabID = jQuery( this ).attr( 'data-tab' );

            jQuery( this ).addClass( 'active' ).siblings().removeClass( 'active' );

            jQuery( '#tab-'+tabID ).addClass( 'active' ).siblings().removeClass( 'active' );
        }
    );
    </script>

    <?php
    get_footer();
    ?>