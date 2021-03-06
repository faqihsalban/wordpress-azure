<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?> 
<!DOCTYPE html>
<!-- 
	Template Name: EduZone : An Education, Learning Cources & Institute/College Mobile Responsive Html Template 
	Version: 1.0
	Author: DexignZone
	Website: http://www.dexignzone.com/
	Contact: dexignexpert@gmail.com
	Follow: www.twitter.com/dexignzones
	Like: www.facebook.com/dexignzone
	License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> </html><![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> </html><![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> </html><![endif]-->
<!-- Meta -->
<html lang="en" dir="">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no" />
<!-- Favicons Icon -->
<link rel="icon" href="http://dexignzone.com/zone/EduZone/xhtml/images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png" />
<!-- Page Title Here -->
<title><?php the_title();?> - P2T</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--[if lt IE 9]>
        <script src="./assets/js/html5shiv.min.js"></script>
        <script src="./assets/js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap-select.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/magnific-popup.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/style.min.css" />
<link class="skin" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/skin/skin-3.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/templete.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/switcher.min.css" />
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/revolution/revolution/css/settings.css" />
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/plugins/revolution/revolution/css/navigation.css" />
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet" /> 
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/myStyle.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/modals/core.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/modals/bootstrap.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jssor.slider-22.2.8.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
<?php wp_head(); ?>
</head>
<body id="bg">
<div class="page-wraper">
	<!-- header -->
	<header class="site-header header-style-4 dark">

		 
		<!-- main header -->
		<div class="sticky-header main-bar-wraper">
			
			<div class="main-bar clearfix ">
				<div class="container header-contant-block"> 
					<div class="row">
						<div class="col-md-4">
							<div class="logo-header "><a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo3.png" width="193" height="89" alt="" /></a></div>
						</div> 
						
					</div>
				</div>
				<div class="slide-up">
					<div class="container clearfix bg-primary" style="background:white"> 
					
						<!-- website logo -->
						<div class="logo-header mostion"><a href="./index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo3.png" width="193" height="89" alt="" /></a></div>
						
						<!-- nav toggle button -->
						<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
						<!-- extra nav -->
						<div class="extra-nav">
							<div class="extra-cell">
								<button id="quik-search-btn" type="button" class="site-button" style="background:#ae52de;"><i class="fa fa-search"></i></button>
							</div>
						</div>
						
						<!-- Quik search -->
						<div class="dez-quik-search bg-primary" style="    background: white;">
							<form action="#" style="background: #c394dc;" />
								<input name="search" type="text" class="form-control" placeholder="Type to search" />
								<span id="quik-search-remove"><i class="fa fa-remove"></i></span>
							</form>
						</div>
						
						<!-- main nav -->
				<div class="header-nav navbar-collapse collapse">
					<ul class=" nav navbar-nav">
						<li> <a href="<?php echo get_home_url();?>/">Home<i class="fa fa-chevron-down"></i></a></li>
						<li> <a href="#">Tentang Kami<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="<?php echo get_home_url();?>/tentang-kami/sejarah/">Sejarah</a></li>
								<li><a href="<?php echo get_home_url();?>/tentang-kami/nilai-nilai-p2t/">Nilai-nilai P2T</a></li>
							</ul>
						</li>
						<li> <a href="#">Profil<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="<?php echo get_home_url();?>/profil/direktur/">Direktur</a></li>
								<li><a href="<?php echo get_home_url();?>/profil/manajer-operasional/">Manajer Operasional</a></li>
								<li><a href="<?php echo get_home_url();?>/profil/staff/">Staf</a></li>
								<li><a href="<?php echo get_home_url();?>/profil/dosen/">Dosen</a></li>
							</ul>
						</li>
						<li class="has-mega-menu "> <a href="#">Layanan<i class="fa fa-chevron-down"></i></a>
							<ul class="mega-menu">
								<li> <a href="<?php echo get_home_url();?>/layanan/individual/">Individual</a>
									<ul>
										<li><a href="<?php echo get_home_url();?>/layanan/psikotes-individual/">Psikotes Individual</a></li>
										<li><a href="<?php echo get_home_url();?>/layanan/konseling-individual/">Konseling Individual</a></li>
										<li><a href="<?php echo get_home_url();?>/layanan/terapi/">Terapi</a></li>
									</ul>
								</li>
								<li> <a href="<?php echo get_home_url();?>/keluarga/">Keluarga</a>
									<ul>
										<li><a href="<?php echo get_home_url();?>/layanan/konseling-keluarga/">Konseling Keluarga</a></li>
										<li><a href="<?php echo get_home_url();?>/layanan/terapi-grup/">Terapi Group</a></li>
									</ul>
								</li>
								<li> <a href="<?php echo get_home_url();?>/sekolah/">Sekolah</a>
									<ul>
										<li><a href="<?php echo get_home_url();?>/sekolah/bidik-jurusan-untuk-pelajar/">Bidik Jurusan Untuk Pelajar</a></li>
										<li><a href="<?php echo get_home_url();?>/sekolah/bidik-minat-dan-bakat/">Bidik Minat Dan Bakat</a></li>
										<li><a href="<?php echo get_home_url();?>/sekolah/pendampingan-siswa-cerdas-istimewa/">Pendamping Siswa Cerdas Istimewa (CI)</a></li>
										<li><a href="<?php echo get_home_url();?>/sekolah/parenting">Parenting</a></li>
									</ul>
								</li>
								<li> <a href="<?php echo get_home_url();?>/perusahaan/">Perusahaan</a>
									<ul>
										<li><a href="<?php echo get_home_url();?>/perusahaan/rekrutmen-dan-seleksi-karyawan/">Rekruitmen Dan Seleksi Karyawan</a></li>
										<li><a href="<?php echo get_home_url();?>/perusahaan/assesmen/">Asesment</a></li>
										<li><a href="<?php echo get_home_url();?>/perusahaan/pemetaan-kompetensi-karyawan/">Pemetaan Kompetensi Karyawan</a></li>
										<li><a href="<?php echo get_home_url();?>/perusahaan/pelatihan-dan-pengembangan-diri/">Pemetaan Dan Pengembangan Diri</a></li>
										<li><a href="<?php echo get_home_url();?>/perusahaan/modifikasi-perilaku">Modifikasi Prilaku</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li > <a href="<?php echo get_home_url();?>/short-course/">Short Course</a>
                           
                        </li>
						<li > <a href="<?php echo get_home_url();?>/berita/">Berita</a>
                           
                        </li>
<!--						<li> <a href="<?php echo get_home_url();?>/berita">Berita<i class="fa fa-chevron-down"></i></a>-->
<!--						</li>-->
						<li > <a href="<?php echo get_home_url();?>/dokumentasi/">Dokumentasi<i class="fa fa-chevron-down"></i></a></li>
						<li > <a href="<?php echo get_home_url();?>/klien/">Klien<i class="fa fa-chevron-down"></i></a></li>
						<li > <a href="<?php echo get_home_url();?>/kontak/">Kontak<i class="fa fa-chevron-down"></i></a></li>
					</ul>
				</div>
		
					</div>
				</div>	
			</div>
		</div>
		<!-- main header END -->
		
	</header>




