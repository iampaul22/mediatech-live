<?php
/* Template Name: investor-html */
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
	.container, .container-fluid {
    	padding-left: 0px;
    	padding-right: 0px;
	}

	#content > .container .container{
    	max-width: 1200px;
    	max-width: calc(100% - 100px);
	}

    a.btn {
        color: #FFFFFF!important;
        border: 1px solid #e21f28 !important;
        border-radius: 8px!important;
        font-size: 16px;
        font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
        font-weight: 600!important;
        text-transform: uppercase!important;
        background-color: #e21f28;
        transition: 0.4s ease-in-out;
        z-index: 999;
        cursor: pointer;
        padding: 16px 25px;
        display: inline-block;
        line-height: 16px;
    }
    a.btn:hover{
        background-color: transparent !important;
        border: 1px solid #e21f28 !important;
        color: #e21f28 !important;
    }
    a.btn.green_btn{
        background-color:#7cda24 !important;
        border-color:#7cda24 !important;
    }
    a.btn.green_btn:hover{
        background-color: transparent !important;
        border: 1px solid #e21f28 !important;
        color: #e21f28 !important;
    }
    a.btn.light_blue_btn{
        background-color:#47c5dd !important;
        border-color:#47c5dd !important;
    }
    a.btn.light_blue_btn:hover{
        background-color: transparent !important;
        border: 1px solid #e21f28 !important;
        color: #e21f28 !important;
    }
	

/*  Evolving media section */
.Evolving_media_section{
	position: relative;
	background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
	padding:200px 0 100px;
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
/* .Evolving_media_section a.btn{
	color: #FFFFFF!important;
    border: 1px solid #e21f28 !important;
    border-radius: 8px!important;
    font-size: 16px;
    font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
    font-weight: 600!important;
    text-transform: uppercase!important;
    background-color: #e21f28;
    transition: 0.4s ease-in-out;
    z-index: 999;
    cursor: pointer;
    padding: 14px 25px;
    display:inline-block;
}
.Evolving_media_section a.btn:hover{
	background-color: transparent !important;
	border: 1px solid #e21f28 !important;
	color: #e21f28 !important;
} */
/* .Evolving_media_section a.btn.green_btn{
    background-color:#7cda24 !important;
    border-color:#7cda24 !important;
}
.Evolving_media_section a.btn.green_btn:hover{
    background-color: transparent !important;
    border: 1px solid #e21f28 !important;
    color: #e21f28 !important;
} */
.Evolving_media_section .evolving_media_section_btns{ 
    margin-top:40px;
 }
.Evolving_media_section a + a{
    margin-left:40px;
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
    max-width: 350px;
    margin: 20px auto;
}
.avatar_heading span img{
	float: left;
    width: 100%;
    display: block;
}
.start_now_container h3 strong{
    font-weight: 700;
    color: #e21e27!important
}


/* announcements_band */
    .announcements_band {
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        padding:190px 0;
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
/* .move .text a.btn {
    background-color: #47c5dd;
	color: #fff;
	font-family: 'Open Sans',Helvetica,Arial,Lucida,sans-serif!important;
	font-size: 16px;
	text-transform: uppercase!important;
	border: 1px solid #47c5dd;
	border-radius: 6px;
	padding: 13px 40px;
}

.move .text a.btn:hover {
    color: #e21f28!important;
    border-color: #e21f28!important;
    border-width: 1px!important;
	background-color: transparent;
	transition: 0.4s ease-in-out;
} */
.move_btns {
    text-align: center;
    margin-top: 50px;
}
.move_btns .btn{
    min-width:120px;
    text-align: center;
}
.move_btns .btn + .btn{
    margin-left:10px;
}
/* .move .text a.btn.red_btn {
    background-color:#e21f28!important;
}
.move .text a.btn.red_btn:hover {
    color: #e21f28!important;
    border-color: #e21f28!important;
	background-color: transparent;
	transition: 0.4s ease-in-out;
} */

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
	text-align: center;
}
.evolutionaries .evol-button .btn{
    min-width: 240px;
    text-align:center;    
    font-size:15px !important;
}
.evolutionaries .evol-button .btn + .btn{
    margin-left:10px;
}

/* .evolutionaries .start-btn {
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
} */

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
    border-bottom: 1px solid #333;
	margin-bottom: 10px;
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
    padding: 10% 0;
}
.logged-in .Evolving_media_section{ padding-top: 100px !important;  }



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
	.must-read .read-text{     padding: 15px; }
	.must-read .image img {    /*height: auto;*/ min-height: 330px; max-width: 100%; object-fit: cover;}
    .Evolving_media_section a + a {    margin-left: 0;}
    .Evolving_media_section a{ margin:10px auto !important; display:table;  }
    .evolutionaries .evol-button .btn{ margin:10px auto !important; display:table; }
    .avatar_heading span {    display: table;    width: 100%;    max-width: 260px;    margin: 20px auto;}

}
.footer-widget-area.bb-footer {
    padding-top: 4%;
}

@media all and (max-width: 479px) {
	.evolutionaries .box {    width: calc(100% - 30px);    max-width: 215px;}
	#content > .container .container { max-width: calc(100% - 40px); }
	.move_btns .btn + .btn { margin: 10px 0; }
	.must-read .image img { min-height: 240px; }
}
@media only screen and ( min-width : 768px ) and ( max-width: 980px ) {

	.announcements_band {                padding: 90px 0;            }
    .announcements_band .col-md-6 {                flex: 0 0 100%;                max-width: 100%;            }
    /*.announcements_band h3 {                font-size:30px;                line-height:36px;                margin-bottom:40px !important;            }*/

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
@media only screen and (max-width: 864px) {
	.evolutionaries .evol-button .btn + .btn {
    	margin: 10px 10px;
	}
	.must-read .read-text {
    	padding: 10px;
    }
}

/* after login */
@media only screen and (min-width : 768px) and (max-width: 1100px) {
	.logged-in .must-read .read-box {    margin-bottom: 50px;    padding: 0 5px; }
}
@media all and (max-width : 1024px){
	.logged-in.sticky-header .site-content{ padding: 0 !important;  }
	.logged-in .Evolving_media_section {    padding-top: 100px !important;}
	
}
@media all and (max-width : 1084px) {
	.announcements_band h3 { font-size: 30px; line-height: 36px; margin-bottom: 40px !important; }
	.announcements_band .row { flex-direction: column; }
	.announcements_band .col-md-6{ max-width: 100%;}
}



</style>

	<!--  Evolving media section -->
	<section class="Evolving_media_section" style="background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/home-banner.jpg);">
		<div class="container">
			<div class="inner">
				<h1><?php echo the_field('investors_section_title'); ?></h1>
				<p><?php echo the_field('investors_section_sub_title'); ?></p>
                <div class="evolving_media_section_btns">
                    <a href="<?php echo the_field('investors_button1__url'); ?>" class="btn">REGISTER & CONNECT</a>
                    <a href="<?php echo the_field('investors_button2_url'); ?>" class="btn green_btn">WORK WITH US</a>
                </div>
			</div>
		</div>
	</section>

	<!-- Start now section -->
	<div class="start_now_container">	
		<div class="container">			
			<div class="inner">
				<h2><?php echo the_field('more_than_title'); ?></h2>
				<p><?php the_field('more_than_content'); ?></p>
			</div>

			<div class="inner">
				<h3><?php echo the_field('more_than_inner_text1'); ?><strong><?php echo the_field('more_than_inner_text2'); ?></strong></h3>
				<div class="avatar_heading">
                    <span>
					    <img src="<?php echo the_field ('more_than_inner_image'); ?>">
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
					<h4><?php echo the_field('never_stops_title'); ?></h4>
					<p><?php echo the_field('never_stops_sub_title'); ?></p>
                    <div class="move_btns">
                        <a href="<?php echo the_field('never_stops_button1_url'); ?>" class="btn light_blue_btn">Join</a>
                        <a href="<?php echo the_field('never_stops_button2_url'); ?>" class="btn">Thesis</a>                        
                    </div>
				</div>
			</div>
		</div>
	</div>	
	
	<!-- Start Evolutionaries Section -->
	
	 <div class="evolutionaries" style="background-image:url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/bg-inner.jpg); background-size: cover;">
		<div class="container">
			<div class="inner">
				<div class="text">
					<h4><?php echo the_field('evolutionaries_title'); ?></h4>
					<p><?php echo the_field('evolutionaries_sub_title'); ?></p>
				</div>
			</div>
			<div class="inner">
				<div class="evolutionaries_box_wrapper">
				<?php
						// Check rows exists.
						if ( have_rows( 'evolutionaries_profiles_section' ) ):
							while( have_rows( 'evolutionaries_profiles_section' ) ) : the_row();
						?>
                    <div class="box">
                        <a href="<?php echo get_sub_field('evolutionaries_profile_url'); ?>">
                            <div class="image">
                                <img src="<?php echo get_sub_field('evolutionaries_profile_image'); ?>" alt="Paul O'Brien">
                            </div>
                        
                            <div class="evol-name">
                                <h5><?php echo get_sub_field('evolutionaries_profile_title'); ?></h5>
                            </div>
                        </a>
                    </div>
			<?php endwhile; endif; ?>
                  <!--  <div class="box">
                        <a href="https://mtvstaging.wpengine.com/profile/fetters/">
                            <div class="image">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/01/scott-fetters-1.jpg" alt="Christy Cardenas">
                            </div>
                        
                            <div class="evol-name">
                                <h5>Scott Fetters</h5>
                            </div>
                        </a>
                    </div>
                    
                    <div class="box">
                        <a href="https://mtvstaging.wpengine.com/profile/chrishoward/">
                            <div class="image">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2020/11/Chris-Howard-The-Rattle.png" alt="Heath Butler">
                            </div>
                        
                            <div class="evol-name">
                                <h5>Chris Howard</h5>
                            </div>
                        </a>
                    </div>

                    <div class="box">
                        <a href="https://mtvstaging.wpengine.com/profile/joelee/">
                            <div class="image">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/01/joe-lee.jpg" alt="Heath Butler">
                            </div>
                        
                            <div class="evol-name">
                                <h5>Joe Lee</h5>
                            </div>
                        </a>
                    </div> -->
				</div>
			</div>
			<div class="inner">
				<div class="evol-button">
					<a href="<?php the_field('evolutionaries_button1_url'); ?>" target="blank" class="btn">Start a Conversation</a>
					<a href="<?php the_field('evolutionaries_button2_url'); ?>" target="blank" class="btn light_blue_btn">Directory</a>
				</div>
			</div>
		</div>
	</div> 
	
	<!-- Start Must Read Section -->
	 
	<div class="must-read">
		<div class="container">
			<div class="inner">				
				<div class="title">
					<h2><?php echo the_field('must_read_title'); ?></h2>
				</div>				
				<div class="read-content">
					<?php
				// Check rows exists.
				if ( have_rows( 'must_read_blog_section' ) ):
				while( have_rows( 'must_read_blog_section' ) ) : the_row();
				?>
                    <div class="read-box">  
						<div class="image">
                            <a href="https://mtvstaging.wpengine.com/nftbooks-heres-why-to-buy-them/">
                                <img src="<?php echo get_sub_field('must_read_image'); ?>">
                            </a>
                        </div>					
                        <div class="read-text">
                            <a href="<?php echo get_sub_field('must_read_url'); ?>">
                                <p><?php echo get_sub_field('must_read_title'); ?></p>
                            </a>
                        </div>
                    </div>
					<?php  endwhile ;

				endif;

				?>
                    
                   <!-- <div class="read-box">
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/ira-rubenstein-powerhouse-new-media-pioneer-and-digital-marketing-executive/">
                                <p>Ira Rubenstein, Powerhouse New Media Pioneer and Digital Marketing Executive</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/nftbooks-heres-why-to-buy-them/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/06/NFT_book-400x250.png">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/nftbooks-heres-why-to-buy-them/">
                                <p>NFTBooks? Here’s Why to Buy Them</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/the-innovation-hub-of-houston/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/10/Texas-Media-Startups-400x250.png">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/the-innovation-hub-of-houston/">
                                <p>The Innovation Hub of Houston</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/real-world-fan-engagement-through-nfts/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/08/GENUINO-400x250.png">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/real-world-fan-engagement-through-nfts/">
                                <p>Real World Fan Engagement through NFTs</p>
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/celebrities-investments-will-spacs-help-artists-invest-in-startups/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/05/Celebrity-SPACS-min-1-400x250.png">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/celebrities-investments-will-spacs-help-artists-invest-in-startups/">
                                <p>Celebrities + Investments: Will SPACs help Artists Invest in Startups?</p>
                            </a>
                        </div>
                    </div>
                    
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/decentralized-social-media/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/10/decentralized-social-media-400x250.png">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/decentralized-social-media/">
                                <p>Decentralized Social Media</p>
                            </a>
                        </div> 
                    </div>
                    
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/dell-for-startups/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/06/dell-mediatech-400x250.jpg">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/dell-for-startups/">
                                <p>Dell for Startups</p>
                            </a>
                        </div>
                    </div>
                    <div class="read-box">
                        <div class="image">
                            <a href="https://mtvstaging.wpengine.com/nfts-wth-are-they/">
                                <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2021/05/NFT_Icon-400x250.png">
                            </a>
                        </div>
                        
                        <div class="read-text">
                            <a href="https://mtvstaging.wpengine.com/nfts-wth-are-they/">
                                <p>NFTs – WTH Are They?</p>
                            </a>
                        </div> -->
                    </div>
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
							<h3><?php echo the_field('mediatech_industry_title'); ?></h3>
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


<?php
get_footer();
