<?php 
/**
 * CUSTOM FUNCTIONS FOR ASM PROJECT
 */

/**
 * SETTING UP THE JS SCRIPTS & LOCALIZE GLOBAL VARIABLE FOR AJAX
 */
function load_asm_globals() {

  if ( is_front_page() ) {
   
    wp_enqueue_script( 
      'ASM-GLOBAL', 
      get_template_directory_uri() . '/assets/dist/js/loadASMFiltersToLocalStorage.js', 
      array('jquery'), 
      '2015121X', 
      false 
    );
    
  }
  
  wp_localize_script('ASM-GLOBAL', 'asmGlobals', array(
    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
  ));  
}
add_action('wp_enqueue_scripts', 'load_asm_globals');

// ASM DYNAMIC FILTER LOADER
function load_asm_dynamic_filter_scripts() {
  // LOCATION FILTER SCRIPT
	wp_enqueue_script( 
		'asm-locations-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMLocationFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121X', 
		false 
  );
  
  // SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'asm-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMSportsFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		false
  );

  // UNIVERSITY WOMEN'S SPORTS FILTER SCRIPT
  wp_enqueue_script( 
    'unv-womens-sports-filter-script', 
    get_template_directory_uri() . '/assets/dist/js/loadUnivWomenSportsFromLocalStorage.js', 
    array('jquery'), 
    '2020121X', 
    false
  );
  
  // UNIVERSITY MEN'S SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'unv-mens-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadUnivMenSportsFromLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		false
  );
  

}
add_action('wp_enqueue_scripts', 'load_asm_dynamic_filter_scripts');

/**
 * LOG OUT REDIRECTION TO HOME
 */
function asm_redirect_after_logout(){
  wp_redirect( '/' );
  exit();
}
add_action('wp_logout','asm_redirect_after_logout');

/**
  * LOGIN PAGE REGISTER URL CHANGE  
  */
 add_filter( 'register_url', 'asm_register_url' );
  function asm_register_url( $url ) {
      if( is_admin() ) {
          return $url;
      }
      return "/signup/";
  }

/**
 * ASM ATH INDX SVG FLAG ICON BUILDER FUNCTION
 */

 function get_country_flag_icon($country) {
   // Icon Variable
   $country_flag_icon = '';
   // Country Switcher
   switch ($country) {
    
    case 'Afghanistan': 
    $country_flag_icon = 'flag-icon-af';
    break;
    case 'Akrotiri': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Albania': 
    $country_flag_icon = 'flag-icon-al';
    break;
    case 'Algeria': 
    $country_flag_icon = 'flag-icon-dz';
    break;
    case 'American-Samoa': 
    $country_flag_icon = 'flag-icon-as';
    break;
    case 'Andorra': 
    $country_flag_icon = 'flag-icon-ad';
    break;
    case 'Angola': 
    $country_flag_icon = 'flag-icon-ao';
    break;
    case 'Anguilla': 
    $country_flag_icon = 'flag-icon-ai';
    break;
    case 'Antarctica': 
    $country_flag_icon = 'flag-icon-aq';
    break;
    case 'Antigua-and-Barbuda': 
    $country_flag_icon = 'flag-icon-ag';
    break;
    case 'Argentina': 
    $country_flag_icon = 'flag-icon-ar';
    break;
    case 'Armenia': 
    $country_flag_icon = 'flag-icon-am';
    break;
    case 'Aruba': 
    $country_flag_icon = 'flag-icon-aw';
    break;
    case 'Ashmore-and-Cartier-Islands': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Australia': 
    $country_flag_icon = 'flag-icon-au';
    break;
    case 'Austria': 
    $country_flag_icon = 'flag-icon-at';
    break;
    case 'Azerbaijan': 
    $country_flag_icon = 'flag-icon-az';
    break;
    case 'The-Bahamas': 
    $country_flag_icon = 'flag-icon-bs';
    break;
    case 'Bahrain': 
    $country_flag_icon = 'flag-icon-bh';
    break;
    case 'Bangladesh': 
    $country_flag_icon = 'flag-icon-bd';
    break;
    case 'Barbados': 
    $country_flag_icon = 'flag-icon-bb';
    break;
    case 'Bassas-da-India': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Belarus': 
    $country_flag_icon = 'flag-icon-by';
    break;
    case 'Belgium': 
    $country_flag_icon = 'flag-icon-be';
    break;
    case 'Belize': 
    $country_flag_icon = 'flag-icon-bz';
    break;
    case 'Benin': 
    $country_flag_icon = 'flag-icon-bj';
    break;
    case 'Bermuda': 
    $country_flag_icon = 'flag-icon-bm';
    break;
    case 'Bhutan': 
    $country_flag_icon = 'flag-icon-bt';
    break;
    case 'Bolivia': 
    $country_flag_icon = 'flag-icon-bo';
    break;
    case 'Bosnia-and-Herzegovina': 
    $country_flag_icon = 'flag-icon-ba';
    break;
    case 'Botswana': 
    $country_flag_icon = 'flag-icon-bw';
    break;
    case 'Bouvet-Island': 
    $country_flag_icon = 'flag-icon-bv';
    break;
    case 'Brazil': 
    $country_flag_icon = 'flag-icon-br';
    break;
    case 'British-Indian-Ocean-Territory': 
    $country_flag_icon = 'flag-icon-io';
    break;
    case 'British-Virgin-Islands': 
    $country_flag_icon = 'flag-icon-vg';
    break;
    case 'Brunei': 
    $country_flag_icon = 'flag-icon-bn';
    break;
    case 'Bulgaria': 
    $country_flag_icon = 'flag-icon-bg';
    break;
    case 'Burkina-Faso': 
    $country_flag_icon = 'flag-icon-bf';
    break;
    case 'Burundi': 
    $country_flag_icon = 'flag-icon-bi';
    break;
    case 'Cambodia': 
    $country_flag_icon = 'flag-icon-kh';
    break;
    case 'Cameron': 
    $country_flag_icon = 'flag-icon-cm';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Cape-Verde': 
    $country_flag_icon = 'flag-icon-cv';
    break;
    case 'Cayman-Islands': 
    $country_flag_icon = 'flag-icon-ky';
    break;
    case 'Central-Africa-Republic': 
    $country_flag_icon = 'flag-icon-cf';
    break;
    case 'Chad': 
    $country_flag_icon = 'flag-icon-td';
    break;
    case 'Chile': 
    $country_flag_icon = 'flag-icon-cl';
    break;
    case 'China': 
    $country_flag_icon = 'flag-icon-cn';
    break;
    case 'Christmas-Island': 
    $country_flag_icon = 'flag-icon-cx';
    break;
    case 'Clipperton-Island': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Cocos-(Keeling)-Islands': 
    $country_flag_icon = 'flag-icon-cc';
    break;
    case 'Colombia': 
    $country_flag_icon = 'flag-icon-co';
    break;
    case 'Comoros': 
    $country_flag_icon = 'flag-icon-km';
    break;
    case 'Democratic-Republic-of-the-Congo': 
    $country_flag_icon = 'flag-icon-cd';
    break;
    case 'Republic-of-the-Congo': 
    $country_flag_icon = 'flag-icon-cg';
    break;
    case 'Cook-Islands': 
    $country_flag_icon = 'flag-icon-ck';
    break;
    case 'Costa-Rica': 
    $country_flag_icon = 'flag-icon-cr';
    break;
    case 'Cote-d\'Ivoire': 
    $country_flag_icon = 'flag-icon-ci';
    break;
    case 'Croatia': 
    $country_flag_icon = 'flag-icon-hr';
    break;
    case 'Cuba': 
    $country_flag_icon = 'flag-icon-cu';
    break;
    case 'Cyprus': 
    $country_flag_icon = 'flag-icon-cy';
    break;
    case 'Czech-Republic': 
    $country_flag_icon = 'flag-icon-cz';
    break;
    case 'Denmark': 
    $country_flag_icon = 'flag-icon-dk';
    break;
    case 'Djibouti': 
    $country_flag_icon = 'flag-icon-dj';
    break;
    case 'Dominica': 
    $country_flag_icon = 'flag-icon-dm';
    break;
    case 'Dominican-Republic': 
    $country_flag_icon = 'flag-icon-do';
    break;
    case 'Ecuador': 
    $country_flag_icon = 'flag-icon-ec';
    break;
    case 'Egypt': 
    $country_flag_icon = 'flag-icon-eg';
    break;
    case 'El-Salvador': 
    $country_flag_icon = 'flag-icon-sv';
    break;
    case 'Equatorial-Guinea': 
    $country_flag_icon = 'flag-icon-gq';
    break;
    case 'Eritrea': 
    $country_flag_icon = 'flag-icon-er';
    break;
    case 'Estonia': 
    $country_flag_icon = 'flag-icon-ee';
    break;
    case 'Ethiopia': 
    $country_flag_icon = 'flag-icon-et';
    break;
    case 'Falkland-Islands': 
    $country_flag_icon = 'flag-icon-fk';
    break;
    case 'Faroe-Islands': 
    $country_flag_icon = 'flag-icon-fo';
    break;
    case 'Fiji': 
    $country_flag_icon = 'flag-icon-fj';
    break;
    case 'Finland': 
    $country_flag_icon = 'flag-icon-fi';
    break;
    case 'France': 
    $country_flag_icon = 'flag-icon-fr';
    break;
    case 'French-Guiana': 
    $country_flag_icon = 'flag-icon-gf';
    break;
    case 'French-Polynesia': 
    $country_flag_icon = 'flag-icon-pf';
    break;
    case 'French-Southern-and-Antarctic-Lands': 
    $country_flag_icon = 'flag-icon-tf';
    break;
    case 'Gabon': 
    $country_flag_icon = 'flag-icon-ga';
    break;
    case 'The-Gambia': 
    $country_flag_icon = 'flag-icon-gm';
    break;
    case 'Georgia': 
    $country_flag_icon = 'flag-icon-ge';
    break;
    case 'Germany': 
    $country_flag_icon = 'flag-icon-de';
    break;
    case 'Ghana': 
    $country_flag_icon = 'flag-icon-gh';
    break;
    case 'Gibraltar': 
    $country_flag_icon = 'flag-icon-gi';
    break;
    case 'Glorioso-Islands': 
    $country_flag_icon = 'flag-icon-us';
    break;
    case 'Greece': 
    $country_flag_icon = 'flag-icon-gr';
    break;
    case 'Greenland': 
    $country_flag_icon = 'flag-icon-gl';
    break;
    case 'Grenada': 
    $country_flag_icon = 'flag-icon-gd';
    break;
    case 'Guadeloupe': 
    $country_flag_icon = 'flag-icon-gp';
    break;
    case 'Guam': 
    $country_flag_icon = 'flag-icon-gu';
    break;
    case 'Guatemala': 
    $country_flag_icon = 'flag-icon-gt';
    break;
    case 'Guernsey': 
    $country_flag_icon = 'flag-icon-gg';
    break;
    case 'Guinea': 
    $country_flag_icon = 'flag-icon-gn';
    break;
    case 'Guinea-Bissau': 
    $country_flag_icon = 'flag-icon-gw';
    break;
    case 'Guyana': 
    $country_flag_icon = 'flag-icon-gy';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'Canada': 
    $country_flag_icon = 'flag-icon-ca';
    break;
    case 'United-States': 
    $country_flag_icon = 'flag-icon-us';
    break; 
    case 'United-Kingdom': 
    $country_flag_icon = 'flag-icon-gb';
    break;
    default: 
    $country_flag_icon = 'flag-icon-us';
   }

   return $country_flag_icon;
 }