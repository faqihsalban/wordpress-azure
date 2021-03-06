<?php
/**
 * Template Name: Kontaks
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 get_header();
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
                    <li><a href="<?php echo get_home_url();?>/">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-md-9">
                        <h4>Formulir kontak</h4>
                        
                        <div id="show_contact_msg"></div>

                        <div class="p-a30 bg-white clearfix m-b30">
                                <div class="row">
                                  <?php the_field('contact_show');?>
                                </div>
                        </div>



                      
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-md-3">
                        <h4>Info Kontak</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">Alamat</h6>
                                        <p><?php the_field('alamat');?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">EMAIl</h6>
                                        <p><?php the_field('email');?></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="#" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 dez-tilte">PHONE</h6>
                                        <p><?php the_field('telepon');?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <!-- right part END -->
                </div>
				<div class="col-md-12">
                                <!-- Map part start -->
                                <h4>Lokasi Kami</h4> 

                        <div class="col-md-12"><iframe width="100%" height="600" src="http://www.mapi.ie/create-google-map/map.php?width=100%&amp;height=600&amp;hl=en&amp;q=universitas%20pendidikan%20indonesia+(Pusat%20Psikologi%20Terapan%20(P2T))&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="http://www.mapsdirections.info/fr/mesurer-distance-surface-google-maps.html">Mesurer distance avec Google Maps</a> en <a href="http://www.mapsdirections.info/fr/">www.mapsdirections.info/fr/</a></iframe></div><br />
<?php echo $connectstr_dbusername; ?>
<?php echo $connectstr_dbpassword; ?>

                                <!-- Map part END -->
                            </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&amp;sensor=false"></script>
<?php 
get_footer();