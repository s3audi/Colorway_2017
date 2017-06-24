<?php
/*
  /**
 * The main front page file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package WordPress
 */
get_header();
?>
<!--Start Slider-->
<?php
$slider_option = get_option('inkthemes_homepage_slider_feature_option');
$slider_option_on = "on";
if ($slider_option_on === $slider_option) {
    ?>
    <div class="grid_24 slider">
        <div class="slider-container">
            <input type="hidden" id="txt_slidespeed" value="<?php
            if (get_option('colorway_slide_speed') != '') {
                echo stripslashes(get_option('colorway_slide_speed'));
            } else {
                echo '3000';
            }
            ?>"/>
			<input type="hidden" id="txt_slide_transtion" value="<?php
            if (get_option('colorway_slide_transition') != '') {
                echo stripslashes(get_option('colorway_slide_transition'));
            } else {
                echo 'fade';
            }
            ?>"/>
           <div class="flexslider">
                <ul class="slides slide">              
                        <?php
                        //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                        $mystring1 = get_option('colorway_slideimage1');
                        $value_img = array('.jpg', '.png', '.jpeg', '.gif', '.bmp', '.tiff', '.tif');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring1)) {
                                $check_img_ofset = 1;
                            }
                        }
                        // Note our use of ===.  Simply == would not work as expected
                        // because the position of 'a' was the 0th (first) character.
                        ?>
                        <?php if ($check_img_ofset == 0 && get_option('colorway_slideimage1') != '') { ?>        
							<li>
                                <div class="slide-image fl"><?php echo get_option('colorway_slideimage1'); ?></div>   
                            </li> 
                        <?php } else { ?>
                            <?php if (get_option('colorway_slideimage1') != '') { ?>
                                <li>
                                   <div class="slide-content entry fl">
                                        <h2 class="title"><a href="<?php echo get_option('colorway_slidelink1'); ?>" target="_blank"><?php echo stripslashes(get_option('colorway_slideheading1')); ?>  </a></h2>
                                        <p><?php echo stripslashes(get_option('colorway_slidedescription1')); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink1') != '') {
                                            echo get_option('colorway_slidelink1');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img src="<?php echo get_option('colorway_slideimage1'); ?>" class="slide-img" alt="Slide 1"/> </a></div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <!-- /.slide -->
                            <?php } else {
                                ?>
                                <li>
                                   <div class="slide-content entry fl">
                                        <h2 class="title"><a href="#"><?php _e('Beauty at its best', 'colorway'); ?></a></h2>
                                        <p><?php _e('What happens when beauty and simplicity connects. We tried to give you a slight hint.', 'colorway'); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink2') != '') {
                                            echo get_option('colorway_slidelink2');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/colorway-img.png" class="slide-img" alt="Slide 1"/></a> </div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <!-- /.slide -->
                                <?php
                            }
                        }
                        $check_img_ofset = 0;
                        //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                        $mystring2 = get_option('colorway_slideimage2');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring2)) {
                                $check_img_ofset = 1;
                            }
                        }
                        // Note our use of ===.  Simply == would not work as expected
                        // because the position of 'a' was the 0th (first) character.
                        //            
                        if ($check_img_ofset == 0 && get_option('colorway_slideimage2') != '') {
                            ?>        
                            <li>
                                <div class="slide-image fl"><?php echo get_option('colorway_slideimage2'); ?></div>   
                            </li> 
                            <?php
                        } else {
                            if (get_option('colorway_slideimage2') != '') {
                                ?>
                                <li>
                                    <div class="slide-content entry fl">
                                        <h2 class="title"><a href="<?php echo get_option('colorway_slidelink2'); ?>" target="_blank"><?php echo stripslashes(get_option('colorway_slideheading2')); ?></a></h2>
                                        <p><?php echo stripslashes(get_option('colorway_slidedescription2')); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink2') != '') {
                                            echo get_option('colorway_slidelink2');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img  src="<?php echo get_option('colorway_slideimage2'); ?>" class="slide-img" alt="Slide 2" /></a></div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <!-- /.slide -->
                                <?php
                            }
                        }
                        //The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                        $mystring3 = get_option('colorway_slideimage3');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring3)) {
                                $check_img_ofset = 1;
                            }
                        }
                        // Note our use of ===.  Simply == would not work as expected
                        // because the position of 'a' was the 0th (first) character.
                        //            
                        if ($check_img_ofset == 0 && get_option('colorway_slideimage3') != '') {
                            ?>        
                            <li>
                                <div class="slide-image fl"><?php echo get_option('colorway_slideimage3'); ?></div>   
                            </li> 
                            <?php
                        } else {
                            if (get_option('colorway_slideimage3') != '') {
                                ?>
                                <li>
                                    <div class="slide-content entry fl">
                                        <h2 class="title"><a href="<?php echo get_option('colorway_slidelink3'); ?>" target="_blank"><?php echo stripslashes(get_option('colorway_slideheading3')); ?></a></h2>
                                        <p><?php echo stripslashes(get_option('colorway_slidedescription3')); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink3') != '') {
                                            echo get_option('colorway_slidelink3');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img  src="<?php echo get_option('colorway_slideimage3'); ?>" class="slide-img" alt="Slide 3"/></a></div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <?php
                            }
                        }
                        $check_img_ofset = 0;
//The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                        $mystring4 = get_option('colorway_slideimage4');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring4)) {
                                $check_img_ofset = 1;
                            }
                        }
// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
//            
                        if ($check_img_ofset == 0 && get_option('colorway_slideimage4') != '') {
                            ?>        
                            <li>
                                <div class="slide-image fl"><?php echo get_option('colorway_slideimage4'); ?></div>   
                            </li> 
                            <?php
                        } else {
                            if (get_option('colorway_slideimage4') != '') {
                                ?>
                                <li>
                                   <div class="slide-content entry fl">
                                        <h2 class="title"><a href="<?php echo get_option('colorway_slidelink4'); ?>" target="_blank"><?php echo stripslashes(get_option('colorway_slideheading4')); ?></a></h2>
                                        <p><?php echo stripslashes(get_option('colorway_slidedescription4')); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink4') != '') {
                                            echo get_option('colorway_slidelink4');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img  src="<?php echo get_option('colorway_slideimage4'); ?>" class="slide-img" alt="Slide 4"/></a></div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <!-- /.slide -->
                                <?php
                            }
                        }
                        $check_img_ofset = 0;
//The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                        $mystring5 = get_option('colorway_slideimage5');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring5)) {
                                $check_img_ofset = 1;
                            }
                        }
// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
//            
                        if ($check_img_ofset == 0 && get_option('colorway_slideimage5') != '') {
                            ?>        
                            <li>
                                <div class="slide-image fl"><?php echo get_option('colorway_slideimage5'); ?></div>   
                            </li> 
                            <?php
                        } else {
                            if (get_option('colorway_slideimage5') != '') {
                                ?>
                                <li>
                                    <div class="slide-content entry fl">
                                        <h2 class="title"><a href="<?php echo get_option('colorway_slidelink5'); ?>" target="_blank"><?php echo stripslashes(get_option('colorway_slideheading5')); ?></a></h2>
                                        <p><?php echo stripslashes(get_option('colorway_slidedescription5')); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink5') != '') {
                                            echo get_option('colorway_slidelink5');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img  src="<?php echo get_option('colorway_slideimage5'); ?>" class="slide-img" alt="Slide 5"/></a></div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <!-- /.slide -->
                                <?php
                            }
                        }
                        $check_img_ofset = 0;
//The strpos funtion is comparing the strings to allow uploading of the Videos & Images in the Slider
                        $mystring6 = get_option('colorway_slideimage6');
                        $check_img_ofset = 0;
                        foreach ($value_img as $get_value) {
                            if (preg_match("/$get_value/", $mystring6)) {
                                $check_img_ofset = 1;
                            }
                        }
// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
//            
                        if ($check_img_ofset == 0 && get_option('colorway_slideimage6') != '') {
                            ?>        
                            <li>
                                <div class="slide-image fl"><?php echo get_option('colorway_slideimage6'); ?></div>   
                            </li> 
                            <?php
                        } else {
                            if (get_option('colorway_slideimage6') != '') {
                                ?>
                                <li>
                                    <div class="slide-content entry fl">
                                        <h2 class="title"><a href="<?php echo get_option('colorway_slidelink6'); ?>" target="_blank"><?php echo stripslashes(get_option('colorway_slideheading6')); ?></a></h2>
                                        <p><?php echo stripslashes(get_option('colorway_slidedescription6')); ?></p>
                                    </div>
                                    <!-- /.slide-content -->
                                    <div class="slide-image fl"><a href="<?php
                                        if (get_option('colorway_slidelink6') != '') {
                                            echo get_option('colorway_slidelink6');
                                        } else {
                                            echo '#';
                                        }
                                        ?>" target="_blank"><img  src="<?php echo get_option('colorway_slideimage6'); ?>" class="slide-img" alt="Slide 6"/></a></div>
                                    <!-- /.slide-image -->
                                    <div class="fix"></div>
                                </li>
                                <!-- /.slide -->
                                <?php
                            }
                        }
                        ?>
                    <!-- /.slides_container -->
					<?php if (get_option('inkthemes_team_unlimited') != '') { ?>
			<?php echo do_shortcode(get_option('inkthemes_team_unlimited')); ?>
			<?php } else {} ?>
                </ul>
                <!-- /#slide-box -->
            </div>
            <!-- /#slides -->
        </div>
    </div>
<?php } ?>
<div class="clear"></div>
<!--End Slider-->
<!--Start Content Grid-->
<div class="grid_24 content">
    <div class="content-wrapper">
        <div class="content-info home">
            <h1 class="title">

                <?php
                if (get_option('inkthemes_mainheading') != '') {
                    echo stripslashes(get_option('inkthemes_mainheading'));
                } else {
                    _e('Your Main Heading Comes Here! Set It From Themes Options Panel', 'colorway');
                }
                ?>

            </h1>
        </div>
        <div  id="content">
            <div class="columns">
                <div class="one_fourth">
                    <a href="<?php echo get_option('inkthemes_link1'); ?>" class="bigthumbs">
                        <?php if (get_option('inkthemes_fimg1') != '') { ?>
                            <img src="<?php echo get_option('inkthemes_fimg1'); ?>" alt="Feature Image 1"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Feature Image 1"/>
                        <?php } ?>
                    </a>
                    <?php if (get_option('inkthemes_headline1') != '') { ?>  
                        <h3>
                            <a href="<?php echo get_option('inkthemes_link1'); ?>">
                                <?php echo stripslashes(get_option('inkthemes_headline1')); ?>
                            </a>
                        </h3>
                    <?php } else { ?>
                        <h3>
                            <a href="#"><?php _e('Power of Easiness', 'colorway'); ?>
                            </a>
                        </h3> 
                        <?php
                    }
                    if (get_option('inkthemes_feature1') != '') {
                        ?> <p>
                            <?php echo stripslashes(get_option('inkthemes_feature1')); ?>
                        </p>
                    <?php } else { ?>
                        <p>
                            <?php _e('This Colorway Wordpress Theme gives you the easiness of building your site without any coding skills required.', 'colorway'); ?>
                        </p> 
                    <?php } ?>

                </div>
                <div class="one_fourth middle"> 
                    <a href="<?php echo get_option('inkthemes_link2'); ?>" class="bigthumbs">
                        <?php if (get_option('inkthemes_fimg2') != '') { ?>
                            <img src="<?php echo get_option('inkthemes_fimg2'); ?>" alt="Feature Image 2"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="Feature Image 2"/>
                        <?php } ?>
                    </a>                    
                    <?php if (get_option('inkthemes_headline2') != '') { ?>  
                        <h3>
                            <a href="<?php echo get_option('inkthemes_link2'); ?>">
                                <?php echo stripslashes(get_option('inkthemes_headline2')); ?>
                            </a>
                        </h3>
                    <?php } else { ?>
                        <h3>
                            <a href="#"><?php _e('Power of Speed', 'colorway'); ?>
                            </a>
                        </h3>
                        <?php
                    }
                    if (get_option('inkthemes_feature2') != '') {
                        ?> <p>
                            <?php echo stripslashes(get_option('inkthemes_feature2')); ?>
                        </p>
                    <?php } else { ?>
                        <p>
                            <?php _e('The Colorway Wordpress Theme is highly optimized for Speed. So that your website opens faster than any similar themes.', 'colorway'); ?>
                        </p> 
                    <?php } ?>				
                </div>
                <div class="one_fourth"> 
                    <a href="<?php echo get_option('inkthemes_link3'); ?>" class="bigthumbs">
                        <?php if (get_option('inkthemes_fimg3') != '') { ?>
                            <img src="<?php echo get_option('inkthemes_fimg3'); ?>" alt="Feature Image 3" />
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="Feature Image 3"/>
                        <?php } ?>
                    </a>
                    <?php if (get_option('inkthemes_headline3') != '') { ?>  
                        <h3>
                            <a href="<?php echo get_option('inkthemes_link3'); ?>">
                                <?php echo stripslashes(get_option('inkthemes_headline3')); ?>
                            </a>
                        </h3>
                    <?php } else { ?>
                        <h3>
                            <a href="#"><?php _e('Power of SEO', 'colorway'); ?>
                            </a>
                        </h3> 
                        <?php
                    }
                    if (get_option('inkthemes_feature3') != '') {
                        ?> 
                        <p>
                            <?php echo stripslashes(get_option('inkthemes_feature3')); ?>
                        </p>
                    <?php } else { ?>
                        <p>
                            <?php _e('Visitors to the Website are very highly desirable. With the SEO Optimized Themes, You get more traffic from Google.', 'colorway'); ?>
                        </p> 
                    <?php } ?>
                </div>				
                <div class="one_fourth middle last"> 
                    <a href="<?php echo get_option('inkthemes_link4'); ?>" class="bigthumbs">
                        <?php if (get_option('inkthemes_fimg4') != '') { ?>
                            <img src="<?php echo get_option('inkthemes_fimg4'); ?>" alt="Feature Image 4"/>
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" alt="Feature Image 4"/>
                        <?php } ?>
                    </a>
                    <?php if (get_option('inkthemes_headline4') != '') { ?>
                        <h3>
                            <a href="<?php echo get_option('inkthemes_link4'); ?>">
                                <?php echo stripslashes(get_option('inkthemes_headline4')); ?>
                            </a>
                        </h3>
                    <?php } else { ?>
                        <h3>
                            <a href="#"><?php _e('Ready Contact Form', 'colorway'); ?>
                            </a>
                        </h3> 
                        <?php
                    }
                    if (get_option('inkthemes_feature4') != '') {
                        ?> 
                        <p>
                            <?php echo stripslashes(get_option('inkthemes_feature4')); ?>
                        </p>
                    <?php } else { ?>
                        <p>
                            <?php _e('Let your visitors easily contact you. The builtin readymade contact form makes it easier for clients to contact.', 'colorway'); ?>
                        </p> 
                    <?php } ?>				    
                </div>				
            </div>            
        </div>
        <div class="clear"></div>
        <?php
        $blog_option = get_option('inkthemes_homepage_blog_feature_option');
        $blog_option_off = "off";
        if ($blog_option_off !== $blog_option) {
            ?>
            <div class="home_page_blog">
                <div class="<?php if (get_option('inkthemes_homepage_blog_feature_option') == 'on_with_sidebar') {
                ?>grid_16 alpha<?php } else {
                ?>grid_24<?php } ?>">
                    <div class="content-wrap home">
                        <?php if (get_option('inkthemes_blog_head') != '') { ?>
                            <h1 class="blog_head"><?php echo stripslashes(get_option('inkthemes_blog_head')); ?></h1>
                        <?php } else { ?>
                            <h1 class="blog_head"><?php _e('From The Blog', 'colorway'); ?></h1>
                        <?php } ?> 
                        <div class="blog" id="blogmain">
                            <ul class="blog_post">
                                <!-- Start the Loop. --><?php
                                $post_on_home_page = get_option('inkthemes_homepage_blog_option');
                                query_posts("posts_per_page=$post_on_home_page");
                                if (have_posts()) : while (have_posts()) : the_post();
                                        ?>
                                        <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <?php
                                            if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
                                                inkthemes_get_thumbnail(258, 208);
                                            } else {
                                                inkthemes_get_image(258, 208);
                                            }
                                            ?>	
                                            <h2>
                                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to ', 'colorway') . the_title_attribute(); ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>
                                            <?php echo inkthemes_custom_trim_excerpt(25); ?>
                                            <a href="<?php the_permalink() ?>"><?php _e('Continue Reading...', 'colorway'); ?></a> </li>
                                        <!-- End the Loop. -->
                                        <?php
                                    endwhile;
                                else:
                                    ?>
                                    <li>
                                        <p>
                                            <?php _e('Sorry, no posts matched your criteria.', 'colorway'); ?>
                                        </p>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php if (get_option('inkthemes_homepage_blog_feature_option') == 'on_with_sidebar') {
                    ?>
                    <div class="grid_8 omega">
                        <?php if (is_active_sidebar('home-page-right-feature-widget-area')) : ?>
                            <div class="sidebar home">
                                <?php dynamic_sidebar('home-page-right-feature-widget-area'); ?>
                            </div>
                        <?php else : ?>
                            <div class="sidebar home">
                                <img class="widget_img" src="<?php echo get_template_directory_uri(); ?>/images/widgit-area.png" />
                            </div>
                        <?php endif; ?>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
        ?>
        <div class="clear"></div>
		<div class="flex_testimonial">
		<ul class="slides slide">
		<li>
        <?php if (get_option('inkthemes_testimonial') != '') { ?>
            <blockquote class="home_blockquote"><?php echo stripslashes(get_option('inkthemes_testimonial')); ?></blockquote>
        <?php } else { ?>
            <blockquote class="home_blockquote"><?php _e('Theme from InkThemes.com are based on P3+ Technology, giving high speed, easiness to built &amp; power of SEO for lending trustworthiness and experience to a customer. The Themes are really one of the best we saw everywhere.<br /> - Neeraj Agarwal', 'colorway'); ?></blockquote>
        <?php } ?>
		</li>
		<?php if (get_option('inkthemes_testimonial_2') != '') { ?>
		<li>		 
            <blockquote class="home_blockquote"><?php echo stripslashes(get_option('inkthemes_testimonial_2')); ?></blockquote>		
		</li>
		<?php } ?>
		<?php if (get_option('inkthemes_testimonial_3') != '') { ?>
		<li>		 
            <blockquote class="home_blockquote"><?php echo stripslashes(get_option('inkthemes_testimonial_3')); ?></blockquote>		
		</li>
		<?php } ?>
		<?php if (get_option('inkthemes_testimonial_4') != '') { ?>
		<li>		 
            <blockquote class="home_blockquote"><?php echo stripslashes(get_option('inkthemes_testimonial_4')); ?></blockquote>		
		</li>
		<?php } ?>
		<?php if (get_option('inkthemes_testimonial_5') != '') { ?>
		<li>		 
            <blockquote class="home_blockquote"><?php echo stripslashes(get_option('inkthemes_testimonial_5')); ?></blockquote>		
		</li>
		<?php } ?>
		<?php if (get_option('inkthemes_testimonial_unlimited') != '') { ?>
			<?php echo do_shortcode(get_option('inkthemes_testimonial_unlimited')); ?>
			<?php } ?>
		</ul>
		</div>
    </div>
</div>
<div class="clear"></div>
<!--End Content Grid-->
</div>
<!--End Container Div-->
<?php get_footer(); ?>