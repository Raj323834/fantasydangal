                </div> <!--.container-->
            </div> <!-- .site-content -->
        </div> <!-- id wrapper closed-->

        <?php
            //Pre footer settings

            //Global settings
            $page_pre_footer_box = pearl_get_option('page_pre_footer_box');
            $stm_pre_footer_global = pearl_get_option('page_pre_footer');
            //Page settings
            $id = get_the_ID();
            $stm_pre_footer_custom = get_post_meta($id, 'stm_pre_footer', true);
        ?>
        <?php if( $page_pre_footer_box == 'true' ): ?>
            <div class="pre_footer">
                <?php if( empty ($stm_pre_footer_custom) ): ?>
                   <?php pearl_sidebar(false, $stm_pre_footer_global); ?>
                <?php else: ?>
                    <?php pearl_sidebar(false, $stm_pre_footer_custom); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php get_template_part('partials/footer/player'); ?>
        <!--<div class="stm-footer">-->
			<?php /*get_template_part('partials/footer/main'); */?>
        <!--</div>-->

        <?php
        get_template_part('partials/modals/main');
        get_template_part('partials/footer/ga');
        get_template_part('partials/footer/scroll_top');
        get_template_part('partials/modals/product_view');
        do_action('pearl_before_footer');
       wp_footer(); ?>
		<?php 
		$parent_url = 'https://fantasydangal.com/';		
		?>
		
		
		
		 <!-- Footer-->
        <footer class="footer">
			<div class="footer-area-1">
				<div class="container">
					<div class="row">
							<div class="col-lg-4 text-lg-start">
								<a href="<?php echo $parent_url?>" title="Fantasy Dangal"><img class="img-fluid img-brand1 d-block" src="<?php echo site_url()?>/wp-content/uploads/2022/07/main-logo-v7.png" alt="Fantasy Dangal" title="Fantasy Dangal"/></a>
								<p class="foot_p">Fantasy Cricket is a thing nowadays with which most of the people are completely familiar. You can have the new fantasy app download in your mobile phones now. It all started with cricket that has been recognized as one of the most popular sports globally. Cricket is a game that gained attraction from people of different ages.</p>
								<div class="social-media">									
									<a class="btn btn-social mx-1" href="https://www.facebook.com/FantasyDangal/"  title="Facebook Fantasy Dangal" target="_blank"><img width="32" src="<?php echo site_url()?>/wp-content/uploads/2022/07/fb-icon.png"></a>
									<a class="btn btn-social mx-1" href="https://www.instagram.com/fantasydangal/" title="Instagram Fantasy Dangal" target="_blank"><img width="32" src="<?php echo site_url()?>/wp-content/uploads/2022/07/insta-icon.png"></a>
									<a class="btn btn-social mx-1" href="https://twitter.com/DangalFantasy" title="Twitter Fantasy Dangal" target="_blank"><img width="32" src="<?php echo site_url()?>/wp-content/uploads/2022/07/twitter-icon.png"></a>
									<a class="btn btn-social mx-1" href="https://t.me/FantasyDangal" title="Telegram Fantasy Dangal" target="_blank"><img width="32" src="<?php echo site_url()?>/wp-content/uploads/2022/07/telegram-icon.png"></a>
									<a class="btn btn-social mx-1" href="https://www.linkedin.com/company/dangal-games" title="Linkedin Fantasy Dangal" target="_blank"><img width="32" src="<?php echo site_url()?>/wp-content/uploads/2022/07/linkedin-icon.png"></a>
								</div>						
							</div>
							<div class="col-lg-2 text-lg-start">
									<ul class="foot-links footer-links">
										<li><a href="<?php echo $parent_url?>" title="Home">HOME</a></li>
										<li><a href="<?php echo $parent_url?>about-us" title="About">ABOUT US</a></li>
										<li><a href="<?php echo $parent_url?>contact-us" title="Contact">CONTACT US</a></li>
										<li><a href="<?php echo $parent_url?>blog" title="Blogs">BLOGS</a></li>
										<li><a href="<?php echo $parent_url?>fair-play" title="Fair Play">FAIRPLAY</a></li>	
										<li><a href="<?php echo $parent_url?>mvp-program-terms-condition" title="Dangal MVP Program">DANGAL MVP PROGRAM</a></li>										
									</ul>
							</div>
							<div class="col-lg-3 text-lg-start">
									<ul class="foot-links footer-links">
										<li><a href="<?php echo $parent_url?>rankings" title="Rankings">RANKINGS</a></li>
										<li><a href="<?php echo $parent_url?>responsible-gaming" title="Responsible Gaming">RESPONSIBLE GAMING</a></li>
										<li><a href="<?php echo $parent_url?>refer-earn" title="Refer & Earn">REFER & EARN</a></li>
										<li><a href="<?php echo $parent_url?>withdrawal-policies" title="Withdrawal Policy">WITHDRAWAL POLICY</a></li>
										<li><a href="<?php echo $parent_url?>terms-condition" title="Terms">TERMS & CONDITIONS</a>	</li>
									</ul>
							</div>
							<div class="col-lg-3 text-lg-start">
								<div class="footer-links infostones payb">
									<h4>Approved by Major Banks of India</h4>
									
									<div class="banksicosd">
									<ul>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/1.png" alt="paybys1"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/2.png" alt="paybys2"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/3.png" alt="paybys3"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/4.png" alt="paybys4"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/5.png" alt="paybys5"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/6.png" alt="paybys6"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/7.png" alt="paybys7"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/8.png" alt="paybys8"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/9.png" alt="paybys9"></li>
										<li><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/10.png" alt="paybys10"></li>
									</ul>
									</div>
								</div>	
								<div class="footer-links">
									<h4>We Are Members of</h4>
								   <img class="img-fluid" src="<?php echo site_url()?>/wp-content/uploads/2022/07/aigf.jpg" alt="AIGF" />
								</div>

							</div>

					</div>
					
				</div>
			</div>
			<div class="footer-area-2">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12 foot-links">
							<p><a href="javascript:;" title="Xeta Gaming Pvt">Copyright © 2021 Xeta Gaming Pvt. Ltd. All rights reserved.</a></p>						
						</div>
					</div>
				</div>
			</div>
        </footer> 
		<!-- start of stick button-->
		<div class="sticky_btns">
			<div class="btnsbox">
				<a href="javascript:;" id="andi_down_sec" class="btn black" onclick="Lead()" style="display: flex;"><span class="icon"><img src="<?php echo site_url()?>/wp-content/uploads/2022/07/android-icon.svg" width="20" height="20" class="download for android"></span><p>Download for <strong>Android User</strong></p></a>		
			</div>		
		</div>
		<!-- end of sticky button-->
		<!-- end of footer-->
				

<!--<div  class="fixfooter visible-xs" style="background-color: #3d185b; color: #fff; bottom:0px; text-align: center; width: auto;">
			<div class="stm_gdpr_popup-content getapklin" onclick="Lead()"><img src="/wp-content/uploads/2021/03/android-user.png" width: 300px/></div>
			
		</div>-->
<script>
const config = new SingularConfig('dangal_games_af1b5efa', '3f6e40491a26c4578474cc5d8cf66cce', 'com.fantasydangal');
singularSdk.init(config);
</script>
  <script>
     function Lead() {
    singularSdk.event("Download Button Click Initiated");
    let anvalue = "";
    let pcnvalue = "";
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == "_wpsrc" || decodeURIComponent(pair[0]) == "wpsrc" || decodeURIComponent(pair[0]) == "utm_source") {
            anvalue = decodeURIComponent(pair[1]);
        }
        if (decodeURIComponent(pair[0]) == "pcn") {
            pcnvalue = decodeURIComponent(pair[1]);
        }
    }
    fullUrl = "https://fantasydangal.sng.link/D6gtj/bisk?an=" + anvalue + "&pcn=" + pcnvalue;
    console.log(fullUrl);
    var webToAppLink = singularSdk.buildWebToAppLink(fullUrl);
    var linkElement = document.getElementById('singularWebToAppLink');
    if (!linkElement) {
        linkElement = document.createElement("a");
    }
    linkElement.id = 'singularWebToAppLink';
	//console.log(webToAppLink+"XYZ");
    linkElement.href = webToAppLink;
		
    linkElement.click();
    singularSdk.event("Download Button Clicked");
}
    </script>
    </body>
</html>