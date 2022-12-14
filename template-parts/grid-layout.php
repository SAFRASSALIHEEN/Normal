<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Hospital Lite
 * @subpackage vw-hospital-lite
 * @since VW Hospital Lite 1.0
 */
?>
<?php 
  $vw_hospital_lite_archive_year  = get_the_time('Y'); 
  $vw_hospital_lite_archive_month = get_the_time('m'); 
  $vw_hospital_lite_archive_day   = get_the_time('d'); 
?>
<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>	
		<div class=" services-box wow zoomInDown delay-1000" data-wow-duration="2s">
    	<div class="page-box">
	      	<h2><a href="<?php echo esc_url(get_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2> 
	      	<div class="metabox">
		      <?php if(get_theme_mod('vw_hospital_lite_toggle_postdate',true)==1){ ?>
		        <span class="entry-date"><i class="fas fa-calendar-alt"></i><a href="<?php echo esc_url( get_day_link( $vw_hospital_lite_archive_year, $vw_hospital_lite_archive_month, $vw_hospital_lite_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
		      <?php } ?>

		      <?php if(get_theme_mod('vw_hospital_lite_toggle_author',true)==1){ ?>
		        <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
		      <?php } ?>

		      <?php if(get_theme_mod('vw_hospital_lite_toggle_comments',true)==1){ ?>
		        <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-hospital-lite'), __('0 Comments','vw-hospital-lite'), __('% Comments','vw-hospital-lite')); ?></span>
		      <?php } ?>
		    </div>          
	      	<div class="box-image">
		        <?php 
		          	if(has_post_thumbnail() && get_theme_mod( 'vw_hospital_lite_featured_image_hide_show',true) != '') { 
		            	the_post_thumbnail(); 
		          	}
		        ?>
		     </div>
	      	<div class="box-content">
	        	<div class="entry-content">
	        		<p>
			            <?php $excerpt = get_the_excerpt(); echo esc_html( vw_hospital_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_hospital_lite_excerpt_number','30')))); ?> <?php echo esc_html( get_theme_mod('vw_hospital_lite_excerpt_suffix','') ); ?>
			        </p>
	        	</div>
	      	</div>
	      	<?php if( get_theme_mod('vw_hospital_lite_category_hide_show',true) != ''){ ?>
		      	<div class="cat-box">
		      		<i class="fas fa-folder-open"></i>
		        	<?php foreach((get_the_category()) as $category) { echo esc_html($category->cat_name) . ' '; } ?>
		      	</div>
		    <?php } ?>
	    </div>
    </div>
    </article>
</div>