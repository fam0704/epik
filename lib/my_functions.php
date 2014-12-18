<?php

/**
 * My Custom Functions
*/

//* Add support for custom header

add_theme_support( 'custom-header', array(

	'width'           => 184,

	'height'          => 91,

	'header-selector' => '.site-title a',

	'header-text'     => false,

) );



//*


//* Customize footer the credits

add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );

function sp_footer_creds_text() {

	echo '<div class="creds"><p>';

	echo 'Copyright &copy; ';

	echo date('Y');

	echo ' &middot; <a href="http://http://siigo.net/software/" title="Siigo.com">Siigo.com</a> &middot; Todos los derechos reservados ';

	echo '</p></div>';

}