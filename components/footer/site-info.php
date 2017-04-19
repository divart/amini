<div class="site-info">
Copyright &copy;&nbsp;<?php echo date("Y"); ?>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

<span class="sep"> &#8226; </span>

<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amini' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'amini' ), 'WordPress' ); ?></a>

<span class="sep"> &#8226; </span>

<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'amini' ), 'aMini', '<a href="http://divart.pl/" rel="designer">DIVart</a>' ); ?>

<span class="sep"> &#8226; </span>

<?php 
if ( ! is_user_logged_in() ) {
	echo '<a href="' . esc_url( wp_login_url()) . '">'.__( 'Log in', 'amini' ).'</a>';
} else {
	echo '<a href="' . esc_url( wp_logout_url()) . '">'.__( 'Log out', 'amini' ).'</a>';
	}
?>
</div><!-- .site-info -->