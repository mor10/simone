<?php
/**
 * Custom header feature
 * @package simone
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses simone_header_style()
 * @uses simone_admin_header_style()
 * @uses simone_admin_header_image()
 */
function simone_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'simone_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 1280,
		'height'                 => 300,
		'flex-height'            => false,
		'wp-head-callback'       => 'simone_header_style',
		'admin-head-callback'    => 'simone_admin_header_style',
		'admin-preview-callback' => 'simone_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'simone_custom_header_setup' );

if ( ! function_exists( 'simone_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see simone_custom_header_setup().
 */
function simone_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	// get_header_textcolor() options: HEADER_TEXTCOLOR is default, hide text (returns 'blank') or any hex value
	if ( HEADER_TEXTCOLOR == $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-branding {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // simone_header_style

if ( ! function_exists( 'simone_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see simone_custom_header_setup().
 */
function simone_admin_header_style() {
?>
	<style type="text/css">
            @import url(http://fonts.googleapis.com/css?family=Lato:100,700);
            
            .site-branding {
                background: #651329;
                background: hsl(344, 68%, 24%);
                text-align: center;
                padding: 4em 0;    
                font-family: 'Lato', sans-serif;
            }

            .header-image {
                padding: 0;
                max-height: 300px;
            }

            .the-header-image {
                display: block;
                margin: 0 auto;
            }

            .header-background-image {
                background: no-repeat center;
                background-size: cover;
                -moz-background-size: cover;
                -webkit-background-size: cover;
            }

            .title-box {
                padding: 4em;
                margin: 0 auto;
                background: #333;
                background: hsla(0, 0%, 0%, .3);
                border: solid 1px #fff;
                border: solid 1px hsla(0, 0%, 100%, .3);
                width: 600px;
                max-width: 75%;
            }

            .header-background-image .title-box {
                background: hsla(0, 0%, 0%, .7);
            }


            h1.site-title {
                font-size: 40px;
                font-weight: 700;
                text-transform: uppercase;
                line-height: normal;
                margin:0;
                padding:0;
            }

            .site-description {
                font-size: 20px;
                font-weight: 100;
            }

            .site-branding a {
                text-decoration: none;
                color: #fff;
            }

            .site-title a,
            .site-description {
                color: white;
            }	
            
            .appearance_page_custom-header #headimg {
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
endif; // simone_admin_header_style

if ( ! function_exists( 'simone_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see simone_custom_header_setup().
 */
function simone_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
        
        <div id="headimg">
                <?php 
                if ( get_header_image() ) { // Is there a header image?
                    if  ( 'blank' == get_header_textcolor() ) { // If Header Text is set to hide ?> 
                        <div class="site-branding clear header-image">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?> home page">
                                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" class="the-header-image" alt="">
                            </a>
                    <?php 
                    } else { // End header text check.?>
                        <div class="site-branding clear header-background-image" style="background-image: url(<?php header_image(); ?>);">  
                    <?php    
                    }    
                } else { // End header image check. ?>
                        <div class="site-branding clear">
                <?php } ?>
                            <div class="title-box">
                                <h1 class="displaying-header-text site-title"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                                <h2 class="displaying-header-text site-description" id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></h2>
                            </div> <!-- .title-box -->
                        </div>
        </div>

	
<?php
}
endif; // simone_admin_header_image