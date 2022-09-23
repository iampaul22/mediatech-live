<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */
/* po up  */
?>
<div class="modal">
    <div class="modalWrap">
<span id="close"> X </span>

        <div id="yourDiv"></div>
    </div>
</div>
<style type="text/css">
	li.bp-search-item.bp-search-item_post.has-access {
    width: 100% !important;
	}
	.modal {
	    position:fixed;
	    background-color:rgba(0, 0, 0, 0.5);
	    height:100%;
	    width:100%;
	    top:0;
	    left:0;
	    display:none;
        z-index: 9999;
	}
	figure.wp-block-image.size-large.pop-up-button {
	    cursor: pointer;
	}
	.modalWrap {
	    border: 1px solid #000;
	    background: #fff;
	    width: 1030px;
	    max-height: 545px;
	    margin: 5% auto;
	    position: relative;
	}
	.modalWrap #close {
	    display:block;
	    height:24px;
	    width:24px;
	    border-radius:8px;
	    cursor:pointer;
	    background:#900;
	    color:#fff;
	    font:14px Georgia, "Times New Roman", Times, serif;
	    line-height:24px;
	    text-align:center;
	    position:absolute;
	    top:-5px;
	    right:-10px
	}
	#yourDiv {
	    padding:5px;
	    text-align:center;
	}
	#yourDiv img {
	    max-height:100%;
	    max-width:100%
	}
	.modal:before {
	    content: "";
	    background: #ffffffcf;
	    position: absolute;
	    width: 100%;
	    height: 100%;
	    top: 0px;
	    left: 0;
	}
	button.btn-view.btn-load-more {
    display: flex;
    align-items: center;
    margin: 0 auto;
}
</style>
<style>
	/* 21-07-2022 */
@media only screen and (max-width: 600px) {
.buddypress-wrap .activity-comments>ul>li>ul {
    margin-left: 0 !important;
  }
}
/* End 21-07-2022 */
</style>
<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<!-- <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" 
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" 
        crossorigin="anonymous"> -->
</script>
<script type="text/javascript">
	
	jQuery(document).ready(function ($) {
		// alert('123');

    $(".pop-up-button img").on("click", function (e) {
        e.stopPropagation();
        $(".modal").fadeIn("fast");
        $("#yourDiv img").remove();
        $(this).clone().appendTo("#yourDiv");
        var hyt = $("#yourDiv").height();
        if (hyt > 400) {
            $("#yourDiv").css({
                "overflow": "hidden",
                "height": "auto"
            });
            $("#yourDiv img").css({
                "max-height": "98%"
            });
        } else if (hyt <= 400) {
            $("#yourDiv").css({
                "overflow": "hidden",
                "height": "auto"
            });
        }
    });

    $("#close").click(function () {
        $(".modal").fadeOut("fast");
        $("#yourDiv").css({
            "overflow": "hidden",
            "height": "auto"
        });
    });

    $(".modalWrap").on("click", function (e) {
        e.stopPropagation();
    });

    $(document).on("click", function () {
        $(".modal").fadeOut("fast");
    });
});
</script>
<script>
    jQuery(window).on("load", function () {        
	console.log("Working");
	var link = "<?php echo admin_url('admin-ajax.php')?>";
	$.ajax({
			url:link,
			data : {
				action: "get_user_data"
				
			},
			//data:filter.serialize(), // form data
			//type:filter.attr('method'), // POST
			type: "POST",
			success:function(data){
				console.log('Uhhh');
				console.log(data);
				//filter.find('button').text('Apply filter'); // changing the button label back
				//$('#response1').html(data); // insert data
			}
		});
		return false;
	});
	
	jQuery(window).on("load", function () {        
	console.log("Working");
	var link = "<?php echo admin_url('admin-ajax.php')?>";
	$.ajax({
			url:link,
			data : {
				action: "get_user_data"
				
			},
			//data:filter.serialize(), // form data
			//type:filter.attr('method'), // POST
			type: "POST",
			success:function(data){
				console.log('Uhhh');
				console.log(data);
				//filter.find('button').text('Apply filter'); // changing the button label back
				//$('#response1').html(data); // insert data
			}
		});
		return false;

	});
    </script>
<?php do_action( THEME_HOOK_PREFIX . 'end_content' ); ?>

</div><!-- .bb-grid -->
</div><!-- .container -->
</div><!-- #content -->

<?php do_action( THEME_HOOK_PREFIX . 'after_content' ); ?>

<?php do_action( THEME_HOOK_PREFIX . 'before_footer' ); ?>
<?php do_action( THEME_HOOK_PREFIX . 'footer' ); ?>
<?php do_action( THEME_HOOK_PREFIX . 'after_footer' ); ?>

</div><!-- #page -->

<?php do_action( THEME_HOOK_PREFIX . 'after_page' ); ?>

<?php wp_footer(); ?>

<script>
	(function ($) {
	'use strict';

	$.fn.loadMoreResults = function (options) {

		var defaults = {
			tag: {
				name: 'li',
				'class': 'bp-search-item'
			},
			displayedItems: 5,
			showItems: 5,
			button: {
				'class': 'btn-load-more',
				text: 'Load More'
			}
		};

		var opts = $.extend(true, {}, defaults, options);

		var alphaNumRE = /^[A-Za-z][-_A-Za-z0-9]+$/;
		var numRE = /^[0-9]+$/;

		$.each(opts, function validateOptions(key, val) {
			if (key === 'tag') {
				formatCheck(key, val, 'name', 'string');
				formatCheck(key, val, 'class', 'string');
			}
			if (key === 'displayedItems') {
				formatCheck(key, val, null, 'number');
			}
			if (key === 'showItems') {
				formatCheck(key, val, null, 'number');
			}
			if (key === 'button') {
				formatCheck(key, val, 'class', 'string');
			}
		});

		function formatCheck(key, val, prop, typ) {
			if (prop !== null && typeof prop !== 'object') {
				if (typeof val[prop] !== typ || String(val[prop]).match(typ == 'string' ? alphaNumRE : numRE) === null) {
					opts[key][prop] = defaults[key][prop];
				}
			} else {
				if (typeof val !== typ || String(val).match(typ == 'string' ? alphaNumRE : numRE) === null) {
					opts[key] = defaults[key];
				}
			}
		};

		return this.each(function (index, element) {
			var $list = $(element),
					lc = $list.find(' > ' + opts.tag.name + '.' + opts.tag.class).length,
					dc = parseInt(opts.displayedItems),
					sc = parseInt(opts.showItems);
			
			$list.find(' > ' + opts.tag.name + '.' + opts.tag.class + ':lt(' + dc + ')').css("display", "inline-block");
			$list.find(' > ' + opts.tag.name + '.' + opts.tag.class + ':gt(' + (dc - 1) + ')').css("display", "none");

			$list.parent().append('<button class="btn-view ' + opts.button.class + '">' + opts.button.text + '</button>');
			$list.parent().on("click", ".btn-view", function (e) {
				e.preventDefault();
				dc = (dc + sc <= lc) ? dc + sc : lc;
				
				$list.find(' > ' + opts.tag.name + '.' + opts.tag.class + ':lt(' + dc + ')').fadeIn();
				if (dc == lc) {
					$(this).hide();
				}
				if (dc == '') {
					$(this).hide();
				}
			});
		});

	};
	})(jQuery);

</script>
<script type="text/javascript">
		
		jQuery('#posts-streamm').loadMoreResults({
			tag: {
				name: 'li',
				'class': 'bp-search-item'
			},
			displayedItems: 20,
			showItems: 20
		});
	</script>
    <script type="text/javascript">

//   var _gaq = _gaq || [];
//   _gaq.push(['_setAccount', 'UA-36251023-1']);
//   _gaq.push(['_setDomainName', 'jqueryscript.net']);
//   _gaq.push(['_trackPageview']);

//   (function() {
//     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//   })();

</script>
<script>
	
jQuery(document).ready(function() {
	
	//jQuery("header.results-group-header h3.results-group-title span").text("People");
	jQuery(".component-navigation li:nth-child(1) a").text("People");
	jQuery(".component-navigation li:nth-child(2) a").text("Perspective");
});

/* Mobile menu issue  */
jQuery(document).ready(function () {
    jQuery('.bb-left-panel-mobile').on('click', function () {
        jQuery('.bb-mobile-panel-wrapper').removeClass('closed');
    });
    jQuery('i.bb-icon-close').on('click', function () {
        jQuery('.bb-mobile-panel-wrapper').addClass('closed');
    });
});

</script>
<style type="text/css">
	.buddypanel-menu .sub-menu{
		display: block !important
	}

</style>
<script type="text/javascript">
	jQuery(window).on("load", function () {        
	console.log("flush");
	var link = "<?php echo admin_url('admin-ajax.php')?>";
	console.log(link);
	$.ajax({
			url:link,
			data : {
				action: "get_data_flush"
				
			},
			//data:filter.serialize(), // form data
			//type:filter.attr('method'), // POST
			type: "POST",
			success:function(data){
				
				console.log(data);
				//filter.find('button').text('Apply filter'); // changing the button label back
				$('p.wpe-common-cta-heading').html('123'); // insert data
			}
		});
		return false;

	});
/*jQuery( function($) {
	console.log('Enter');
    $('#wpe-clear-all-cache-btn').click(function() {
        //alert('login button clicked');
        console.log('Flush');
    });
    setInterval(function() {
        $('#wpe-clear-all-cache-btn').trigger('click');
        console.log('Flush');
    }, 5000);

});*/
</script>
<script type="text/javascript">
    jQuery('.menu-item-has-children a:after').on('click', function () {
    	
    	jQuery('ul.sub-menu').addClass('opened');
    });
	// if (document.querySelector('#posts-streamm .bp-search-item') == null) {
	// 	//alert('Not found');
 //    	jQuery(".btn-load-more").remove();
 //    	jQuery(".bp-pagination .bottom").append('No Data Fount');
	// }

jQuery(document).ready(function($) {
 if ($('div').hasClass('bp-search-results bp-feedback info')) {
    $('.btn-load-more').css('display', 'none');
  }
    });

/* 26-08-2022 */

jQuery('a').each(function(i, obj) {
    var cur_url = jQuery(this).attr("href");
    jQuery(this).attr("href", cur_url + `?v=${new Date().getTime()}`);
    console.log("Link Updated");
});

/* */





</script>
</body>
</html>