<?php
/* Template Name: discover-html */
get_header();
?>

<!-- Start HTML -->

<style>
	h1{
		color: #000;
	}
	p{
		color: #000;
	}

	.row {    display: -ms-flexbox;    display: flex;    -ms-flex-wrap: wrap;    flex-wrap: wrap;    margin-right: -15px;    margin-left: -15px;}
	.col-md-1 {    -ms-flex: 0 0 8.333333%;    flex: 0 0 8.333333%;    max-width: 8.333333%; padding: 0 15px;  }
	.col-md-2 {    -ms-flex: 0 0 16.666667%;    flex: 0 0 16.666667%;    max-width: 16.666667%; padding: 0 15px;  }
	.col-md-3 {    -ms-flex: 0 0 25%;    flex: 0 0 25%;    max-width: 25%; padding: 0 15px;  }
	.col-md-4 {    -ms-flex: 0 0 33.333333%;    flex: 0 0 33.333333%;    max-width: 33.333333%; padding: 0 15px;  }
	.col-md-5 {    -ms-flex: 0 0 41.666667%;    flex: 0 0 41.666667%;    max-width: 41.666667%; padding: 0 15px;  }
	.col-md-6 {    -ms-flex: 0 0 50%;    flex: 0 0 50%;    max-width: 50%; padding: 0 15px;  }
	.col-md-7 {    -ms-flex: 0 0 58.333333%;    flex: 0 0 58.333333%;    max-width: 58.333333%; padding: 0 15px;  }
	.col-md-8 {    -ms-flex: 0 0 66.666667%;    flex: 0 0 66.666667%;    max-width: 66.666667%; padding: 0 15px;  }
	.col-md-9 {    -ms-flex: 0 0 75%;    flex: 0 0 75%;    max-width: 75%; padding: 0 15px;  }
	.col-md-10 {    -ms-flex: 0 0 83.333333%;    flex: 0 0 83.333333%;    max-width: 83.333333%; padding: 0 15px;  }
	.col-md-11 {    -ms-flex: 0 0 91.666667%;    flex: 0 0 91.666667%;    max-width: 91.666667%; padding: 0 15px;  }
	.col-md-12 {    -ms-flex: 0 0 100%;    flex: 0 0 100%;    max-width: 100%; padding: 0 15px;  }

	.bb-grid {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: block;
	}
    
    #content > .container {
    	max-width: 100%;
	}

	.container > .inner {
		max-width: 1080px;
		margin: 0 auto;
	}

	#content > .container .container{
    	max-width: 1200px;
    	max-width: calc(100% - 100px);
	}
	

/*  Evolving media section */
.Evolving_media_section{
	position: relative;
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
	padding:200px 0 75px;
}

.Evolving_media_section h1{
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 50px;
	line-height:60px;
    color: #FFFFFF!important;
    text-align: left;
	margin-bottom: 20px;
}
.Evolving_media_section p{
	font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif;
    font-size: 30px;
    font-weight: 400;
    font-style: normal;
    color: #fff;
    margin-bottom: 20px;
}
.Evolving_media_section button{
	color: #FFFFFF!important;
    border-width: 1px!important;
    border-color: #e21f28;
    border-radius: 8px!important;
    font-size: 16px;
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
    font-weight: 600!important;
    text-transform: uppercase!important;
    background-color: #e21f28;
    transition: 0.4s ease-in-out;
    z-index: 999;
    cursor: pointer;
}
.Evolving_media_section button:hover{
	background-color: transparent !important;
	border: 1px solid #e21f28 !important;
	color: #e21f28 !important;
	z-index: 999;
}


/*Start now */
.start_now_container{
	padding:80px 0 60px;
}
.start_now_container h2{
	font-weight: 700;
    font-size: 46px;
    color: #000000!important;
    line-height: 1.24em;
    text-align: center;
    text-transform: capitalize;
    position: relative;
        padding-bottom: 20px;
}
.start_now_container h2::before {
    content: "";
    width: 10%;
    height: 1px;
    border-top-color: #e21e27;
    border-top-style: solid;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0px;
    z-index: 10;
    border-top-width: 3px;
}
.start_now_container h3{
	max-width: 90%;
}
.start_now_container h3 a{
	    color: #2ea3f2;
	    font-weight: 400;
	    line-height: 1.3;
}
.start_now_container .avatar{
	width: 100%;
	display: block;
}
.start_now_container .avatar a{
	width: 100%;
	display: table;
	margin: 0 auto;
	max-width: 350px;
	position: relative;
	overflow: hidden;
	border: 1px solid;
    border-radius: 50%;
}
.start_now_container .avatar a::after{
	content: "";
	display: block;
	padding-top: 100%;
}
.start_now_container .avatar a img{
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: calc(100% - 10px);
    height: calc(100% - 10px);
    object-position: center center;
    border-radius: 50%;
}

.avatar_heading span{
	display: table;
    width: 50%;
    max-width: 260px;
    margin: 20px auto;
}
.avatar_heading span img{
	float: left;
    width: 100%;
    display: block;
}


/* announcements_band */
    .announcements_band {
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        padding:170px 0;
    }

    .announcements_band:after {
        content: '';
        background-color: rgba( 255, 255, 255, 0.6 );
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
    }
    .announcements_band .container {
        position: relative;
        z-index: 9;
    }
    .announcements_band .row {display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;}
    .announcements_band .col-md-6 {-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50%;padding: 0 15px;}
    .announcements_band h3 {font-size: 37px;line-height: 46px;color: #000;font-weight: 700;}
    .announcements_band input[ type = 'submit' ] {background-color: #e21f28;color: #fff;font-size: 16px;line-height: 24px;font-weight: 700 !important;font-family: inherit !important;height: auto;padding: 20px 30px !important;border-radius: 0 5px 5px 0;letter-spacing: 0;position: relative;left: -5px;}
    .announcements_band input[ type = 'email' ] {font-family: inherit !important;height: auto;padding: 20px 25px !important;border-radius: 5px 0 0 5px;background: transparent;border: 2px solid #000;width: calc( 100% - 165px ); border-right: 0;}
    .announcements_band .row {align-items: center;}
    .announcements_band h3, .announcements_band form {margin-bottom: 0 !important;}


/* Move Section */

.move {
	position: relative;
	padding: 80px 0;
}

.move::before {
	position: absolute;
	content: "";
	width: 100px;
	height: 100%;
	background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/blue-diagonals-01.png);
	background-repeat: no-repeat;
	top: 0px;
	left: 0px;
}

.move::after {
	position: absolute;
	content: "";
	width: 100px;
	height: 100%;
	background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/yellow-diagonals-01-half.png);
	background-repeat: no-repeat;
	top: 0px;
	right: 0px;
}

.move .text {
	position: relative;
	display: block;
	margin-bottom: 30px;
}

.move .text h4 {
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 46px;
    color: #FFFFFF!important;
    line-height: 70px;
    text-align: center;
	padding-bottom: 10px;
	margin: 0px;
}

.move .text p {
	font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    text-align: center;
    color: #DCDCDC;
	max-width: 800px;
	margin: 0 auto;
}

.move .text .btn {
	display: table;
	margin: 0 auto;
	background-color: #47c5dd;
	color: #fff;
	font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
	font-size: 16px;
	text-transform: uppercase!important;
	border: 1px solid #47c5dd;
	border-radius: 6px;
	padding: 12px 40px;
	margin-top: 50px;
}

.move .text .btn:hover {
	color: #e21f28!important;
    border-color: #e21f28!important;
    border-width: 1px!important;
	background-color: transparent;
	transition: 0.4s ease-in-out;
}

/* Evolutionaries Section */

.evolutionaries {
	position: relative;
	padding: 70px 0;
}

.evolutionaries .text {
	position: relative;
	display: block;
	margin-bottom: 30px;
}

.evolutionaries .text h4 {
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 46px;
    color: #e21f28!important;
    line-height: 80px;
    text-align: center;
	margin: 0px 0 15px;
}

.evolutionaries .text p {
	font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
	text-align: center;
	color: #e7e7e7;
}

.evolutionaries .box {
    display: inline-block;
    padding: 0;
    margin: 0 15px 40px;
    width: calc(25% - 30px);
    max-width: 215px;
}

.evolutionaries_box_wrapper{
	display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.evolutionaries .box image {
	margin-bottom: 20px;
}

.container-evol {
	width: 100%;
	max-width: 1200px;
	margin: 0 auto;
}

.evolutionaries .evol-name {
	position: relative;
}

.evolutionaries .evol-name h5 {
	font-family: Montserrat, sans-serif;
	font-size: 18px;
	line-height:26px;
	font-weight: normal;
	color: #fff;
	text-align: center;
	margin: 0px;
	padding-top: 20px;
}

.evolutionaries .evol-button {
	display: table;
	margin: 0 auto;
}

.evolutionaries .start-btn {
	color: #FFFFFF!important;
	border: 1px solid #e21f28;
    border-radius: 8px!important;
    font-size: 15px;
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
    font-weight: 600!important;
    text-transform: uppercase!important;
    background-color: #e21f28;
	padding: 12px 40px;
	float: left;
	margin-right: 10px;
	transition: all 0.5s ease 0s;
}

.evolutionaries .start-btn:hover {
	color: #e21f28 !important;
	border: 1px solid #e21f28;
	background-color: transparent;
}

.evolutionaries .directory-btn {
	color: #FFFFFF!important;
	border: 1px solid #47c5dd;
    border-radius: 8px!important;
    font-size: 15px;
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
    font-weight: 600!important;
    text-transform: uppercase!important;
    background-color: #47c5dd;
	padding: 12px 80px;
	float: left;
	transition: all 0.5s ease 0s;
}

.evolutionaries .directory-btn:hover {
	color: #e21f28 !important;
	border: 1px solid #e21f28;
	background-color: transparent;
}

/* Must Read */

.must-read {
	position: relative;
	/*padding: 70px 0 140px 0;*/
	background-color: #FAFBFD !important;
    width: 100%;
	display: inline-block;
}
.must-read .image img {
    height: 200px;
    width: 100%;
    object-fit: cover;
    background-color: #fff;
}

.must-read .title {
	width: 100%;
    display: block;
    /*padding-bottom: 20px;*/
    /*border-bottom: 1px solid #333;*/
	/*margin-bottom: 10px;*/
}

.must-read:before {
	position: absolute;
	content: "";
	background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/Red-Diagonal-Pattern.png);
	width: 100%;
	height: 100px;
	bottom: 0px;
	left: 0px;
	right: 0px;
	display: none;
}

.must-read .title h2 {
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 46px;
    color: #FFFFFF!important;
    line-height: 1.24em;
    text-align: left;
	margin: 0px;
}

.must-read .read-content {
	column-count: 3;
	margin:0 -20px;
}

.must-read .read-box {
    margin-bottom: 60px;
    padding: 0 20px;
    display: inline-block;
	width: 100%;
	border: 1px solid #ddd;
    padding: 0;
}
.must-read .image {
	width: 100%;
	display: block;
}

.must-read .read-text {
	background-color: #fff;
	height: 140px;
	padding: 20px;
	display: flex;
    align-items: center;
}

.must-read .read-text a {
	font-size: 18px;
    color: #000;
    line-height: 28px;
}

.section.announcements_band.rocket-lazyload.entered.lazyloaded {
    padding: 100px 0;
}

.section.announcements_band.rocket-lazyload.entered.lazyloaded {
    float: left;
    width: 100%;
}
.logged-in .Evolving_media_section{ padding-top: 100px !important;  }

/**/
.connected-partner-container .container{
	padding: 4% 0;
}
.connected-partner-container .container > .inner {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 2% 0;
    max-width: 1120px;
}
.connected-partner-container .inner a {
    max-height: 268px;
    max-width: 30% !important;
}


@media all and (max-width: 767px) {

	.container > .inner {    max-width: 1080px;    margin: 0 auto;    width: 90%;}

	.announcements_band .col-md-6 {            max-width:100%;            flex:0 0 100%;        }
	.must-read .read-content {    column-count: 1; }
	.Evolving_media_section {    padding: 100px 0 75px;}
	

	.announcements_band {    padding:60px 0;}
	.announcements_band h3 {    font-size:24px;    line-height:30px;    margin-bottom: 25px !important;}
	.announcements_band .col-md-6 {    max-width:100%;    flex:0 0 100%;}
    .announcements_band input[ type = 'submit' ] {    width: 100%;    border-radius: 5px;    padding: 13px 20px !important;    margin-top: 20px !important;}
    .announcements_band input[ type = 'email' ] {    width: 100%;    border-right: 2px solid #000;    border-radius: 5px;    padding: 16px 20px !important;}
	.evolutionaries .evol-button{ text-align:center; }
	.evolutionaries .evol-button a{ width: 100%; max-width: 260px; display:table; margin:0 auto;}
	.evolutionaries .evol-button a + a{ margin-top:20px; }
	.Evolving_media_section h1{ font-size:36px; line-height:44px; }
	.Evolving_media_section p {    font-size: 24px; line-height:30px; } 
	.start_now_container h2 {    font-size: 26px;    line-height: 30px; }
	.start_now_container {    padding: 40px 0 30px;}
	.start_now_container h3 {    max-width: 100%;}
	.move .text h4{    font-size: 24px; line-height:30px;  }
	.move::before {    width: 20px;    height: 60%; }
	.move::after {    width: 20px;    height: 60%; top:auto; bottom:0; }
	.evolutionaries .text h4{ font-size: 24px; line-height:30px;   }

	.evolutionaries_box_wrapper{     justify-content: center; }
	.evolutionaries .box {    width: calc(50% - 30px);    max-width: 215px;}
	.must-read .title h2{     font-size: 24px;     line-height: 30px; }
	.must-read .title{     padding-bottom: 10px; }
	.must-read .read-box {    margin-bottom: 40px; }
	.must-read .image img {    height: auto; }
	.connected-partner-container .container > .inner { flex-direction: column; gap: 20px; }
	.connected-partner-container .inner a { max-height: 460px; max-width: 100% !important; }

}
@media all and (max-width: 479px) {
	.evolutionaries .box {    width: calc(100% - 30px);    max-width: 215px;}
}
@media only screen and ( min-width : 768px ) and ( max-width: 980px ) {

	.announcements_band {                padding: 90px 0;            }
    .announcements_band .col-md-6 {                flex: 0 0 100%;                max-width: 100%;            }
    .announcements_band h3 {                font-size:30px;                line-height:36px;                margin-bottom:40px !important;            }
    .announcements_band input[ type = 'email' ] {                width: calc( 100% - 165px );            }
	.must-read .read-content {    column-count: 2; }
	.Evolving_media_section {    padding: 130px 0 75px;}
	.must-read .image img {    height: 235px; }
	.must-read .title h2 , .evolutionaries .text h4  , .move .text h4 , .start_now_container h2{     font-size: 30px;    line-height: 40px; }
	



}
@media only screen and (min-width : 768px) and (max-width: 1024px) {
	.container > .inner {    max-width: 1080px;    margin: 0 auto;    width: 90%;}
	.move::before{ width: 60px; }
	.move::after{ width: 60px; }
	.evolutionaries .evol-name h5{ font-size:16px; }
}

@media only screen and (min-width : 1025px) and (max-width: 1200px) {
	.container > .inner {    max-width: 1080px;    margin: 0 auto;    width: 90%;}
}

/* after login */
@media only screen and (min-width : 768px) and (max-width: 1100px) {
	.logged-in .must-read .read-box {    margin-bottom: 50px;  }
}
@media all and (max-width : 1024px){
	.logged-in.sticky-header .site-content{ padding: 0 !important;  }
	.logged-in .Evolving_media_section {    padding-top: 100px !important;}
}



</style>

	<!--  Discover section -->
	<section class="Evolving_media_section" style="background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/home-banner.jpg);">
		<div class="container">
			<div class="inner">
				<h1><?php echo the_field ('discover_heading'); ?></h1>
				<!-- <p></p> -->
				<!-- <a href=""> -->
				<!-- <button onclick></button>	 -->
				</a>
			</div>
		</div>
	</section>

	<!-- connected partner section -->
	<div class="connected-partner-container">
	
	
		<div class="container">	
			<div class="inner">
			<?php
				// Check rows exists.
				if ( have_rows( 'discover_image_main' ) ):
				while( have_rows( 'discover_image_main' ) ) : the_row();
				?>
		
				<a href="<?php echo get_sub_field('image_url'); ?>">
					<img src="<?php echo get_sub_field('discover_image'); ?>">
				</a>
				<!-- <a href="">
					<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/04/Community-Spotlight-1.jpg">
				</a>
				<a href="">
					<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/06/startup-studio.jpg">
				</a> -->
			<?php  endwhile ;
				endif;	
				?>
			</div>
			
		</div>
		
	</div>
	
	
	
	<!-- Start Must Read Section -->
	 
	<div class="must-read">
		<div class="container">
			<div class="inner">				
				<div class="title">
					<!-- <h2>Blog</h2> -->
				</div>
				
				<div class="read-content">
				<?php
				// Check rows exists.
				if ( have_rows( 'discover_blog_main_section' ) ):
				while( have_rows( 'discover_blog_main_section' ) ) : the_row();
				?>
					<div class="read-box">
						<div class="image">
							<img src="<?php echo get_sub_field('blog_image'); ?>">
						</div>
						<div class="read-text">
							<a href="<?php echo get_sub_field('blog_url'); ?>"><?php echo get_sub_field('blog_title'); ?> </a>
						</div>
					</div>
					<?php  endwhile ;

				endif;	

				?>
				<!-- <div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/is-video-the-next-frontier-for-nfts/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/07/video-in-music-400x250.jpg" alt="Is Video the Next Frontier for NFTs?">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/is-video-the-next-frontier-for-nfts/">Is Video the Next Frontier for NFTs?</a>
					</div>
				</div>
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/on-the-air-digitally/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/06/startup-studio-austin-400x250.jpg" alt="Is Video the Next Frontier for NFTs?">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/on-the-air-digitally/">On the Air Digitally</a>
					</div>
				</div>
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/presenting-startups-from-our-fifth-collective-cohort/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/05/Invent-Tomorrow-400x250.png" alt="Unsung Heroes: A Students Appreciation">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/presenting-startups-from-our-fifth-collective-cohort/">Presenting Startups from our Fifth Collective Cohort</a>
					</div>
				</div>
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/nfts-wth-are-they/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/05/NFT_Icon-400x250.png" alt="NFTs ??? WTH Are They?">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/nfts-wth-are-they/">NFTs ??? WTH Are They?</a>
					</div>
				</div>
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/empathy-building-with-virtual-reality/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/04/ricky-holm-400x250.jpg" alt="Empathy Building with Virtual Reality">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/empathy-building-with-virtual-reality/">Empathy Building with Virtual Reality</a>
					</div>
				</div>
				
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/unsung-heroes-a-students-appreciation/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/04/Michael-Hams-Teachers-min-400x250.png" alt="Unsung Heroes: A Students Appreciation">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/unsung-heroes-a-students-appreciation/">Unsung Heroes: A Students Appreciation</a>
					</div>
				</div>
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/mediatech-international-graduate-showcase/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/04/Startup-Banner-1-400x250.png" alt="MediaTech International Graduate Showcase">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/mediatech-international-graduate-showcase/">MediaTech International Graduate Showcase</a>
					</div>
				</div>
				
				<div class="read-box">
					<div class="image">
						<a href="https://mtvstaging.wpengine.com/innovation-korea-pitch-winners/">
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/03/Pitch-Winners-400x250.png" alt="#WINNING Korean Innovation">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/innovation-korea-pitch-winners/">#WINNING Korean Innovation</a>
					</div>
				</div> -->
				</div>	
			</div>
		</div>
	</div>
</body>
</html>

<!-- End HTML -->

<?php
get_footer();
?>