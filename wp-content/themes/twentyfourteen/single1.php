<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/images/background/bg4.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"><?php the_title();?></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="<?php echo get_home_url();?>">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
					
                    <div class="col-md-9">
                    <div class="col-md-12">
                        <div class="col-md-5 m-b30">
                            <div class="dez-thu "><img
                                        src="<?php the_field('cover'); ?>"
                                        alt=""/></div>
                        </div>
                        <div class="col-md-7">
                            <h2 class="h2"><span class="text-primary"><?php the_field('name'); ?></span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_content(); ?></p>
                            
                        </div>
                    </div>
					<div class="col-md-12">
                        
                            <h2 class="h2"><span class="text-primary">Latar Belakang Pendidikan</span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('latar_belakang_pendidikan'); ?></p>
                            
                    </div>
					<div class="col-md-12">
                        
                            <h2 class="h2"><span class="text-primary">Prestasi</span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('prestasi'); ?></p>
                            
                    </div>
					<div class="col-md-12">
                        
                            <h2 class="h2"><span class="text-primary">Pengalaman Organisasi</span></h2>
                            <div class="dez-separator bg-primary"></div>
                            <div class="clear"></div>
                            <p><?php the_field('pengalaman_organisasi'); ?></p>
                            
                    </div>
                </div>
					<?php
endwhile;
else:
?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif;
						?>
				<div class="col-md-3">
                        <aside class="side-bar">
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Berita Terbaru</h4>
                                <?php $latest = new WP_Query('showposts=4&cat=4'); ?>
                                <?php if (have_posts()) : while ( $latest->have_posts() ) : $latest->the_post(); ?>
                                    <div class="widget-post-bx">
                                        <div class="widget-post clearfix">
                                            <div class="dez-post-media"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('cover') ?>" width="200" height="143" alt="" /> </a></div>
                                            <div class="dez-post-info">
                                                <div class="dez-post-header">
                                                    <a href="<?php the_permalink(); ?>"><h6 class="post-title"><?php the_title(); ?></h6></a>
                                                </div>
                                                <div class="dez-post-meta">
                                                    <ul>
                                                        <a href="<?php the_permalink(); ?>"><li class="post-author">By <?php the_author(); ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                    <div class="navigation">
                                        <div class="next-posts"><?php next_posts_link(); ?></div>
                                        <div class="prev-posts"><?php previous_posts_link(); ?></div>
                                    </div>

                                <?php else : ?>

                                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                        <h1>Not Found</h1>
                                    </div>

                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>

                            <div class="widget widget_gallery">
                                <h5 class="widget-title">Gallery</h5>
                                <ul>
								<?php
                /* The loop */
                 
                 if ( get_post_gallery() ) :
                  $gallery = get_post_gallery( 104, false );
                  
                  /* Loop through all the image and output them one by one */
                  foreach( $gallery['src'] AS $src )
                  {
                   ?>
				   <li class="img-effect2"> <a href="<?php echo get_home_url();?>"><img src="<?php echo $src;?>" alt="" /></a> </li>
                                
							<?php 
                  }
                 endif;
                 
               ?>
                                    
                                </ul>
                            </div>

                        </aside>
                    </div>
            </div>
        </div>
		
    </div>

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
