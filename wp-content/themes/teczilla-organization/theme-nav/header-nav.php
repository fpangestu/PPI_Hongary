<div class="full-width-header">
<?php $teczilla_top_header_enable =  get_theme_mod('teczilla_top_header_enable',0); 

            if($teczilla_top_header_enable=='1'){

            ?>            
            <div class="toolbar-area hidden-md">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="toolbar-contact">
                                <?php 
                                $teczilla_header_mail = get_theme_mod('teczilla_header_mail','');
                                $teczilla_header_address = get_theme_mod('teczilla_header_address','');
                                 ?>
                                <ul>
                                    <?php if(!empty($teczilla_header_mail)) {  ?>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_url($teczilla_header_mail); ?>"><?php echo esc_html($teczilla_header_mail); ?></a></li> 
                                    <?php } if(!empty($teczilla_header_address)) { ?>

                                    <li>/</li>
                                    <li><i class="fa fa-map-marker"></i><a><?php echo esc_html($teczilla_header_address); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                              <div class="col-md-3">
                            <div class="toolbar-sl-share">

                             <?php 
                                $teczilla_header_button_address = get_theme_mod('teczilla_header_button_address','Get Quote'); 
                                $teczilla_header_button_url = get_theme_mod('teczilla_header_button_url','#'); 
                                if($teczilla_header_button_address !=="" && $teczilla_header_button_url !=="") {
                                ?>
                                        <ul><li class="btn"><a href="<?php echo esc_url($teczilla_header_button_url); ?>"><?php echo esc_html($teczilla_header_button_address); ?></a></li></ul>
                            <?php } ?>


                                 
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>

        <?php } ?>
  
            <!--Header Start-->

            <header id="tec-header" class="tec-header">
                <!-- Menu Start -->
    <?php $teczilla_sticky_thumb = get_theme_mod('teczilla_sticky_thumb',0);
     if($teczilla_sticky_thumb==0){
    ?>
            <div class="teczilla-menu-area menu-sticky <?php if(is_user_logged_in()) { ?> tec-agncy-stick <?php } ?>">
                <?php } else { ?>
                <div class="menu-area">
                    <?php } ?> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo-area">
                                     <?php
                                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                                        the_custom_logo();
                                        } 
                                        if (display_header_text()==true){ 
                                        ?>
                                         <h1 class="teczilla-title">
                                             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                             <?php esc_html(bloginfo( 'title' )); ?>
                                             </a>
                                         </h1>
                                        
                                        <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-9 text-right">
                             <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                         <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                            ) );
                         ?>
                    </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
        </div>