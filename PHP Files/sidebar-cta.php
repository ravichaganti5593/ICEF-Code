<?php
/**
 * The Call to Action Sidebar
 * @package lavish
 * @since 1.0.0
 */
$default_content = get_theme_mod('hide_default_content', '0');
if ( is_front_page() && ! is_active_sidebar( 'cta' ) && (!$default_content)):?>
	<div class="lr_widgets_cta" >
	<div class="container">
        <div class="row">
           	<div class="col-md-12">
           		<div class="align_center" style="padding: 0rem 25%">
<h2><?php echo __('A student-run business platform', 'lavish');?></h2>
<p><?php echo __('ICEF was founded by a group of students at McGill University in May 2015. It’s aim is to build a dynamic and professional ecosystem in Canada which would engage students, professors, business leaders and politicians to discuss bilateral trade relations between India and Canada through events and research.', 'lavish');?></p>
<a href="http://indiacanada.net/?page_id=13"><button class="btn"><?php echo __('Find Out More!', 'lavish');?></button></a>
</div>
        	</div
        </div>
    </div>
</div>
<?php elseif(is_active_sidebar( 'cta' ) ):
?>
<div class="lr_widgets_cta" >
	<div class="container">
        <div class="row">
           	<div class="col-md-12">
           		<?php dynamic_sidebar( 'cta' ); ?>
        	</div>
        </div>
    </div>
</div>
<?php else:
    return;
endif;
?>
