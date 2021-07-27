<?php
    $btn_txt = constructo_opt( 'constructo_header_btn_text' );
    $btn_url = constructo_opt( 'constructo_header_btn_url' );
    $marker_icon = CONSTRUCTO_DIR_ICON_IMG_URI . 'header-address.svg';
    $headset_icon = CONSTRUCTO_DIR_ICON_IMG_URI . 'headset.svg';
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p>Opening Hour: (10.00-07.00)</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <?php
                            // if ( $btn_txt ) {
                                echo '
                                <div class="header_right d-flex justify-content-end">
                                    <a href="#" class="boxed-btn3">Get a Quote</a>
                                </div>
                                ';
                            // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="address_bar d-none d-lg-block">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <?php echo constructo_theme_logo();?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="address_menu d-flex justify-content-end">
                            <div class="single_address  d-flex">
                                <div class="icon">
                                    <img src="<?php echo esc_url( $marker_icon )?>" alt="marker_icon">
                                </div>
                                <div class="address_info">
                                    <h3>Address</h3>
                                    <p>20/D, Kings road, Green lane</p>
                                </div>
                            </div>
                            <div class="single_address d-flex">
                                <div class="icon">
                                    <img src="<?php echo esc_url( $headset_icon )?>" alt="headset_icon">
                                </div>
                                <div class="address_info">
                                    <h3>Call Us</h3>
                                    <p>+10 673 567 367</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="white_bg_bar">
                    <div class="row align-items-center">
                        <div class="col-12 d-lg-none">
                            <div class="logo ">
                                <?php echo constructo_theme_logo();?>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <?php
                                    if(has_nav_menu('primary-menu')) {
                                        wp_nav_menu(array(
                                            'menu'            => 'primary-menu',
                                            'theme_location'  => 'primary-menu',
                                            'menu_id'         => 'navigation',
                                            'container_class' => false,
                                            'container_id'    => false,
                                            'menu_class'      => false,
                                            'depth'           => 3,
                                            'walker'          => new constructo_bootstrap_navwalker()
                                        ));
                                    }
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            <div class="Appointment d-flex justify-content-end">
                                <div class="search_icon">
                                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                        <i class="ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- Modal -->
<!-- <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="serch_form">
            <form method="get">
                <input type="text" placeholder="search" name="s">
                <button type="submit">search</button>
            </form>
        </div>
    </div>
</div> -->
<!-- header-end -->