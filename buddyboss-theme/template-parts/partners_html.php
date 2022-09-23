<?php
/* Template Name: partner-html */
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
    	/*max-width: 1200px;*/
    	max-width: calc(100% - 50px);
    	padding-left: 0;
    	padding-right: 0;
	}
	.bb-grid-cell:not(.no-gutter), .bb-grid>:not(.no-gutter){
		padding-left: 0px;
    	padding-right: 0px;
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
	margin-bottom: 10px;
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
        padding: 4% 0;
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
	background-color: #e21f28;
	color: #fff;
	font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
	font-size: 16px;
	text-transform: uppercase!important;
	border: 1px solid #e21f28;
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
	padding: 70px 0 140px 0;
	background-color: #151515!important;
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
    padding-bottom: 20px;
    /*border-bottom: 1px solid #333;*/
	margin-bottom: 20px;
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
}

.must-read .title h2 {
	font-family: 'Montserrat',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 46px;
    color: #FFFFFF!important;
    line-height: 1.24em;
    text-align: left;
	margin: 0px;
	position: relative;
}
.must-read .title h2::after {
    position: absolute;
    content: "";
    background: red;
    width: 12%;
    height: 3px;
    bottom: -15px;
    left: 0;
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

.et-db #et-boc .et-l .et_pb_divider:before {
    content: "";
    width: 100%;
    height: 1px;
    border-top-color: #eee;
    border-top-color: rgba(0,0,0,.1);
    border-top-width: 1px;
    border-top-style: solid;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 10;
    border-top-color: #e21e27;
    border-top-width: 3px;
}
.Evolving_media_section .btn-and-dialogbox a:last-child .Program-news-dialog p:empty{
	display:none !important;
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
	.evolutionaries .evol-button a{ width: 100%; max-width: 260px; display:table; margin:0 auto; float:none;}
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
	.must-read .title h2{     font-size: 24px;     line-height: 30px; position: relative;}
	
	.must-read .title{     padding-bottom: 10px; }
	.must-read .read-box {    margin-bottom: 40px; }
	.must-read .image img {    height: auto; }

	.Evolving_media_section .btn-and-dialogbox {        flex-flow: column;    }
	.Evolving_media_section .btn-and-dialogbox a:last-child{ margin-top:50px; }
	.Evolving_media_section .btn-and-dialogbox a:last-child , .Evolving_media_section .btn-and-dialogbox a:last-child .Program-news-dialog { flex-flow:column;   width: 100% !important; max-width:100% !important;}
	
	.Evolving_media_section .btn-and-dialogbox a:last-child .Program-news-dialog img{  margin:0 auto; display:table; }




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
	
	.Evolving_media_section .btn-and-dialogbox {        flex-flow: column;    }
	.Evolving_media_section .btn-and-dialogbox a:last-child{ margin-top:30px; }
	.Evolving_media_section .btn-and-dialogbox a:last-child , .Evolving_media_section .btn-and-dialogbox a:last-child .Program-news-dialog {    width: 100% !important; max-width:100% !important;}
.Evolving_media_section .btn-and-dialogbox a:last-child .Program-news-dialog {    padding:70px 30px !important;}

.logged-in .evolutionaries .start-btn{    padding: 12px 30px;  }
.logged-in .evolutionaries .directory-btn{     padding: 12px 50px; }
.logged-in .move::before  , .logged-in .move::after {    width: 40px;}


}
@media only screen and (min-width : 768px) and (max-width: 1024px) {
	.container > .inner {    max-width: 1080px;    margin: 0 auto;    width: 90%;}
	.move::before{ width: 60px; }
	.move::after{ width: 60px; }
	.evolutionaries .evol-name h5{ font-size:16px; }
}

@media only screen and (min-width : 1025px) and (max-width: 1200px) {
	.container > .inner {    max-width: 1080px;    margin: 0 auto;    width: 90%;}
	.logged-in .move::before  , .logged-in .move::after {    width: 60px;}

}

/* after login */
@media only screen and (min-width : 768px) and (max-width: 1100px) {
	.logged-in .must-read .read-box {    margin-bottom: 50px;    padding: 0 5px; }
}
@media all and (max-width : 1024px){
	.logged-in.sticky-header .site-content{ padding: 0 !important;  }
	.logged-in .Evolving_media_section {    padding-top: 100px !important;}
}


.Evolving_media_section .btn-and-dialogbox{ display: flex; align-items: flex-start; justify-content: space-between; }
.Evolving_media_section .Program-news-dialog{ display: flex; justify-content: center; align-items: flex-start; gap: 30px; max-width: 510px; background-color: #f5f5f5; padding: 30px; position: relative;}
.Evolving_media_section .Program-news-dialog::after{
	content: "";
	background-image: url('https://mtvstaging.wpengine.com/wp-content/uploads/2022/07/quote-icon.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	width: 33px;
	height: 33px;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    top: -15px;
    border-radius: 31px;
    z-index: 2;
}
.Evolving_media_section .Program-news-dialog img{ max-width: 90px; min-width: 50px; }
.Evolving_media_section .inner-dialog p{ font-family:'Open Sans', sans-serif; font-weight: 400; font-style: normal; font-size: 16px; color: #728188;margin-bottom: 10px; }
.Evolving_media_section .inner-dialog p a{ color: #007cff; }


</style>

	<!--  Evolving media section -->
	<section class="Evolving_media_section" style="background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/home-banner.jpg);">
		<div class="container">
			<div class="inner">
				<h1><?php echo get_field('hero_title'); ?></h1>
				<p><?php echo get_field('hero_sub_title'); ?></p>
				<div class="btn-and-dialogbox">
				
				<a href="<?php echo get_field('hero_button_url'); ?>">
				<button>Connect</button>	
				</a>

			<a href="<?php echo get_field('hero_testimonial_url') ?>" >	<div class="Program-news-dialog">
					<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2019/01/cropped-MediaTech-Branding-FINAL_MTV.Logo_.icon-black.png"/>
					<div class="inner-dialog">
						<p><?php echo get_field('hero_testimonial_text'); ?></p>
					</div>
				</div>	</a>	
			</div>
		</div>
	</section>

	<!-- Start now section -->
	<div class="start_now_container">	
		<div class="container">			
			<div class="inner">
				<h2><?php echo get_field('technology_title'); ?></h2>
				<p><?php echo get_field('technology_text'); ?></p>

				</p>
				<!-- <p>We join incubators, we seek lawyers, patents, and NDAs to protect them, we quit jobs with them in mind, and we chase dreams of being wealthy and successful, all because of an idea. It’s time for “the Idea” to die.</p>
				<p><em>“There’s some bizarre mythology that’s been created in the startup realm that ideas themselves have an incredible monetary value. Spoiler alert: they don’t.” - Wil Schroter; Startups.com</em></p>
				<p>Society’s fixation on the idea is problematic. It implies ideas are unique. It implies Entrepreneurs have secrets to protect. It implies that people will fund or pay for that idea.</p>
				<p><strong>Ideas are temporary, dynamic, prolific, and fleeting.</strong></p>
				<p>Successful Entrepreneurs churn a dizzying array of ideas. They toss them, fast and efficiently. What you need to have are a mission, vision, and values. (And resources).</p>
				<p>A startup is akin to the order to “take that hill.” That’s a mission. The vision is the plan. And our values explain how (what we will not do).</p>
				<p>From there, we constantly try different ideas to achieve that mission. <em>The idea is what fails.</em></p>
				<p>The idea is some soldier showing up and saying, “I have a pocket knife, I’m going to charge ahead and take it!” And you know those Entrepreneurs when you hear them… They don’t take feedback, they think they’re right, they think their idea is special because they had it.</p>
				<p>With just the idea, nothing is going to happen. No one will follow that soldier and it has the slimmest chance in hell of actually taking that hill.</p>
				<p>What’s the vision, what are our values, and what resources do we have to do it? Resources... <strong>people</strong>, <strong>tools</strong>, and <strong>capital</strong>.</p>
				<p>What’s that saying about war? Once it starts, the plan goes out of the window? What works is when that charismatic leader with experience and vision, motivates people to stay focused on the mission, change plans, and keep trying different things until it works.</p>
				<p>It’s time for the idea to die because the secret to success is that you should have another one before you finish reading this sentence.</p> -->
			</div>

			<div class="inner">
				<h3><?php echo get_field('pioneer_title'); ?><abbr> <a href="<?php echo get_field('connect_button_url'); ?>" target="black">Connect with us.</a></abbr></h3>

				<div class="avatar">
					<a href="https://mediatech.ventures/profile/ted/">
						<span class="et_pb_image_wrap ">
						<img src="<?php echo get_field('pioneer_profile_image'); ?>" alt="" />
						<noscript>
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/Paul.png" alt="" title="Paul" />
						</noscript>
						</span>
					</a>
				</div>
				<div class="avatar_heading">
					<span>
						<img src="<?php echo get_field('pioneer_signature_image'); ?>" alt="" />
						<noscript>
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/TedSig.png" alt=""/>
						</noscript>
					</span>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start How To Move Section -->

	<div class="move" style="background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/Media-Evolved.jpg)">
		<div class="container">
			<div class="inner">
				<div class="text">
					<h4><?php echo get_field('be_apart_title'); ?></h4>
					<p><?php echo get_field('be_apart_sub_title'); ?></p>
					<a href="<?php echo get_field('be_apart_button_url'); ?>">
						<button class="btn">Become an Evolutionary</button>
					</a>
				</div>
			</div>
		</div>
	</div>	
	
	<!-- Start Evolutionaries Section -->
	
	<div class="evolutionaries" style="background-image:url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/bg-inner.jpg); background-size: cover;">
		<div class="container">
			<div class="inner">
				<div class="text">
					<h4><?php echo get_field('evolutionaries_title'); ?></h4>
					<p><?php echo get_field('evolutionaries_sub_title'); ?></p>
				</div>
			</div>
			<div class="inner">
				<div class="evolutionaries_box_wrapper">
				
						<?php
						// Check rows exists.
						if ( have_rows( 'evolutionaries_profiles' ) ):
							while( have_rows( 'evolutionaries_profiles' ) ) : the_row();
						?>
						<!-- box 1 -->
						<div class="box">
			
							<a href="<?php echo get_sub_field('profile_url'); ?>" target="blank" >
								<div class="image">
									<img src="<?php echo get_sub_field('profile_images'); ?>" alt="">
								</div>
							
								<div class="evol-name">
									<h5><?php echo get_sub_field('profile_name'); ?></h5>
								</div>
							</a>
						</div> 
						<?php endwhile; endif; ?>
				</div>
					
			</div>
				
			<div class="inner">
				<div class="evol-button">
					<a href="<?php echo get_field('conversation_button_url'); ?>" target="blank" class="start-btn">Start a Conversation</a>
					<a href="<?php echo get_field('directory_button_url'); ?>" target="blank" class="directory-btn">Directory</a>
				</div>
			</div>
		</div>	
		
		
		<div class="container-evol">
			<!--	<div class="box">
				<a href="#0">
					<div class="image">
						<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2020/12/hugh-forrest.png" alt="Paul O'Brien">
					</div>
				
					<div class="evol-name">
						<h1>Hugh Forrest</h1>
					</div>
				</a>
			</div>
			
			<div class="box">
				<a href="#0">
					<div class="image">
						<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2020/04/sebastian-gomez-1.png" alt="Christy Cardenas">
					</div>
				
					<div class="evol-name">
						<h1>Sebastian Gomez</h1>
					</div>
				</a>
			</div>
			
			<div class="box">
				<a href="#0">
					<div class="image">
						<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2017/01/moby.jpg" alt="Heath Butler">
					</div>
				
					<div class="evol-name">
						<h1>Moby</h1>
					</div>
				</a>
			</div>

			<div class="box">
				<a href="#0">
					<div class="image">
						<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2020/12/alicia-dean.jpg" alt="Heath Butler">
					</div>
				
					<div class="evol-name">
						<h1>Alicia Dean</h1>
					</div>
				</a>
			</div> -->
			
			<div class="">
				
			</div>
		</div>
	</div>
	
	<!-- Start Must Read Section -->
	 
	<div class="must-read">
		<div class="container">
			<div class="inner">				
				<div class="title">
					<h2><?php echo get_field('must_read_title'); ?></h2>
				</div>
				
				<div class="read-content">
				<?php
				// Check rows exists.
				if ( have_rows( 'blog_section' ) ):
				while( have_rows( 'blog_section' ) ) : the_row();
				?>
					<!-- card 1 -->
					<div class="read-box">
						 <div class="image">
							<img src="<?php echo get_sub_field('blog_image'); ?>">
						</div>
						
						<div class="read-text">
							<a href="<?php echo get_sub_field('blog_url'); ?>"><?php echo get_sub_field('blog_title'); ?></a>
						</div>
					</div>
					<?php  endwhile ;

				endif;

				?>

					<!-- card 2 -->

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
							<img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/05/NFT_Icon-400x250.png" alt="NFTs – WTH Are They?">
						</a>
					</div>
					
					<div class="read-text">
						<a href="https://mtvstaging.wpengine.com/nfts-wth-are-they/">NFTs – WTH Are They?</a>
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
	
	<!-- MediaTech industry news, capital announcements, and more. section -->
	
    <div class="section announcements_band" style="background-image:url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/MediaTech-industry-news.jpg);">
			<div class="container announcements_band_container">
				<div class="inner">				
					<div class="row">
						<div class="col-md-6">
							<h3><?php echo get_field('mediatech_industry_title'); ?></h3>
						</div>
					<div class="col-md-6">
						<form data-hs-cf-bound="true">
							<div class="form-group">
									<input type="email" placeholder="Enter your email address">
									<input type="submit" value="Get Started">
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
    </div> 
	
</body>
</html>

<!-- End HTML -->

<?php
get_footer();
