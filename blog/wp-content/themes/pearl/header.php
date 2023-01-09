<!DOCTYPE html>
<html <?php language_attributes(); ?> id="main_html">
<head>
	<?php do_action('pearl_head_start'); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="facebook-domain-verification" content="qwpcpp0hl2eg4dh0b1d5icamgkf5a9" />
	<meta name="google-site-verification" content="z5ZR0ldnuXGl8UdopEMDhSTQkBfNE_ca6KSSW1P2Nvs" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <?php do_action('pearl_head_end'); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KT2GMM7');</script>
<!-- End Google Tag Manager -->
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1901097476694920'); 
fbq('track', 'PageView');
</script>

<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PEENQWQ03Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PEENQWQ03Q');
</script>
	<!-- Global site tag (gtag.js) - Google Ads: 383393360 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-383393360"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-383393360');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-198704167-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-198704167-1');
</script>
	
	  <!-- Using the latest SDK version Singular  -->
<script src="https://web-sdk-cdn.singular.net/singular-sdk/latest/singular-sdk.js">
    </script>

</head>
<body <?php body_class(); ?> <?php pearl_body_bg(); ?> ontouchstart="true">
	<!-- Cont. Facebook Pixel Code -->	
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=1901097476694920&ev=PageView&noscript=1"
	/></noscript>
<!-- End Facebook Pixel Code -->
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT2GMM7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <?php do_action('pearl_body_start'); ?>
	<?php
    if(pearl_check_string(pearl_get_option('enable_bubbles', '')))
		get_template_part('partials/other/bubbles'); ?>
    <div id="wrapper">
        <?php do_action('pearl_before_header'); ?>
        <?php get_template_part('partials/header/main'); ?>

        <?php
            //Pre content settings

            //Global settings
            $page_pre_content_box = pearl_get_option('page_pre_content_box');
            $stm_pre_content_global = pearl_get_option('page_pre_content');
            //Page settings
            $id = get_the_ID();
            $stm_pre_content_custom = get_post_meta($id, 'stm_pre_content', true);
        ?>
        <?php if( $page_pre_content_box == 'true' ): ?>
            <div class="pre_content">
                <?php if( empty ($stm_pre_content_custom) ): ?>
                    <?php pearl_sidebar(true, $stm_pre_content_global); ?>
                <?php elseif( $stm_pre_content_custom == true) : ?>
                <?php else: ?>
                    <?php pearl_sidebar(true, $stm_pre_content_custom); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        
        <div class="site-content">
            <div class="<?php echo esc_attr(apply_filters('pearl_site_container', '')); ?>">