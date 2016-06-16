<?php
/**
 * The Bottom Sidebar
 * @package lavish
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if (   ! is_active_sidebar( 'bottom1'  )
	&& ! is_active_sidebar( 'bottom2' )
	&& ! is_active_sidebar( 'bottom3'  )
	&& ! is_active_sidebar( 'bottom4'  )		
	&& (!$default_content)	
	): ?>
            <div class="lr_widgets_bottom_widget">
                <div class="container">
                    <div class="row">              
                        <div id="bottom1" class="col-md-3" role="complementary">
                            <h3><?php echo __('Research', 'lavish'); ?></h3>
                            <p><?php echo __('Our team conducts exhaustive research of the economy and bilateral trade relations between India and Canada .', 'lavish');?></p>
                        </div><!-- #top1 -->

                        <div id="bottom2" class="col-md-3" role="complementary">
                            <h3><?php echo __('Events', 'lavish'); ?></h3>
                            <p><?php echo __('We will be organizing three types of events: Economic Forum, Speaker Series and Business Summit.', 'lavish');?></p>
                        </div><!-- #top2 -->          

                        <div id="bottom3" class="col-md-3" role="complementary">
                            <h3><?php echo __('Our Presence', 'lavish'); ?></h3>
                            <p><?php echo __('Currently we are established at McGill University and Concordia University and will be expanding to other universities in the upcoming months.', 'lavish');?></p>
                        </div><!-- #top3 -->

                        <div id="bottom4" class="col-md-3" role="complementary">
                            <h3><?php echo __('Contact Us', 'lavish'); ?></h3>
                            <p><?php echo __('For more information, contact us at information@indiacanada.net', 'lavish');?></p>
                        </div><!-- #top4 -->

                    </div>
                </div>
            </div>
		<?php elseif(is_active_sidebar( 'bottom1' )  ||  is_active_sidebar( 'bottom2' ) || is_active_sidebar( 'bottom3' ) ||  is_active_sidebar( 'bottom4' )):

	// If we get this far, we have widgets. Let do this.
?>
<div class="lr_widgets_bottom_widget">
    <div class="container">
        <div class="row">              
        	<div id="bottom1" <?php lavish_bottomgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'bottom1' ); ?>
            </div><!-- #top1 -->

            <div id="bottom2" <?php lavish_bottomgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'bottom2' ); ?>
            </div><!-- #top2 -->          

            <div id="bottom3" <?php lavish_bottomgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'bottom3' ); ?>
            </div><!-- #top3 -->

            <div id="bottom4" <?php lavish_bottomgroup(); ?> role="complementary">
                <?php dynamic_sidebar( 'bottom4' ); ?>
            </div><!-- #top4 -->

        </div>
    </div>
</div>
<?php else:
    return;
endif;
 ?>

