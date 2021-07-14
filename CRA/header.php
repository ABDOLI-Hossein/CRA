<!DOCTYPE html>
<html lang="en">
<head>
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <?php wp_head();?>
</head>
<body>
	<div class="wrapper-whole">
		
	
	
	
	
<div  class="sa-per-5 sa-margin-0 sa-p-fixed  sidemenu sa-align-items-center justify-content-center d-none w-100 sa-mobile-100">
    <div class="sa-p-absolute close" style="top: 60px;left: 13%;cursor: pointer">
        <div class="sa-line close-animation-p-1" style="background-color: #fff"></div>
        <div class="sa-line close-animation-p-2" style="background-color: #fff;margin-top: -12px"></div>


    </div>
    <div>

        <img src="<?php bloginfo("template_directory"); ?>/images/CRA-white.png" alt="">
        <div>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_id'        => 'top-menu',
                    'container'      => 'ul',
                    'menu_class'     => 'navbar-nav',

                )
            );
            ?>
        </div>
    </div>
    <div class="menu-linkdin">
        <a href="https://www.linkedin.com/company/cra-biotech" target="_blank">
            <svg id="linkedin-logo" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 17.326 16.556">
                <path id="LinkedIn" d="M17.326,19.709v6.406H13.613V20.138c0-1.5-.537-2.526-1.881-2.526A2.032,2.032,0,0,0,9.826,18.97a2.541,2.541,0,0,0-.123.905v6.239H5.988s.05-10.122,0-11.171H9.7v1.583l-.024.036H9.7v-.036a3.688,3.688,0,0,1,3.348-1.846C15.494,14.681,17.326,16.277,17.326,19.709ZM2.1,9.558a1.936,1.936,0,1,0-.049,3.861h.025A1.937,1.937,0,1,0,2.1,9.558ZM.221,26.114H3.934V14.943H.221Z" transform="translate(0 -9.558)" fill="#fff"></path>
            </svg>
        </a>

    </div>
</div>



<header>

            <div id="whoweare" style="height: 768px;background-color: yellow;width: 100%;background: url('<?php bloginfo("template_directory"); ?>/images/headerimg.png');background-size: cover;">
                <nav class="sa-d-flex sa-align-items-center sa-percustom-64 justify-content-between sa-mobile-90 mobile-navbar sa-align-items-center" style="padding: 24px 0">
                    <div class="sa-d-flex menu flex-grow-1">
                        <div>
                            <div id="a1" class="sa-line"></div>
                            <div id="a2" class="sa-line"></div>
                            <div id="a3" class="sa-line" style="margin-bottom: 0"></div>
                        </div>
                        <button class="menu">MENU</button>

                    </div>
                    <div>
                        <a href="<?php get_home_url() ?>">
                            <img    src="<?php bloginfo("template_directory"); ?>/images/logo.png" class="logo-max-width" style="max-width: 60%">
                        </a>

                    </div>
                    <div class="flex-grow-1"></div>
                </nav>

                <div class="sa-per-6 header-p sa-mobile-90 sa-mt-35 " style="margin-top: 100px">
                    <div class="sa-per-4 sa-margin-0 sa-mobile-90">
                        <h2>WHO WE ARE</h2>
                        <h3>CRA Biotech is a leader in the ortho-biologics and regenerative medicine spaces.</h3>
                        <p>They offer a full portfolio of novel, cutting edge solutions to realize consistent quality outcomes. Through CRA’s innovation, biologic solutions with outstanding clinical results are provided for surgeons and their patients.</p>
                        <p>CRA Biotech is focused on delivering products with the highest standards for spinal, extremity, and sports, and wound care therapeutic areas</p>
                        <button class="learnmore-button">Learn More About Our Products</button>
                    </div>
                </div>

            </div>
    <div class="linkdin">
        <a class="facebook-socail" href="https://www.linkedin.com/company/cra-biotech" target="_blank">
            <svg id="linkedin-logo" xmlns="http://www.w3.org/2000/svg" width="17.326" height="16.556" viewBox="0 0 17.326 16.556">
                <path id="LinkedIn" d="M17.326,19.709v6.406H13.613V20.138c0-1.5-.537-2.526-1.881-2.526A2.032,2.032,0,0,0,9.826,18.97a2.541,2.541,0,0,0-.123.905v6.239H5.988s.05-10.122,0-11.171H9.7v1.583l-.024.036H9.7v-.036a3.688,3.688,0,0,1,3.348-1.846C15.494,14.681,17.326,16.277,17.326,19.709ZM2.1,9.558a1.936,1.936,0,1,0-.049,3.861h.025A1.937,1.937,0,1,0,2.1,9.558ZM.221,26.114H3.934V14.943H.221Z" transform="translate(0 -9.558)" fill="#646363"></path>
            </svg>
        </a>
    </div>

</header>