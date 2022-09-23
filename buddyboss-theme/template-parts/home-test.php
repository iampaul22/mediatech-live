<?php

/* Template Name: home-test */

get_header();
?>
<style type = 'text/css'>

.page-id-12421 .site-content {
    padding: 0px !important;
}
@media all and (max-width: 980px) {
	.logged-in  #content {
		padding-top: 76px !important;
	}
}

body {
    padding-top: 76px;
}
body.logged-in {
    padding-top: 0;
}
body.logged-in header#masthead {
    top: auto;
}
header#masthead{ top:0; }

p:empty {
    display:none;
}
.page-template-home-test #content > .container {
    max-width: 100%;
}
.page-template-test #content {
    padding-top:0 !important;
}
.section {
    width:100% !important;
    flex:auto !important }
    .banner_section {
        text-align: center;
        padding-top: 76px;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .banner_section h1 {
        color: #fff;
        line-height: 76px;
    }
    .banner_section .banner_content {
        max-width: 1000px;
        margin: 0 auto;
        padding: 130px 0 35px;
    }
    .banner_section a.btn {
        font-size: 16px;
        line-height: 20px;
        color: #fff;
        font-weight: 400;
        padding: 14px 30px;
        border:1px solid #e21f28;
        display: inline-block;
        min-width: 130px;
        text-align: center;
        background-color: #e21f28;
        border-radius: 8px;
        transition: all 0.5s ease 0s;
    }
    .banner_section a.btn:hover {
        background-color:transparent;
        color: #e21f28;
    }

    .banner_section .btn.btn-secondary {
        background-color:#47c5dd;
        border-color:#47c5dd;
    }
    .banner_section .btn.btn-secondary:hover {
        background-color:transparent;
    }

    .banner_section .btn.btn-info {
        background-color:#616161;
        border-color:#616161;
    }
    .banner_section .btn.btn-info:hover {
        background-color:transparent;
    }
    .banner_section .trans_btn {
        font-size: 17px;
        line-height: 24px;
        color: #fff;
        font-weight: 600;
        border: 1px solid #fff;
        padding: 11px 20px;
        border-radius: 5px;
        position: relative;
        transition: all 0.5s ease 0s;
        display: inline-block;
    }
    .banner_section .trans_btn:after {
        content: '';
        height: 10px;
        width: 10px;
        border-right: 2px solid #fff;
        border-top: 2px solid #fff;
        display: inline-block;
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY( -50% ) rotate( 45deg );
        opacity: 0;
        transition: all 0.5s ease 0s;
    }
    .banner_section .trans_btn:hover {
        border-color: transparent;
    }
    .banner_section .trans_btn:hover:after {
        opacity: 1;
    }

    .banner_section ul {
        margin:0 0 40px;
    }
    .banner_section ul li::marker {
        content:none !important }
        .banner_section ul li {
            display:inline-block;
            margin:0 3px;
        }
        .banner_section .banner_img img {
            max-width:735px;
            width:100%;
        }

        .media_evolved_band {
            background-color: #151515;
            padding-bottom: 100px;
        }
        .media_evolved_band .media_evolved_content {
            padding:150px 0;
        }
        .media_evolved_band .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
            align-items: center;
        }
        .media_evolved_band .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
            padding: 0 15px;
            position: relative;
        }
        .media_evolved_band h2 {
            position: relative;
            color: #fff;
            padding-bottom: 30px;
            margin-bottom: 30px;
            line-height:58px;
        }
        .media_evolved_band h2:after {
            content: '';
            width: 130px;
            height: 3px;
            background-color: #e21e27;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .media_evolved_band p {
            color:#fff;
        }
        .media_evolved_band .red_btn {
            font-size: 16px;
            line-height: 22px;
            color: #fff;
            font-weight: 700;
            background-color: #e21f28;
            border:1px solid #e21f28;
            padding: 13px 25px;
            display: inline-block;
            border-radius: 8px;
            transition: all 0.5s ease 0s;
        }
        .media_evolved_band .red_btn:hover {
            background-color:transparent;
            color:#e21f28;
        }
        .media_evolved_band .media_video_div {
            position: relative;
            height:100%;
            text-align: center;
        }
        .media_evolved_band .media_video_div iframe {
            position: absolute;
            top: 50%;
            transform: translateY( -50% );
            left: 0;
            width:560px;
        }
        .media_evolved_band p:empty {
            display: none;
        }

        /* global media tech section CSS */
        .global-mediatech-section {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            padding:120px 0 100px;
        }
        .global-mediatech-section .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .global-mediatech-section .col-md-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
            padding: 0 15px;
        }
        .global-mediatech-section .col-md-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            padding: 0 15px;
        }
        .global-mediatech-section .col-md-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            padding: 0 15px;
        }
        .global-mediatech-section .col-md-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
            padding: 0 15px;
        }

        .global-mediatech-section h2 {
            font-weight: 700;
            font-size: 46px;
            color: #FFFFFF!important;
            line-height: 52px;
            width: 270px;
            position: relative;
            padding-bottom:25px;
            margin-bottom:45px;
        }
        .global-mediatech-section h2:after {
            content: '';
            width: 130px;
            height: 3px;
            background-color: #e21e27;
            position: absolute;
            bottom: 0;
            left: 0;
        }
        .global-mediatech-section .discover-btn {
            color: #FFFFFF;
            border:1px solid #e21f28;
            border-radius: 8px;
            font-size: 16px;
            font-family: 'Open Sans', Helvetica, Arial, Lucida, sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            background-color: #e21f28;
            padding-top: 10px;
            padding-right: 30px;
            padding-bottom: 10px;
            padding-left: 30px;
        }
        .global-mediatech-section .discover-btn:hover {
            background: transparent;
        }
        .global-mediatech-section .box {
            display: flex;
            align-items: flex-start;
            margin-bottom: 40px;
            transition: all 0.5s ease 0s;
            padding: 25px;
            border-bottom: 1px solid transparent;
        }
        .global-mediatech-section .box:last-child {
            margin-bottom:20px;
        }
        .global-mediatech-section .box_img img {
            height: 178px;
            width: 178px;
            border-radius: 100%;
            margin-right: 30px;
        }
        .global-mediatech-section  .inner {
            margin-top:-25px;
        }
        .global-mediatech-section .box .content {
            width: 450px;
        }
        .global-mediatech-section .box h3 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 30px;
            color: #f5ed56;
            margin-bottom: 10px;
        }
        .global-mediatech-section .box .content-info {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 16px;
            color: #ffffff;
            margin-bottom: 0px;
            max-width: 460px;
        }
        .global-mediatech-section .content-info a {
            background: #47c5dd;
            display: inline-block;
            padding: 10px 35px ;
            border-radius: 8px;
            text-transform: uppercase !important;
            margin-top: 12px;
            color: #ffffff;
        }
        .global-mediatech-section .content-info a:hover {
            background:#e21f28;
        }
        .global-mediatech-section .heading {
            width: 80%;
        }
        .global-mediatech-section .inner-box {
            width: 450px;
        }
        .global-mediatech-section .inner-box h3 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 30px;
            color: #f5ed56!important;
            margin-bottom: 10px;
        }
        .global-mediatech-section .discover-btn, .global-mediatech-section .content-info a {
            transition: all 0.5s ease 0s;
        }
        .global-mediatech-section .box:hover {
            background-color: #121212;
            border-bottom: 1px solid red;
        }
        p:last-child {
            margin-bottom: 0;
        }

        /* .global-mediatech-section {
        position: relative;
        background-color:#121212;
    }
    .global-mediatech-section:after {
        content: '';
        background-image: url( https://mtvstaging.wpengine.com/wp-content/uploads/2022/06/new-gobal-mediatech-network.png );
        height: 100%;
        position: absolute;
        right: 0;
        width: 62%;
        top: 0;
    }
    .global-mediatech-section:before {
        content:'';
    }
    */

    /**/
    .popular-mediatech-section {
        background-color: #121212;
        padding: 100px 0 !important;
    }
    .popular-mediatech-section .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .popular-mediatech-section  .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
        padding: 0 15px;
    }
    .popular-mediatech-section  .col-md-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
        padding: 0 15px;
        position: relative;
    }
    .popular-mediatech-section h2 {
        font-weight: 700;
        font-size: 46px;
        color: #FFFFFF!important;
        line-height: 52px;
    }
    .popular-mediatech-section .col-md-4 h2 {
        position: relative;
        padding-bottom:20px;
        margin-bottom:25px;
    }
    .popular-mediatech-section .col-md-4 h2::after {
        content: '';
        width: 130px;
        height: 3px;
        background-color: #e21e27;
        position: absolute;
        bottom: 0px;
        left: 0;
    }

    .popular-mediatech-section {
        background-color: #151515!important;
        padding: 4% 0;
    }
    .popular-mediatech-section .wp-block-columns {
        width: 80%;
        max-width: 1080px;
        margin: auto;
        position: relative;
        padding: 2% 0;
    }
    .popular-mediatech-section .psac-post-carousel.psac-design-1 .psac-post-image-bg::before {
        content: '';
        opacity: 0.8;
        background: -webkit-linear-gradient( bottom, transparent, #e21e27 );
        background: -o-linear-gradient( bottom, transparent, #000 );
        background: -moz-linear-gradient( bottom, transparent, #000 );
        background: -webkit-gradient( linear, left top, left bottom, from( transparent ), to( #e21e27 ) );
        background: -webkit-linear-gradient( top, transparent, #000 );
        background: -o-linear-gradient( top, transparent, #000 );
        background: -webkit-gradient( linear, left top, left bottom, from( transparent ), to( #e21e27 ) );
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear;
    }
    .popular-mediatech-section .psac-post-carousel.psac-design-1 .psac-post-title {
        font-size: 20px;
        line-height: 1.3em;
        margin-bottom: 30px !important;
        text-align: left;
        font-weight: 500;
    }
    .popular-mediatech-section .psac-post-carousel-slide .psac-post-content {
        position: absolute;
        bottom: 5px;
        padding: 0 10px;
        width: 100%;
        text-align: left;
    }
    .popular-mediatech-section a.psac-readmorebtn {
        color: #cac34b !important;
        font-size: 14px;
        text-transform: uppercase !important;
        padding: 8px 28px 8px 0 !important;
        position: relative;
        border: none;
    }
    .popular-mediatech-section .psac-post-content .psac-readmorebtn::before {
        content: '5';
        position: absolute;
        font-family: ETmodules !important;
        right: 0;
        top: 50%;
        transform: translatey( -50% );
        font-size: 20px;
    }

    .popular-mediatech-section .psac-post-carousel.psac-design-1 .psac-post-carousel-content {
        bottom: 55px;
    }
    .popular-mediatech-section .psac-post-carousel.psac-design-1 .psac-post-carousel-content .psac-post-meta {
        text-align: left;
    }

    /*Evolved section*/
    .section.media-evolved-section {
        background-image: url( https://mediatech.ventures/wp-content/uploads/2020/10/Media-Evolved.jpg );
        background-repeat: no-repeat;
        background-size: cover;
        padding: 100px 0;
    }
    .section.media-evolved-section h2.wpsisac-slide-title {
        font-size: 36px;
        line-height: 42px;
        color:#e21e27;
        font-weight: 700;
    }
    .section.media-evolved-section .wpsisac-slider-short-content p {
        font-weight: 500;
        font-size: 18px ;
        line-height: 26px;
        color: #fff;
    }
    .section.media-evolved-section .blue-btn {
        margin-right: 15px;
        min-width: 100px;
        color: #fff;
        background-color: #47c5dd;
        border-radius: 8px;
        border: 1px solid #47c5dd;
        padding: 10px 15px;
        text-transform: uppercase;
        font-weight: 600;
    }
    .section.media-evolved-section .blue-btn:hover {
        color: #e21e27;
        border: 1px solid #e21e27;
        background: transparent;
    }
    .section.media-evolved-section .blue-btn + a {
        margin-right: 15px;
        min-width: 100px;
        color: #fff;
        background-color: transparent;
        border-radius: 8px;
        border: 1px solid #47c5dd;
        padding: 10px 15px;
        text-transform: uppercase;
        font-weight: 600;
    }
    .section.media-evolved-section .blue-btn + a:hover {
        color: #e21e27;
        border: 1px solid #e21e27;
        background: transparent;
    }
    .section.media-evolved-section .wpsisac-content-right img {
        border: 2px solid #e21e27;
        border-radius: 100%;
        height: 320px;
        width: 320px;
        object-fit: cover;
    }
    .section.media-evolved-section .wpsisac-slick-slider.design-4 .wpsisac-image-slide .wpsisac-slide-wrap .wpsisac-content-left {
        padding:0 15px !important;
    }
    /* programs_initiatives section */
    .programs_initiatives {
        padding: 110px 0;
        background-image: url( https://mediatech.ventures/wp-content/uploads/2020/10/Programs-and-Initiatives-Evolution-in-Action.jpg );
        background-size: cover;
        background-repeat: no-repeat;
    }
    .programs_initiatives h2 {
        position: relative;
        color: #fff;
        padding-bottom: 30px;
        margin-bottom: 30px;
        font-size: 46px;
        line-height: 54px;
    }
    .programs_initiatives p {
        font-size: 16px;
        line-height: 22px;
        color: #d2d1d1;
        font-weight: 400;
        text-align: center;
    }
    .programs_initiatives h2:after {
        content: '';
        width: 130px;
        height: 3px;
        background-color: #e21e27;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .programs_initiatives img {
        border-radius: 100%;
        margin: 25px auto;
    }
    .programs_initiatives .programs_initiatives_box h3 {
        font-weight: 700;
        font-size: 27px;
        line-height: 36px;
        color: #47c4dd;
        text-align: center;
    }
    .programs_initiatives .programs_initiatives_box p {
        font-size: 16px;
        line-height: 22px;
        font-weight: 400;
        color: #fff;
    }
    .programs_initiatives_slider .slick-dots li button {
        width: 10px;
        height: 10px;
        font-size: 0;
        padding: 0;
        margin-right: 3px;
        background: rgb( 0 0 0 / 33% );
    }
    .programs_initiatives h2 {
        text-align: center;
    }
    .programs_initiatives h2:after {
        right: 0;
        margin: 0 auto;
    }
    .programs_initiatives .programs_initiatives_box p {
        font-size: 16px;
        line-height: 26px;
        font-weight: 400;
        color: #fff;
    }
    .programs_initiatives .slick-slide {
        padding:0 15px;
    }

    /**/
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
    .announcements_band .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .announcements_band .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
        padding: 0 15px;
    }
    .announcements_band h3 {
        font-size: 37px;
        line-height: 46px;
        color: #000;
        font-weight: 700;
    }
    .announcements_band input[ type = 'submit' ] {
        background-color: #e21f28;
        color: #fff;
        font-size: 16px;
        line-height: 24px;
        font-weight: 700 !important;
        font-family: inherit !important;
        height: auto;
        padding: 20px 30px !important;
        border-radius: 0 5px 5px 0;
        letter-spacing: 0;
        position: relative;
        left: -5px;
    }
    .announcements_band input[ type = 'email' ] {
        font-family: inherit !important;
        height: auto;
        padding: 20px 25px !important;
        border-radius: 5px 0 0 5px;
        background: transparent;
        border: 2px solid #000;
        width: calc( 100% - 165px );
        border-right: 0;
    }
    .announcements_band .row {
        align-items: center;
    }
    .announcements_band h3, .announcements_band form {
        margin-bottom: 0 !important;
    }

    @media all and ( max-width: 767px ) {
        .banner_section {
            padding-top:0 !important;
        }
        .banner_section h1 {
            font-size: 30px;
            line-height: 36px;
        }
        .banner_section .banner_content {
            padding: 50px 0 30px;
        }
        .banner_section a.btn {
            margin:10px 5px;
        }

        .media_evolved_band {
            padding:160px 0 40px;
            position: relative;
        }
        .media_evolved_band .col-md-6 {
            max-width:100%;
            flex:0 0 100%;
        }
        .media_evolved_band .media_video_div img {
            display:none;
        }
        .media_evolved_band .media_video_div iframe {
            position: relative;
            top: 0;
            transform: none;
            left: 0;
            width: 100%;
            min-height: 210px;
            height:auto;
        }
        .media_evolved_band .media_evolved_content {
            padding: 30px 0 0;
            text-align: center;
        }
        .media_evolved_band .col-md-6 {
            position: static;
        }
        .media_evolved_band h2 {
            font-size: 24px;
            line-height: 30px;
            max-width: 250px;
            margin: 0 auto;
            padding-bottom:15px !important;
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
        }
        .media_evolved_band h2:after {
            right: 0;
            margin: 0 auto;
        }

        .global-mediatech-section {
            padding: 50px 0 25px;
        }
        .global-mediatech-section .col-md-4, .global-mediatech-section .col-md-8 {
            max-width:100%;
            flex:0 0 100%;
        }
        .global-mediatech-section h2 {
            max-width: 320px;
            font-size: 24px;
            line-height: 30px;
            text-align: center;
            width: auto;
            margin: 0 auto 30px;
            padding-bottom: 15px;
        }
        .global-mediatech-section h2:after {
            right:0;
            margin:0 auto;
        }
        .global-mediatech-section .discover-btn {
            display:table;
            margin:0 auto;
        }
        .global-mediatech-section .inner {
            margin-top: 60px;
        }
        .global-mediatech-section .box {
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
        }
        .global-mediatech-section .box .box_img {
            display:none;
            margin-bottom:30px;
            margin-right:0;
        }

        .popular-mediatech-section .col-md-4, .popular-mediatech-section .col-md-8 {
            max-width:100%;
            flex:0 0 100%;
        }
        .popular-mediatech-section h2 {
            font-size: 36px;
            line-height: 42px;
        }
        section.section.popular-mediatech-section {
            padding: 50px 15px !important;
        }

        .section.media-evolved-section {
            padding:50px 0;
        }
        .section.media-evolved-section .wpsisac-slick-slider.design-4 .wpsisac-image-slide .wpsisac-slide-wrap .wpsisac-content-left {
            padding:0 15px !important;
        }
        .section.media-evolved-section .wpsisac-slide-title {
            margin-bottom:20px;
        }
        .section.media-evolved-section .wpsisac-content-right {
            margin-top:30px !important;
        }

        .programs_initiatives {
            padding: 50px 0;
            background-position: left;
        }
        .programs_initiatives h2 {
            font-size: 24px;
            line-height: 30px;
            padding-bottom: 15px;
        }

        .announcements_band {
            padding:60px 0;
        }
        .announcements_band h3 {
            font-size:24px;
            line-height:30px;
            margin-bottom: 25px !important;
        }
        .announcements_band .col-md-6 {
            max-width:100%;
            flex:0 0 100%;
        }
        .announcements_band input[ type = 'submit' ] {
            width: 100%;
            border-radius: 5px;
            padding: 13px 20px !important;
            margin-top: 20px !important;
        }
        .announcements_band input[ type = 'email' ] {
            width: 100%;
            border-right: 2px solid #000;
            border-radius: 5px;
            padding: 16px 20px !important;
        }
        .global-mediatech-section .content-info a {
            margin-top:5px;
        }

    }

    @media only screen and ( min-width : 501px ) and ( max-width: 767px ) {
        .media_evolved_band .media_video_div iframe {
            min-height:400px }
            .section.popular-mediatech-section .container {
                width:90% !important;
            }
            .section.announcements_band .container,  .programs_initiatives .container, .section.media-evolved-section .container,  .global-mediatech-section .container, .section.media_evolved_band .container,  .banner_section .container {
                max-width: 1080px;
                width: 80%;
            }
            .section.media-evolved-section .container {
                width:90%;
            }
        }
        @media only screen and ( min-width : 641px ) and ( max-width: 767px ) {
            .section.media-evolved-section .wpsisac-content-right img {
                height:160px;
                width:160px;
            }
        }
        @media only screen and ( min-width : 768px ) and ( max-width: 980px ) {
            .section.announcements_band .container,  .programs_initiatives .container, .section.media-evolved-section .container,  .global-mediatech-section .container, .section.media_evolved_band .container,  .banner_section .container {
                max-width: 1080px;
                width: 80%;
            }
            .popular-mediatech-section .container {
                max-width: 1080px;
                width: 90%;
            }
            .banner_section h1 {
                font-size:50px;
                line-height:58px;
            }
            .banner_section .banner_content {
                padding-top:0 !important;
            }

            .media_evolved_band {
                padding: 150px 0 70px;
                position: relative;
            }
            .media_evolved_band .media_evolved_content {
                padding: 50px 0 0;
            }
            .media_evolved_band h2 {
                font-size: 30px;
                line-height: 38px;
                padding-bottom: 15px;
                position: absolute;
                top: 50px;
                left: 0;
                width: calc( 80% - 30px );
                margin: 0 auto;
                right: 0;
            }
            .media_evolved_band .col-md-6 {
                max-width:100%;
                flex:0 0 100%;
                position: static;
            }
            .media_evolved_band .media_video_div img {
                display:none;
            }
            .media_evolved_band .media_video_div {
                padding-top: 56.25%;
            }
            .global-mediatech-section {
                padding: 70px 0 30px;
            }
            .global-mediatech-section .box {
                flex-wrap: wrap;
            }
            .global-mediatech-section .box_img img {
                margin-right: 30px;
                margin-bottom: 30px;
                height: 137px;
                width: 137px;
            }
            .global-mediatech-section h2 {
                font-size: 30px;
                line-height: 38px;
                padding-bottom: 15px;
                width: auto;
            }

            .global-mediatech-section .discover-btn {
                padding-right: 20px;
                padding-left: 20px;
            }
            .global-mediatech-section .content-info a {
                margin-top:0 !important;
            }

            .popular-mediatech-section .col-md-4 h2 {
                font-size: 36px;
                line-height: 44px;
            }
            .popular-mediatech-section {
                padding: 70px 0 !important;
            }

            .section.media-evolved-section {
                padding:50px 0 !important;
            }
            .section.media-evolved-section .wpsisac-content-right img {
                height: 210px;
                width: 210px;
            }
            .section.media-evolved-section .wpsisac-slick-slider.design-4 .wpsisac-image-slide .wpsisac-slide-wrap .wpsisac-content-left {
                padding:0 15px 30px 0;
            }
            .section.media-evolved-section .wpsisac-content-right {
                padding-right:0 !important;
            }

            .programs_initiatives {
                padding: 60px 0 40px;
            }
            .programs_initiatives h2 {
                font-size: 30px;
                line-height: 38px;
                padding-bottom: 15px;
                text-align:center;
            }
            .programs_initiatives .slick-slide {
                padding:0 15px;
            }
            .programs_initiatives .programs_initiatives_box h3 {
                font-size: 24px;
                line-height: 32px;
            }

            .announcements_band {
                padding: 90px 0;
            }
            .announcements_band .col-md-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .announcements_band h3 {
                font-size:30px;
                line-height:36px;
                margin-bottom:40px !important;
            }
            .announcements_band input[ type = 'email' ] {
                width: calc( 100% - 165px );
            }

            .global-mediatech-section .box .box_img {
                display: none;
            }

        }

        @media only screen and ( min-width : 981px ) and ( max-width: 1024px ) {
            .popular-mediatech-section .container, .section.announcements_band .container,  .programs_initiatives .container, .section.media-evolved-section .container,  .global-mediatech-section .container, .section.media_evolved_band .container,  .banner_section .container {
                padding:0 60px;
            }
            .programs_initiatives .slick-slide {
                padding:0 15px;
            }
            .announcements_band {
                padding: 90px 0;
            }
            .media_evolved_band .media_video_div iframe {
                width: 100%;
            }
            .media_evolved_band .media_video_div {
                padding-left:40px !important;
            }
            .global-mediatech-section .box_img img {
                height: 130px;
                width: 130px;
            }
            .global-mediatech-section .box .content {
                padding-left:25px;
            }
            .media_evolved_band h2 {
                font-size: 46px;
                line-height: 52px;
            }
            .programs_initiatives h2, .popular-mediatech-section .col-md-4 h2, .global-mediatech-section h2 {
                font-size: 36px;
                line-height: 42px;
            }
			
			}
        }
        @media only screen and ( min-width : 1025px ) and ( max-width: 1200px ) {
            .section.announcements_band .container,  .programs_initiatives .container, .section.media-evolved-section .container,  .global-mediatech-section .container, .section.media_evolved_band .container,  .banner_section .container {
                width: 80%;
            }
            .popular-mediatech-section .container {
                width: 90%;
            }
            .media_evolved_band .media_video_div iframe {
                width:100% !important }
                .media_evolved_band .media_video_div {
                    padding-left:40px;
                }
                .global-mediatech-section .box .content {
                    width: calc( 100% - 145px );
                }

            }

        /* After login  media query */

        @media only screen and ( min-width : 1025px ) and ( max-width: 1400px ) {
            .logged-in .media_evolved_band .media_video_div iframe{ width:100% !important; }
            .logged-in .global-mediatech-section .box .content {    width: calc(100% - 208px);}
            .logged-in .media_video_div img{ padding-left:30px }
        }
        @media only screen and ( min-width : 1025px ) and ( max-width: 1100px ) {
            .logged-in .section.announcements_band .col-md-6:first-child{     flex: 0 0 40%;    max-width: 40%;    }
            .logged-in .section.announcements_band .col-md-6:last-child{     flex: 0 0 60%;    max-width: 60%;    }
            .logged-in .announcements_band h3{ font-size: 32px;    line-height: 40px; }
        }
        @media only screen and ( min-width : 800px ) and ( max-width: 1024px ) {
            .logged-in .section.announcements_band .container, 
            .logged-in .programs_initiatives .container, 
            .logged-in .section.media-evolved-section .container, 
            .logged-in .global-mediatech-section .container, 
            .logged-in .section.media_evolved_band .container, 
            .logged-in .banner_section .container {    max-width: 1080px;    width: 100%;}
            .logged-in .media_evolved_band h2{     width: calc( 100% - 30px ); }
            .logged-in .media_evolved_band .media_video_div iframe{ width:100% !important; }
            .logged-in .global-mediatech-section h2 {    font-size: 26px; }
            .logged-in .global-mediatech-section .discover-btn {    padding-right: 15px;    padding-left: 15px;     font-size: 15px;}
            .logged-in .popular-mediatech-section .container{     width: 100%; }
            .logged-in .popular-mediatech-section .col-md-4 h2 {    font-size: 28px;    line-height: 42px;}
            .logged-in .popular-mediatech-section .container, 
            .logged-in .section.announcements_band .container, 
            .logged-in .programs_initiatives .container, 
            .logged-in .section.media-evolved-section .container, 
            .logged-in .global-mediatech-section .container, 
            .logged-in .section.media_evolved_band .container, 
            .logged-in .banner_section .container{                padding: 0 20px;            }
            .logged-in .global-mediatech-section .box .content {    width: calc(100% - 70px);}
            .logged-in .section.media-evolved-section .wpsisac-content-right img {    height: 210px;    width: 210px; }
        }
        @media only screen and ( min-width : 800px ) and ( max-width: 980px ) {
            .logged-in .global-mediatech-section .box .content {    width: 100% !important;}
        }
        @media only screen and ( min-width : 981px ) and ( max-width: 1024px ) {
            .logged-in .section.announcements_band .col-md-6:first-child{     flex: 0 0 40%;    max-width: 40%;    }
            .logged-in .section.announcements_band .col-md-6:last-child{     flex: 0 0 60%;    max-width: 60%;    }
            .logged-in .announcements_band h3 {    font-size: 30px;    line-height: 40px; }            
        }


        


            </style>

            <div class = 'section banner_section' style = 'background-image:url(https://mtvstaging.wpengine.com/wp-content/uploads/2021/04/home-banner.jpeg);'>
            <div class = 'container'>
            <div class = 'banner_content'>
            <h1><?php echo the_field( 'banner_title' );
            ?></h1>
            <ul>
            <li><a href = '<?php echo the_field( 'scale_button_url' );?>' class = 'btn danger-btn'><?php echo the_field( 'button_1' );
            ?></a></li>
            <li><a href = '<?php echo the_field( 'connect_button_url' );?>' class = 'btn btn-secondary'><?php echo the_field( 'button_2' );
            ?></a></li>
            <li><a href = '<?php echo the_field( 'invest_button_url' );?>' class = 'btn btn-info'><?php echo the_field( 'button_3' );
            ?></a></li>
            </ul>
            <a href = '<?php echo the_field( 'get_your_idea_button_url' );?>' class = 'trans_btn'><?php echo the_field( 'button_4' );
            ?></a>
            </div>
            <div class = 'banner_img'>
            <img src = "<?php echo the_field('banner_image'); ?>">
            </div>
            </div>
            </div>

            <div class = 'section media_evolved_band'>
            <div class = 'container'>
            <div class = 'row'>
            <div class = 'col-md-6'>
            <div class = 'media_video_div'>
            <img src = 'https://mtvstaging.wpengine.com/wp-content/uploads/2022/06/color-patches.png'>

            <?php the_field( 'media_evolved_video' );
            ?>
            </div>
            </div>
            <div class = 'col-md-6'>
            <div class = 'media_evolved_content'>
            <h2><?php echo the_field( 'media_evolved_title' );
            ?></h2>
            <p><?php echo the_field( 'media_evolved_content' );
            ?></p>
            <p><?php echo the_field( 'media_evolved_content_2' );
            ?></p>
            <a href = "<?php echo the_field('join_the_future_media_url'); ?>" class = 'red_btn'><?php echo the_field( 'join_the_future_media_text' );
            ?></a>
            </div>
            </div>
            </div>
            </div>
            </div>

            <!-- Global media tech section -->
            <div class = 'section global-mediatech-section' style = 'background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/gobal-mediatech-network.jpg);'>
            <div class = 'container'>
            <div class = 'row'>
            <div class = 'col-md-4'>
            <h2><?php echo the_field( 'global_mediatech_network_section_title' );
            ?></h2>
            <a class = 'discover-btn' href = '<?php the_field('global_mediatech_network_section_button_url'); ?>'>Discover More</a>
            </div>
            <div class = 'col-md-8'>
            <div class = 'inner'>
            <!-- box-1 -->
            <?php
            // Check rows exists.
            if ( have_rows( 'global_mediatech_network_section' ) ):
            while( have_rows( 'global_mediatech_network_section' ) ) : the_row();
            ?>
            <div class = 'box'>
            <div class = 'box_img'>
            <?php $image = get_sub_field( 'image' );
            ?>
            <img src = "<?php echo $image; ?>" alt = 'scale' class = ''>
            </div>
            <div class = 'content'>
            <h3><?php echo get_sub_field( 'title' );
            ?></h3>
            <div class = 'content-info'>
            <p><?php echo get_sub_field( 'description' );
            ?></p>
            <a style = '' href = "<?php echo get_sub_field('button_url'); ?>">Join</a>
            </div>
            </div>
            </div>
            <?php  endwhile ;

            endif;

            ?>

            <!-- box-2 -->
            <!-- <div class = 'box'>
            <div class = ''>
            <span class = ''>
            <img src = 'https://mediatech.ventures/wp-content/uploads/2020/10/connect.png' alt = 'connect' class = ''>
            </span>
            </div>
            <div class = 'content' style = ''>
            <h3>
            <span>CONNECT</span>
            </h3>
            <div class = 'content-info'>
            <p style = ''>Plug into the MediaTech community. Showcase how you've been evolving media, foster startup innovation through education and mentorship, and explore the future of media.
                                </p>
                                <p>
                                    <a style="" href="https://mediatech.ventures/register/">Join</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    -->
                    <!-- box-3 -->
                    <!-- <div class="box">
                        <div class="">
                            <span class="">
                                <img src="https://mediatech.ventures/wp-content/uploads/2020/10/invest.png" alt="invest" class="">
                            </span>
                        </div>
                        <div class="content" style="">
                            <h3>
                            <span>INVEST</span>
                            </h3>
                            <div class="content-info">
                                <p style="">Be the first to discover our community of startups and partners. Investment comes in many forms - be a mentor, discover our portfolio, learn trends and insights to invest in the future of media innovation.
                                </p>
                                <p>
                                    <a style="" href="https://mediatech.ventures/register/">Join</a>
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>       
    </div>
</div>

<!-- popular-mediatech-section slider -->
<section class="section popular-mediatech-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2><?php echo the_field('popular_in_mediatech_title'); ?></h2>
            </div>
            <div class="col-md-8">
                <?php echo the_field('popular_in_mediatech_editor'); ?>
            </div>
        </div>
    </div>    
</section>

<!-- media-evolved-section slider -->
<section class="section media-evolved-section" style="background-image: url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/Media-Evolved.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="container">
        <?php echo the_field('media_evolved_editor'); ?>
    </div>
</section>

<!--  -->
<div class="programs_initiatives">
    <div class="container">
        <h2><?php echo the_field('programs_&_initiatives_section_title'); ?></h2>
        <p><?php echo the_field('programs_&_initiatives_sub_title'); ?></p>

        <div class="programs_initiatives_slider">
             <?php
// Check rows exists.
if( have_rows('programs_&_initiatives_repeater') ): 
     while( have_rows('programs_&_initiatives_repeater') ) : the_row();?>
            <div>
               
                <div class="programs_initiatives_box">
                    <a href="<?php echo get_sub_field('url'); ?>">
                        <img src="<?php echo get_sub_field('image'); ?>" /></a>
                        <h3><?php echo get_sub_field('title'); ?></h3>
                        <p><?php echo get_sub_field('description'); ?></p>
                </div>
                
            </div>
            
<?php  endwhile ; 
        endif; ?>

            <!-- <div>
                <div class="programs_initiatives_box">
                    <a href="#">
                        <img src="https://mediatech.ventures/wp-content/uploads/2021/11/new-market-entry.png" alt="New Market Entry" />
                        <h3>New Market Entry</h3>
                        <p>MediaTech Ventures' New Market Entry program bridges the gap between startup ecosystems and positions your startup to successfully expand into the US market.</p>
            </a>
            </div>
            </div>
            <div>
            <div class = 'programs_initiatives_box'>
            <a href = '#'>
            <img src = 'https://mediatech.ventures/wp-content/uploads/2020/10/Funded-House.png' alt = 'Funded House' />
            <h3>Funded House</h3>
            <p>Navigate the difficult task of raising capital;
            an integrated series of interviews, lectures, meetups, panels and parties to get to know Venture Capital personally.</p>
            </a>
            </div>
            </div>
            <div>
            <div class = 'programs_initiatives_box'>
            <a href = '#'>
            <img src = 'https://mediatech.ventures/wp-content/uploads/2021/03/connecTed-podcast.png' alt = 'Ted Cohen' />
            <h3>connecTed</h3>
            <p>People, platforms, and technologies that are making a difference. connecTed - showcases the future of innovation with industry outliers who push the art of the possible.</p>
            </a>
            </div>
            </div>
            <div>
            <div class = 'programs_initiatives_box'>
            <a href = '#'>
            <img src = 'https://mediatech.ventures/wp-content/uploads/2021/01/quora.png' alt = 'MediaTech Questions' />
            <h3>MediaTech Q&A</h3>
            <p>How innovation, technology, and media impact our lives;
            a space, with Quora, for open questions and answers about our industry.</p>
            </a>
            </div>
            </div>
            <div>
            <div class = 'programs_initiatives_box'>
            <a href = '#'>
            <img src = 'https://mediatech.ventures/wp-content/uploads/2020/10/Center-for-Creative-Entrepreneurship.png' alt = 'Center for Creative Entrepreneurship' />
            <h3>Center for Creative Entrepreneurship</h3>
            <p>Supports entrepreneurship in the creative industries through ongoing hands-on training, mentorship, boot camps, and accelerators for both artists and creative entrepreneurs.</p>
            </a>
            </div>
            </div> -->
            </div>

            </div>
            </div>

            <!-- announcements_band section -->
            <div class = 'section announcements_band' style = 'background-image:url(https://mtvstaging.wpengine.com/wp-content/uploads/2020/10/MediaTech-industry-news.jpg);'>
            <div class = 'container'>
            <div class = 'row'>
            <div class = 'col-md-6'>
            <h3><?php echo the_field( 'industry_news_title' );
            ?></h3>
            </div>
            <div class = 'col-md-6'>
            <form>
            <div class = 'form-group'>
            <input type = 'email' placeholder = 'Enter your email address'>
            <input type = 'submit' value = 'Get Started'>
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>

            <?php get_footer();
            ?>

            <script type = 'text/javascript'>
            $ = jQuery;
            $( document ).ready( function() {
                $( '.programs_initiatives_slider' ).slick( {
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true,
                    arrows: false,
                    responsive: [ 
 {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    }
                    , 
 {
                        breakpoint: 980,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                    , 
 {
                        breakpoint: 650,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            }
        );
    }
)
</script>

