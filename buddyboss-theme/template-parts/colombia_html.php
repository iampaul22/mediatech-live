<?php
/* Template Name: colombia-html */
get_header();
?>


<style>
    .page-id-13281 div#content {
        padding: 0 !important;
    }
    .page-id-13281 div#content .container {
        max-width: 100%;
    }
    .page-id-13281 a.btn{
        position: relative;
        transition: all 300ms ease 0ms;
    }
    .page-id-13281 a.btn:hover {
        border: 2px solid transparent;
        padding: .3em 2em .3em .7em;
    }
    .page-id-13281 a.btn:after{
        content: "\35";
        color: #FFFFFF;
        line-height: inherit;
        font-size: inherit!important;
        margin-left: -1em;
        left: auto;
        font-family: ETmodules!important;
        opacity: 0;
        position: absolute;
        text-transform: none;
        font-feature-settings: "kern" off;
        font-variant: none;
        font-style: normal;
        font-weight: 400;
        text-shadow: none;
        direction: ltr;
    }
    .page-id-13281 a.btn:hover:after {
        margin-left: .3em;
        left: auto;
        margin-left: .3em;
        opacity: 1;
    }
    .banner-sec-main{
        background-image: url(https://mediatech.ventures/wp-content/uploads/2021/10/Untitled-design-1.png)!important;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        padding: 5% 0 4%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .banner-inner{
        margin: 100px auto 0 !important;
        max-width: 80% !important;
    }
    .banner-sec-main .banner-inner h1 {
        font-family: 'Montserrat';
        font-weight: 900;
        font-size: 70px;
        color: #FFFFFF!important;
        line-height: 1.2em;
    }
    .support-sec-main {
        background-position: left top;
        background-image: url(https://mediatech.ventures/wp-content/uploads/2020/10/yellow-diagonals-01-half.png) !important;
        background-repeat: no-repeat;
        background-size: 18% 85%;
        background-color: #000000!important;
        padding: 0;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .support-sec-main .support-title h2 {
        font-family: 'Montserrat';
        font-weight: 500;
        font-size: 50px;
        color: #FFFFFF!important;
        line-height: 1.24em;
        text-align: left;
        margin-bottom: 10px;
    }
    .support-title{
        margin: 0 auto 0 !important;
        max-width: 80% !important;
    }
    .support-sec-main .support-title p {
        margin-bottom: 10px;
        color: #FFFFFF!important;
    }
    .support-sec-main .support-title p a {
        color: #ffffff !important;
    }
    .support-sec-main .support-title p a:hover {
        color: #ffffff !important;
    }
    .support-title {
        padding-right: 20px!important;
        padding-bottom: 20px!important;
        padding-left: 20px!important;
        margin-right: auto!important;
        margin-bottom: -23px!important;
        margin-left: auto!important;
        padding: 2% 0;
    }
    .support-title-inner {
        min-height: 151.2px;
        padding-left: 40px!important;
        width: 80%;
        margin: 0 auto !important;
    }
    .apply-sec-main{
        background-position: right 0px center;
        background-image: url(https://mediatech.ventures/wp-content/uploads/2020/10/blue-diagonals-01.png)!important;
        background-repeat: no-repeat;
        background-size: 18% 70%;
        background-color: #000000!important;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 2% 0 0;
    }
    .apply-con-main{
        margin: 0 auto 0 !important;
        max-width: 80% !important;
    }
    .apply-inner{
        width: 80%;
        margin: 0 auto !important;
    }
    .apply-con-block{
        margin-bottom: 30px;
    }
    .apply-sec-main .apply-con-block h3{
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 60px;
        color: #ffffff !important;
        line-height: 1.2em;
        text-align: center;
    }
    .apply-sec-main .apply-con-block p {
        margin-bottom: 10px;
        color: #FFFFFF!important;
        text-align: left;
    }
    .apply-btn-block {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .apply-sec-main .apply-btn-block a{
        border: 2px solid;
        border-radius: 3px;
        font-size: 20px;
        padding: 10px 20px;
        background-color: #E02B20;
        color: #FFFFFF!important;
    }
    .apply-img-block{
        margin-bottom: 30px;
    }
    .apply-learn-title h4{
        font-family: 'Montserrat';
        font-size: 22px;
        font-weight: 500;
        color: #edf000;
        margin-bottom: 10px;
    }
    .apply-learn-title p{
        font-family: 'Montserrat';
        font-size: 22px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 20px;
    }
    .apply-list-block li{
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 400;
        list-style: disc;
        color: #ffffff;
    }
    .director-sec-main{
        padding: 2% 0;
        background-color: #000000;
    }
    .director-inner .row{
        display: flex;
        flex-wrap: wrap;
        padding: 0 15px;
        max-width: 80%;
        margin: 0 auto;
    }
    .director-inner{
        width: 80%;
        margin: 0 auto !important;
    }
    .director-inner .col-md-4{
        flex:  0 0 25%;
        max-width: 25%;
    }
    .director-inner .col-md-8{
        flex:  0 0 75%;
        max-width: 75%;
    }
    .director-inner .col-md-6{
        flex:  0 0 50%;
        max-width: 50%;
    }
    .director-con-main-inner h2 {
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 40px;
        color: #e02b20;
        line-height: 1.24em;
        text-align: left;
    }
    .director-con-main-inner p {
        font-family: 'Montserrat';
        font-weight: 400;
        font-size: 24px;
        line-height: 40px;
        color: #ffffff;
        text-align: left;
    }
    .director-btn-block{
        display: flex;
        justify-content: center;
    }
    .director-btn-block a{
        border: 2px solid;
        border-radius: 3px;
        font-size: 20px;
        padding: 10px 20px;
        background-color: #E02B20;
        color: #FFFFFF!important;
    }
    .director-img{
        margin-bottom: 30px;
    }
    .director-img-con h3{
        font-family: 'Montserrat';
        font-weight: 400;
        font-size: 22px;
        color: #ffffff;
        text-align: left;
    }
    .director-right-image-block .row {
        max-width: 100% !IMPORTANT;
    }
    .director-image-block {
        padding: 0 25px;
    }


    .combination-sec-main{
        flex: 0 0 100%;
        max-width: 100%;
        padding: 2% 0;
        background-color: #000000;
        background-size: inherit;
        background-position: right -67% center;
        background-image: url(https://mediatech.ventures/wp-content/uploads/2020/10/blue-diagonals-01.png)!important;
        background-repeat: no-repeat;
    }
    .combination-inner{
        width: 80%;
        margin: 0 auto !important;
    }
    .combination-con-inner{
        margin: 0 auto 0 !important;
        max-width: 80% !important;
    }
    .combination-learn-block{
        margin-bottom: 35px;
    }
    .combination-right-title h4{
        font-family: 'Montserrat';
        font-size: 22px;
        font-weight: 500;
        color: #edf000;
        margin-bottom: 10px;
    }
    .combination-right-title p{
        font-family: 'Montserrat';
        font-size: 22px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 20px;
    }
    .combination-right-list li{
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 400;
        color: #ffffff;
    }
    .combination-sec-main .combination-con-block h3{
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 60px;
        color: #ffffff !important;
        line-height: 1.2em;
        text-align: center;
    }
    .combination-btn-block {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }
    .combination-slider{
        margin-bottom: 50px;
    }
    .combination-slide-img{
        position: relative;
    }
    .combination-slide-link{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        display: block;
        background: rgba(0,0,0,0.3) url('https://mediatech.ventures/wp-content/plugins/slide-anything/images/slide_link.png') no-repeat center center !important;
    }
    .combination-slide-img:hover .combination-slide-link{
        opacity: 1;
        z-index: 99;
    }
    .combination-sec-main .combination-btn-block a{
        border: 2px solid;
        border-radius: 3px;
        font-size: 20px;
        padding: 10px 20px;
        background-color: #E02B20;
        color: #FFFFFF!important;
    }
    .combination-growth-title{
        margin: 50px 0 60px;
    }
    .combination-growth-title h2{
        font-family: 'Montserrat';
        font-size: 60px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 10px;
        text-align: center;
    }
    .combination-inner .row{
        display: flex;
        flex-wrap: wrap;
        padding: 0 15px;
        margin: 0 auto;
    }
    .combination-inner .col-md-6{
        flex:  0 0 50%;
        max-width: 50%;
    }
    .combination-growth-video {
        margin-right: 60px;
        min-height: 250px;
        height: 100%;
    }
    .combination-growth-video .fluid-width-video-wrapper {
        height: 100%;
    }
    .combination-con-block p{
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 20px;
    }
    .combination-con-block a{
        color: #ffffff !important;
    }

    .combination-slide


    .combination-con-block p a:hover {
        color: #ffffff !important;
    }
    .logo-sec-main{
        background-color: #000000;
        padding: 4% 0;
    }
    .logo-inner{
        width: 80%;
        margin: 0 auto !important;
    }
    .logo-con-main{
        margin: 0 auto 0 !important;
        max-width: 80% !important;
    }
    .logo-title{
        margin-bottom: 30px;
    }
    .logo-title h2{
        font-family: 'Montserrat';
        font-size: 33px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 10px;
        text-align: center;
    }
    .logo-con-main p{
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 500;
        color: #ffffff;
        margin-bottom: 10px;
        text-align: center;
    }
    .logo-slider{
        margin-bottom: 50px;
    }
    .logo-con-main p a{
        color: #E02B20 !important;
        border-bottom: 1px solid #2ea3f2;
    }
    /* .combination-con-block p a:hover {
        color: #ffffff !important;
    } */
    .background-sec-main{
        background-size: initial;
        background-repeat: repeat;
        background-image: url(https://mediatech.ventures/wp-content/uploads/2020/10/Red-Diagonal-Pattern.png);
        height: 100px;
        flex: 0 0 100%;
        max-width: 100%;
        padding: 4% 0;
        background-color: #000000;
    }
    .director-con-main-inner{
        max-width:320px;
        width: 100%;
    }

    .director-right-image-block {
    max-width: 700px;
    width: 100%;
}   
.row.director-row {
    flex-wrap: inherit;
}
.logged-in.theme-buddyboss-theme .bb-grid.site-content-grid {
    padding-top: 70px;
}
.page-id-13281 div#content .container {
    max-width: 100%;
    padding: 0;
}

@media screen and (max-width:1600px) {
    .footer-widget.area-1 {
    width: 36%;
    margin-left: 15%;
}
.director-image-block {
    padding: 0 15px;
}
.footer-widget-area.bb-footer .bb-grid {
    display: block;
    padding-top: 5%;
}
.combination-sec-main{
        background-size:50%;
    }
}


@media screen and (max-width:1400px){
    .director-img-con h3{
        font-size:17px;
    }
    .director-con-main-inner {
    max-width: 400px;
    width: 100%;
}

.director-con-main-inner p{
    font-size:17px;
    line-height:35px;
}
}


@media screen and (max-width:1280px){
    .director-img-con h3 {
    font-size: 14px;
}
.footer-widget.area-1 {
    width: 36%;
    margin-left: 20%;
}
.director-con-main-inner p {
    font-size: 15px;
    line-height: 35px;
}
}

@media screen and (max-width:1100px){
    .combination-sec-main{
        padding: 0px;
        background-repeat:repeat;
    }

    .combination-inner{
        background:#000;
    }
    .combination-sec-main {
    background-size: 80%;
}
}


@media screen and (max-width:991px){
    .director-inner .col-md-6 {
    flex: 0 0 100%;
    max-width: 100%;
    margin-top: 30px;
}
.director-inner .row{
    flex-direction:column;
}
.apply-sec-main{
    background-position:center;
    background-repeat:repeat;
    background-size:80%;
    padding:0px;

}
.apply-inner{
    background:#000;
    padding-bottom: 10px;
}
.combination-inner .col-md-6 {
    flex: 0 0 100%;
    max-width: 100%;
}
.combination-growth-video{
    margin-right: 0px;
}
.footer-widget-area.bb-footer .bb-grid {
    display: block;
    padding-top: 5%;
    padding-left: 31%;
}
.footer-widget.area-1{
    margin-left: 0px;
}
}

@media screen and (max-width:768px){
    .footer-widget-area.bb-footer .bb-grid{
        padding-left: 0px;
    }
}

@media screen and (max-width:767px){
    .banner-sec-main .banner-inner h1{
        font-size:30px;
    }
    .support-title-inner{
        width:100%;
        padding: 30px 0px 0px 20px !important;
    }
    .support-sec-main .support-title h2{
        font-size:28px;
    }

    .support-sec-main{
        background-size:100%;
        background-position:center;
    }
    .support-inner{
        background: #000;
    max-width: 80%;
    margin: 0px auto;         
    
    }
    .support-title{
        margin:0px !important;
        padding:0px !important;
    }
    .apply-sec-main{
        background-size:100%;
    }
    .apply-sec-main .apply-con-block h3{
        font-size:34px;
    }
    .director-inner .row {
    flex-direction: column;
    padding: 0px;
    margin: 0px auto;
    width: 100%;
}
.director-image-block {
    padding: 0;
}
.director-inner {
    width: 100%;
    margin: 0 auto !important;
}
.combination-growth-title h2,
.combination-sec-main .combination-con-block h3{
    font-size:40px;
}
}

</style>
<!-- Banner Section Start -->
<section class="banner-sec-main">
    <div class="container">
        <div class="banner-inner">
            <div class="banner-title">
                <h1><?php the_field('banner_heading'); ?></h1>
            </div>
        </div>
    </div>
</section>

<!-- Banner Section End -->
<!-- Support Section Start -->
<section class="support-sec-main">
    <div class="container">
        <div class="support-inner">
            <div class="support-title">
                <div class="support-title-inner">
                    <h2 style="text-align: left;">
                        <span style="font-weight: 400;"><?php the_field('find_us_expansion_heading'); ?></span>
                    </h2>
                    <p style="text-align: left;">
                        <?php the_field('find_us_expansion_description'); ?>
                        <!-- <a href="http://mediatech.ventures/?v=1662105950840">
                            <span style="font-weight: 400;">MediaTech Ventures</span>
                        </a>
                        <span style="font-weight: 400;"> and</span>
                        <a href="https://procolombia.co/en?__cf_chl_jschl_tk__=246708622f761f3ea41ed1b2b38ee47b4c17f2de-1625082477-0-Ac9DW-61hRGxqO6NIFVjOJ6QwXqcG2XlTDLixtawf6rIOg-mkakYzLy06RN8CDa4N3msZJDDexMq_BYWY28NHNW8j2mG9jnfjRy90NxuXU9rUb38JMMHylbq5hdxHM2aKZDrDh5DiMQVhkmpbvmxfVWVRXIhkCShasNOVUHHju-D1FCuDSHz16IINa-NhSDt1wA08KqeTcCtE50CQiVbp59UgvTwPMGTEKc5jeKVTtWDz7qH5UHpEnFbHsZXhc3KIjvKfjxBAzIwxr5bbIkud7-dc6A_FEVFjqnaxtbMtGfNCEc12_uk3OwT7HAKdxkqC7_LZ5ulZdfr6h_8L_OscPg1EVkL16aAXl-s7qM0u-htJtRz4qx1DazfrF3R18EoOutfhqDWZqk0KgCsE6TxM9Y?v=1662105950841"> 
                            <span style="font-weight: 400;">ProColombia</span>
                        </a>
                        <span style="font-weight: 400;"> have built a strategic partnership to foster Colombian startups seeking entry into the American market. </span>
                        <span style="font-weight: 400;">MediaTech Ventures and ProColombia are bridging the gap between the Colombian and American startup ecosystems, with the first MediaTech industry-focused incubator for Colombian startups.</span>
                        <span style="font-weight: 400;"></span> 
                    </p>
                    <p style="text-align: left;">
                        <span style="font-weight: 400;">Participants of the program gain access to MediaTech Ventures' community platform, industry experts as mentors &amp; teachers, and the ability to maximize opportunities in the U.S. and Global markets. <b>Join our next cohort</b>.</span>
                    </p>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Support Section End -->
<!-- Apply Section Start -->
<section class="apply-sec-main">
    <div class="container">
        <div class="apply-inner">
            <div class="apply-con-main">
                <div class="apply-con-main-inner">
                    <div class="apply-btn-block">
                        <?php 
                        $link = get_field('find_us_expansion_button_link');
                        if( $link ): ?>
                        <a href="<?php echo esc_url( $link ); ?>" class="apply-btn btn"><?php the_field('find_us_expansion_button_text'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="apply-con-block">
                        <h3><span style="font-weight: 400;"><?php the_field('12-weeks_market_heading');?></span></h3>
                        <p><span style="font-weight: 400;"><?php the_field('12-weeks_market_description_text');?></span></p>
                        <p><span style="font-weight: 400;"></span></p>
                    </div>
                    <div class="apply-img-block">
                        <div class="apply-img"> 
                            <img src="<?php the_field('12-weeks_market_image'); ?>">
                        </div>
                    </div>
                    <div class="apply-learn-block">
                        <div class="apply-learn-title">
                            <h4 style="text-align: left;">
                                <strong><span style="color: #edf000;"><?php the_field('12-weeks_market_title'); ?></span></strong>
                            </h4>
                            <p style="text-align: left;">
                                <span style="font-weight: 400;"><?php the_field('12-weeks_market_sub_title');?></span>
                            </p>
                        </div>
                    </div>
                    <div class="apply-list-block">
                        <?php the_field('12-weeks_market_points');?>
                        <!-- <ul>
                            <li style="text-align: left;">Identify and prioritize the opportunities that occur in global markets and in the U.S.</li>
                            <li style="text-align: left;">Position yourself as a viable and competitive solution provider in the U.S.</li>
                            <li style="text-align: left;">Understand the differences in business culture and practices in the U.S. with special regard to communication, information presentation, and distribution channels.</li>
                            <li style="text-align: left;">Define your own export cost structure to the U.S., taking into account regional variations and channels.</li>
                            <li style="text-align: left;">Build relationships with venture capital and corporate venture firms.</li>
                            <li style="text-align: left;">Rebuild your offerings based on constructive criticisms from one on one meetings with mentors and teachers.</li>
                            <li style="text-align: left;">Evaluate different regional legal and tax considerations for the incorporation of companies.</li>
                            <li style="text-align: left;">Participants of the program gain access to MediaTech Ventures' community platform, industry experts as mentors &amp; teachers, and the ability to maximize opportunities in the U.S. and Global markets by developing a key understanding and implementation of:</li>
                            <li style="text-align: left;">Competitive solution positioning.</li>
                            <li style="text-align: left;">Venture capital and Corporate venture firm relationships.</li>
                            <li style="text-align: left;">U.S. Business standard communication, presentation, and distribution tactics.</li>
                            <li style="text-align: left;">Regional-based export cost structure into the U.S.</li>
                            <li style="text-align: left;">Incorporation evaluation based on regional legal and tax variations.</li>
                            <li style="text-align: left;">Value-base Product Analysis.</li>
                            </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Apply Section End -->
<!-- Directors Section Start -->
<section class="director-sec-main">
    <div class="container">
        <div class="director-inner">
            <div class="row director-row">
                <div class="col-md-5 col-12">
                    <div class="director-con-main">
                        <div class="director-con-main-inner">
                            <h2><?php the_field('directors_heading');?></h2>
                            <p><?php the_field('directors_description');?></p>
                            <div class="director-btn-block">

                            <?php 
                            $directorlink = get_field('directors_button_link');
                            if( $link ): ?>
                                <a href="<?php echo esc_url( $directorlink ); ?>" class="director-btn btn"><?php the_field('directors_button_text');?></a>
                            <?php endif; ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="director-right-image-block">
                        <div class="row">
                            <?php
                            if( have_rows('directors') ):
                                 while( have_rows('directors') ) : the_row();
                                 $photo = get_sub_field('photo'); ?>
                                <div class="col-md-6">
                                    <div class="director-image-block">
                                        <div class="director-img">
                                            <img src="<?php echo esc_url($photo); ?>">
                                        </div>
                                        <div class="director-img-con">
                                            <h3><?php the_sub_field('name'); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                            <!-- <div class="col-md-6">
                                <div class="director-image-block">
                                    <div class="director-img">
                                        <img src="https://mediatech.ventures/wp-content/uploads/2021/10/Alejandro-Londono.png">
                                    </div>
                                    <div class="director-img-con">
                                        <h3>Alejandro Londono</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="director-image-block">
                                    <div class="director-img">
                                        <img src="https://mediatech.ventures/wp-content/uploads/2020/10/Renatta-Velasquez-BW-1.png">
                                    </div>
                                    <div class="director-img-con">
                                        <h3>Renatta Velasquez</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="director-image-block">
                                    <div class="director-img">
                                        <img src="https://mediatech.ventures/wp-content/uploads/2020/04/camilo-osuna.jpg">
                                    </div>
                                    <div class="director-img-con">
                                        <h3>Camilo Osuna Diaz</h3>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Directors Section End -->
<!-- Combination Section Start -->
<section class="combination-sec-main">
    <div class="container">
        <div class="combination-inner">
            <div class="combination-con-inner">
                <div class="combination-learn-block">
                    <div class="combination-right-title">
                        <h4>
                            <strong><span><?php the_field('right_for_you_title');?></span></strong>
                        </h4>
                        <p>
                            <span><?php the_field('right_for_you_subtitle');?></span>
                        </p>
                        <div class="combination-right-list">
                            <?php the_field('right_for_you_description');?>

                            <!-- <ol>
                                <li style="text-align: left;">Interested in expanding into the United States?</li>
                                <li style="text-align: left;">Currently operational in your country of origin?</li>
                                <li style="text-align: left;">Tech or tech-enabled? We define tech or tech-enabled businesses as any business that leverages and can scale media through technology. <b style="background-color: initial;">We are media industry-specific, and accept companies working in advertising &amp; marketing, film, video, VR/AR, PR &amp; news media, publishing, video games, sound, music, podcasts, and radio. </b></li>
                                <li style="text-align: left;">A for-profit company?</li>
                            </ol> -->
                        </div>
                        <p><?php the_field('right_for_you_join_sentance');?></p>
                    </div>
                </div>
                <div class="combination-slider-block">
                    <div class="combination-btn-block">
                        <?php 
                            $joinlink = get_field('right_for_you_button_link');
                            if( $joinlink ): 
                        ?>
                        <a href="<?php echo esc_url( $joinlink ); ?>" class="combination-btn btn"><?php the_field('right_for_you_button_text');?></a>
                        <?php endif;?>
                    </div>



                    <div class="combination-con-block">
                        <h3><span style="font-weight: 400;"><?php the_field('alumni_heading');?></span></h3>
                    </div>
                    
                    <?php if( have_rows('alumni_slider') ): ?>
                    <div class="combination-slider">
                        <?php while( have_rows('alumni_slider') ): the_row();?>
                        <div class="combination-slide-img">
                        <?php 
                        $sliderimg = get_sub_field('alumni_photo');
                        ?>
                                <img class="img-fluid" src="<?php echo esc_url($sliderimg); ?>" alt="">
                                <div class="combination-slide-link">
                                    <a href="<?php //echo esc_url( $slidelink ); ?>">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>   
                        </div> 
                        <?php endif; ?>            
<!--                         <div class="combination-slide">
                            <div class="combination-slide-img">
                                <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/5.png" alt="">
                                <div class="combination-slide-link">
                                    <a href="javascript:void(0)">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="combination-slide">
                            <div class="combination-slide-img">
                                <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/6.png" alt="">
                                <div class="combination-slide-link">
                                    <a href="javascript:void(0)">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="combination-slide">
                            <div class="combination-slide-img">
                                <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/2.png" alt="">
                                <div class="combination-slide-link">
                                    <a href="javascript:void(0)">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="combination-slide">
                            <div class="combination-slide-img">
                                <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/11.png" alt="">
                                <div class="combination-slide-link">
                                <a href="javascript:void(0)">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="combination-slide">
                            <div class="combination-slide-img">
                                <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/12.png" alt="">
                                <div class="combination-slide-link">
                                <a href="javascript:void(0)">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="combination-slide">
                            <div class="combination-slide-img">
                                <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/15.png" alt="">
                                <div class="combination-slide-link">
                                <a href="javascript:void(0)">
                                        <img src="https://mtvstaging.wpengine.com/wp-content/uploads/2022/09/slide_link-icon.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div> --> 
                    </div>
                    



                    <div class="combination-growth-title">
                        <h2>
                            <strong><span><?php the_field('be_part_of_the_growth_heading');?></span></strong>
                        </h2>
                    </div>
                </div>
                <div class="combination-growth-block">
                    <div class="combination-growth-video-block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="combination-growth-video">
                                    <?php the_field('be_part_of_the_growth_video'); ?>
                                    <!-- <iframe loading="lazy" title="Celebramos graduación de 13 empresas colombianas de tecnología con MediaTech Ventures" src="https://www.youtube.com/embed/_wyNp4PYvCg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" name="fitvid0"></iframe> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="combination-growth-video-title">
                                    <div class="combination-btn-block">
                                        <?php $applylink = get_field('be_part_of_the_growth_button_link');?>
                                        <a href="<?php echo esc_url($applylink); ?>" class="combination-btn btn"><?php the_field('be_part_of_the_growth_button_text');?></a>
                                    </div>
                                    <div class="combination-con-block">
                                        <p><?php the_field('be_part_of_the_growth_description'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Combination Section End -->
<!-- logo Section Start -->
<section class="logo-sec-main">
    <div class="container">
        <div class="logo-inner">
            <div class="logo-con-main">
                <div class="logo-con-inner">
                    <div class="logo-title">
                        <h2><?php the_field('program_supporters_heading');?></h2>
                    </div>
                </div>
                <div class="logo-slider">
                <?php if( have_rows('program_supporters_logo_slider') ): ?>
                    <?php while( have_rows('program_supporters_logo_slider') ): the_row(); 
                    $sliderlogo = get_sub_field('logo');
                    ?>
                    <div class="logo-slide">
                        <div class="logo-slide-img">
                            <img class="img-fluid" src="<?php echo esc_url($sliderlogo); ?>" alt="">
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                    <!-- <div class="logo-slide">
                        <div class="logo-slide-img">
                            <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/10/imaginnovate-white-2-1.png" alt="">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="logo-slide-img">
                            <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/11/Insperity-white-1.png" alt="">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="logo-slide-img">
                            <img class="img-fluid" src="https://mediatech.ventures/wp-content/uploads/2021/11/mccarter_english-white-1.png" alt="">
                        </div>
                    </div> -->
                </div>
                <p style="text-align: center;">
                    <?php the_field('program_supporters_sentance');?>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="background-sec-main">
    <div class="container">
        <div class="background-inner">
        
        </div>
    </div>
</section>
<!-- logo Section End -->


<script>
    jQuery(document).ready(function(){
        jQuery('.combination-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            infinite: true,
            draggable: false,
            pauseOnHover: false,
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,        
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   
  ]
            
        });
    });
    jQuery(document).ready(function(){
        jQuery('.logo-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1500,
            infinite: true,
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,        
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
   
  ]
           
        });
    });
</script>

<?php
get_footer();
